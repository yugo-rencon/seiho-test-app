# 解説メンテ コメント運用ルール

## 目的
各問題の「未確認 / 修正済み / 更新完了」を、画面実装なしでコードコメントだけで管理する。

## 使い分け
- `todo`: これから確認・修正する項目
- `fix`: 修正を入れた項目（内容を短く残す）
- `rev`: 更新が完了した項目

## 書式（統一）
- `// todo: YYYY-MM-DD 内容`
- `// fix: YYYY-MM-DD 内容`
- `// rev: YYYY-MM-DD 更新済み`

例:
```js
// todo: 2026-05-26 問22の表現を見直し
// fix: 2026-05-26 誤字修正（予定利率）
// rev: 2026-05-26 更新済み
```

## VS Code スニペット
`.vscode/seiho-comments.code-snippets` を使用。

- `todo` → `// todo: 当日日付 ...`
- `fix` → `// fix: 当日日付 ...`
- `rev` → `// rev: 当日日付 更新済み`

## 検索コマンド
進捗確認は以下で一括検索:

```bash
rg "todo:|fix:|rev:" resources/js/Pages
```
