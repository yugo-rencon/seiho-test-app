const isAlwaysFreeSubject = (title: string): boolean => {
    const text = String(title ?? "");
    return text.includes("税法") || text.includes("資産");
};

const LATEST_FREE_YEAR = 2024;

const parseFormCode = (subject: string): string => {
    const text = String(subject ?? "").toUpperCase();
    const matched = text.match(/フォーム\s*([A-C])/);
    return matched?.[1] ?? "";
};

export const isPaidYear = (subject: string, title: string = ""): boolean => {
    if (isAlwaysFreeSubject(title)) {
        return false;
    }

    const year = Number(String(subject ?? "").slice(0, 4));
    const formCode = parseFormCode(subject);

    // 最新年度はフォームAのみ無料（B/Cは有料）
    if (year === LATEST_FREE_YEAR && formCode === "A") {
        return false;
    }

    return true;
};

export const getPaywallStartQuestion = (title: string): number => {
    // 計理のみ4問目から、それ以外は23問目から
    return String(title ?? "").includes("計理") ? 4 : 23;
};

export const hasPremiumAccess = (pageProps: any): boolean => {
    return pageProps?.auth?.hasPremium === true;
};
