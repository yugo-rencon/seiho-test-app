<template>
  <div v-if="normalizedItems.length" class="mt-4 mb-3 rounded-md border border-gray-50 bg-transparent px-2 py-2">
    <p class="text-[10px] font-semibold text-blue-700">【{{ title }}】</p>
    <div class="mt-2 flex flex-wrap gap-1.5 sm:gap-2">
      <template v-for="(item, index) in visibleDisplayItems" :key="index">
        <a
          v-if="item.href"
          :href="item.href"
          class="inline-flex items-center rounded-full border border-blue-200 bg-white px-1.5 py-0.5 text-[10px] font-medium text-gray-600 transition hover:border-blue-300 hover:text-gray-800"
        >
          {{ item.label }}
        </a>
        <span
          v-else
          class="inline-flex items-center rounded-full border border-gray-200 bg-white px-1.5 py-0.5 text-[10px] font-medium text-gray-500"
        >
          {{ item.label }}
        </span>
      </template>
    </div>
    <button
      v-if="hiddenCount > 0 && !isExpanded"
      type="button"
      class="mt-2 text-[10px] font-medium text-gray-500 underline hover:text-gray-700"
      @click="isExpanded = true"
    >
      + 他{{ hiddenCount }}件（もっと見る）
    </button>
    <button
      v-if="hiddenCount > 0 && isExpanded"
      type="button"
      class="mt-2 text-[10px] font-medium text-gray-500 underline hover:text-gray-700"
      @click="isExpanded = false"
    >
      閉じる
    </button>
  </div>
</template>

<script setup lang="ts">
import { computed, onBeforeUnmount, onMounted, ref } from "vue";
import { usePage } from "@inertiajs/vue3";
import { getPaywallStartQuestion, hasPremiumAccess, isPaidYear } from "@/utils/paywall";

type RelatedProblem = {
  label?: string;
  href?: string;
  code?: string;
};

const props = defineProps({
  title: {
    type: String,
    default: "関連問題",
  },
  isDaigaku: {
    type: Boolean,
    default: false,
  },
  contextTitle: {
    type: String,
    default: "",
  },
  currentQuestionNumber: {
    type: [Number, String],
    default: null,
  },
  items: {
    type: Array as () => Array<RelatedProblem | string>,
    default: () => [],
  },
});

const page = usePage();
const isExpanded = ref(false);
const isMobile = ref(false);
let mediaQuery: MediaQueryList | null = null;

const updateIsMobile = () => {
  if (typeof window === "undefined") return;
  isMobile.value = window.matchMedia("(max-width: 639px)").matches;
};

onMounted(() => {
  if (typeof window === "undefined") return;
  mediaQuery = window.matchMedia("(max-width: 639px)");
  updateIsMobile();
  mediaQuery.addEventListener("change", updateIsMobile);
});

onBeforeUnmount(() => {
  mediaQuery?.removeEventListener("change", updateIsMobile);
});
const currentPath = computed(() => {
  let raw = String(page.url ?? "");

  if (typeof window !== "undefined" && window.location?.pathname) {
    raw = window.location.pathname;
  }

  if (/^https?:\/\//i.test(raw)) {
    try {
      raw = new URL(raw).pathname;
    } catch {
      // no-op: fallback to raw value
    }
  }

  raw = raw.split("?")[0].split("#")[0].trim();
  if (raw === "") return "";
  if (!raw.startsWith("/")) raw = `/${raw}`;

  return raw.length > 1 ? raw.replace(/\/+$/, "") : raw;
});

const currentPageCode = computed(() => {
  const question = Number(props.currentQuestionNumber);
  if (!Number.isFinite(question) || question <= 0) return "";

  const daigakuMatched = currentPath.value.match(/^\/daigaku\/([a-z-]+)(\d{4})([abc])\/?$/i);
  if (daigakuMatched) {
    return `${daigakuMatched[2]}${daigakuMatched[3].toLowerCase()}${question}`;
  }

  const seihoMatched = currentPath.value.match(/^\/([a-z]+)(\d{4})([abc])\/?$/i);
  if (seihoMatched) {
    return `${seihoMatched[2]}${seihoMatched[3].toLowerCase()}${question}`;
  }

  return "";
});

const toHalfWidth = (value: string) =>
  value.replace(/[０-９Ａ-Ｚａ-ｚ]/g, (char) =>
    String.fromCharCode(char.charCodeAt(0) - 0xfee0),
  );

const parseCode = (value: string) => {
  const normalized = toHalfWidth(String(value ?? "")).replace(/\s+/g, "");
  const matched = normalized.match(/^(\d{4})([abc])(\d+)$/i);
  if (!matched) return null;
  return {
    year: matched[1],
    form: matched[2].toUpperCase(),
    question: String(Number(matched[3])),
  };
};

const buildHrefFromCode = (code: string) => {
  const parsed = parseCode(code);
  if (!parsed) return "";

  const targetSubject = `${parsed.year}年度 フォーム${parsed.form}`;
  const lockedContext = !hasPremiumAccess(page.props) && isPaidYear(targetSubject, props.contextTitle);
  const paywallStartQuestion = getPaywallStartQuestion(props.contextTitle);
  const targetHash = lockedContext && Number(parsed.question) >= paywallStartQuestion
    ? "#paywall"
    : `#q${parsed.question}`;

  const daigakuMatched = currentPath.value.match(/^\/daigaku\/([a-z-]+)\d{4}[abc]\/?$/i);
  if (daigakuMatched) {
    const subjectPrefix = daigakuMatched[1];
    return `/daigaku/${subjectPrefix}${parsed.year}${parsed.form.toLowerCase()}${targetHash}`;
  }

  const seihoMatched = currentPath.value.match(/^\/([a-z]+)\d{4}[abc]\/?$/i);
  if (seihoMatched) {
    const subjectPrefix = seihoMatched[1];
    return `/${subjectPrefix}${parsed.year}${parsed.form.toLowerCase()}${targetHash}`;
  }

  return "";
};

const normalizedItems = computed(() =>
  (props.items ?? [])
    .map((rawItem) => {
      if (typeof rawItem === "string") {
        const parsed = parseCode(rawItem);
        if (parsed) {
          return {
            label: `${parsed.year}年${parsed.form}問${parsed.question}`,
            href: buildHrefFromCode(rawItem),
          };
        }
        return {
          label: String(rawItem).trim(),
          href: "",
        };
      }

      const code = String(rawItem?.code ?? "").trim();
      if (code) {
        const parsed = parseCode(code);
        if (parsed) {
          return {
            label: rawItem?.label
              ? String(rawItem.label).trim()
              : `${parsed.year}年${parsed.form}問${parsed.question}`,
            href: rawItem?.href ? String(rawItem.href) : buildHrefFromCode(code),
          };
        }
      }

      return {
        label: String(rawItem?.label ?? "").trim(),
        href: rawItem?.href ? String(rawItem.href) : "",
      };
    })
    .filter((item) => item.label !== "")
    .filter((item) => {
      const normalized = toHalfWidth(String(item.label ?? "")).replace(/\s+/g, "");
      const matched = normalized.match(/^(\d{4})年?([ABC])問?(\d+)$/i);
      if (!matched) return true;

      const itemCode = `${matched[1]}${matched[2].toLowerCase()}${String(Number(matched[3]))}`;
      return itemCode !== currentPageCode.value;
    }),
);

const parsedItems = computed(() =>
  normalizedItems.value.map((item) => {
    const normalized = toHalfWidth(item.label).replace(/\s+/g, "");
    const matched = normalized.match(/^(\d{4})年?([ABC])問?(\d+)$/i);
    if (!matched) return null;
    return {
      year: matched[1],
      form: matched[2].toUpperCase(),
      question: String(Number(matched[3])),
      href: item.href,
    };
  }),
);

const groupedByYear = computed(() => {
  if (parsedItems.value.some((item) => item === null)) return [];

  const groups = new Map<string, Array<{ form: string; question: string; href: string }>>();
  for (const item of parsedItems.value) {
    if (!item) continue;
    if (!groups.has(item.year)) groups.set(item.year, []);
    groups.get(item.year)?.push({
      form: item.form,
      question: item.question,
      href: item.href,
    });
  }

  return Array.from(groups.entries()).map(([year, items]) => ({ year, items }));
});

const displayItems = computed(() => {
  if (groupedByYear.value.length > 0) {
    return groupedByYear.value.flatMap((group) =>
      group.items.map((item) => ({
        label: `${group.year}年${item.form}問${item.question}`,
        href: item.href,
      })),
    );
  }

  return normalizedItems.value;
});

const hiddenCount = computed(() =>
  Math.max(0, displayItems.value.length - maxVisibleCount.value),
);

const maxVisibleCount = computed(() => (isMobile.value ? 3 : 5));

const visibleDisplayItems = computed(() =>
  isExpanded.value ? displayItems.value : displayItems.value.slice(0, maxVisibleCount.value),
);

</script>
