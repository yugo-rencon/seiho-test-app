<script setup lang="ts">
import { onMounted } from "vue";

const props = defineProps({
    slot: {
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

onMounted(() => {
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
        class="adsbygoogle"
        style="display: block"
        data-ad-client="ca-pub-5875099458010785"
        :data-ad-slot="props.slot"
        :data-ad-format="props.format"
        :data-full-width-responsive="props.fullWidthResponsive ? 'true' : 'false'"
    ></ins>
</template>
