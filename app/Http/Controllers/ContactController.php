<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;
use Inertia\Response;

class ContactController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Info/Contact');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'category' => ['required', 'in:bug,request,feedback,other'],
            'name' => ['nullable', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'min:10', 'max:4000'],
            'page_url' => ['nullable', 'url', 'max:500'],
            'device' => ['nullable', 'in:pc,smartphone,tablet,other'],
            'occurred_at' => ['nullable', 'date'],
            'privacy_agreed' => ['accepted'],
        ]);

        /** @var \App\Models\User|null $user */
        $user = $request->user();

        $contact = Contact::create([
            'user_id' => $user?->id,
            'category' => $data['category'],
            'name' => $data['name'] ?? null,
            'email' => $data['email'],
            'message' => $data['message'],
            'page_url' => $data['page_url'] ?? null,
            'device' => $data['device'] ?? null,
            'occurred_at' => $data['occurred_at'] ?? null,
            'privacy_agreed' => true,
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'status' => 'new',
        ]);

        $statusMessage = 'お問い合わせを受け付けました。通常1〜3営業日以内にご返信します。';

        try {
            $to = (string) config('mail.contact_to', 'seihokoza.test@gmail.com');
            Mail::raw($this->buildMailBody($contact), function ($message) use ($contact, $to) {
                $message
                    ->to($to)
                    ->replyTo($contact->email, $contact->name ?: null)
                    ->subject('【お問い合わせ】' . $this->categoryLabel($contact->category));
            });
        } catch (\Throwable $e) {
            Log::error('Contact mail send failed.', [
                'contact_id' => $contact->id,
                'message' => $e->getMessage(),
            ]);
            $statusMessage = 'お問い合わせを受け付けました。（通知メール送信に失敗したため、管理画面で確認します）';
        }

        return redirect()
            ->route('contact.index')
            ->with('status', $statusMessage);
    }

    private function categoryLabel(string $category): string
    {
        return match ($category) {
            'bug' => '不具合の報告',
            'request' => '改善要望',
            'feedback' => 'ご意見・感想',
            default => 'その他',
        };
    }

    private function deviceLabel(?string $device): string
    {
        return match ($device) {
            'pc' => 'PC',
            'smartphone' => 'スマートフォン',
            'tablet' => 'タブレット',
            'other' => 'その他',
            default => '-',
        };
    }

    private function buildMailBody(Contact $contact): string
    {
        return implode("\n", [
            'お問い合わせを受信しました。',
            '',
            'ID: ' . $contact->id,
            '種別: ' . $this->categoryLabel($contact->category),
            '名前: ' . ($contact->name ?: '-'),
            'メール: ' . $contact->email,
            'ユーザーID: ' . ($contact->user_id ?: '-'),
            '利用端末: ' . $this->deviceLabel($contact->device),
            '発生日時: ' . ($contact->occurred_at?->format('Y-m-d') ?: '-'),
            '対象ページ: ' . ($contact->page_url ?: '-'),
            'IP: ' . ($contact->ip_address ?: '-'),
            '',
            '本文:',
            $contact->message,
        ]);
    }
}

