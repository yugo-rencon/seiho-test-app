<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "資産運用知識";
const subject = "2026年度 フォームB";
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 py-10 text-gray-800">
            <Pagetitle :title="title" :description="subject" />

            <div class="mx-auto mt-4 max-w-4xl space-y-2">
                <QuestionTemp1
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="現価と終価（６つの係数）"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="現価と終価（６つの係数）"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="現価と終価（６つの係数）"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="現価と終価（６つの係数）"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="日本の金融市場"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の売買"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の税金関係"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="分散投資"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="投資信託の分類"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="その他の金融商品"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="外貨建て金融商品の注意事項"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="預金保険制度"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融商品の特徴と税金"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="財形制度"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の発行条件"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の格付け"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="債券の取引所市場"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="市場金利と債券価格の相関関係"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="単元未満株投資（株式ミニ投資）"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="投資信託の費用"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="転換社債型新株予約権付社債（転換社債）"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="外国債券"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険・証券等の保護"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="不動産活用"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="金融政策の手段"
                    :contents="[
                        // rev: 2026-11-16 確認済み
                        '短期',
                        '上限',
                        '無',
                        '拡大',
                        '低め', // 問25〜29
                    ]"
                    :labels="[
                        'ウ', //25
                        'ケ', //26
                        'ア', //27
                        'エ', //28
                        'ク', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="株式相場指標"
                    :contents="[
                        // rev: 2026-11-16 確認済み
                        '銘柄',
                        '株式分割',
                        '225',
                        '毎年',
                        '増加', // 問30〜34
                    ]"
                    :labels="[
                        'キ', //30
                        'オ', //31
                        'ケ', //32
                        'エ', //33
                        'カ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="確定拠出年金の運用商品等"
                    :contents="[
                        // rev: 2026-11-16 確認済み
                        '加入者',
                        '確保',
                        '35',
                        '資金配分',
                        '多い', // 問35〜39
                    ]"
                    :labels="[
                        'オ', //35
                        'エ', //36
                        'イ', //37
                        'キ', //38
                        'カ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-11-16 確認済み
                            questionTitle: '物価指標',
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '金融商品の三分類',
                            content: '', //p
                        }, //41
                        {
                            // rev: 2026-11-16 確認済み
                            questionTitle: '債券の中途売却',
                            content: '正しい',
                        }, //42
                        {
                            // rev: 2026-11-16 確認済み
                            questionTitle: '配当性向',
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '株式累積投資（るいとう）',
                            content: '', //p
                        }, //44
                        {
                            questionTitle: '投資信託の運用スタイル',
                            content: '', //p
                        }, //45
                        {
                            // rev: 2026-11-16 確認済み
                            questionTitle: '投資信託の基準価額',
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '不動産投資信託（J-REIT「リート」）',
                            content: '', //p
                        }, //47
                        {
                            // rev: 2026-11-16 確認済み
                            questionTitle: '外国投資信託の仕組み',
                            content: '正しい',
                        }, //48
                        {
                            // rev: 2026-11-16 確認済み
                            questionTitle: '日本投資者保護基金',
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.sisan2026a" next-route="daigaku.sisan2026c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>

