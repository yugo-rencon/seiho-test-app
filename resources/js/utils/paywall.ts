const isDaigakuPath = (): boolean =>
    typeof window !== "undefined" && window.location.pathname.startsWith("/daigaku");
const currentExamScope = (): string => {
    if (typeof window === "undefined") return "seiho";

    const path = window.location.pathname;
    if (path.startsWith("/daigaku")) return "daigaku";
    if (path.startsWith("/ippan")) return "ippan";
    if (path.startsWith("/senmon")) return "senmon";
    if (path.startsWith("/ouyou")) return "ouyou";
    return "seiho";
};

const parseFormCode = (subject: string): string => {
    const text = String(subject ?? "").toUpperCase();
    const matched = text.match(/フォーム\s*([A-E])/);
    return matched?.[1] ?? "";
};

const parseSeihoSubjectKeyFromPath = (): string => {
    if (typeof window === "undefined") return "";
    const path = window.location.pathname;
    const matched = path.match(/^\/([a-z]+)\d{4}[a-c]$/i);
    return String(matched?.[1] ?? "").toLowerCase();
};

export const isPaidYear = (subject: string, _title: string = ""): boolean => {
    const year = Number(String(subject ?? "").slice(0, 4));
    const formCode = parseFormCode(subject);
    const scope = currentExamScope();

    if (scope === "ippan" || scope === "senmon" || scope === "ouyou") {
        // 一般・専門・応用課程: 最新年度フォームAのみ無料
        return !(year === 2025 && formCode === "A");
    }

    if (isDaigakuPath()) {
        // 大学課程: 2025年度フォームAのみ無料
        return !(year === 2025 && formCode === "A");
    }

    // 生保講座:
    // - 総論・計理・危険選択のみ2025年度フォームAを無料
    // - それ以外の5科目は2024年度フォームAを無料
    const seihoSubjectKey = parseSeihoSubjectKeyFromPath();
    const latestFreeYear =
        seihoSubjectKey === "souron" || seihoSubjectKey === "keiri" || seihoSubjectKey === "kiken"
            ? 2025
            : 2024;

    if (year === latestFreeYear && formCode === "A") {
        return false;
    }

    return true;
};

export const getPaywallStartQuestion = (title: string): number => {
    const scope = currentExamScope();

    if (scope === "daigaku" || scope === "senmon" || scope === "ouyou") {
        // 大学・専門・応用課程: 有料部分は4問目から
        return 4;
    }

    if (scope === "ippan") {
        // 一般課程: 有料部分は33問目から
        return 33;
    }

    // 計理のみ4問目から、それ以外は23問目から
    return String(title ?? "").includes("計理") ? 4 : 23;
};

export const hasPremiumAccess = (pageProps: any): boolean => {
    return pageProps?.auth?.hasPremium === true;
};
