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
const isDraft = false;
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
                        '積極的な資産運用をしなければならず、安全性に配慮する必要はない → 効率的で安定した資産運用をしなければならない', //p34
                        '正しい',
                        '正しい',
                        '資産運用の対象に貸付金も含まれる', //p35
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の種類"
                    :contents="[
                        '定額保険 → 定期保険', //p17
                        '正しい',
                        '正しい',
                        '契約時に定めた保険金額（基本保険金額）は保証されない → 保証される', //p20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="募集時の正しい説明"
                    :contents="[
                        '契約者のみの権利義務を規定 → お互いの権利義務を規定', //p78
                        '全保険種類共通の約款 → 保険種類ごとの約款', //p78
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
                        '払い込む保険料の割り引きはない → 保険料は生命保険会社の定める利率で割り引かれる', //p50
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
                        '60歳以上の第1号被保険者と40歳以上60歳未満の第2号被保険者 → 65歳以上の第1号被保険者と40歳以上65歳未満の第2号被保険者', //p115
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
                        '死亡保険金や死亡退職金も含まれる', //p132
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="お客さまニーズへの対応"
                    :contents="[
                        '正しい',
                        '資産管理 → 経済準備', //p134
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
                            content: '第1回保険料充当金払い込みのあった日 → 診査（告知）のあった日', //p46
                        }, //39
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '12日以内 → 8日以内', //p47
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
                            content: '経済産業省 → 厚生労働省', //p108
                        }, //44
                        {
                            questionTitle: '隣接業界',
                            content: '3年以内 → 1年以内', //p109
                        }, //45
                        {
                            questionTitle: '隣接業界',
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '隣接業界',
                            content: '養老年金タイプ → 定期年金タイプ', //p110
                        }, //47
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '契約成立後に契約確認を行うことはない → 契約確認は契約の成立前に行われる場合と成立後に行われる場合がある', //p85
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
                            content: 'すでに払い込んだ保険料は返還される → すでに払い込んだ保険料は返還されない', //p87
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
                            content: '転換前と転換後の契約に関する重要な事項を対比して記載した書面を交付および受領印の取付等を得なければならない', //p92
                        }, //56
                        {
                            questionTitle: '保障の見直し',
                            content: '転換前の契約の加入時 → 転換時', //p92
                        }, //57
                        {
                            questionTitle: '保険金・給付金の請求と支払い',
                            content: '正しい',
                        }, //58
                        {
                            questionTitle: '保険金・給付金の請求と支払い',
                            content: '他の受取人に対しても死亡保険金を支払われない → 他の受取人に対してはその残額を支払う', //p104
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
                            content: '死亡した被保険者の数にかかわらず支払われない → 死亡した被保険者の数によっては全額または削減して支払う', //p104
                        }, //62
                        {
                            questionTitle: '照会・苦情時の対応',
                            content: '正しい',
                        }, //63
                        {
                            questionTitle: '照会・苦情時の対応',
                            content: '所属会社の専門の担当者を頼りにせず → 判断のつかない事項は専門の担当者に確認', //p106
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
