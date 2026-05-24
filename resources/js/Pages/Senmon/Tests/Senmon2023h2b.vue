<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険専門課程試験";
const subject = "2023年度 9月〜3月実施 フォームB";
const isDraft = true;
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 py-10 text-gray-800">
            <Pagetitle :title="title" :description="subject" />

            <DraftNotice v-if="isDraft" />

            <div class="mx-auto mt-4 max-w-4xl space-y-2">
                <QuestionTemp1 :questionNumber="1" :title="title" :subject="subject" questionTitle="生命保険を取り巻く生活環境の変化" :relatedProblems="[]" :contents="['', '', '正しい', '']" />
                <QuestionTemp1 :questionNumber="2" :title="title" :subject="subject" questionTitle="剰余金と配当金" :relatedProblems="[]" :contents="['', '', '正しい', '']" />
                <QuestionTemp1 :questionNumber="3" :title="title" :subject="subject" questionTitle="保険料の払い込みと契約の失効・復活" :relatedProblems="[]" :contents="['', '', '正しい', '']" />
                <QuestionTemp1 :questionNumber="4" :title="title" :subject="subject" questionTitle="死亡保険金を支払わない場合" :relatedProblems="[]" :contents="['', '正しい', '', '']" />
                <QuestionTemp1 :questionNumber="5" :title="title" :subject="subject" questionTitle="配当金の支払方法" :relatedProblems="[]" :contents="['', '', '正しい', '']" />
                <QuestionTemp1 :questionNumber="6" :title="title" :subject="subject" questionTitle="保険業法" :relatedProblems="[]" :contents="['', '', '', '正しい']" />
                <QuestionTemp1 :questionNumber="7" :title="title" :subject="subject" questionTitle="解約手続きの留意点" :relatedProblems="[]" :contents="['', '', '正しい', '']" />
                <QuestionTemp1 :questionNumber="8" :title="title" :subject="subject" questionTitle="JA共済" :relatedProblems="[]" :contents="['', '', '正しい', '']" />
                <QuestionTemp1 :questionNumber="9" :title="title" :subject="subject" questionTitle="証券業界とその主な商品" :relatedProblems="[]" :contents="['', '', '正しい', '']" />
                <QuestionTemp1 :questionNumber="10" :title="title" :subject="subject" questionTitle="社会保障制度" :relatedProblems="[]" :contents="['正しい', '', '', '']" />
                <QuestionTemp1 :questionNumber="11" :title="title" :subject="subject" questionTitle="確定拠出年金" :relatedProblems="[]" :contents="['', '', '正しい', '']" />
                <QuestionTemp1 :questionNumber="12" :title="title" :subject="subject" questionTitle="お客さまニーズへの対応" :relatedProblems="[]" :contents="['正しい', '', '', '']" />

                <QuestionTemp1 :questionNumber="13" :title="title" :subject="subject" questionTitle="保険料の仕組み" :relatedProblems="[]" :contents="['正しい', '正しい', '', '正しい']" />
                <QuestionTemp1 :questionNumber="14" :title="title" :subject="subject" questionTitle="コンプライアンスと基本的姿勢" :relatedProblems="[]" :contents="['', '正しい', '正しい', '正しい']" />
                <QuestionTemp1 :questionNumber="15" :title="title" :subject="subject" questionTitle="保険法" :relatedProblems="[]" :contents="['正しい', '', '正しい', '正しい']" />
                <QuestionTemp1 :questionNumber="16" :title="title" :subject="subject" questionTitle="金融サービスの提供に関する法律（金融サービス提供法）" :relatedProblems="[]" :contents="['正しい', '正しい', '', '正しい']" />
                <QuestionTemp1 :questionNumber="17" :title="title" :subject="subject" questionTitle="生命保険料控除を受けるための手続き" :relatedProblems="[]" :contents="['正しい', '正しい', '', '正しい']" />
                <QuestionTemp1 :questionNumber="18" :title="title" :subject="subject" questionTitle="募集時の情報提供と正しい説明" :relatedProblems="[]" :contents="['正しい', '正しい', '正しい', '']" />
                <QuestionTemp1 :questionNumber="19" :title="title" :subject="subject" questionTitle="総合福祉団体定期保険" :relatedProblems="[]" :contents="['正しい', '', '正しい', '正しい']" />
                <QuestionTemp1 :questionNumber="20" :title="title" :subject="subject" questionTitle="損害保険業界とその主な商品" :relatedProblems="[]" :contents="['正しい', '', '正しい', '正しい']" />
                <QuestionTemp1 :questionNumber="21" :title="title" :subject="subject" questionTitle="相続税" :relatedProblems="[]" :contents="['正しい', '正しい', '', '正しい']" />
                <QuestionTemp1 :questionNumber="22" :title="title" :subject="subject" questionTitle="告知義務" :relatedProblems="[]" :contents="['', '正しい', '正しい', '正しい']" />
                <QuestionTemp1 :questionNumber="23" :title="title" :subject="subject" questionTitle="信託銀行の業務・商品" :relatedProblems="[]" :contents="['正しい', '正しい', '正しい', '']" />
                <QuestionTemp1 :questionNumber="24" :title="title" :subject="subject" questionTitle="特約の種類" :relatedProblems="[]" :contents="['正しい', '正しい', '正しい', '']" />

                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="保険料の払い込みが困難になった場合"
                    :relatedProblems="[]"
                    :contents="['保険期間', '養老保険', 'なくなります', '保険金額', '生命保険会社']"
                    :labels="['キ', 'エ', 'イ', 'カ', 'コ']"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="国民年金と厚生年金"
                    :relatedProblems="[]"
                    :contents="['国民皆年金', '障害', '報酬比例', '60歳', '第1号']"
                    :labels="['ク', 'イ', 'エ', 'オ', 'ケ']"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="遺族生活資金と老後生活資金"
                    :relatedProblems="[]"
                    :contents="['5712', '8880', '8064', '3120', '11184']"
                    :labels="['ウ', 'キ', 'カ', 'ア', 'コ']"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        { questionTitle: '生命保険の現状', relatedProblems: [], content: '正しい' },
                        { questionTitle: '特約', relatedProblems: [], content: '正しい' },
                        { questionTitle: '個人情報保護法', relatedProblems: [], content: '正しい' },
                        { questionTitle: '保全・アフターサービスの重要性', relatedProblems: [], content: '正しい' },
                        { questionTitle: '金融商品取引法', relatedProblems: [], content: '正しい' },
                        { questionTitle: '消費者契約法', relatedProblems: [], content: '正しい' },
                        { questionTitle: '契約内容登録制度', relatedProblems: [], content: '' },
                        { questionTitle: '後期高齢者医療制度', relatedProblems: [], content: '' },
                        { questionTitle: '死亡保険金の非課税限度額', relatedProblems: [], content: '' },
                        { questionTitle: '複利と期間', relatedProblems: [], content: '正しい' },
                    ]"
                />
            </div>

            <TestNavigationButtons previous-href="/senmon/2023-h2-a" next-href="/senmon/2023-h2-c" home-route="senmon.index" />
        </section>
    </SeihoTestLayout>
</template>
