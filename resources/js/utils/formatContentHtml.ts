const highlightPattern = /\[\[([^\]\n]+)\]\]/g;
const diffBreakGroupPattern = /(?:\{\{\{[^{}\n]+\}\}\})+/g;
const diffBreakPattern = /\{\{\{([^{}\n]+)\}\}\}/g;
const singleArrowPattern = /\s*→\s*/;
const lineBreakPattern = /(<br\s*\/?>)/gi;
const autoBreakArrowThreshold = 22;

const formatInlineTokens = (value: string): string => {
    const formatted = value
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

    return formatAutoBreakArrowLines(formatted)
        .replace(/\s*→\s*/g, ' <span class="answer-arrow" aria-hidden="true">→</span> ')
        .replace(/↔︎|↔|←→|⇔/g, " <strong>⇔</strong> ");
};

const formatQuoteBlocks = (value: string): string => {
    const lines = value.replace(/\r\n/g, "\n").split("\n");

    if (!lines.some((line) => line.trimStart().startsWith(">"))) {
        return formatInlineTokens(value);
    }

    const chunks: string[] = [];
    let quoteLines: string[] = [];

    const flushQuote = () => {
        if (quoteLines.length === 0) return;

        chunks.push(
            `<div class="answer-quote">${quoteLines
                .map((line) => `<div class="answer-quote-line">${formatInlineTokens(line)}</div>`)
                .join("")}</div>`,
        );
        quoteLines = [];
    };

    for (const line of lines) {
        const match = line.match(/^\s*>\s?(.*)$/);

        if (match) {
            quoteLines.push(match[1] ?? "");
            continue;
        }

        flushQuote();
        chunks.push(line === "" ? "" : formatInlineTokens(line));
    }

    flushQuote();

    return chunks.join("<br>");
};

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
    return formatQuoteBlocks(String(value ?? ""));
};
