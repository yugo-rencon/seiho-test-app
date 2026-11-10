<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { computed } from "vue";

const props = defineProps({
    previousRoute: {
        type: String,
        default: null,
    },
    previousHref: {
        type: String,
        default: null,
    },
    nextRoute: {
        type: String,
        default: null,
    },
    nextHref: {
        type: String,
        default: null,
    },
    homeRoute: {
        type: String,
        default: "tests.index",
    },
    homeHref: {
        type: String,
        default: null,
    },
});

const page = usePage();
const isDaigaku = computed(() => /(?:^|\/)daigaku(?:\/|$)/.test(String(page.url ?? "")));
const isSenmon = computed(() => /(?:^|\/)senmon(?:\/|$)/.test(String(page.url ?? "")));
const isOuyou = computed(() => /(?:^|\/)ouyou(?:\/|$)/.test(String(page.url ?? "")));
const isHengaku = computed(() => /(?:^|\/)hengaku(?:\/|$)/.test(String(page.url ?? "")));
const isIppan = computed(() => /(?:^|\/)ippan(?:\/|$)/.test(String(page.url ?? "")));

const buttonClass = computed(() =>
    isHengaku.value
        ? "inline-flex min-w-0 justify-center px-4 py-2 text-xs font-semibold rounded-lg border border-teal-200 text-teal-700 bg-white shadow-sm hover:bg-teal-50 transition"
        : isDaigaku.value
        ? "inline-flex min-w-0 justify-center px-4 py-2 text-xs font-semibold rounded-lg border border-sky-200 text-sky-700 bg-white shadow-sm hover:bg-sky-50 transition"
        : isSenmon.value
          ? "inline-flex min-w-0 justify-center px-4 py-2 text-xs font-semibold rounded-lg border border-emerald-200 text-emerald-700 bg-white shadow-sm hover:bg-emerald-50 transition"
          : isOuyou.value
            ? "inline-flex min-w-0 justify-center px-4 py-2 text-xs font-semibold rounded-lg border border-amber-200 text-amber-700 bg-white shadow-sm hover:bg-amber-50 transition"
            : isIppan.value
              ? "inline-flex min-w-0 justify-center px-4 py-2 text-xs font-semibold rounded-lg border border-pink-200 text-pink-700 bg-white shadow-sm hover:bg-pink-50 transition"
              : "inline-flex min-w-0 justify-center px-4 py-2 text-xs font-semibold rounded-lg border border-purple-200 text-purple-700 bg-white shadow-sm hover:bg-purple-50 transition",
);


const ippanAutoNavigation = computed(() => {
    if (!isIppan.value) {
        return { previous: null, next: null };
    }

    const path = (page.url || "").split("?")[0];
    const matched = path.match(/^\/ippan\/(202[0-6])-(1-6|7-12)-([a-e])$/i);

    if (!matched) {
        return { previous: null, next: null };
    }

    const currentId = `${matched[1]}|${matched[2]}|${matched[3].toLowerCase()}`;
    const years = ["2026", "2025", "2024", "2023", "2022", "2021"];
    const monthsForYear = (year) => (year === "2026" ? ["1-6"] : ["1-6", "7-12"]);
    const forms = ["a", "b", "c", "d", "e"];

    const orderedIds = years.flatMap((year) => monthsForYear(year).flatMap((month) => forms.map((form) => `${year}|${month}|${form}`)));
    const currentIndex = orderedIds.indexOf(currentId);

    if (currentIndex === -1) {
        return { previous: null, next: null };
    }

    const toHref = (id) => {
        if (!id) {
            return null;
        }

        const [year, month, form] = id.split("|");
        return `/ippan/${year}-${month}-${form}`;
    };

    return {
        previous: toHref(orderedIds[currentIndex - 1] ?? null),
        next: toHref(orderedIds[currentIndex + 1] ?? null),
    };
});

const hengakuAutoNavigation = computed(() => {
    if (!isHengaku.value) {
        return { previous: null, next: null };
    }

    const path = (page.url || "").split("?")[0];
    const matched = path.match(/^\/hengaku\/(202[3-6])-(h1|h2)-([a-d])$/i);

    if (!matched) {
        return { previous: null, next: null };
    }

    const currentId = `${matched[1]}|${matched[2].toLowerCase()}|${matched[3].toLowerCase()}`;
    const years = ["2026", "2025", "2024", "2023"];
    const periodsForYear = (year) => (year === "2026" ? ["h1"] : ["h2", "h1"]);
    const formsForPeriod = (period) => (period === "h1" ? ["a", "b"] : ["a", "b", "c", "d"]);
    const orderedIds = years.flatMap((year) =>
        periodsForYear(year).flatMap((period) =>
            formsForPeriod(period).map((form) => `${year}|${period}|${form}`),
        ),
    );
    const currentIndex = orderedIds.indexOf(currentId);

    if (currentIndex === -1) {
        return { previous: null, next: null };
    }

    const toHref = (id) => {
        if (!id) return null;
        const [year, period, form] = id.split("|");
        return `/hengaku/${year}-${period}-${form}`;
    };

    return {
        previous: toHref(orderedIds[currentIndex - 1] ?? null),
        next: toHref(orderedIds[currentIndex + 1] ?? null),
    };
});

const seihoAutoNavigation = computed(() => {
    if (isDaigaku.value || isSenmon.value || isOuyou.value || isIppan.value || isHengaku.value) {
        return { previous: null, next: null };
    }

    const path = (page.url || "").split("?")[0];
    const matched = path.match(/^\/(souron|keiri|kiken|yakkan|kaikei|eigyo|zeihou|sisan)(202[0-6])([a-c])$/i);

    if (!matched) {
        return { previous: null, next: null };
    }

    const subject = matched[1].toLowerCase();
    const currentId = `${matched[2]}|${matched[3].toLowerCase()}`;
    const years = ["souron", "keiri"].includes(subject)
        ? ["2026", "2025", "2024", "2023", "2022", "2021", "2020"]
        : ["2025", "2024", "2023", "2022", "2021", "2020"];
    const forms = ["a", "b", "c"];
    const orderedIds = years.flatMap((year) => forms.map((form) => `${year}|${form}`));
    const currentIndex = orderedIds.indexOf(currentId);

    if (currentIndex === -1) {
        return { previous: null, next: null };
    }

    const toHref = (id) => {
        if (!id) {
            return null;
        }

        const [year, form] = id.split("|");
        return `/${subject}${year}${form}`;
    };

    return {
        previous: toHref(orderedIds[currentIndex - 1] ?? null),
        next: toHref(orderedIds[currentIndex + 1] ?? null),
    };
});

const previousLink = computed(() => props.previousHref || (props.previousRoute ? route(props.previousRoute) : null) || ippanAutoNavigation.value.previous || hengakuAutoNavigation.value.previous || seihoAutoNavigation.value.previous);
const nextLink = computed(() => props.nextHref || (props.nextRoute ? route(props.nextRoute) : null) || ippanAutoNavigation.value.next || hengakuAutoNavigation.value.next || seihoAutoNavigation.value.next);
const homeLink = computed(() => props.homeHref || (props.homeRoute ? route(props.homeRoute) : null));
</script>

<template>
    <div class="mx-auto mt-8 flex w-full max-w-4xl flex-col items-center gap-6 border-t border-gray-200 pt-8">
        <!-- 前の試験・次の試験ボタン -->
        <div v-if="previousLink || nextLink" class="flex w-full max-w-md flex-nowrap justify-center gap-3 px-4 sm:w-auto sm:px-0">
            <Link v-if="previousLink" :href="previousLink" :class="[buttonClass, 'max-w-[180px] flex-1 whitespace-nowrap px-2 sm:min-w-[180px] sm:flex-none sm:px-4']"> 前の試験へ </Link>

            <Link v-if="nextLink" :href="nextLink" :class="[buttonClass, 'max-w-[180px] flex-1 whitespace-nowrap px-2 sm:min-w-[180px] sm:flex-none sm:px-4']"> 次の試験へ </Link>
        </div>

        <!-- 一覧画面に戻るボタン -->
        <Link :href="homeLink" :class="[buttonClass, 'min-w-[180px]']"> 一覧画面に戻る </Link>
    </div>
</template>
