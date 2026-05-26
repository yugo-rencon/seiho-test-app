<script setup lang="ts">
import { computed } from "vue";
import { usePage } from "@inertiajs/vue3";

const page = usePage();
const YEARS = ["2025", "2024", "2023", "2022", "2021", "2020"] as const;

const current = computed(() => {
    const path = String(page.url ?? "").split("?")[0];
    const matched = path.match(/^\/souron(\d{4})([a-c])$/i);
    if (!matched) return null;

    return {
        year: matched[1],
        form: matched[2].toLowerCase(),
    };
});

const yearBlocks = computed(() => {
    if (!current.value) return [];
    return YEARS.map((year) => ({
        year,
        links: ["a", "b", "c"].map((form) => ({
            form,
            label: form.toUpperCase(),
            href: `/souron${year}${form}`,
            active: year === current.value?.year && form === current.value?.form,
        })),
    }));
});
</script>

<template>
    <aside
        v-if="current"
        class="fixed left-[max(0.75rem,calc((100vw-56rem)/4-5rem))] top-1/2 z-30 hidden max-h-[74vh] w-40 -translate-y-1/2 overflow-y-auto rounded-xl border border-gray-200 bg-white/95 p-2.5 shadow-lg backdrop-blur xl:block"
    >
        <p class="mb-1.5 px-1 text-[11px] font-bold tracking-wide text-gray-500">総論フォーム</p>
        <div class="grid gap-1.5">
            <div
                v-for="block in yearBlocks"
                :key="block.year"
                class="rounded-md border border-gray-100 bg-gray-50 p-1"
            >
                <p class="mb-1 px-1 text-[11px] font-bold text-gray-500">{{ block.year }}</p>
                <div class="grid gap-1">
                    <a
                        v-for="item in block.links"
                        :key="`${block.year}-${item.form}`"
                        :href="item.href"
                        class="rounded px-1.5 py-1.5 text-center text-xs font-semibold transition"
                        :class="
                            item.active
                                ? 'bg-violet-600 text-white'
                                : 'bg-white text-gray-600 ring-1 ring-gray-200 hover:bg-gray-100'
                        "
                    >
                        フォーム{{ item.label }}
                    </a>
                </div>
            </div>
        </div>
    </aside>
</template>
