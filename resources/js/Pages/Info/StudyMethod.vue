<script setup>
import { Head, Link } from "@inertiajs/vue3";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const updatedAt = "2026年2月14日";

const overviewCards = [
  { label: "対象", value: "生命保険講座 8科目" },
  { label: "試験形式", value: "CBT（会場PC受験）" },
  { label: "試験時間", value: "1科目 80分" },
  { label: "合格目安", value: "60〜70点（会社基準）" },
];

const subjects = [
  { name: "生命保険総論", note: "生命保険の基礎と制度全体の理解" },
  { name: "生命保険計理", note: "生命保険の引受と医学査定" },
  { name: "危険選択", note: "資産運用の基本と金融市場" },
  { name: "約款と法律", note: "保険数理・責任準備金の考え方" },
  { name: "生命保険会計", note: "契約条項と法的ルールの整理" },
  { name: "生命保険商品と営業", note: "保険会社の会計処理と財務理解" },
  { name: "生命保険と税法", note: "税法と保険商品への適用" },
  { name: "資産の運用", note: "関連法令と実務上の留意点" },
];

const studySteps = [
  {
    title: "テキストを一覧で確認",
    text: "まずは全体像をつかむために、科目ごとの出題傾向を確認します。最初に細部へ入りすぎないことが重要です。",
  },
  {
    title: "過去問を解く（1周目）",
    text: "年度やフォームを跨いで、まずは解答の感覚を作ります。正答率よりも『何が問われるか』を把握するフェーズです。",
  },
  {
    title: "間違えた問題を整理",
    text: "理由を必ずメモ化し、同じミスを繰り返さない仕組みを作ります。ノートは短く、見返しやすくまとめます。",
  },
  {
    title: "過去問を解く（2〜3周目）",
    text: "弱点に寄せて解き直し、解答スピードと精度を上げます。直前は誤答履歴だけを回すと効率的です。",
  },
  {
    title: "最終確認",
    text: "試験前日は新規学習を増やさず、頻出論点と苦手分野の最終確認に絞ります。体調管理も得点戦略です。",
  },
];

const tips = [
  { title: "大きな学習単位を避ける", text: "1回30分など短時間ブロックに分割し、継続を優先する。小分けの学習で習慣化しやすくなります。" },
  { title: "時間を固定する", text: "朝・昼・夜のどこでやるかを固定すると迷いが減ります。判断コストを削ることが継続に直結します。" },
  { title: "誤答だけを再演習", text: "正解済み問題より誤答問題を重点化。得点への寄与が高い箇所へ学習時間を集中させます。" },
  { title: "スキマ時間を活用", text: "移動時間などで用語の確認を行う。短時間でも積み上げれば復習サイクルが安定します。" },
  { title: "デバイスを使い分ける", text: "PCで演習、スマホで復習など役割を分けると効率が上がります。場所に合わせた学習設計が有効です。" },
  { title: "ノートは最小限", text: "要点と誤答理由だけを記録。長文よりも再読しやすい形にして実用性を優先します。" },
];
</script>

<template>
  <SeihoTestLayout title="勉強法">
    <Head title="勉強法" />

    <div>
      <section class="bg-white border-b border-gray-100">
        <div class="container mx-auto max-w-5xl px-5 sm:px-6 py-14 sm:py-20">
          <p class="text-xs font-bold tracking-widest text-purple-600 uppercase">
            EXAM GUIDE
          </p>
          <h1 class="mt-3 text-3xl font-bold text-gray-900 sm:text-4xl">
            生命保険講座 勉強法
          </h1>
          <p class="mt-5 max-w-3xl text-base sm:text-lg text-gray-600 leading-relaxed">
            生命保険講座の試験構成と学習手順を整理しました。効率よく学習を進めるための、実践しやすい型をまとめています。
          </p>
        </div>
      </section>

      <section class="bg-gray-50">
        <div class="container mx-auto max-w-5xl px-5 sm:px-6 py-14 sm:py-16">
          <p class="text-xs font-semibold tracking-[0.16em] text-purple-600">
            OVERVIEW
          </p>
          <h2 class="mt-2 text-2xl font-bold text-gray-900 sm:text-3xl">
            試験の概要
          </h2>
          <p class="mt-3 max-w-3xl text-sm leading-relaxed text-gray-600 sm:text-base">
            生命保険講座は、生命保険業務の高度な理解を問う社内試験です。科目単位での理解と、継続的な過去問演習の組み合わせが合格の近道です。
          </p>

          <div class="mt-7 grid gap-3 sm:grid-cols-2 lg:grid-cols-4">
            <div
              v-for="card in overviewCards"
              :key="card.label"
              class="rounded-xl border border-gray-200 bg-white px-4 py-4"
            >
              <p class="text-xs font-semibold text-purple-600">{{ card.label }}</p>
              <p class="mt-1 text-sm font-semibold text-gray-900">{{ card.value }}</p>
            </div>
          </div>

          <div class="mt-8 overflow-hidden rounded-xl border border-gray-200">
            <table class="w-full text-left text-sm">
              <thead class="bg-[#f5f2fb] text-gray-700">
                <tr>
                  <th class="px-4 py-3 font-semibold">科目名</th>
                  <th class="px-4 py-3 font-semibold">内容</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-100 bg-white">
                <tr v-for="subject in subjects" :key="subject.name">
                  <td class="px-4 py-3 font-semibold text-gray-900">{{ subject.name }}</td>
                  <td class="px-4 py-3 text-gray-600">{{ subject.note }}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>

      <section class="bg-white border-y border-gray-100">
        <div class="container mx-auto max-w-5xl px-5 sm:px-6 py-14 sm:py-16">
          <p class="text-xs font-semibold tracking-[0.16em] text-purple-600">
            STUDY METHOD
          </p>
          <h2 class="mt-2 text-2xl font-bold text-gray-900 sm:text-3xl">
            おすすめの勉強法
          </h2>
          <p class="mt-3 max-w-3xl text-sm leading-relaxed text-gray-600 sm:text-base">
            過去問を軸にした5ステップで学習を設計します。重要なのは、復習のタイミングまで含めて運用することです。
          </p>

          <div class="mt-8 space-y-5">
            <div
              v-for="(step, index) in studySteps"
              :key="step.title"
              class="flex gap-4 rounded-xl border border-gray-200 bg-white p-5"
            >
              <div class="mt-0.5 flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-purple-600 text-xs font-bold text-white">
                {{ String(index + 1).padStart(2, "0") }}
              </div>
              <div>
                <p class="text-base font-semibold text-gray-900">{{ step.title }}</p>
                <p class="mt-1 text-sm leading-relaxed text-gray-600">{{ step.text }}</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="bg-gray-50">
        <div class="container mx-auto max-w-5xl px-5 sm:px-6 py-14 sm:py-16">
          <p class="text-xs font-semibold tracking-[0.16em] text-purple-600">
            TIPS
          </p>
          <h2 class="mt-2 text-2xl font-bold text-gray-900 sm:text-3xl">
            合格のためのポイント
          </h2>

          <div class="mt-7 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <div
              v-for="tip in tips"
              :key="tip.title"
              class="rounded-xl border border-gray-200 bg-[#fcfbff] p-5"
            >
              <p class="text-sm font-semibold text-gray-900">{{ tip.title }}</p>
              <p class="mt-2 text-sm leading-relaxed text-gray-600">{{ tip.text }}</p>
            </div>
          </div>
        </div>
      </section>

      <section class="bg-gray-900">
        <div class="container mx-auto max-w-5xl px-5 sm:px-6 py-14 sm:py-16 text-center">
          <h2 class="text-2xl font-bold text-white sm:text-3xl">
            さっそく過去問に取り組みましょう
          </h2>
          <p class="mx-auto mt-3 max-w-2xl text-sm leading-relaxed text-white/80 sm:text-base">
            理解が浅い領域を見つけて、効率よく得点力へつなげるために、まずは解説一覧から演習を始めてください。
          </p>

          <div class="mt-7 flex flex-wrap items-center justify-center gap-3">
            <Link
              :href="route('tests.index')"
              class="inline-flex items-center rounded-full bg-white px-6 py-3 text-sm font-semibold text-[#4f3a96] transition hover:bg-purple-50"
            >
              解説一覧を見る
            </Link>
            <Link
              :href="route('updateInfo')"
              class="inline-flex items-center rounded-full border border-white/30 px-6 py-3 text-sm font-semibold text-white transition hover:bg-white/10"
            >
              更新履歴を見る
            </Link>
          </div>

          <p class="mt-6 text-xs text-white/60">最終更新：{{ updatedAt }}</p>
        </div>
      </section>
    </div>
  </SeihoTestLayout>
</template>
