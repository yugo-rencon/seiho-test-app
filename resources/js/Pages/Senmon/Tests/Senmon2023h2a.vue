<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険専門課程試験";
const subject = "2023年度 9月〜3月実施 フォームA";
const isDraft = true;
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 py-10 text-gray-800">
            <Pagetitle :title="title" :description="subject" />

            <DraftNotice v-if="isDraft" />

            <div class="mx-auto mt-4 max-w-4xl space-y-2">
                <QuestionTemp1 :questionNumber="1" :title="title" :subject="subject" questionTitle="生命保険を取り巻く生活環境の変化" :relatedProblems="[]" :contents="['', '', '正しい', '']" />
                <QuestionTemp1 :questionNumber="2" :title="title" :subject="subject" questionTitle="個人を対象とした主な保険種類" :relatedProblems="[]" :contents="['', '', '正しい', '']" />
                <QuestionTemp1 :questionNumber="3" :title="title" :subject="subject" questionTitle="保険料の払い込みと契約の失効・復活" :relatedProblems="[]" :contents="['', '', '正しい', '']" />
                <QuestionTemp1 :questionNumber="4" :title="title" :subject="subject" questionTitle="契約者貸付" :relatedProblems="[]" :contents="['正しい', '', '', '']" />
                <QuestionTemp1 :questionNumber="5" :title="title" :subject="subject" questionTitle="法令上の禁止行為" :relatedProblems="[]" :contents="['', '正しい', '', '']" />
                <QuestionTemp1 :questionNumber="6" :title="title" :subject="subject" questionTitle="保険業法" :relatedProblems="[]" :contents="['', '', '', '正しい']" />
                <QuestionTemp1 :questionNumber="7" :title="title" :subject="subject" questionTitle="犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）による取引時確認" :relatedProblems="[]" :contents="['', '', '正しい', '']" />
                <QuestionTemp1 :questionNumber="8" :title="title" :subject="subject" questionTitle="社会保障制度" :relatedProblems="[]" :contents="['正しい', '', '', '']" />
                <QuestionTemp1 :questionNumber="9" :title="title" :subject="subject" questionTitle="株式" :relatedProblems="[]" :contents="['', '', '正しい', '']" />
                <QuestionTemp1 :questionNumber="10" :title="title" :subject="subject" questionTitle="経営者保険、医療保障保険（団体型）" :relatedProblems="[]" :contents="['正しい', '', '', '']" />
                <QuestionTemp1 :questionNumber="11" :title="title" :subject="subject" questionTitle="財形制度" :relatedProblems="[]" :contents="['', '', '正しい', '']" />
                <QuestionTemp1 :questionNumber="12" :title="title" :subject="subject" questionTitle="お客さまニーズへの対応" :relatedProblems="[]" :contents="['正しい', '', '', '']" />

                <QuestionTemp1 :questionNumber="13" :title="title" :subject="subject" questionTitle="保険料の仕組み" :relatedProblems="[]" :contents="['正しい', '正しい', '', '正しい']" />
                <QuestionTemp1 :questionNumber="14" :title="title" :subject="subject" questionTitle="適切な保険金・給付金等の支払いと留意点" :relatedProblems="[]" :contents="['正しい', '正しい', '正しい', '']" />
                <QuestionTemp1 :questionNumber="15" :title="title" :subject="subject" questionTitle="保障の見直しに関する諸制度" :relatedProblems="[]" :contents="['正しい', '', '正しい', '正しい']" />
                <QuestionTemp1 :questionNumber="16" :title="title" :subject="subject" questionTitle="契約の選択" :relatedProblems="[]" :contents="['正しい', '正しい', '', '正しい']" />
                <QuestionTemp1 :questionNumber="17" :title="title" :subject="subject" questionTitle="労働者共済、各都道府県民共済" :relatedProblems="[]" :contents="['', '正しい', '正しい', '正しい']" />
                <QuestionTemp1 :questionNumber="18" :title="title" :subject="subject" questionTitle="募集時の情報提供と正しい説明" :relatedProblems="[]" :contents="['正しい', '正しい', '正しい', '']" />
                <QuestionTemp1 :questionNumber="19" :title="title" :subject="subject" questionTitle="少額短期保険" :relatedProblems="[]" :contents="['正しい', '', '正しい', '正しい']" />
                <QuestionTemp1 :questionNumber="20" :title="title" :subject="subject" questionTitle="銀行預金" :relatedProblems="[]" :contents="['正しい', '正しい', '', '正しい']" />
                <QuestionTemp1 :questionNumber="21" :title="title" :subject="subject" questionTitle="個人向け融資（ローン）の種類" :relatedProblems="[]" :contents="['正しい', '正しい', '正しい', '']" />
                <QuestionTemp1 :questionNumber="22" :title="title" :subject="subject" questionTitle="介護保険制度" :relatedProblems="[]" :contents="['正しい', '正しい', '', '正しい']" />
                <QuestionTemp1 :questionNumber="23" :title="title" :subject="subject" questionTitle="信託銀行の業務・商品" :relatedProblems="[]" :contents="['正しい', '正しい', '正しい', '']" />
                <QuestionTemp1 :questionNumber="24" :title="title" :subject="subject" questionTitle="相続の法律" :relatedProblems="[]" :contents="['正しい', '正しい', '', '正しい']" />

                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="総合福祉団体定期保険"
                    :relatedProblems="[]"
                    :contents="['告知扱', '付加保険料', '損金', '企業（団体）', '福利厚生規程']"
                    :labels="['オ', 'イ', 'ケ', 'ウ', 'ク']"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="債券（公社債など）"
                    :relatedProblems="[]"
                    :contents="['安全性', '割引債', '個人向け', '固定金利', '2年満期']"
                    :labels="['ア', 'ケ', 'カ', 'ク', 'ウ']"
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
                        { questionTitle: '解約', relatedProblems: [], content: '正しい' },
                        { questionTitle: '個人情報保護法', relatedProblems: [], content: '正しい' },
                        { questionTitle: '金融商品取引法', relatedProblems: [], content: '正しい' },
                        { questionTitle: '銀行窓販', relatedProblems: [], content: '正しい' },
                        { questionTitle: '募集人としての具体的対応と留意点', relatedProblems: [], content: '正しい' },
                        { questionTitle: '生命保険料控除の対象', relatedProblems: [], content: '正しい' },
                        { questionTitle: '固定金利と変動金利', relatedProblems: [], content: '正しい' },
                        { questionTitle: '死亡保険金の非課税限度額', relatedProblems: [], content: '' },
                        { questionTitle: '寄与分制度', relatedProblems: [], content: '正しい' },
                    ]"
                />
            </div>

            <TestNavigationButtons previous-href="/senmon/2023-h1-b" next-href="/senmon/2023-h2-b" home-route="senmon.index" />
        </section>
    </SeihoTestLayout>
</template>
