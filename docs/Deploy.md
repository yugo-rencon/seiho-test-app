# ローカルで Push するまでの手順（初心者向け）

このドキュメントは「ローカル修正を GitHub に push するまで」を対象にしています。  
本番サーバー反映（`git pull` 以降）は別手順です。

## まず覚えること
- `git add`: 変更を「コミット対象」に載せる
- `git commit`: 変更履歴を1つ作る
- `git push`: その履歴を GitHub に送る
- `npm run build`: 画面用ファイル（`public/build`）を作り直す

## 基本フロー（普段これ）
1. 修正する
2. 状態確認
```bash
git status
```
3. 必要なら build
```bash
npm run build
```
4. add
```bash
git add <対象ファイル>
```
5. commit
```bash
git commit -m "内容が分かるメッセージ"
```
6. push
```bash
git push origin main
```

## パターン別

### パターンA: バックエンドのみ（PHP/ルート/設定のみ）
- 例: `app/`, `routes/`, `config/` だけ変更
- 通常 `npm run build` は不要
- そのまま `add -> commit -> push`

### パターンB: フロント変更あり（Vue/CSS/JS）
- 例: `resources/js`, `resources/css`, `resources/views/app.blade.php` 変更
- 原則 `npm run build` 実行
- `public/build` も差分に含まれるので一緒にコミット

### パターンC: 1ファイルだけ軽微修正
- 例: メタタグ1行追加
- フロント表示に影響するなら build 実行を推奨
- 影響がないなら build 省略でも可

## 安全な add のやり方
- 推奨（必要ファイルだけ）
```bash
git add resources/views/app.blade.php
```
- 全部まとめて（`git add .`）は速いが、不要ファイル混入リスクあり

## 実務でよく使う確認コマンド
- 何が変わったか確認
```bash
git status
```
- 差分の中身確認
```bash
git diff
```
- コミット履歴確認
```bash
git log --oneline -n 5
```

## よくあるミス
- build したのに `public/build` を add し忘れる
- `.env` や秘密鍵を add して push 保護に弾かれる
- `git add .` で関係ないファイルまで入る

## このプロジェクトでの推奨運用
1. 変更
2. `git status`
3. フロント変更があれば `npm run build`
4. `git add` はファイル指定で
5. `git commit`
6. `git push origin main`

## 参考: 今回のような1ファイル修正例
```bash
git status
git add resources/views/app.blade.php
git commit -m "Disable iOS data detectors for email/phone/address"
git push origin main
```
