<template>
    <div :id="`q${props.questionNumber}`" class="h-0 scroll-mt-24"></div>
    <div v-if="showAdBeforeQuestion21" class="mt-2 rounded-lg bg-white p-2 shadow-sm">
        <AdSenseUnit ad-slot="8570892917" />
    </div>
    <div v-if="!shouldHideByPaywall" class="bg-white px-6 py-3 border border-gray-300 rounded-lg shadow-sm md:shadow-md">
        <div class="flex items-start gap-2 my-4">
            <div
                class="w-1.5 h-6 rounded-full"
                :class="isDaigaku ? 'bg-gradient-to-b from-blue-400 to-cyan-400' : 'bg-gradient-to-b from-purple-400 to-blue-400'"
            ></div>
            <h2 class="text-base font-bold leading-tight text-gray-700">
                <span class="mr-2 inline-block whitespace-nowrap">問題{{ props.questionNumber }}</span>
                <span v-if="props.questionTitle">
                    {{ props.questionTitle }}
                </span>
            </h2>
        </div>
        <p v-if="props.note" class="mb-3 text-sm text-gray-500">
            {{ props.note }}
        </p>

        <div class="grid gap-2">
            <div v-for="(content, index) in props.contents" :key="index" class="grid gap-2 text-sm leading-6 text-gray-800 select-none md:text-[15px] grid-cols-[2em_1fr]">
                <span class="font-semibold">{{ getLabel(index) }}：</span>
                <p v-html="formatContentHtml(content)"></p>
            </div>
        </div>
        <RelatedProblems
            :items="props.relatedProblems"
            :is-daigaku="isDaigaku"
            :context-title="props.title"
            :current-question-number="props.questionNumber"
        />
        <div class="flex justify-end text-gray-400 text-xxs lg:text-xs">
            {{ props.title }}
        </div>
        <div class="flex justify-end text-gray-400 text-xxs lg:text-xs">
            {{ props.subject }}
        </div>
    </div>
    <PaywallNotice v-else-if="shouldShowPaywallNotice" />
</template>

<script setup lang="ts">
import { computed, ref } from "vue";
import { usePage } from "@inertiajs/vue3";
import PaywallNotice from "./PaywallNotice.vue";
import AdSenseUnit from "./AdSenseUnit.vue";
import RelatedProblems from "./RelatedProblems.vue";
import { getPaywallStartQuestion, hasPremiumAccess, isPaidYear } from "@/utils/paywall";

const props = defineProps({
    questionNumber: {
        type: [Number, String],
        required: true,
    },
    questionTitle: {
        type: String,
        default: "",
    },
    contents: {
        type: Array,
        required: true,
    },
    title: {
        type: String,
        default: "",
    },
    subject: {
        type: String,
        default: "",
    },
    note: {
        type: String,
        default: "",
    },
    relatedProblems: {
        type: Array,
        default: () => [],
    },
});
const labels = ref(["ア", "イ", "ウ", "エ"]);

const page = usePage();
const isDaigaku = computed(() => String(page.url ?? "").startsWith("/daigaku"));

const paywallStartQuestion = computed(() => getPaywallStartQuestion(props.title));

const shouldHideByPaywall = computed(() => {
    const isPaid = isPaidYear(props.subject, props.title);
    const isUnlocked = hasPremiumAccess(page.props);
    return isPaid && !isUnlocked && Number(props.questionNumber) >= paywallStartQuestion.value;
});

const shouldShowPaywallNotice = computed(() => {
    return shouldHideByPaywall.value && Number(props.questionNumber) === paywallStartQuestion.value;
});

const showAdBeforeQuestion21 = computed(() => {
    return !hasPremiumAccess(page.props) && Number(props.questionNumber) === 21;
});

const getLabel = (index: number): string => {
    return labels.value[index] ?? `${index + 1}`;
};

const formatContentHtml = (value: unknown): string => {
    const raw = String(value ?? "");
    return raw.replace(/↔︎|↔|←→|⇔/g, " <strong>⇔</strong> ");
};
</script>
