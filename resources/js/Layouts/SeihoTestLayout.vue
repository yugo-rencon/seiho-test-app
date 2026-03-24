<script setup>
import { Head, usePage } from "@inertiajs/vue3";
import { computed, onBeforeUnmount, ref, watch } from "vue";
import LayoutFooter from "@/Layouts/Partials/LayoutFooter.vue";
import LayoutHeader from "@/Layouts/Partials/LayoutHeader.vue";
import LayoutToast from "@/Layouts/Partials/LayoutToast.vue";
import MobileMenuDrawer from "@/Layouts/Partials/MobileMenuDrawer.vue";
import { MOBILE_MENU_SUBJECTS } from "@/constants/subjects";

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
});

const page = usePage();
const isDaigakuPage = computed(() => String(page.url ?? "").startsWith("/daigaku"));
const currentBrandName = computed(() => {
    if (props.brandName) return props.brandName;
    return isDaigakuPage.value ? "生命保険大学課程 過去問解説" : "生保講座過去問解説";
});
const currentHomeRouteName = computed(() => (isDaigakuPage.value ? "daigaku.index" : "tests.index"));
const currentLogoSrc = computed(() =>
    isDaigakuPage.value
        ? "/images/rencon-favicon-daigaku.svg?v=daigaku"
        : "/images/rencon-favicon.svg?v=seiho",
);

// レイアウト共通UIの状態
const isMenuOpen = ref(false);
const showToast = ref(false);
const showPricingModal = ref(false);
let toastTimer = null;

// Inertia shared props から認証情報を取得
const user = computed(() => page.props?.auth?.user ?? null);
const isAuthenticated = computed(() => !!user.value);
const isAdmin = computed(() => page.props?.auth?.isAdmin === true);
const hasPremium = computed(() => page.props?.auth?.hasPremium === true);
const flashStatus = computed(() => page.props?.flash?.status ?? "");

// モバイルメニューの科目データ（constants から共通利用）
const subjects = MOBILE_MENU_SUBJECTS;

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

const openPricingModal = () => {
    showPricingModal.value = true;
};

const closePricingModal = () => {
    showPricingModal.value = false;
};
</script>

<template>
    <Head :title="props.title">
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
        :class="isDaigakuPage ? 'bg-[#f7fbff]' : 'bg-[#fdfbff]'"
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
            @open-menu="isMenuOpen = true"
            @open-pricing-modal="openPricingModal"
        />

        <main class="overflow-x-hidden">
            <slot />
        </main>

        <!-- ハンバーガーメニュー本体 -->
        <MobileMenuDrawer
            :open="isMenuOpen"
            :is-authenticated="isAuthenticated"
            :is-admin="isAdmin"
            :has-premium="hasPremium"
            :subjects="subjects"
            @close="isMenuOpen = false"
            @open-pricing-modal="openPricingModal"
        />

        <!-- フッター全体 -->
        <LayoutFooter
            :brand-name="currentBrandName"
            :home-route-name="currentHomeRouteName"
            :logo-src="currentLogoSrc"
            :is-daigaku="isDaigakuPage"
            @open-pricing-modal="openPricingModal"
        />

        <transition name="fade">
            <div
                v-if="showPricingModal"
                class="fixed inset-0 z-[70] flex items-center justify-center bg-black/40 px-6"
                @click.self="closePricingModal"
            >
                <div
                    class="w-full max-w-md rounded-2xl border border-purple-100 bg-white p-6 shadow-xl"
                >
                    <h3 class="text-lg font-bold text-gray-900">プレミアム機能は現在準備中です。</h3>
                    <p class="mt-2 text-sm text-gray-600">
                        4月より正式リリース予定です。
                    </p>
                    <div class="mt-5 flex justify-end">
                        <button
                            type="button"
                            class="rounded-lg bg-purple-600 px-4 py-2 text-sm font-semibold text-white hover:bg-purple-700"
                            @click="closePricingModal"
                        >
                            閉じる
                        </button>
                    </div>
                </div>
            </div>
        </transition>
    </div>
</template>

<style scoped>
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.2s ease;
}
.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}
</style>
