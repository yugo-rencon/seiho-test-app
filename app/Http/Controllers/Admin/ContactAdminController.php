<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ContactAdminController extends Controller
{
    public function index(Request $request): Response
    {
        $q = trim((string) $request->query('q', ''));
        $status = (string) $request->query('status', 'all');

        $validStatuses = Contact::statuses();

        $contactsQuery = Contact::query()
            ->with(['user:id,email', 'handler:id,email'])
            ->when($status !== 'all' && in_array($status, $validStatuses, true), function ($query) use ($status) {
                $query->where('status', $status);
            })
            ->when($q !== '', function ($query) use ($q) {
                $query->where(function ($subQuery) use ($q) {
                    $subQuery
                        ->where('name', 'like', "%{$q}%")
                        ->orWhere('email', 'like', "%{$q}%")
                        ->orWhere('message', 'like', "%{$q}%");
                });
            })
            ->orderByDesc('created_at');

        $contacts = $contactsQuery
            ->paginate(30)
            ->through(function (Contact $contact) {
                return [
                    'id' => $contact->id,
                    'category' => $contact->category,
                    'name' => $contact->name,
                    'email' => $contact->email,
                    'message' => $contact->message,
                    'status' => $contact->status,
                    'admin_note' => $contact->admin_note,
                    'page_url' => $contact->page_url,
                    'device' => $contact->device,
                    'occurred_at' => optional($contact->occurred_at)->format('Y-m-d'),
                    'created_at' => optional($contact->created_at)->format('Y-m-d H:i'),
                    'handled_at' => optional($contact->handled_at)->format('Y-m-d H:i'),
                    'user_email' => $contact->user?->email,
                    'handler_email' => $contact->handler?->email,
                ];
            })
            ->withQueryString();

        $statusCounts = [
            'all' => Contact::count(),
            Contact::STATUS_NEW => Contact::where('status', Contact::STATUS_NEW)->count(),
            Contact::STATUS_IN_PROGRESS => Contact::where('status', Contact::STATUS_IN_PROGRESS)->count(),
            Contact::STATUS_DONE => Contact::where('status', Contact::STATUS_DONE)->count(),
        ];

        return Inertia::render('Admin/Contacts', [
            'contacts' => $contacts,
            'statusCounts' => $statusCounts,
            'filters' => [
                'q' => $q,
                'status' => $status,
            ],
        ]);
    }

    public function updateStatus(Request $request, Contact $contact): RedirectResponse
    {
        $validated = $request->validate([
            'status' => ['required', 'in:' . implode(',', Contact::statuses())],
        ]);

        $nextStatus = $validated['status'];
        $userId = $request->user()?->id;

        $updates = ['status' => $nextStatus];

        if ($nextStatus === Contact::STATUS_DONE) {
            $updates['handled_at'] = now();
            $updates['handled_by'] = $userId;
        } elseif ($nextStatus === Contact::STATUS_IN_PROGRESS) {
            $updates['handled_at'] = null;
            $updates['handled_by'] = $userId;
        } else {
            $updates['handled_at'] = null;
            $updates['handled_by'] = null;
        }

        $contact->update($updates);

        return back();
    }

    public function updateNote(Request $request, Contact $contact): RedirectResponse
    {
        $validated = $request->validate([
            'admin_note' => ['nullable', 'string', 'max:5000'],
        ]);

        $contact->update([
            'admin_note' => $validated['admin_note'] ?? null,
        ]);

        return back();
    }
}
