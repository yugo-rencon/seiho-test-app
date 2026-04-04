const LATEST_FREE_YEAR = 2024;
const isDaigakuPath = (): boolean =>
    typeof window !== "undefined" && window.location.pathname.startsWith("/daigaku");

const parseFormCode = (subject: string): string => {
    const text = String(subject ?? "").toUpperCase();
    const matched = text.match(/フォーム\s*([A-C])/);
    return matched?.[1] ?? "";
};

export const isPaidYear = (subject: string, _title: string = ""): boolean => {
    const year = Number(String(subject ?? "").slice(0, 4));
    const formCode = parseFormCode(subject);

    if (isDaigakuPath()) {
        // 大学課程: 2025年度フォームAのみ無料
        return !(year === 2025 && formCode === "A");
    }

    // 最新年度はフォームAのみ無料（B/Cは有料）
    if (year === LATEST_FREE_YEAR && formCode === "A") {
        return false;
    }

    return true;
};

export const getPaywallStartQuestion = (title: string): number => {
    if (isDaigakuPath()) {
        // 大学課程: 有料部分は4問目から
        return 4;
    }

    // 計理のみ4問目から、それ以外は23問目から
    return String(title ?? "").includes("計理") ? 4 : 23;
};

export const hasPremiumAccess = (pageProps: any): boolean => {
    return pageProps?.auth?.hasPremium === true;
};
