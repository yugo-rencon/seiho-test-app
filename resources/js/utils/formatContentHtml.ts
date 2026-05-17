const highlightPattern = /\[\[([^\]\n]+)\]\]/g;
const diffBreakGroupPattern = /(?:\{\{\{[^{}\n]+\}\}\})+/g;
const diffBreakPattern = /\{\{\{([^{}\n]+)\}\}\}/g;
const singleArrowPattern = /\s*→\s*/;
const lineBreakPattern = /(<br\s*\/?>)/gi;
const autoBreakArrowThreshold = 22;

const formatDiffBreakLine = (line: string): string => {
    const parts = line.split(singleArrowPattern);

    if (parts.length !== 2) {
        return `<span class="answer-diff-item">${line}</span>`;
    }

    const [before, after] = parts.map((part) => part.trim());

    if (before === "" || after === "") {
        return `<span class="answer-diff-item">${line}</span>`;
    }

    return [
        '<span class="answer-diff-item answer-diff-item-break">',
        `<span>${before}</span>`,
        `<span>→ ${after}</span>`,
        '</span>',
    ].join("");
};

const shouldAutoBreakArrow = (before: string, after: string): boolean => {
    return before.length >= autoBreakArrowThreshold || after.length >= autoBreakArrowThreshold;
};

const formatAutoBreakArrowLine = (line: string): string => {
    const parts = line.split(singleArrowPattern);

    if (parts.length !== 2) {
        return line;
    }

    const [before, after] = parts.map((part) => part.trim());

    if (before === "" || after === "" || !shouldAutoBreakArrow(before, after)) {
        return line;
    }

    return [
        '<span class="answer-auto-arrow">',
        `<span>${before}</span>`,
        `<span>→ ${after}</span>`,
        '</span>',
    ].join("");
};

const formatAutoBreakArrowLines = (value: string): string => {
    return value
        .split(lineBreakPattern)
        .map((segment) => {
            if (/^<br\s*\/?>$/i.test(segment) || segment.includes("answer-diff-")) {
                return segment;
            }

            return formatAutoBreakArrowLine(segment);
        })
        .join("");
};

export const formatInlineContentHtml = (value: unknown): string => {
    const formatted = String(value ?? "")
        .replace(diffBreakGroupPattern, (group) => {
            const items = [...group.matchAll(diffBreakPattern)]
                .map((match) => match[1]?.trim() ?? "")
                .filter((line) => line !== "");

            if (items.length === 0) return group;

            return `<span class="answer-diff-list">${items
                .map((line) => formatDiffBreakLine(line))
                .join("")}</span>`;
        })
        .replace(highlightPattern, '<span class="answer-highlight">$1</span>');

    return formatAutoBreakArrowLines(formatted).replace(/↔︎|↔|←→|⇔/g, " <strong>⇔</strong> ");
};
