<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 | ページが見つかりません</title>
    <style>
        body { margin: 0; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; background: #f8fafc; color: #0f172a; }
        .wrap { min-height: 100vh; display: grid; place-items: center; padding: 24px; }
        .card { width: 100%; max-width: 560px; background: #fff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 28px; box-shadow: 0 4px 18px rgba(15,23,42,.06); }
        .code { display: inline-block; font-size: 12px; font-weight: 700; letter-spacing: .08em; color: #475569; background: #f1f5f9; border: 1px solid #e2e8f0; border-radius: 999px; padding: 6px 10px; }
        h1 { margin: 14px 0 8px; font-size: 24px; }
        p { margin: 0; color: #475569; line-height: 1.7; }
        .actions { margin-top: 18px; }
        .btn { display: inline-block; text-decoration: none; font-weight: 700; font-size: 14px; color: #fff; background: #2563eb; border-radius: 999px; padding: 10px 16px; }
        .btn:hover { background: #1d4ed8; }
    </style>
</head>
<body>
    <div class="wrap">
        <section class="card" aria-labelledby="title">
            <span class="code">404 NOT FOUND</span>
            <h1 id="title">ページが見つかりません</h1>
            <p>このページは削除されたか、URLが変更された可能性があります。</p>
            <div class="actions">
                <a class="btn" href="{{ url('/') }}">解説一覧に戻る</a>
            </div>
        </section>
    </div>
</body>
</html>
