<script setup lang="ts">
import { onMounted } from "vue";

const props = defineProps({
    adSlot: {
        type: String,
        required: true,
    },
    format: {
        type: String,
        default: "auto",
    },
    fullWidthResponsive: {
        type: Boolean,
        default: true,
    },
});

const isProd = import.meta.env.PROD;
const showPlaceholder = true; // デバッグ用：常に表示

onMounted(() => {
    if (!isProd) return;
    // AdSense script is loaded in app.blade.php for non-premium users.
    if (typeof window === "undefined") return;
    const w = window as unknown as { adsbygoogle?: unknown[] };
    w.adsbygoogle = w.adsbygoogle || [];
    try {
        w.adsbygoogle.push({});
    } catch (_) {
        // ignore runtime ad fill errors
    }
});
</script>

<template>
    <ins
        v-if="isProd && !showPlaceholder"
        class="adsbygoogle"
        style="display: block"
        data-ad-client="ca-pub-5875099458010785"
        :data-ad-slot="props.adSlot"
        :data-ad-format="props.format"
        :data-full-width-responsive="props.fullWidthResponsive ? 'true' : 'false'"
    ></ins>
    <div
        v-if="showPlaceholder"
        class="flex items-center justify-center rounded border border-dashed border-yellow-400 bg-yellow-50 py-3 text-xs text-yellow-600"
    >
        [広告] slot: {{ props.adSlot }}
    </div>
</template>
