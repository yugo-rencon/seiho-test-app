<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EnglishBook;
use App\Models\EnglishBookShelf;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;
use League\CommonMark\CommonMarkConverter;
use Symfony\Component\HttpFoundation\StreamedResponse;

class EnglishBookAdminController extends Controller
{
    public function index(Request $request): Response
    {
        if (! Schema::hasTable('english_books') || ! Schema::hasTable('english_book_shelves')) {
            return Inertia::render('Admin/EnglishBooks', [
                'books' => collect(),
                'stats' => [
                    'finished_count' => 0,
                    'reading_count' => 0,
                    'want_count' => 0,
                    'total_words' => 0,
                ],
            ]);
        }

        $shelves = EnglishBookShelf::with('book')->where('user_id', $request->user()->id)
            ->orderByRaw("case status when 'reading' then 0 when 'want' then 1 else 2 end")->orderByDesc('finished_on')->get();

        return Inertia::render('Admin/EnglishBooks', ['books' => $shelves->map(fn ($shelf) => $this->shelfPayload($shelf)), 'stats' => [
            'finished_count' => $shelves->where('status', 'finished')->count(), 'reading_count' => $shelves->where('status', 'reading')->count(),
            'want_count' => $shelves->where('status', 'want')->count(), 'total_words' => (int) $shelves->where('status', 'finished')->sum(fn ($shelf) => $shelf->book->word_count ?? 0),
        ]]);
    }

    public function catalog(Request $request): Response
    {
        if (! Schema::hasTable('english_books')) {
            return Inertia::render('Admin/EnglishBookCatalog', ['books' => collect()]);
        }

        $shelfBookIds = Schema::hasTable('english_book_shelves')
            ? EnglishBookShelf::where('user_id', $request->user()->id)->pluck('english_book_id')->all()
            : [];
        $books = EnglishBook::orderBy('title')->get()->map(fn ($book) => array_merge($this->bookPayload($book), ['on_shelf' => in_array($book->id, $shelfBookIds, true)]));

        return Inertia::render('Admin/EnglishBookCatalog', ['books' => $books]);
    }

    public function createBook(): Response { return Inertia::render('Admin/EnglishCatalogForm'); }
    public function editBook(EnglishBook $englishBook): Response { return Inertia::render('Admin/EnglishCatalogForm', ['book' => $this->bookPayload($englishBook)]); }

    public function storeBook(Request $request): RedirectResponse
    {
        $data = $this->bookValidated($request);
        EnglishBook::create(array_merge($data, ['cover_path' => $this->storeCover($request)]));
        return redirect()->route('admin.englishBooks.catalog');
    }

    public function updateBook(Request $request, EnglishBook $englishBook): RedirectResponse
    {
        $data = $this->bookValidated($request);
        if ($path = $this->storeCover($request)) { if ($englishBook->cover_path) Storage::disk('public')->delete($englishBook->cover_path); $data['cover_path'] = $path; }
        $englishBook->update($data);
        return redirect()->route('admin.englishBooks.catalog');
    }

    public function addToShelf(Request $request, EnglishBook $englishBook): RedirectResponse
    {
        EnglishBookShelf::firstOrCreate(['user_id' => $request->user()->id, 'english_book_id' => $englishBook->id], ['status' => 'want']);
        return redirect()->route('admin.englishBooks.index');
    }

    public function show(Request $request, EnglishBookShelf $englishBookShelf): Response { return Inertia::render('Admin/EnglishBookDetail', ['book' => $this->shelfPayload($this->ownedShelf($request, $englishBookShelf))]); }
    public function guide(Request $request, EnglishBookShelf $englishBookShelf): Response
    {
        $shelf = $this->ownedShelf($request, $englishBookShelf);
        $path = base_path("content/books/{$shelf->book->slug}.md");
        abort_unless(is_file($path), 404);
        $converter = new CommonMarkConverter(['html_input' => 'strip', 'allow_unsafe_links' => false]);

        return Inertia::render('Admin/EnglishBookGuide', ['book' => $this->shelfPayload($shelf), 'guideHtml' => (string) $converter->convert(file_get_contents($path))]);
    }
    public function edit(Request $request, EnglishBookShelf $englishBookShelf): Response { return Inertia::render('Admin/EnglishBookForm', ['book' => $this->shelfPayload($this->ownedShelf($request, $englishBookShelf))]); }

    public function update(Request $request, EnglishBookShelf $englishBookShelf): RedirectResponse
    {
        $this->ownedShelf($request, $englishBookShelf)->update($this->shelfValidated($request));
        return redirect()->route('admin.englishBooks.index');
    }

    public function destroy(Request $request, EnglishBookShelf $englishBookShelf): RedirectResponse { $this->ownedShelf($request, $englishBookShelf)->delete(); return back(); }
    public function cover(EnglishBook $englishBook): StreamedResponse { abort_unless($englishBook->cover_path && Storage::disk('public')->exists($englishBook->cover_path), 404); return Storage::disk('public')->response($englishBook->cover_path); }

    private function ownedShelf(Request $request, EnglishBookShelf $shelf): EnglishBookShelf { abort_unless($shelf->user_id === $request->user()->id, 404); return $shelf->load('book'); }
    private function bookPayload(EnglishBook $book): array { return array_merge($book->only(['id', 'title', 'slug', 'author', 'cover_url', 'cover_path', 'difficulty', 'word_count', 'page_count']), ['cover_image_url' => $book->cover_path ? route('admin.englishBooks.cover', $book) : $book->cover_url, 'has_guide' => is_file(base_path("content/books/{$book->slug}.md"))]); }
    private function shelfPayload(EnglishBookShelf $shelf): array { return array_merge($this->bookPayload($shelf->book), $shelf->only(['status', 'started_on', 'finished_on', 'rating', 'memo']), ['id' => $shelf->id, 'english_book_id' => $shelf->book->id]); }

    private function bookValidated(Request $request): array { $data = $request->validate(['title' => ['required', 'string', 'max:255'], 'author' => ['nullable', 'string', 'max:255'], 'cover_url' => ['nullable', 'url', 'max:2048'], 'cover_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'], 'difficulty' => ['nullable', 'integer', 'between:1,5'], 'word_count' => ['nullable', 'integer', 'min:0', 'max:9999999'], 'page_count' => ['nullable', 'integer', 'min:1', 'max:9999']]); unset($data['cover_image']); if (! $request->route('englishBook')) $data['slug'] = $this->uniqueSlug($data['title'], null); return $data; }
    private function uniqueSlug(string $title, ?EnglishBook $currentBook): string { $base = Str::slug($title) ?: 'book-'.Str::lower(Str::random(8)); $slug = $base; $suffix = 2; while (EnglishBook::where('slug', $slug)->when($currentBook, fn ($query) => $query->whereKeyNot($currentBook->id))->exists()) { $slug = "{$base}-{$suffix}"; $suffix += 1; } return $slug; }
    private function shelfValidated(Request $request): array { return $request->validate(['status' => ['required', 'in:want,reading,finished'], 'started_on' => ['nullable', 'date_format:Y-m-d'], 'finished_on' => ['nullable', 'date_format:Y-m-d'], 'rating' => ['nullable', 'integer', 'between:1,5'], 'memo' => ['nullable', 'string', 'max:5000']]); }
    private function storeCover(Request $request): ?string { return $request->hasFile('cover_image') ? $request->file('cover_image')->store('english-books', 'public') : null; }
}
