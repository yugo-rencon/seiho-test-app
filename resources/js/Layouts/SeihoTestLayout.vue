<script setup>
import { Head, usePage } from "@inertiajs/vue3";
import { computed, onBeforeUnmount, ref, watch } from "vue";
import LayoutFooter from "@/Layouts/Partials/LayoutFooter.vue";
import LayoutHeader from "@/Layouts/Partials/LayoutHeader.vue";
import LayoutToast from "@/Layouts/Partials/LayoutToast.vue";
import MobileMenuDrawer from "@/Layouts/Partials/MobileMenuDrawer.vue";
import { MOBILE_MENU_SUBJECTS } from "@/constants/subjects";
import FormSideNavRight from "@/Components/FormSideNavRight.vue";

const props = defineProps({
    // 各ページ側から渡されるブラウザタイトル
    title: {
        type: String,
        required: true,
    },
    // ヘッダー/フッターのサイト名（未指定時はURLで自動判定）
    brandName: {
        type: String,
        default: "",
    },
    siteScope: {
        type: String,
        default: "",
    },
    noindex: {
        type: Boolean,
        default: false,
    },
});

const page = usePage();
const resolvedSiteScope = computed(() => {
    if (["daigaku", "ippan", "senmon", "ouyou", "seiho"].includes(props.siteScope)) {
        return props.siteScope;
    }

    const url = String(page.url ?? "");
    if (url.startsWith("/daigaku")) return "daigaku";
    if (url.startsWith("/senmon")) return "senmon";
    if (url.startsWith("/ouyou")) return "ouyou";
    if (url.startsWith("/ippan")) return "ippan";
    return "seiho";
});
const isDaigakuPage = computed(() => resolvedSiteScope.value === "daigaku");
const isSenmonPage = computed(() => resolvedSiteScope.value === "senmon");
const isOuyouPage = computed(() => resolvedSiteScope.value === "ouyou");
const isIppanPage = computed(() => resolvedSiteScope.value === "ippan");
const currentBrandName = computed(() => {
    if (props.brandName) return props.brandName;
    if (isDaigakuPage.value) return "生命保険大学課程 過去問解説";
    if (isSenmonPage.value) return "生命保険専門課程 過去問解説";
    if (isOuyouPage.value) return "生命保険応用課程 過去問解説";
    if (isIppanPage.value) return "生命保険一般課程 過去問解説";
    return "生保講座過去問解説";
});
const currentHomeRouteName = computed(() => {
    if (isDaigakuPage.value) return "daigaku.index";
    if (isSenmonPage.value) return "senmon.index";
    if (isOuyouPage.value) return "ouyou.index";
    if (isIppanPage.value) return "ippan.index";
    return "tests.index";
});
const currentLogoSrc = computed(() =>
    isDaigakuPage.value
        ? "/images/rencon-favicon-daigaku.svg?v=daigaku"
        : isSenmonPage.value
          ? "/images/rencon-favicon-senmon.svg?v=senmon"
        : isOuyouPage.value
            ? "/images/rencon-favicon-ouyou.svg?v=ouyou2"
        : isIppanPage.value
            ? "/images/rencon-favicon-ippan.svg?v=ippan2"
          : "/images/rencon-favicon.svg?v=seiho",
);

// レイアウト共通UIの状態
const isMenuOpen = ref(false);
const showToast = ref(false);
let toastTimer = null;

// Inertia shared props から認証情報を取得
const user = computed(() => page.props?.auth?.user ?? null);
const isAuthenticated = computed(() => !!user.value);
const isAdmin = computed(() => page.props?.auth?.isAdmin === true);
const hasPremium = computed(() => page.props?.auth?.hasPremium === true);
const flashStatus = computed(() => page.props?.flash?.status ?? "");

// モバイルメニューの科目データ（constants から共通利用）
const subjects = MOBILE_MENU_SUBJECTS;
const daigakuSubjects = [
    {
        key: "shikumi-kojin",
        name: "生命保険商品のしくみ",
        tests: {
            "2025年度": ["a", "b", "c"],
            "2024年度": ["a", "b", "c"],
            "2023年度": ["a", "b", "c"],
            "2022年度": ["a", "b", "c"],
            "2021年度": ["a", "b", "c"],
        },
    },
    {
        key: "fp",
        name: "FP",
        tests: {
            "2025年度": ["a", "b", "c"],
            "2024年度": ["a", "b", "c"],
            "2023年度": ["a", "b", "c"],
            "2022年度": ["a", "b", "c"],
            "2021年度": ["a", "b", "c"],
        },
    },
    {
        key: "tax-sozoku",
        name: "生命保険と税・相続",
        tests: {
            "2025年度": ["a", "b", "c"],
            "2024年度": ["a", "b", "c"],
            "2023年度": ["a", "b", "c"],
            "2022年度": ["a", "b", "c"],
            "2021年度": ["a", "b", "c"],
        },
    },
    {
        key: "sisan-unyou",
        name: "資産運用知識",
        tests: {
            "2025年度": ["a", "b", "c"],
            "2024年度": ["a", "b", "c"],
            "2023年度": ["a", "b", "c"],
            "2022年度": ["a", "b", "c"],
            "2021年度": ["a", "b", "c"],
        },
    },
    {
        key: "houjin-consulting",
        name: "企業向け保険商品",
        tests: {
            "2025年度": ["a", "b", "c"],
            "2024年度": ["a", "b", "c"],
            "2023年度": ["a", "b", "c"],
            "2022年度": ["a", "b", "c"],
            "2021年度": ["a", "b", "c"],
        },
    },
    {
        key: "social-security",
        name: "社会保障制度",
        tests: {
            "2025年度": ["a", "b", "c"],
            "2024年度": ["a", "b", "c"],
            "2023年度": ["a", "b", "c"],
            "2022年度": ["a", "b", "c"],
            "2021年度": ["a", "b", "c"],
        },
    },
];
const ippanSubjects = [
    {
        key: "h1",
        name: "1月〜6月実施",
        tests: {
            "2025年度": ["a", "b", "c", "d", "e"],
            "2024年度": ["a", "b", "c", "d", "e"],
            "2023年度": ["a", "b", "c", "d", "e"],
            "2022年度": ["a", "b", "c", "d", "e"],
            "2021年度": ["a", "b", "c", "d", "e"],
        },
    },
    {
        key: "h2",
        name: "7月〜12月実施",
        tests: {
            "2025年度": ["a", "b", "c", "d", "e"],
            "2024年度": ["a", "b", "c", "d", "e"],
            "2023年度": ["a", "b", "c", "d", "e"],
            "2022年度": ["a", "b", "c", "d", "e"],
            "2021年度": ["a", "b", "c", "d", "e"],
        },
    },
];

const ouyouSubjects = [
    {
        key: "h1",
        name: "4月〜7月実施",
        tests: {
            "2025年度": ["a", "b"],
            "2024年度": ["a", "b"],
            "2023年度": ["a", "b"],
            "2022年度": ["a", "b"],
            "2021年度": ["a", "b"],
        },
    },
    {
        key: "h2",
        name: "8月〜3月実施",
        tests: {
            "2025年度": ["a", "b", "c", "d"],
            "2024年度": ["a", "b", "c", "d"],
            "2023年度": ["a", "b", "c", "d"],
            "2022年度": ["a", "b", "c", "d"],
            "2021年度": ["a", "b", "c", "d"],
        },
    },
];

const senmonSubjects = [
    {
        key: "h1",
        name: "4月〜8月実施",
        tests: {
            "2025年度": ["a", "b"],
            "2024年度": ["a", "b"],
            "2023年度": ["a", "b"],
            "2022年度": ["a", "b"],
            "2021年度": ["a", "b"],
        },
    },
    {
        key: "h2",
        name: "9月〜3月実施",
        tests: {
            "2025年度": ["a", "b", "c", "d"],
            "2024年度": ["a", "b", "c", "d"],
            "2023年度": ["a", "b", "c", "d"],
            "2022年度": ["a", "b", "c", "d"],
            "2021年度": ["a", "b", "c", "d"],
        },
    },
];

const menuSubjects = computed(() =>
    isDaigakuPage.value ? daigakuSubjects
    : isIppanPage.value ? ippanSubjects
    : isOuyouPage.value ? ouyouSubjects
    : isSenmonPage.value ? senmonSubjects
    : subjects,
);

// URLクエリ（checkout=success/cancel）を優先してトースト文言を決定
const checkoutToastMessage = computed(() => {
    const currentUrl = String(page.url ?? "");
    const query = currentUrl.includes("?") ? currentUrl.split("?")[1] : "";
    const params = new URLSearchParams(query);
    const checkout = params.get("checkout");

    if (checkout === "success") return "購入しました。";
    if (checkout === "cancel") return "決済をキャンセルしました。";
    return "";
});

// トーストの見た目タイプを判定
const toastType = computed(() => {
    const currentUrl = String(page.url ?? "");
    const query = currentUrl.includes("?") ? currentUrl.split("?")[1] : "";
    const params = new URLSearchParams(query);
    const checkout = params.get("checkout");

    if (checkout === "success") return "success";
    if (checkout === "cancel") return "cancel";
    if (String(flashStatus.value).includes("購入済み")) return "already";
    if (
        String(flashStatus.value).includes("ログインしました") ||
        String(flashStatus.value).includes("アカウントを作成") ||
        String(flashStatus.value).includes("ログアウトしました")
    ) {
        return "auth";
    }
    if (String(flashStatus.value).includes("購入")) return "success";
    return "info";
});

// 最終的に表示するトースト文言
const toastMessage = computed(() => {
    if (checkoutToastMessage.value) return checkoutToastMessage.value;
    if (toastType.value === "already") return "すでに購入済みです。";
    return String(flashStatus.value || "");
});

// 文言が入った時だけ表示。4.5秒で自動クローズ
watch(
    toastMessage,
    (message) => {
        if (toastTimer) {
            clearTimeout(toastTimer);
            toastTimer = null;
        }

        showToast.value = !!message;
        if (!message) return;

        toastTimer = setTimeout(() => {
            showToast.value = false;
            toastTimer = null;
        }, 2000);
    },
    { immediate: true },
);

// レイアウト破棄時のタイマー掃除
onBeforeUnmount(() => {
    if (!toastTimer) return;
    clearTimeout(toastTimer);
    toastTimer = null;
});

</script>

<template>
    <Head :title="props.title">
        <meta
            v-if="props.noindex"
            head-key="meta-robots"
            name="robots"
            content="noindex, nofollow"
        />
        <link
            head-key="site-favicon"
            rel="icon"
            type="image/svg+xml"
            :href="currentLogoSrc"
        />
        <link
            head-key="site-apple-touch-icon"
            rel="apple-touch-icon"
            :href="currentLogoSrc"
        />
    </Head>

    <div
        class="min-h-screen"
        :class="
            isDaigakuPage
                ? 'bg-[#f7fbff]'
                : isSenmonPage
                  ? 'bg-[#fbfffb]'
                : isOuyouPage
                  ? 'bg-[#fffdf7]'
                : isIppanPage
                  ? 'bg-[#fffdfd]'
                  : 'bg-[#fdfbff]'
        "
    >

        <!-- トーストUI -->
        <LayoutToast
            :show="showToast"
            :message="toastMessage"
            :type="toastType"
            @close="showToast = false"
        />

        <!-- ヘッダー本体 -->
        <LayoutHeader
            :is-authenticated="isAuthenticated"
            :is-admin="isAdmin"
            :brand-name="currentBrandName"
            :home-route-name="currentHomeRouteName"
            :logo-src="currentLogoSrc"
            :is-daigaku="isDaigakuPage"
            :is-senmon="isSenmonPage"
            :is-ouyou="isOuyouPage"
            :is-ippan="isIppanPage"
            @open-menu="isMenuOpen = true"
        />

        <main class="overflow-x-hidden">
            <slot />
        </main>

        <FormSideNavRight />

        <!-- ハンバーガーメニュー本体 -->
        <MobileMenuDrawer
            :open="isMenuOpen"
            :is-authenticated="isAuthenticated"
            :is-admin="isAdmin"
            :has-premium="hasPremium"
            :is-daigaku="isDaigakuPage"
            :is-senmon="isSenmonPage"
            :is-ouyou="isOuyouPage"
            :is-ippan="isIppanPage"
            :subjects="menuSubjects"
            @close="isMenuOpen = false"
        />

        <!-- フッター全体 -->
        <LayoutFooter
            :brand-name="currentBrandName"
            :home-route-name="currentHomeRouteName"
            :logo-src="currentLogoSrc"
            :is-daigaku="isDaigakuPage"
            :is-senmon="isSenmonPage"
            :is-ouyou="isOuyouPage"
            :is-ippan="isIppanPage"
        />
    </div>
</template>
