<script setup lang="ts">
import { computed } from "vue";
import { usePage } from "@inertiajs/vue3";

type LinkItem = { label: string; href: string; active: boolean };
type Group = { heading: string; links: LinkItem[] };

const page = usePage();
const path = computed(() => String(page.url ?? "").split("?")[0]);

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

    const ippan = p.match(/^\/ippan\/(\d{4})-(1-6|7-12)-([a-e])$/i);
    if (ippan) {
        const year = ippan[1];
        const period = ippan[2];
        const form = ippan[3].toLowerCase();
        const current = `${year}-${period}-${form}`;
        const groups = [
            {
                heading: `${year} 1-6月`,
                links: ["a", "b", "c", "d", "e"].map((f) => ({
                    label: `フォーム${f.toUpperCase()}`,
                    href: `/ippan/${year}-1-6-${f}`,
                    active: `${year}-1-6-${f}` === current,
                })),
            },
            {
                heading: `${year} 7-12月`,
                links: ["a", "b", "c", "d", "e"].map((f) => ({
                    label: `フォーム${f.toUpperCase()}`,
                    href: `/ippan/${year}-7-12-${f}`,
                    active: `${year}-7-12-${f}` === current,
                })),
            },
        ];
        return { title: "一般課程", groups };
    }

    const senmon = p.match(/^\/senmon\/(\d{4})-(h[12])-([a-d])$/i);
    if (senmon) {
        const year = senmon[1];
        const period = senmon[2].toLowerCase();
        const form = senmon[3].toLowerCase();
        const current = `${year}-${period}-${form}`;
        const groups = [
            {
                heading: `${year} 前半`,
                links: ["a", "b"].map((f) => ({
                    label: `フォーム${f.toUpperCase()}`,
                    href: `/senmon/${year}-h1-${f}`,
                    active: `${year}-h1-${f}` === current,
                })),
            },
            {
                heading: `${year} 後半`,
                links: ["a", "b", "c", "d"].map((f) => ({
                    label: `フォーム${f.toUpperCase()}`,
                    href: `/senmon/${year}-h2-${f}`,
                    active: `${year}-h2-${f}` === current,
                })),
            },
        ];
        return { title: "専門課程", groups };
    }

    const ouyou = p.match(/^\/ouyou\/(\d{4})-(h[12])-([a-d])$/i);
    if (ouyou) {
        const year = ouyou[1];
        const period = ouyou[2].toLowerCase();
        const form = ouyou[3].toLowerCase();
        const current = `${year}-${period}-${form}`;
        const groups = [
            {
                heading: `${year} 前半`,
                links: ["a", "b"].map((f) => ({
                    label: `フォーム${f.toUpperCase()}`,
                    href: `/ouyou/${year}-h1-${f}`,
                    active: `${year}-h1-${f}` === current,
                })),
            },
            {
                heading: `${year} 後半`,
                links: ["a", "b", "c", "d"].map((f) => ({
                    label: `フォーム${f.toUpperCase()}`,
                    href: `/ouyou/${year}-h2-${f}`,
                    active: `${year}-h2-${f}` === current,
                })),
            },
        ];
        return { title: "応用課程", groups };
    }

    return null;
});
</script>

<template>
    <aside
        v-if="block"
        class="fixed right-[max(0.75rem,calc((100vw-56rem)/4-3.5rem))] top-1/2 z-30 hidden max-h-[74vh] w-40 -translate-y-1/2 overflow-y-auto rounded-xl border border-gray-200 bg-white/95 p-2.5 shadow-lg backdrop-blur xl:block"
    >
        <p class="mb-1.5 px-1 text-[11px] font-bold tracking-wide text-gray-500">{{ block.title }}</p>
        <div class="grid gap-1.5">
            <div
                v-for="group in block.groups"
                :key="group.heading"
                class="rounded-md border border-gray-100 bg-gray-50 p-1"
            >
                <p class="mb-1 px-1 text-[11px] font-bold text-gray-500">{{ group.heading }}</p>
                <div class="grid gap-1">
                    <a
                        v-for="item in group.links"
                        :key="item.href"
                        :href="item.href"
                        class="rounded px-1.5 py-1.5 text-center text-xs font-semibold transition"
                        :class="item.active ? 'bg-violet-600 text-white' : 'bg-white text-gray-600 ring-1 ring-gray-200 hover:bg-gray-100'"
                    >
                        {{ item.label }}
                    </a>
                </div>
            </div>
        </div>
    </aside>
</template>
