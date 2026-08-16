<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EnglishBook;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use Inertia\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;

class EnglishBookAdminController extends Controller
{
    public function index(): Response
    {
        $books = EnglishBook::query()
            ->orderByRaw("case status when 'reading' then 0 when 'want' then 1 else 2 end")
            ->orderByDesc('finished_on')
            ->orderByDesc('id')
            ->get()
            ->each(function (EnglishBook $book) {
                $book->setAttribute('cover_image_url', $book->cover_path
                    ? route('admin.englishBooks.cover', $book)
                    : $book->cover_url);
            });

        return Inertia::render('Admin/EnglishBooks', [
            'books' => $books,
            'stats' => [
                'finished_count' => $books->where('status', 'finished')->count(),
                'reading_count' => $books->where('status', 'reading')->count(),
                'want_count' => $books->where('status', 'want')->count(),
                'total_words' => (int) $books->where('status', 'finished')->sum('word_count'),
            ],
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validated($request);
        $data['cover_path'] = $this->storeCover($request);
        EnglishBook::create($data);

        return redirect()->route('admin.englishBooks.index');
    }

    public function create(): Response
    {
        return Inertia::render('Admin/EnglishBookForm');
    }

    public function edit(EnglishBook $englishBook): Response
    {
        $englishBook->setAttribute('cover_image_url', $englishBook->cover_path
            ? route('admin.englishBooks.cover', $englishBook)
            : $englishBook->cover_url);

        return Inertia::render('Admin/EnglishBookForm', ['book' => $englishBook]);
    }

    public function update(Request $request, EnglishBook $englishBook): RedirectResponse
    {
        $data = $this->validated($request);
        $newCoverPath = $this->storeCover($request);

        if ($newCoverPath) {
            if ($englishBook->cover_path) {
                Storage::disk('public')->delete($englishBook->cover_path);
            }
            $data['cover_path'] = $newCoverPath;
        }

        $englishBook->update($data);

        return redirect()->route('admin.englishBooks.index');
    }

    public function destroy(EnglishBook $englishBook): RedirectResponse
    {
        if ($englishBook->cover_path) {
            Storage::disk('public')->delete($englishBook->cover_path);
        }
        $englishBook->delete();

        return back();
    }

    public function cover(EnglishBook $englishBook): StreamedResponse
    {
        abort_unless($englishBook->cover_path && Storage::disk('public')->exists($englishBook->cover_path), 404);

        return Storage::disk('public')->response($englishBook->cover_path);
    }

    private function validated(Request $request): array
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'author' => ['nullable', 'string', 'max:255'],
            'cover_url' => ['nullable', 'url', 'max:2048'],
            'cover_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'status' => ['required', 'in:want,reading,finished'],
            'difficulty' => ['nullable', 'integer', 'between:1,5'],
            'word_count' => ['nullable', 'integer', 'min:0', 'max:9999999'],
            'page_count' => ['nullable', 'integer', 'min:1', 'max:9999'],
            'started_on' => ['nullable', 'date_format:Y-m-d'],
            'finished_on' => ['nullable', 'date_format:Y-m-d'],
            'rating' => ['nullable', 'integer', 'between:1,5'],
            'memo' => ['nullable', 'string', 'max:5000'],
        ]);

        unset($validated['cover_image']);

        return $validated;
    }

    private function storeCover(Request $request): ?string
    {
        if (! $request->hasFile('cover_image')) {
            return null;
        }

        return $request->file('cover_image')->store('english-books', 'public');
    }
}
