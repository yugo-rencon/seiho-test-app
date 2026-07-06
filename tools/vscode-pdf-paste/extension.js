const vscode = require("vscode");

function normalizePdfText(text) {
    return text
        .replace(/\r\n?/g, "\n")
        .replace(/\n{2,}/g, "\u0000")
        .replace(/[ \t]*\n[ \t]*/g, "")
        .replace(/\u0000/g, "\n\n")
        .replaceAll("，", "、")
        .replaceAll("．", "。");
}

function activate(context) {
    const disposable = vscode.commands.registerCommand(
        "seihoPdfPaste.pasteNormalized",
        async () => {
            const editor = vscode.window.activeTextEditor;
            if (!editor) {
                return;
            }

            const text = await vscode.env.clipboard.readText();
            const normalized = normalizePdfText(text);

            await editor.edit((editBuilder) => {
                for (const selection of editor.selections) {
                    editBuilder.replace(selection, normalized);
                }
            });
        },
    );

    context.subscriptions.push(disposable);
}

function deactivate() {}

module.exports = {
    activate,
    deactivate,
};
