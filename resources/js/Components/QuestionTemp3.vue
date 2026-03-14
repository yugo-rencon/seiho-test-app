<template>
    <div
        v-if="!shouldHideByPaywall"
        class="bg-white px-6 py-3 border border-gray-300 rounded-lg shadow-md"
    >

        <!-- 問題番号 -->
        <div class="flex items-start gap-2 my-4">
            <div class="w-1.5 h-6 bg-gradient-to-b from-purple-400 to-blue-400 rounded-full"></div>
            <h2 class="text-base font-bold leading-tight text-gray-700">
                <span class="mr-2 inline-block whitespace-nowrap">問題{{ getQuestionRange(props.questionNumber) }}</span>
                <span v-if="props.questionTitle">
                    {{ props.questionTitle }}
                </span>
            </h2>
        </div>
        <p v-if="props.note" class="mb-3 text-sm text-gray-500">
            {{ props.note }}
        </p>

      <div class="grid gap-2">
        <div v-for="(content, index) in props.contents" :key="index"
             class="grid gap-2 text-sm leading-6 text-gray-700 select-none md:text-[15px] grid-cols-[2em_1fr]">
          <span class="font-semibold">{{ props.labels[index] }}：</span>
          <p>{{ content }}</p>
        </div>
      </div>
      <div class="flex justify-end text-xs text-gray-400 md:text-sm">
        {{ props.title }}
      </div>
      <div class="flex justify-end text-xs text-gray-400 md:text-sm">
        {{ props.subject }}
      </div>
    </div>
    <PaywallNotice v-else-if="shouldShowPaywallNotice" />
</template>

<script setup lang="ts">
    import { computed } from "vue";
    import { usePage } from "@inertiajs/vue3";
    import PaywallNotice from "./PaywallNotice.vue";
    import { getPaywallStartQuestion, hasPremiumAccess, isPaidYear } from "@/utils/paywall";

    const props = defineProps({
        questionNumber: {
            type: Number,
            required: true,
        },
        questionTitle: {
            type: String,
            default: '',
        },
        contents: {
            type: Array,
            required: true,
        },
        labels: {
            type: Array,
            required: true,
        },
        title: {
            type: String,
            default: '',
        },
        subject: {
            type: String,
            default: '',
        },
        note: {
            type: String,
            default: '',
        },
    })

    const page = usePage();

    const paywallStartQuestion = computed(() => getPaywallStartQuestion(props.title));

    const blockStartQuestion = computed(() => {
        return (Number(props.questionNumber) - 1) * 5 + 1;
    });

    const blockEndQuestion = computed(() => {
        return blockStartQuestion.value + 4;
    });

    const shouldHideByPaywall = computed(() => {
        const isPaid = isPaidYear(props.subject, props.title);
        const isUnlocked = hasPremiumAccess(page.props);
        return (
            isPaid &&
            !isUnlocked &&
            blockStartQuestion.value >= paywallStartQuestion.value
        );
    });

    const shouldShowPaywallNotice = computed(() => {
        if (!shouldHideByPaywall.value) return false;
        return (
            paywallStartQuestion.value >= blockStartQuestion.value &&
            paywallStartQuestion.value <= blockEndQuestion.value
        );
    });

    function getQuestionRange(questionNumber) {
        switch (questionNumber) {
            case 1:
                return "1〜5";
            case 2:
                return "6〜10";
            case 3:
                return "11〜15";
            default:
                return "16〜20";
        }
    }

</script>
