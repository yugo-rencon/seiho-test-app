<script setup lang="ts">
import { Link, usePage } from "@inertiajs/vue3";
import { computed } from "vue";

const page = usePage();
const isPurchaseEnabled = computed(
    () => page.props.features?.premiumPurchaseEnabled === true,
);
const pricingHref = computed(() =>
    route("pricing", { return_to: page.url }),
);
</script>

<script lang="ts">
export default {
    name: "PaywallNotice",
};
</script>

<template>
    <div class="relative mt-0">
        <div class="rounded-2xl border-t border-purple-200 bg-[#f9f6ff] p-6 text-center">
            <div class="text-sm font-semibold text-purple-700">ここから先はプレミアム解説です</div>
            <!-- <div class="mx-auto mt-3 w-fit space-y-1 text-left text-[12px] text-gray-700">
                <div>✔ 1,980円（全8科目・4年度分 / 買い切り）</div>
                <div>✔ 一度の購入で追加料金なし、無期限で利用可能</div>
                <div>✔ 今後追加される最新年度も閲覧可能</div>
            </div>
            <div class="mt-3 text-[11px] text-gray-500">
                ※過去数年からの再出題が見られるため、複数年度の演習を推奨しています。
            </div> -->
            <div class="mt-4 flex justify-center">
                <Link
                    v-if="isPurchaseEnabled"
                    :href="pricingHref"
                    class="inline-flex items-center gap-2 rounded-full bg-purple-600 px-6 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-purple-500 transition"
                >
                    合格に向けて全解説を解放する
                </Link>
                <button
                    v-else
                    type="button"
                    disabled
                    class="inline-flex cursor-not-allowed items-center gap-2 rounded-full border border-purple-200 bg-purple-50 px-6 py-2.5 text-sm font-semibold text-purple-700"
                >
                    プレミアム機能は現在準備中です。4月より正式リリース予定です。
                </button>
            </div>
        </div>
    </div>
</template>
