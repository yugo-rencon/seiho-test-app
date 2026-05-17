const highlightPattern = /\[\[([^\]\n]+)\]\]/g;

export const formatInlineContentHtml = (value: unknown): string => {
    return String(value ?? "")
        .replace(highlightPattern, '<span class="answer-highlight">$1</span>')
        .replace(/↔︎|↔|←→|⇔/g, " <strong>⇔</strong> ");
};
