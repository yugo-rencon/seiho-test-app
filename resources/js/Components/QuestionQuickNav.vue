<script setup lang="ts">
import { computed, nextTick, onBeforeUnmount, onMounted, ref, watch } from "vue";
import { usePage } from "@inertiajs/vue3";

type TocItem = {
    id: string;
    label: string;
};

const page = usePage();
const items = ref<TocItem[]>([]);
const activeId = ref("");

let observer: IntersectionObserver | null = null;

const shouldShow = computed(() => {
    const path = String(page.url ?? "").split("?")[0];
    return /^\/(daigaku|ippan|senmon|ouyou|[a-z]+)\//i.test(path) || /^\/[a-z]+\d{4}[a-z]$/i.test(path);
});

const teardownObserver = () => {
    if (!observer) return;
    observer.disconnect();
    observer = null;
};

const rebuildToc = async () => {
    teardownObserver();
    items.value = [];
    activeId.value = "";

    if (!shouldShow.value) return;

    await nextTick();

    const nodes = Array.from(document.querySelectorAll<HTMLElement>('[id^="q"]'))
        .filter((node) => /^q\d+$/.test(node.id))
        .sort((a, b) => Number(a.id.slice(1)) - Number(b.id.slice(1)));

    items.value = nodes.map((node) => ({
        id: node.id,
        label: node.id.replace("q", "問"),
    }));

    if (items.value.length === 0) return;
    activeId.value = items.value[0].id;

    observer = new IntersectionObserver(
        (entries) => {
            const visible = entries
                .filter((entry) => entry.isIntersecting)
                .sort((a, b) => a.boundingClientRect.top - b.boundingClientRect.top);

            if (visible.length > 0) {
                activeId.value = visible[0].target.id;
                return;
            }

            const passed = entries
                .filter((entry) => entry.boundingClientRect.top < 120)
                .sort((a, b) => b.boundingClientRect.top - a.boundingClientRect.top);

            if (passed.length > 0) {
                activeId.value = passed[0].target.id;
            }
        },
        {
            root: null,
            rootMargin: "-90px 0px -72% 0px",
            threshold: [0, 1],
        },
    );

    nodes.forEach((node) => observer?.observe(node));
};

watch(
    () => page.url,
    () => {
        rebuildToc();
    },
);

onMounted(() => {
    rebuildToc();
});

onBeforeUnmount(() => {
    teardownObserver();
});
</script>

<template>
    <aside
        v-if="shouldShow && items.length > 0"
        class="fixed right-[max(0.75rem,calc((100vw-56rem)/4-3.5rem))] top-1/2 z-30 hidden max-h-[72vh] w-28 -translate-y-1/2 overflow-y-auto rounded-xl border border-gray-200 bg-white/95 p-2.5 shadow-lg backdrop-blur xl:block"
    >
        <p class="mb-1.5 px-1 text-[11px] font-bold tracking-wide text-gray-500">目次</p>
        <div class="grid gap-1">
            <a
                v-for="item in items"
                :key="item.id"
                :href="`#${item.id}`"
                class="rounded-md px-2 py-1.5 text-center text-xs font-semibold transition"
                :class="
                    activeId === item.id
                        ? 'bg-violet-600 text-white'
                        : 'bg-gray-100 text-gray-600 hover:bg-gray-200'
                "
            >
                {{ item.label }}
            </a>
        </div>
    </aside>
</template>
