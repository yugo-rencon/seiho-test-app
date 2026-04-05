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
    { key: "seiho", label: "生保講座過去問解説", route: "tests.index", color: "hover:text-indigo-700 hover:border-indigo-200 hover:bg-indigo-50/70" },
    { key: "daigaku", label: "生命保険大学課程 過去問解説", route: "daigaku.index", color: "hover:text-blue-700 hover:border-blue-200 hover:bg-blue-50/70" },
    { key: "ouyou", label: "生命保険応用課程 過去問解説", route: "ouyou.index", color: "hover:text-amber-700 hover:border-amber-200 hover:bg-amber-50/70" },
    { key: "senmon", label: "生命保険専門課程 過去問解説", route: "senmon.index", color: "hover:text-emerald-700 hover:border-emerald-200 hover:bg-emerald-50/70" },
    { key: "ippan", label: "生命保険一般課程 過去問解説", route: "ippan.index", color: "hover:text-red-700 hover:border-red-200 hover:bg-red-50/70" },
];

const sisterSites = computed(() => sites.filter((site) => site.key !== props.currentSite));
</script>

<template>
    <div class="mb-4">
        <p class="mb-2 text-[11px] font-semibold tracking-wide text-gray-500">試験一覧</p>
        <div class="grid grid-cols-1 gap-2 sm:grid-cols-2 lg:grid-cols-4">
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
