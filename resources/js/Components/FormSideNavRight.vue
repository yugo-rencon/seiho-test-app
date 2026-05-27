<script setup lang="ts">
import { computed, nextTick, onBeforeUnmount, onMounted, ref, watch } from "vue";
import { usePage } from "@inertiajs/vue3";

type LinkItem = { label: string; href: string; active: boolean };
type Group = { heading: string; links: LinkItem[] };

const page = usePage();
const path = computed(() => {
    const raw = String(page.url ?? "");
    return raw.split("?")[0].split("#")[0].replace(/\/+$/, "") || "/";
});
const hideOnFooter = ref(false);
const navRef = ref<HTMLElement | null>(null);
const navScale = ref(1);
const viewportWidth = ref<number>(typeof window !== "undefined" ? window.innerWidth : 0);
let footerObserver: IntersectionObserver | null = null;
let resizeHandler: (() => void) | null = null;

const block = computed<{ title: string; groups: Group[] } | null>(() => {
    const p = path.value;

    const seiho = p.match(/^\/([a-z]+)(\d{4})([a-c])$/i);
    if (seiho) {
        const subject = seiho[1].toLowerCase();
        const current = `${subject}${seiho[2]}${seiho[3].toLowerCase()}`;
        const years = ["2025", "2024", "2023", "2022", "2021", "2020"];
        const groups = years.map((year) => ({
            heading: year,
            links: ["a", "b", "c"].map((form) => {
                const key = `${subject}${year}${form}`;
                return {
                    label: `フォーム${form.toUpperCase()}`,
                    href: `/${key}`,
                    active: key === current,
                };
            }),
        }));
        const labelMap: Record<string, string> = {
            souron: "生命保険総論",
            keiri: "生命保険計理",
            kiken: "危険選択",
            yakkan: "約款と法律",
            kaikei: "生命保険会計",
            eigyo: "生命保険商品と営業",
            zeihou: "生命保険と税法",
            sisan: "資産運用",
        };
        return { title: labelMap[subject] ?? subject, groups };
    }

    const daigaku = p.match(/^\/daigaku\/([a-z-]+)(\d{4})([a-c])$/i);
    if (daigaku) {
        const subject = daigaku[1].toLowerCase();
        const current = `${subject}${daigaku[2]}${daigaku[3].toLowerCase()}`;
        const years = ["2025", "2024", "2023", "2022", "2021"];
        const groups = years.map((year) => ({
            heading: year,
            links: ["a", "b", "c"].map((form) => {
                const key = `${subject}${year}${form}`;
                return {
                    label: `フォーム${form.toUpperCase()}`,
                    href: `/daigaku/${key}`,
                    active: key === current,
                };
            }),
        }));
        const labelMap: Record<string, string> = {
            "shikumi-kojin": "生命保険商品のしくみ",
            fp: "FP",
            zei: "生命保険と税・相続",
            sisan: "資産運用知識",
            kigyo: "企業向け保険商品",
            syakai: "社会保障制度",
        };
        return { title: labelMap[subject] ?? subject, groups };
    }

    return null;
});

const navColsClass = (count: number): string => {
    if (count >= 1) return "grid-cols-1";
    return "grid-cols-1";
};

const compactLabel = (label: string): string => {
    return String(label).replace("フォーム", "");
};

const activeButtonClass = computed(() => {
    const p = path.value;
    if (p.startsWith("/daigaku")) return "bg-blue-600 text-white";
    if (p.startsWith("/ippan")) return "bg-fuchsia-600 text-white";
    if (p.startsWith("/senmon")) return "bg-emerald-600 text-white";
    if (p.startsWith("/ouyou")) return "bg-amber-500 text-white";
    return "bg-violet-600 text-white";
});

const sideSpace = computed(() => Math.max(0, (viewportWidth.value - 896) / 2)); // 896px = max-w-4xl
const canShowSidebar = computed(() => sideSpace.value >= 170);
const sidebarWidth = computed(() => {
    const available = sideSpace.value - 14; // 右側マージンぶん
    return Math.max(0, Math.min(204, available)); // 最大12.75rem
});
const sidebarRight = computed(() => {
    return Math.max(8, (sideSpace.value - sidebarWidth.value) / 2);
});

const updateNavScale = () => {
    const node = navRef.value;
    if (!node) return;
    const topOffset = 96; // ヘッダー回避
    const bottomMargin = 20;
    const available = window.innerHeight - topOffset - bottomMargin;
    const required = node.scrollHeight;
    if (required <= available) {
        navScale.value = 1;
        return;
    }
    navScale.value = Math.max(0.78, available / required);
};

onMounted(() => {
    const footer = document.querySelector("footer");
    if (footer) {
        footerObserver = new IntersectionObserver(
            (entries) => {
                hideOnFooter.value = entries.some((entry) => entry.isIntersecting);
            },
            {
                root: null,
                threshold: 0.35,
            },
        );

        footerObserver.observe(footer);
    }
    nextTick(updateNavScale);
    resizeHandler = () => {
        viewportWidth.value = window.innerWidth;
        updateNavScale();
    };
    window.addEventListener("resize", resizeHandler);
});

onBeforeUnmount(() => {
    if (!footerObserver) return;
    footerObserver.disconnect();
    footerObserver = null;
    if (resizeHandler) {
        window.removeEventListener("resize", resizeHandler);
        resizeHandler = null;
    }
});

watch(block, () => {
    nextTick(updateNavScale);
});
</script>

<template>
    <aside
        ref="navRef"
        v-if="block && !hideOnFooter && canShowSidebar"
        class="fixed top-24 z-30 hidden origin-top rounded-xl border border-gray-200 bg-white/95 p-1.5 shadow-lg backdrop-blur xl:block 2xl:p-2"
        :style="{
            right: `${sidebarRight}px`,
            width: `${sidebarWidth}px`,
            transform: `scale(${navScale})`,
        }"
    >
        <p class="mb-1 px-1 text-center text-[11px] font-bold tracking-wide text-gray-500 2xl:text-xs">{{ block.title }}</p>
        <div class="grid gap-1">
            <div
                v-for="group in block.groups"
                :key="group.heading"
                class="rounded-md border border-gray-100 bg-gray-50 p-1"
            >
                <p class="mb-1 px-1 text-center text-[10px] font-bold text-gray-500">{{ group.heading }}</p>
                <div class="grid gap-1" :class="navColsClass(group.links.length)">
                    <a
                        v-for="item in group.links"
                        :key="item.href"
                        :href="item.href"
                        class="rounded px-1 py-1.5 text-center text-[10px] font-semibold leading-none transition xl:px-1 xl:py-1.5"
                        :class="item.active ? activeButtonClass : 'bg-white text-gray-600 ring-1 ring-gray-200 hover:bg-gray-100'"
                    >
                        {{ compactLabel(item.label) }}
                    </a>
                </div>
            </div>
        </div>
    </aside>
</template>
