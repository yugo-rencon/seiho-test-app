<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EnglishBook;
use App\Models\EnglishBookShelf;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use Inertia\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;

class EnglishBookAdminController extends Controller
{
    public function index(Request $request): Response
    {
        $shelves = EnglishBookShelf::query()
            ->with('book')
            ->where('user_id', $request->user()->id)
            ->orderByRaw("case status when 'reading' then 0 when 'want' then 1 else 2 end")
            ->orderByDesc('finished_on')
            ->orderByDesc('id')
            ->get();

        return Inertia::render('Admin/EnglishBooks', [
            'books' => $shelves->map(fn (EnglishBookShelf $shelf) => $this->payload($shelf)),
            'stats' => [
                'finished_count' => $shelves->where('status', 'finished')->count(),
                'reading_count' => $shelves->where('status', 'reading')->count(),
                'want_count' => $shelves->where('status', 'want')->count(),
                'total_words' => (int) $shelves->where('status', 'finished')->sum(fn ($shelf) => $shelf->book->word_count ?? 0),
            ],
        ]);
    }

    public function create(): Response
    {
        return Inertia::render('Admin/EnglishBookForm');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validated($request);
        $book = EnglishBook::create(array_merge($this->bookData($data), ['cover_path' => $this->storeCover($request)]));
        EnglishBookShelf::create(array_merge($this->shelfData($data), [
            'user_id' => $request->user()->id,
            'english_book_id' => $book->id,
        ]));

        return redirect()->route('admin.englishBooks.index');
    }

    public function show(Request $request, EnglishBookShelf $englishBookShelf): Response
    {
        return Inertia::render('Admin/EnglishBookDetail', ['book' => $this->payload($this->ownedShelf($request, $englishBookShelf))]);
    }

    public function edit(Request $request, EnglishBookShelf $englishBookShelf): Response
    {
        return Inertia::render('Admin/EnglishBookForm', ['book' => $this->payload($this->ownedShelf($request, $englishBookShelf))]);
    }

    public function update(Request $request, EnglishBookShelf $englishBookShelf): RedirectResponse
    {
        $shelf = $this->ownedShelf($request, $englishBookShelf);
        $data = $this->validated($request);
        $bookData = $this->bookData($data);
        $newCoverPath = $this->storeCover($request);

        if ($newCoverPath) {
            if ($shelf->book->cover_path) Storage::disk('public')->delete($shelf->book->cover_path);
            $bookData['cover_path'] = $newCoverPath;
        }

        $shelf->book->update($bookData);
        $shelf->update($this->shelfData($data));

        return redirect()->route('admin.englishBooks.index');
    }

    public function destroy(Request $request, EnglishBookShelf $englishBookShelf): RedirectResponse
    {
        $this->ownedShelf($request, $englishBookShelf)->delete();

        return back();
    }

    public function cover(EnglishBook $englishBook): StreamedResponse
    {
        abort_unless($englishBook->cover_path && Storage::disk('public')->exists($englishBook->cover_path), 404);

        return Storage::disk('public')->response($englishBook->cover_path);
    }

    private function ownedShelf(Request $request, EnglishBookShelf $shelf): EnglishBookShelf
    {
        abort_unless($shelf->user_id === $request->user()->id, 404);

        return $shelf->load('book');
    }

    private function payload(EnglishBookShelf $shelf): array
    {
        $book = $shelf->book;

        return array_merge($book->only(['title', 'author', 'cover_url', 'cover_path', 'difficulty', 'word_count', 'page_count']), $shelf->only(['status', 'started_on', 'finished_on', 'rating', 'memo']), [
            'id' => $shelf->id,
            'english_book_id' => $book->id,
            'cover_image_url' => $book->cover_path ? route('admin.englishBooks.cover', $book) : $book->cover_url,
        ]);
    }

    private function validated(Request $request): array
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'], 'author' => ['nullable', 'string', 'max:255'],
            'cover_url' => ['nullable', 'url', 'max:2048'], 'cover_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'difficulty' => ['nullable', 'integer', 'between:1,5'], 'word_count' => ['nullable', 'integer', 'min:0', 'max:9999999'],
            'page_count' => ['nullable', 'integer', 'min:1', 'max:9999'], 'status' => ['required', 'in:want,reading,finished'],
            'started_on' => ['nullable', 'date_format:Y-m-d'], 'finished_on' => ['nullable', 'date_format:Y-m-d'],
            'rating' => ['nullable', 'integer', 'between:1,5'], 'memo' => ['nullable', 'string', 'max:5000'],
        ]);
        unset($validated['cover_image']);

        return $validated;
    }

    private function bookData(array $data): array { return Arr::only($data, ['title', 'author', 'cover_url', 'difficulty', 'word_count', 'page_count']); }
    private function shelfData(array $data): array { return Arr::only($data, ['status', 'started_on', 'finished_on', 'rating', 'memo']); }
    private function storeCover(Request $request): ?string { return $request->hasFile('cover_image') ? $request->file('cover_image')->store('english-books', 'public') : null; }
}
