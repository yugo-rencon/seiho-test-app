const isAlwaysFreeSubject = (title: string): boolean => {
    const text = String(title ?? "");
    return text.includes("税法") || text.includes("資産");
};

export const isPaidYear = (subject: string, title: string = ""): boolean => {
    if (isAlwaysFreeSubject(title)) {
        return false;
    }

    const year = Number(String(subject ?? "").slice(0, 4));
    return year !== 2024;
};

export const getPaywallStartQuestion = (title: string): number => {
    // 計理のみ4問目から、それ以外は23問目から
    return String(title ?? "").includes("計理") ? 4 : 23;
};

export const hasPremiumAccess = (pageProps: any): boolean => {
    return pageProps?.auth?.hasPremium === true;
};
