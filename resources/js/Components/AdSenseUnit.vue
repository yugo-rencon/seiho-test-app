<script setup lang="ts">
import { onBeforeUnmount, onMounted, ref } from "vue";

const ADSENSE_SRC =
    "https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5875099458010785";
let adsScriptPromise: Promise<void> | null = null;

const ensureAdSenseScript = () => {
    if (typeof window === "undefined") return Promise.resolve();
    const existing = document.querySelector(
        `script[src^="${ADSENSE_SRC.split("?")[0]}"]`,
    ) as HTMLScriptElement | null;

    if (existing) {
        const w = window as unknown as { adsbygoogle?: unknown[] };
        if (Array.isArray(w.adsbygoogle)) return Promise.resolve();
        if (adsScriptPromise) return adsScriptPromise;
        adsScriptPromise = new Promise((resolve, reject) => {
            existing.addEventListener("load", () => resolve(), { once: true });
            existing.addEventListener("error", () => reject(new Error("adsense_load_failed")), {
                once: true,
            });
        });
        return adsScriptPromise;
    }

    adsScriptPromise = new Promise((resolve, reject) => {
        const script = document.createElement("script");
        script.async = true;
        script.src = ADSENSE_SRC;
        script.crossOrigin = "anonymous";
        script.addEventListener("load", () => resolve(), { once: true });
        script.addEventListener("error", () => reject(new Error("adsense_load_failed")), {
            once: true,
        });
        document.head.appendChild(script);
    });
    return adsScriptPromise;
};

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

const isProd = import.meta.env.PROD;
const adRef = ref<HTMLElement | null>(null);
const hasRequestedAd = ref(false);
let observer: IntersectionObserver | null = null;

const requestAd = () => {
    if (hasRequestedAd.value) return;
    hasRequestedAd.value = true;

    const run = () => {
        ensureAdSenseScript()
            .then(() => {
                const w = window as unknown as { adsbygoogle?: unknown[] };
                w.adsbygoogle = w.adsbygoogle || [];
                w.adsbygoogle.push({});
            })
            .catch(() => {
                // ignore runtime ad load errors
            });
    };

    if ("requestIdleCallback" in window) {
        (window as Window & {
            requestIdleCallback: (cb: () => void, opts?: { timeout: number }) => void;
        }).requestIdleCallback(run, { timeout: 2000 });
        return;
    }

    setTimeout(run, 1200);
};

onMounted(() => {
    if (!isProd) return;
    if (typeof window === "undefined") return;
    if (!adRef.value) return;

    if (!("IntersectionObserver" in window)) {
        requestAd();
        return;
    }

    observer = new IntersectionObserver(
        (entries) => {
            if (!entries.some((entry) => entry.isIntersecting)) return;
            observer?.disconnect();
            observer = null;
            requestAd();
        },
        { rootMargin: "200px 0px" },
    );
    observer.observe(adRef.value);
});

onBeforeUnmount(() => {
    observer?.disconnect();
    observer = null;
});
</script>

<template>
    <ins
        ref="adRef"
        v-if="isProd"
        class="adsbygoogle"
        style="display: block"
        data-ad-client="ca-pub-5875099458010785"
        :data-ad-slot="props.slot"
        :data-ad-format="props.format"
        :data-full-width-responsive="props.fullWidthResponsive ? 'true' : 'false'"
    ></ins>
</template>
