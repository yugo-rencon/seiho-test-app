<template>
  <div v-if="shouldRender" class="mt-4 mb-3 rounded-md border border-gray-50 bg-transparent px-2 py-2">
    <p class="text-[10px] font-semibold" :class="titleClass">【{{ displayTitle }}】</p>
    <div v-if="displayItems.length" class="mt-2 flex flex-wrap gap-1.5 sm:gap-2">
      <template v-for="(item, index) in visibleDisplayItems" :key="index">
        <a
          v-if="item.href"
          :href="item.href"
          class="inline-flex items-center rounded-full border bg-white px-1.5 py-0.5 text-[10px] font-medium text-gray-600 transition hover:text-gray-800"
          :class="linkTagClass"
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
    <p v-else class="mt-2 text-[10px] text-gray-500">
      {{ displayTitle }}はありません
    </p>
    <button
      v-if="displayItems.length && hiddenCount > 0 && !isExpanded"
      type="button"
      class="mt-2 text-[10px] font-medium text-gray-500 underline hover:text-gray-700"
      @click="isExpanded = true"
    >
      + 他{{ hiddenCount }}件（もっと見る）
    </button>
    <button
      v-if="displayItems.length && hiddenCount > 0 && isExpanded"
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
    default: "",
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
const isDaigakuPage = computed(() => String(page.url ?? "").startsWith("/daigaku"));
const isSenmonPage = computed(() => String(page.url ?? "").startsWith("/senmon"));
const isOuyouPage = computed(() => String(page.url ?? "").startsWith("/ouyou"));
const isIppanPage = computed(() => String(page.url ?? "").startsWith("/ippan"));
const displayTitle = computed(() => {
  const givenTitle = String(props.title ?? "").trim();
  if (givenTitle.includes("年度")) return givenTitle;

  const fromContext = String(props.contextTitle ?? "").match(/(20\d{2})/);
  if (fromContext?.[1]) return `${fromContext[1]}年度の関連問題`;

  const fromPath = currentPath.value.match(/20\d{2}/);
  if (fromPath?.[0]) return `${fromPath[0]}年度の関連問題`;

  return givenTitle || "同年度の関連問題";
});
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

const currentPageMeta = computed(() => {
  const code = currentPageCode.value;
  const parsed = parseCode(code);
  return parsed
    ? { year: parsed.year, form: parsed.form, question: parsed.question }
    : null;
});

const toHalfWidth = (value: string) =>
  value.replace(/[０-９Ａ-Ｚａ-ｚ]/g, (char) =>
    String.fromCharCode(char.charCodeAt(0) - 0xfee0),
  );

const toFullWidthDigits = (value: string | number) =>
  String(value).replace(/[0-9]/g, (char) => String.fromCharCode(char.charCodeAt(0) + 0xfee0));

const formatQuestionNumber = (value: string | number) => {
  const normalized = String(Number(value));
  return normalized.length === 1 ? toFullWidthDigits(normalized) : normalized;
};

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

const normalizeRawItem = (rawItem: RelatedProblem | string) => {
  if (typeof rawItem === "string") {
    const parsed = parseCode(rawItem);
    if (parsed) {
      return {
        label: `フォーム${parsed.form}問${formatQuestionNumber(parsed.question)}`,
        href: buildHrefFromCode(rawItem),
        code: `${parsed.year}${parsed.form.toLowerCase()}${parsed.question}`,
      };
    }
    return {
      label: String(rawItem).trim(),
      href: "",
      code: "",
    };
  }

  const code = String(rawItem?.code ?? "").trim();
  if (code) {
    const parsed = parseCode(code);
    if (parsed) {
      return {
        label: rawItem?.label
          ? String(rawItem.label).trim()
          : `フォーム${parsed.form}問${formatQuestionNumber(parsed.question)}`,
        href: rawItem?.href ? String(rawItem.href) : buildHrefFromCode(code),
        code: `${parsed.year}${parsed.form.toLowerCase()}${parsed.question}`,
      };
    }
  }

  return {
    label: String(rawItem?.label ?? "").trim(),
    href: rawItem?.href ? String(rawItem.href) : "",
    code: "",
  };
};

const parseCodeFromHref = (href: string) => {
  const raw = String(href ?? "").trim();
  if (!raw) return null;
  const path = raw.split("?")[0].split("#")[0];

  const daigakuMatched = path.match(/^\/daigaku\/[a-z-]+(\d{4})([abc])\/?$/i);
  if (daigakuMatched) {
    return {
      year: daigakuMatched[1],
      form: daigakuMatched[2].toUpperCase(),
      question: "",
    };
  }

  const seihoMatched = path.match(/^\/([a-z]+)(\d{4})([abc])\/?$/i);
  if (seihoMatched) {
    return {
      year: seihoMatched[2],
      form: seihoMatched[3].toUpperCase(),
      question: "",
    };
  }

  return null;
};

const parseQuestionFromHref = (href: string) => {
  const matched = String(href ?? "").match(/#q(\d+)$/i);
  if (!matched) return "";
  return String(Number(matched[1]));
};

const parseFromLabel = (label: string) => {
  const normalized = toHalfWidth(String(label ?? "")).replace(/\s+/g, "");
  const matched = normalized.match(/^フォーム([ABC])問(\d+)$/i);
  if (!matched) return null;
  return {
    form: matched[1].toUpperCase(),
    question: String(Number(matched[2])),
  };
};

const isSelfItem = (item: { label: string; href: string; code: string }) => {
  const current = currentPageMeta.value;
  if (!current) return false;

  const codeParsed = parseCode(item.code);
  if (codeParsed) {
    return (
      codeParsed.year === current.year
      && codeParsed.form === current.form
      && codeParsed.question === current.question
    );
  }

  const hrefMeta = parseCodeFromHref(item.href);
  const hrefQuestion = parseQuestionFromHref(item.href);
  if (hrefMeta && hrefQuestion) {
    return (
      hrefMeta.year === current.year
      && hrefMeta.form === current.form
      && hrefQuestion === current.question
    );
  }

  const labelMeta = parseFromLabel(item.label);
  if (labelMeta) {
    return labelMeta.form === current.form && labelMeta.question === current.question;
  }

  return false;
};

const normalizedItemsWithSelf = computed(() =>
  (props.items ?? [])
    .map((rawItem) => normalizeRawItem(rawItem))
    .filter((item) => item.label !== ""),
);

const normalizedItems = computed(() =>
  normalizedItemsWithSelf.value
    .filter((item) => !isSelfItem(item)),
);

const hasUsableItemsInput = computed(() => normalizedItemsWithSelf.value.length > 0);

const parsedItems = computed(() =>
  normalizedItems.value.map((item) => {
    const matched = item.code.match(/^(\d{4})([abc])(\d+)$/i);
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

  const formOrder: Record<string, number> = { A: 1, B: 2, C: 3 };

  return Array.from(groups.entries()).map(([year, items]) => ({
    year,
    items: [...items].sort((a, b) => {
      const formDiff = (formOrder[a.form] ?? 99) - (formOrder[b.form] ?? 99);
      if (formDiff !== 0) return formDiff;
      return Number(a.question) - Number(b.question);
    }),
  }));
});

const displayItems = computed(() => {
  if (groupedByYear.value.length > 0) {
    return groupedByYear.value.flatMap((group) =>
      group.items.map((item) => ({
        label: `フォーム${item.form}問${formatQuestionNumber(item.question)}`,
        href: item.href,
        code: `${group.year}${item.form.toLowerCase()}${item.question}`,
      })),
    );
  }

  return normalizedItems.value;
});

const shouldRender = computed(() => (props.items ?? []).length > 0);

const hiddenCount = computed(() =>
  Math.max(0, displayItems.value.length - maxVisibleCount.value),
);

const maxVisibleCount = computed(() => 6);

const visibleDisplayItems = computed(() =>
  isExpanded.value ? displayItems.value : displayItems.value.slice(0, maxVisibleCount.value),
);

const titleClass = computed(() => {
  if (isDaigakuPage.value) return "text-blue-700";
  if (isSenmonPage.value) return "text-emerald-700";
  if (isOuyouPage.value) return "text-amber-700";
  if (isIppanPage.value) return "text-fuchsia-700";
  return "text-violet-700";
});

const linkTagClass = computed(() => {
  if (isDaigakuPage.value) return "border-blue-200 hover:border-blue-300";
  if (isSenmonPage.value) return "border-emerald-200 hover:border-emerald-300";
  if (isOuyouPage.value) return "border-amber-200 hover:border-amber-300";
  if (isIppanPage.value) return "border-pink-200 hover:border-pink-300";
  return "border-violet-200 hover:border-violet-300";
});

</script>
