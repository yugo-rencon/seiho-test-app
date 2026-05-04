<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2022年1月〜6月実施 フォームD";
const isDraft = true;
</script>

<template>
    <SeihoTestLayout :title="title" brand-name="生命保険一般課程 過去問解説">
        <section class="bg-gray-100 py-10 text-gray-800">
            <Pagetitle :title="title" :description="subject" />
            <DraftNotice v-if="isDraft" />

            <div class="mx-auto mt-4 max-w-4xl space-y-2">
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="1〜2"
                    questionTitle="企業向け商品-①"
                    :contents="[
                        '終身',
                        '確定給付型の企業年金', // 問1〜2
                    ]"
                    :labels="[
                        'ウ', //1
                        'ア', //2
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="3〜5"
                    questionTitle="企業向け商品-②"
                    :contents="[
                        '損失補てん',
                        '国',
                        '健康保険', // 問3〜5
                    ]"
                    :labels="[
                        'イ', //3
                        'カ', //4
                        'ウ', //5
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="6"
                    questionTitle="保険料の仕組み-①"
                    :contents="[
                        '収支相当の原則', // 問6
                    ]"
                    :labels="[
                        'イ', //6
                    ]"
                />
                <QuestionTemp3
                :title="title"
                :subject="subject"
                questionRange="7〜10"
                questionTitle="保険料の仕組み-②"
                :contents="[
                        '純保険料',
                        '付加保険料',
                        '生存保険料',
                        '予定利率', // 問7〜10
                    ]"
                    :labels="[
                        'ウ', //7
                        'エ', //8
                        'カ', //9
                        'イ', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜13"
                    questionTitle="生命保険会社の仕組み-①"
                    :contents="[
                        '保険業法',
                        '免許',
                        '基礎利益', // 問11〜13
                    ]"
                    :labels="[
                        'エ', //11
                        'オ', //12
                        'ア', //13
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="14〜15"
                    questionTitle="生命保険会社の仕組み-②"
                    :contents="[
                        '生命保険契約者保護機構',
                        '相互会社', // 問14〜15
                    ]"
                    :labels="[
                        'ア', //14
                        'エ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜18"
                    questionTitle="契約取り扱いの手続き-①"
                    :contents="[
                        '戸籍等の公的書類記載の',
                        '被保険者',
                        '保険年齢', // 問16〜18
                    ]"
                    :labels="[
                        'オ', //16
                        'エ', //17
                        'イ', //18
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="19〜20"
                    questionTitle="契約取り扱いの手続き-②"
                    :contents="[
                        '正確なものを新しく発行',
                        '50000円', // 問19〜20
                    ]"
                    :labels="[
                        'ウ', //19
                        'イ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜22"
                    questionTitle="保全・アフターサービス手続きと留意点-①"
                    :contents="[
                        '契約者貸付',
                        '（自動）振替貸付', // 問21〜22
                    ]"
                    :labels="[
                        'ア', //21
                        'ウ', //22
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="23〜25"
                    questionTitle="保全・アフターサービス手続きと留意点-②"
                    :contents="[
                        '養老保険',
                        '減額',
                        '復活', // 問23〜25
                    ]"
                    :labels="[
                        'イ', //23
                        'エ', //24
                        'カ', //25
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="26〜30"
                    questionTitle="設計販売の基礎"
                    :contents="[
                        '7',
                        '36',
                        '51',
                        '38',
                        '家族の生活資金 + 妻の生活資金', // 問26〜30
                    ]"
                    :labels="[
                        'イ', //26
                        'エ', //27
                        'ク', //28
                        'カ', //29
                        'ケ', //30
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産の運用"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の種類"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="募集時の正しい説明"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="34"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の払い込み"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="35"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会保障制度"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続の法律"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="お客さまニーズへの対応"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="38"
                    :title="title"
                    :subject="subject"
                    :useAnswerLabelForAll="true"
                    :items="[
                        // 問38〜67
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '', //p
                        }, //39
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '', //p
                        }, //40
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '隣接業界',
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '隣接業界',
                            content: '', //p
                        }, //44
                        {
                            questionTitle: '隣接業界',
                            content: '', //p
                        }, //45
                        {
                            questionTitle: '隣接業界',
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '隣接業界',
                            content: '', //p
                        }, //47
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '', //p
                        }, //48
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //49
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //50
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '', //p
                        }, //51
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //52
                        {
                            questionTitle: '保障の見直し',
                            content: '正しい',
                        }, //53
                        {
                            questionTitle: '保障の見直し',
                            content: '正しい',
                        }, //54
                        {
                            questionTitle: '保障の見直し',
                            content: '正しい',
                        }, //55
                        {
                            questionTitle: '保障の見直し',
                            content: '', //p
                        }, //56
                        {
                            questionTitle: '保障の見直し',
                            content: '', //p
                        }, //57
                        {
                            questionTitle: '保険金・給付金の請求と支払い',
                            content: '正しい',
                        }, //58
                        {
                            questionTitle: '保険金・給付金の請求と支払い',
                            content: '', //p
                        }, //59
                        {
                            questionTitle: '保険金・給付金の請求と支払い',
                            content: '正しい',
                        }, //60
                        {
                            questionTitle: '保険金・給付金の請求と支払い',
                            content: '正しい',
                        }, //61
                        {
                            questionTitle: '保険金・給付金の請求と支払い',
                            content: '', //p
                        }, //62
                        {
                            questionTitle: '照会・苦情時の対応',
                            content: '正しい',
                        }, //63
                        {
                            questionTitle: '照会・苦情時の対応',
                            content: '', //p
                        }, //64
                        {
                            questionTitle: '照会・苦情時の対応',
                            content: '正しい',
                        }, //65
                        {
                            questionTitle: '照会・苦情時の対応',
                            content: '正しい',
                        }, //66
                        {
                            questionTitle: '照会・苦情時の対応',
                            content: '正しい',
                        }, //67
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="68"
                    :title="title"
                    :subject="subject"
                    :applyChoicePrefix="false"
                    :items="[
                        // 問68〜82
                        { questionTitle: '保険金の税法上の取り扱い（一時金で受け取った場合）', label: 'ア', content: '贈与税' }, //68
                        { questionTitle: '保険金の税法上の取り扱い（一時金で受け取った場合）', label: 'ア', content: '保険金受取人' }, //69
                        { questionTitle: '保険金の税法上の取り扱い（一時金で受け取った場合）', label: 'ア', content: '50万円' }, //70
                        { questionTitle: '保険金の税法上の取り扱い（一時金で受け取った場合）', label: 'イ', content: '500万円' }, //71
                        { questionTitle: '保険金の税法上の取り扱い（一時金で受け取った場合）', label: 'イ', content: '基礎控除額' }, //72
                        { questionTitle: '生命保険の仕組み', label: 'ア', content: '相互扶助' }, //73
                        { questionTitle: '生命保険の仕組み', label: 'イ', content: '性別' }, //74
                        { questionTitle: '生命保険の仕組み', label: 'イ', content: '大数の法則' }, //75
                        { questionTitle: '生命保険の仕組み', label: 'ア', content: '年始' }, //76
                        { questionTitle: '生命保険の仕組み', label: 'ア', content: '保険契約者' }, //77
                        { questionTitle: '保険料の税法上の取り扱い', label: 'イ', content: '住民税' }, //78
                        { questionTitle: '保険料の税法上の取り扱い', label: 'イ', content: '保険金などの受取人' }, //79
                        { questionTitle: '保険料の税法上の取り扱い', label: 'ア', content: '5年未満' }, //80
                        { questionTitle: '保険料の税法上の取り扱い', label: 'ア', content: '払い込まれた保険料がそのまま' }, //81
                        { questionTitle: '保険料の税法上の取り扱い', label: 'イ', content: '40000円' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
