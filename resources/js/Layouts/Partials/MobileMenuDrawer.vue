<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { computed, ref, watch } from "vue";

const props = defineProps({
    // 開閉状態（親のレイアウトで管理）
    open: { type: Boolean, default: false },
    isDaigaku: { type: Boolean, default: false },
    isSenmon: { type: Boolean, default: false },
    isOuyou: { type: Boolean, default: false },
    isIppan: { type: Boolean, default: false },
    isAuthenticated: { type: Boolean, default: false },
    hasPremium: { type: Boolean, default: false },
    isAdmin: { type: Boolean, default: false },
    hideAuthUi: { type: Boolean, default: false },
    hidePricingUi: { type: Boolean, default: false },
    subjects: { type: Array, default: () => [] },
});

const emit = defineEmits(["close"]);
const page = usePage();
const currentPath = computed(() => String(page.url ?? "").split("?")[0]);
const activePeriodKey = ref("");

const isActive = (name) => route().current(name);

const closeMenu = () => emit("close");
const currentScope = computed(() => {
    if (props.isDaigaku) return "daigaku";
    if (props.isIppan) return "ippan";
    if (props.isSenmon) return "senmon";
    if (props.isOuyou) return "ouyou";
    return "seiho";
});
const loginHref = computed(() => {
    const returnTo = String(page.url ?? (props.isDaigaku ? "/daigaku" : "/"));
    return route("login", {
        ...(currentScope.value !== "seiho" ? { scope: currentScope.value } : {}),
        return_to: returnTo,
    });
});

const homeRouteName = () =>
    props.isDaigaku
        ? "daigaku.index"
        : props.isSenmon
          ? "senmon.index"
          : props.isOuyou
            ? "ouyou.index"
            : props.isIppan
              ? "ippan.index"
              : "tests.index";
const mypageRouteName = () => {
    if (props.isDaigaku) return "daigaku.mypage";
    if (props.isIppan) return "ippan.mypage";
    if (props.isSenmon) return "senmon.mypage";
    if (props.isOuyou) return "ouyou.mypage";
    return "mypage";
};
const adminRouteName = () => (props.isDaigaku ? "daigaku.admin.index" : "admin.index");
const accentTextClass = computed(() =>
    props.isDaigaku
        ? "text-blue-500"
        : props.isSenmon
          ? "text-emerald-500"
          : props.isOuyou
            ? "text-amber-500"
            : props.isIppan
              ? "text-fuchsia-500"
            : "text-purple-500",
);
const resolveFormHref = (subjectKey, yearLabel, form) => {
    const year = Number(String(yearLabel).replace("年度", ""));
    const f = String(form).toLowerCase();

    try {
        if (props.isIppan) {
            const months = subjectKey === "h1" ? "1-6" : "7-12";
            return route("ippan.test", { year, months, form: f });
        }
        if (props.isSenmon) {
            return route("senmon.test", { year, period: subjectKey, form: f });
        }
        if (props.isOuyou) {
            return route("ouyou.test", { year, period: subjectKey, form: f });
        }
    } catch (_) {
        return null;
    }

    const routeName = props.isDaigaku
        ? `daigaku.${subjectKey}${year}${f}`
        : `${subjectKey}${year}${f}`;

    if (!route().has(routeName)) {
        return null;
    }

    return route(routeName);
};
const isCurrentFormHref = (href) => {
    if (!href) return false;
    try {
        const url = new URL(String(href), window.location.origin);
        return url.pathname === currentPath.value;
    } catch (_) {
        return String(href).split("?")[0] === currentPath.value;
    }
};

const currentSubjectKey = computed(() => {
    const path = String(page.url ?? "").split("?")[0];

    if (props.isIppan) {
        const matched = path.match(/^\/ippan\/\d{4}-(1-6|7-12)-[a-e]$/i);
        if (!matched) return null;
        return matched[1] === "1-6" ? "h1" : "h2";
    }

    if (props.isSenmon || props.isOuyou) {
        const matched = path.match(/^\/(?:senmon|ouyou)\/\d{4}-(h[12])-[a-d]$/i);
        return matched?.[1]?.toLowerCase() ?? null;
    }

    if (props.isDaigaku) {
        const matched = path.match(/^\/daigaku\/([a-z-]+)\d{4}[a-c]$/i);
        return matched?.[1]?.toLowerCase() ?? null;
    }

    const matched = path.match(/^\/([a-z]+)\d{4}[a-c]$/i);
    return matched?.[1]?.toLowerCase() ?? null;
});

const isPeriodScope = computed(() => props.isIppan || props.isSenmon || props.isOuyou);
const periodTabOptions = computed(() => {
    if (!isPeriodScope.value) return [];
    return props.subjects.map((subject) => ({
        key: subject.key,
        name: subject.name,
    }));
});

watch(
    () => [props.open, currentSubjectKey.value, periodTabOptions.value.length],
    ([isOpen]) => {
        if (!isOpen || !isPeriodScope.value) return;
        const fallback = periodTabOptions.value[0]?.key ?? "";
        activePeriodKey.value = currentSubjectKey.value || fallback;
    },
    { immediate: true },
);

const visibleSubjects = computed(() => {
    if (isPeriodScope.value) {
        const key = activePeriodKey.value || currentSubjectKey.value || periodTabOptions.value[0]?.key;
        const target = props.subjects.find((s) => s.key === key);
        return target ? [target] : props.subjects;
    }

    if (!currentSubjectKey.value) return props.subjects;
    const target = props.subjects.find((s) => s.key === currentSubjectKey.value);
    return target ? [target] : props.subjects;
});
</script>

<template>
    <transition name="fade">
        <div
            v-if="open"
            class="fixed inset-0 z-40 bg-black/30"
            @click="closeMenu"
        >
            <aside
                class="fixed right-0 top-0 z-50 h-full w-80 overflow-y-auto bg-white shadow-xl"
                @click.stop
            >
                <div class="border-b border-gray-100 px-4 py-2">
                    <div class="flex items-center justify-between">
                        <Link
                            v-if="isAdmin"
                            :href="route(adminRouteName())"
                            class="rounded-lg bg-amber-50 px-3 py-2 text-sm font-semibold text-amber-700 transition hover:bg-amber-100"
                            @click="closeMenu"
                        >
                            管理者画面
                        </Link>
                        <span v-else></span>
                        <button
                            class="rounded-lg p-2 transition-colors hover:bg-gray-100"
                            aria-label="メニューを閉じる"
                            @click="closeMenu"
                        >
                            <svg
                                class="h-5 w-5 text-gray-600"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    d="M6 18L18 6M6 6l12 12"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="space-y-5 px-5 py-4">
                    <!-- ログイン状態で出し分ける上部リンク -->
                    <div v-if="!hideAuthUi" class="space-y-2">
                        <template v-if="isAuthenticated">
                            <Link
                                :href="route(mypageRouteName())"
                                class="block rounded-lg px-3 py-2 text-sm font-semibold transition"
                                :class="
                                    isActive(mypageRouteName())
                                        ? isDaigaku
                                            ? 'pointer-events-none bg-blue-50 text-blue-700'
                                            : isSenmon
                                              ? 'pointer-events-none bg-emerald-50 text-emerald-700'
                                            : isOuyou
                                                ? 'pointer-events-none bg-amber-50 text-amber-700'
                                              : isIppan
                                                ? 'pointer-events-none bg-pink-50 text-fuchsia-700'
                                            : 'pointer-events-none bg-purple-50 text-purple-700'
                                        : isDaigaku
                                          ? 'text-blue-700 hover:bg-blue-50'
                                          : isSenmon
                                            ? 'text-emerald-700 hover:bg-emerald-50'
                                            : isOuyou
                                              ? 'text-amber-700 hover:bg-amber-50'
                                            : isIppan
                                              ? 'text-fuchsia-700 hover:bg-pink-50'
                                          : 'text-purple-700 hover:bg-purple-50'
                                "
                                :aria-current="isActive(mypageRouteName()) ? 'page' : null"
                                @click="closeMenu"
                            >
                                マイページ
                            </Link>
                        </template>
                        <template v-else>
                            <Link
                                :href="loginHref"
                                class="block rounded-lg px-3 py-2 text-sm font-semibold transition"
                                :class="
                                    isDaigaku
                                        ? 'text-blue-700 hover:bg-blue-50'
                                        : isSenmon
                                          ? 'text-emerald-700 hover:bg-emerald-50'
                                          : isOuyou
                                            ? 'text-amber-700 hover:bg-amber-50'
                                          : isIppan
                                            ? 'text-red-700 hover:bg-red-50'
                                            : 'text-purple-700 hover:bg-purple-50'
                                "
                                @click="closeMenu"
                            >
                                ログイン
                            </Link>
                        </template>
                    </div>

                    <!-- 科目ナビ -->
                    <div class="border-t border-gray-100 pt-4">
                        <div class="mb-3 text-xs font-semibold text-gray-500">
                            試験科目
                        </div>
                        <div class="mb-3">
                            <Link
                                :href="route(homeRouteName())"
                                class="group flex w-full items-center justify-between rounded-xl border border-gray-200 bg-white px-4 py-3 text-sm font-semibold text-gray-700 transition-all duration-200 hover:border-gray-300 hover:bg-gray-50"
                                @click="closeMenu"
                            >
                                <span>解説一覧へ戻る</span>
                                <svg
                                    class="h-4 w-4 transition-transform duration-150 group-hover:translate-x-0.5"
                                    :class="accentTextClass"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        d="M9 5l7 7-7 7"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                    />
                                </svg>
                            </Link>
                        </div>

                        <div
                            v-if="isPeriodScope && periodTabOptions.length > 1"
                            class="mb-3 grid grid-cols-2 gap-2"
                        >
                            <button
                                v-for="tab in periodTabOptions"
                                :key="tab.key"
                                type="button"
                                class="rounded-lg border px-3 py-2 text-xs font-semibold transition"
                                :class="
                                    activePeriodKey === tab.key
                                        ? (isSenmon
                                            ? 'border-emerald-200 bg-emerald-100 text-emerald-700'
                                            : isOuyou
                                              ? 'border-amber-200 bg-amber-100 text-amber-700'
                                              : 'border-fuchsia-200 bg-fuchsia-100 text-fuchsia-700')
                                        : 'border-gray-200 bg-white text-gray-600 hover:bg-gray-50'
                                "
                                @click="activePeriodKey = tab.key"
                            >
                                {{ tab.name }}
                            </button>
                        </div>

                        <div
                            v-for="subject in visibleSubjects"
                            :key="subject.key"
                            class="overflow-hidden rounded-2xl border border-gray-200 bg-gradient-to-b from-white to-gray-50/80"
                        >
                            <div class="flex items-center justify-between border-b border-gray-100 px-4 py-3 text-sm font-semibold text-gray-800">
                                <span>{{ subject.name }}</span>
                                <span class="rounded-full bg-white px-2 py-1 text-[10px] text-gray-500 ring-1 ring-gray-200">
                                    {{ Object.keys(subject.tests).length }}年度分
                                </span>
                            </div>

                            <div class="space-y-2 p-3">
                                <div
                                    v-for="(forms, yearLabel) in subject.tests"
                                    :key="yearLabel"
                                    class="rounded-xl border border-gray-200 bg-white p-2.5"
                                >
                                        <div
                                            class="mb-2 flex items-center gap-2 px-1 text-xs font-bold text-gray-700"
                                        >
                                            <div
                                                class="h-2 w-2 rounded-full bg-gradient-to-r"
                                                :class="
                                                    isDaigaku
                                                        ? 'from-blue-400 to-cyan-400'
                                                        : isSenmon
                                                          ? 'from-emerald-400 to-lime-400'
                                                          : isOuyou
                                                            ? 'from-amber-400 to-orange-400'
                                                          : isIppan
                                                            ? 'from-pink-300 to-fuchsia-300'
                                                            : 'from-indigo-400 to-purple-400'
                                                "
                                            ></div>
                                            <span>{{ yearLabel }}</span>
                                        </div>

                                        <ul
                                            class="grid gap-1.5"
                                            :class="forms.length === 4 ? 'grid-cols-2' : 'grid-cols-3'"
                                        >
                                            <li v-for="form in forms" :key="form">
                                                <Link
                                                    v-if="resolveFormHref(subject.key, yearLabel, form)"
                                                    :href="resolveFormHref(subject.key, yearLabel, form)"
                                                    class="flex items-center justify-center rounded-lg px-1 py-2 text-xs font-semibold transition-all duration-150"
                                                    :class="
                                                        isCurrentFormHref(resolveFormHref(subject.key, yearLabel, form))
                                                            ? (isDaigaku
                                                                ? 'bg-blue-600 text-white shadow-sm'
                                                                : isSenmon
                                                                  ? 'bg-emerald-600 text-white shadow-sm'
                                                                  : isOuyou
                                                                    ? 'bg-amber-500 text-white shadow-sm'
                                                                  : isIppan
                                                                    ? 'bg-fuchsia-600 text-white shadow-sm'
                                                                    : 'bg-violet-600 text-white shadow-sm')
                                                            : (isDaigaku
                                                                ? 'bg-blue-50 text-blue-700 hover:bg-blue-100'
                                                                : isSenmon
                                                                  ? 'bg-emerald-50 text-emerald-700 hover:bg-emerald-100'
                                                                  : isOuyou
                                                                    ? 'bg-amber-50 text-amber-700 hover:bg-amber-100'
                                                                  : isIppan
                                                                    ? 'bg-fuchsia-50 text-fuchsia-700 hover:bg-fuchsia-100'
                                                                    : 'bg-violet-50 text-violet-700 hover:bg-violet-100')
                                                    "
                                                    @click="closeMenu"
                                                >
                                                    フォーム{{ form.toUpperCase() }}
                                                </Link>
                                                <span
                                                    v-else
                                                    class="flex items-center justify-center rounded-lg bg-gray-100 px-1 py-2 text-xs font-semibold text-gray-400"
                                                >
                                                    フォーム{{ form.toUpperCase() }}
                                                </span>
                                            </li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 下部の固定ページリンク -->
                </div>

                <div class="border-t border-white/10 px-6 py-6">
                    <button
                        class="w-full rounded-xl bg-white/10 py-3 font-semibold text-white transition-all duration-300 hover:bg-white/20"
                        @click="closeMenu"
                    >
                        閉じる
                    </button>
                </div>
            </aside>
        </div>
    </transition>
</template>

<style scoped>
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.3s ease;
}
.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}

</style>
