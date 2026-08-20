<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EnglishBook;
use App\Models\PersonalStudyLog;
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
        if (! Schema::hasTable('english_books')) {
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

        $books = EnglishBook::query()
            ->orderByRaw("case status when 'reading' then 0 when 'want' then 1 else 2 end")->orderByDesc('finished_on')->get();

        $readingMinutesByBookId = [];
        foreach (PersonalStudyLog::query()->where('category', '英語')->get() as $log) {
            $bookId = (int) data_get($log->raw_payload, 'english_book_id');

            if ($bookId > 0) {
                $readingMinutesByBookId[$bookId] = ($readingMinutesByBookId[$bookId] ?? 0) + (int) $log->minutes;
            }
        }

        return Inertia::render('Admin/EnglishBooks', ['books' => $books->map(fn (EnglishBook $book) => array_merge($this->bookPayload($book), [
            'reading_duration' => $this->formatDuration($readingMinutesByBookId[$book->id] ?? 0),
        ])), 'stats' => [
            'finished_count' => $books->where('status', 'finished')->count(), 'reading_count' => $books->where('status', 'reading')->count(),
            'want_count' => $books->where('status', 'want')->count(), 'total_words' => (int) $books->where('status', 'finished')->sum('word_count'),
        ]]);
    }

    public function catalog(Request $request): Response
    {
        if (! Schema::hasTable('english_books')) {
            return Inertia::render('Admin/EnglishBookCatalog', ['books' => collect()]);
        }

        $books = EnglishBook::orderBy('title')->get()->map(fn (EnglishBook $book) => $this->bookPayload($book));

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

    public function show(EnglishBook $englishBook): Response { $logs = PersonalStudyLog::query()->where('category', '英語')->get()->filter(fn (PersonalStudyLog $log) => (int) data_get($log->raw_payload, 'english_book_id') === $englishBook->id); return Inertia::render('Admin/EnglishBookDetail', ['book' => array_merge($this->bookPayload($englishBook), ['reading_duration' => $this->formatDuration((int) $logs->sum('minutes')), 'reading_log_count' => $logs->count()])]); }
    public function guide(EnglishBook $englishBook): Response
    {
        $path = base_path("content/books/{$englishBook->slug}.md");
        abort_unless(is_file($path), 404);
        $converter = new CommonMarkConverter(['html_input' => 'strip', 'allow_unsafe_links' => false]);

        return Inertia::render('Admin/EnglishBookGuide', [
            'book' => $this->bookPayload($englishBook),
            'guideHtml' => (string) $converter->convert(file_get_contents($path)),
        ]);
    }
    public function edit(EnglishBook $englishBook): Response { return Inertia::render('Admin/EnglishBookForm', ['book' => $this->bookPayload($englishBook)]); }

    public function update(Request $request, EnglishBook $englishBook): RedirectResponse
    {
        $englishBook->update($this->recordValidated($request));
        return redirect()->route('admin.englishBooks.index');
    }

    public function destroy(EnglishBook $englishBook): RedirectResponse { $englishBook->delete(); return back(); }
    public function cover(EnglishBook $englishBook): StreamedResponse { abort_unless($englishBook->cover_path && Storage::disk('public')->exists($englishBook->cover_path), 404); return Storage::disk('public')->response($englishBook->cover_path); }

    private function formatDuration(int $minutes): string { return $minutes >= 60 ? intdiv($minutes, 60) . '時間' . ($minutes % 60 ? ($minutes % 60) . '分' : '') : $minutes . '分'; }
    private function bookPayload(EnglishBook $book): array { return array_merge($book->only(['id', 'title', 'slug', 'author', 'genre', 'cover_url', 'amazon_url', 'cover_path', 'difficulty', 'word_count', 'page_count', 'status', 'interest_rating', 'recommendation_rating', 'book_overview', 'english_difficulty_note', 'memo']), ['started_on' => $book->started_on?->format('Y-m-d'), 'finished_on' => $book->finished_on?->format('Y-m-d'), 'cover_image_url' => $book->cover_path ? route('admin.englishBooks.cover', $book) : $book->cover_url, 'has_guide' => is_file(base_path("content/books/{$book->slug}.md"))]); }

    private function bookValidated(Request $request): array { $data = $request->validate(['title' => ['required', 'string', 'max:255'], 'author' => ['nullable', 'string', 'max:255'], 'genre' => ['nullable', 'string', 'max:50'], 'cover_url' => ['nullable', 'url', 'max:2048'], 'amazon_url' => ['nullable', 'url', 'max:2048'], 'cover_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'], 'word_count' => ['nullable', 'integer', 'min:0', 'max:9999999'], 'page_count' => ['nullable', 'integer', 'min:1', 'max:9999']]); unset($data['cover_image']); if (! $request->route('englishBook')) $data['slug'] = $this->uniqueSlug($data['title'], null); return $data; }
    private function uniqueSlug(string $title, ?EnglishBook $currentBook): string { $base = Str::slug($title) ?: 'book-'.Str::lower(Str::random(8)); $slug = $base; $suffix = 2; while (EnglishBook::where('slug', $slug)->when($currentBook, fn ($query) => $query->whereKeyNot($currentBook->id))->exists()) { $slug = "{$base}-{$suffix}"; $suffix += 1; } return $slug; }
    private function recordValidated(Request $request): array { return $request->validate(['status' => ['required', 'in:want,reading,finished'], 'started_on' => ['nullable', 'date_format:Y-m-d'], 'finished_on' => ['nullable', 'date_format:Y-m-d', 'after_or_equal:started_on'], 'difficulty' => ['nullable', 'numeric', 'between:1,5', 'decimal:1'], 'interest_rating' => ['nullable', 'integer', 'between:1,5'], 'recommendation_rating' => ['nullable', 'integer', 'between:1,5'], 'book_overview' => ['nullable', 'string', 'max:1000'], 'english_difficulty_note' => ['nullable', 'string', 'max:1000'], 'memo' => ['nullable', 'string', 'max:2000']]); }
    private function storeCover(Request $request): ?string { return $request->hasFile('cover_image') ? $request->file('cover_image')->store('english-books', 'public') : null; }
}
