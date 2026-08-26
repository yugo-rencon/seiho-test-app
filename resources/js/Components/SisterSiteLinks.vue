<script setup>
import { Link } from "@inertiajs/vue3";
import { computed } from "vue";

const props = defineProps({
    currentSite: {
        type: String,
        default: "seiho",
    },
});

const sites = [
    { key: "seiho", label: "生命保険講座", mobileLabel: "生保講座", route: "tests.index", color: "hover:text-indigo-700 hover:border-indigo-200 hover:bg-indigo-50/70" },
    { key: "daigaku", label: "生命保険大学課程", mobileLabel: "大学課程", route: "daigaku.index", color: "hover:text-blue-700 hover:border-blue-200 hover:bg-blue-50/70" },
    { key: "ouyou", label: "生命保険応用課程", mobileLabel: "応用課程", route: "ouyou.index", color: "hover:text-amber-700 hover:border-amber-200 hover:bg-amber-50/70" },
    { key: "senmon", label: "生命保険専門課程", mobileLabel: "専門課程", route: "senmon.index", color: "hover:text-emerald-700 hover:border-emerald-200 hover:bg-emerald-50/70" },
    { key: "ippan", label: "生命保険一般課程", mobileLabel: "一般課程", route: "ippan.index", color: "hover:text-fuchsia-700 hover:border-pink-200 hover:bg-pink-50/70" },
];

const sisterSites = computed(() => sites.filter((site) => site.key !== props.currentSite));

</script>

<template>
    <div class="mb-4">
        <p class="mb-2 text-[11px] font-semibold tracking-wide text-gray-500">試験一覧</p>

        <!-- スマホ：全リンクを最初から表示 -->
        <div class="flex gap-1.5 overflow-x-auto pb-1 sm:hidden">
            <Link
                v-for="site in sisterSites"
                :key="site.key"
                :href="route(site.route)"
                class="inline-flex shrink-0 items-center justify-center rounded-full border border-gray-200 bg-white px-3 py-1.5 text-[11px] font-semibold text-gray-700 transition active:scale-[0.98]"
                :class="site.color"
            >
                {{ site.mobileLabel }}
            </Link>
        </div>

        <!-- PC：常に展開 -->
        <div class="hidden sm:grid sm:grid-cols-2 lg:grid-cols-4 gap-2">
            <Link
                v-for="site in sisterSites"
                :key="site.key"
                :href="route(site.route)"
                class="inline-flex items-center justify-center rounded-full border border-gray-200 bg-white px-3 py-1.5 text-[11px] font-medium text-gray-600 transition"
                :class="site.color"
            >
                {{ site.label }}
            </Link>
        </div>
    </div>
</template>
