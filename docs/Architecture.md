# 構成メモ

## ルーティング
- `GET /tests` → 解説一覧
- `GET /mypage` → マイページ（要ログイン）
- `POST /mypage/pass-score` → 合格基準点の更新（要ログイン）

## フロント（Inertia/Vue）
- `resources/js/Layouts/SeihoTestLayout.vue`
  - ヘッダー/フッター/メニュー
- `resources/js/Pages/Info/MyPage.vue`
  - 進捗/合計点/優秀賞判定/結果入力UI

## バックエンド
- `app/Http/Controllers/TestController.php`
  - `mypage()` でデータ取得
  - `updatePassScore()` で合格基準更新

## 認証
- Laravel Breeze + Inertia
- `HandleInertiaRequests` で `auth.user` を共有

## 今後のTODO
- 受験結果（`user_exam_results`）を保存するAPIの追加
- MyPageモーダル入力をDB永続化（upsert）
