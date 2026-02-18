# 本番反映手順（簡易）

このプロジェクトは、ローカルでビルドしてから本番へ反映します。  
（本番サーバーに `npm` がない運用）

## 事前準備（初回のみ）
- `scripts/deploy-prod.sh` があること
- 実行権限があること（なければ）

```bash
chmod +x scripts/deploy-prod.sh
```

## 通常の反映手順
1. コードを修正する
2. 反映コマンドを実行する

```bash
./scripts/deploy-prod.sh
```

## スクリプトが内部でやっていること
1. `main` ブランチか確認
2. 未コミット変更がないか確認
3. ローカルで `npm run build`
4. build後に差分が出たら停止（`public/build` をコミットするため）
5. `git push origin main`
6. 本番へSSH接続して以下を実行
   - `git pull origin main`
   - `php artisan optimize`
   - `php artisan config:clear`

## build差分で止まったとき
以下を実行して再度スクリプトを実行します。

```bash
git add .
git commit -m "build: update assets"
./scripts/deploy-prod.sh
```

## 補足
- 本番DB変更がある場合は、必要に応じて本番で `php artisan migrate --force` を実行
- 購入導線を止める/開ける場合は本番 `.env` の `STRIPE_PURCHASE_ENABLED` を変更後、`php artisan config:clear`
