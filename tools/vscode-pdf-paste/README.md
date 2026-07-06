# Seiho PDF Paste

PDF からコピーした日本語本文を貼り付けるためのローカル VS Code 拡張です。

## Command

- `Seiho: Paste PDF Text`
- Default keybinding: `Cmd+Shift+V`

## Conversion

- `，` -> `、`
- `．` -> `。`
- Single line breaks are removed.
- Blank lines are preserved as paragraph breaks.

Half-width commas such as `,` are not changed.
