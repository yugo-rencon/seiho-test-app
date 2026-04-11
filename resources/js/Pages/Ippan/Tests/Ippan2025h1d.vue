<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2025年1月〜6月実施 フォームD";
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
                    questionTitle="生命保険の仕組み-①"
                    :contents="[
                        '相互扶助',
                        '準備財産', // 問1〜2
                    ]"
                    :labels="[
                        'ア', //1
                        'ウ', //2
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="3〜5"
                    questionTitle="生命保険の仕組み-②"
                    :contents="[
                        '大数の法則',
                        '生命表',
                        '死亡率', // 問3〜5
                    ]"
                    :labels="[
                        'イ', //3
                        'ウ', //4
                        'カ', //5
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="6〜8"
                    questionTitle="生命保険の種類-①"
                    :contents="[
                        '定期',
                        '生存',
                        '生死混合', // 問6〜8
                    ]"
                    :labels="[
                        'ア', //6
                        'オ', //7
                        'カ', //8
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="9〜10"
                    questionTitle="生命保険の種類-②"
                    :contents="[
                        '特別',
                        'されています', // 問9〜10
                    ]"
                    :labels="[
                        'ウ', //9
                        'ア', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜13"
                    questionTitle="契約の選択-①"
                    :contents="[
                        '環境',
                        '契約内容登録制度',
                        '面接', // 問11〜13
                    ]"
                    :labels="[
                        'イ', //11
                        'オ', //12
                        'ウ', //13
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="14〜15"
                    questionTitle="契約の選択-②"
                    :contents="[
                        '保険金削減',
                        '特別条件', // 問14〜15
                    ]"
                    :labels="[
                        'ウ', //14
                        'イ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜18"
                    questionTitle="社会保障制度-①"
                    :contents="[
                        '生活保護法',
                        '国民',
                        '遺族', // 問16〜18
                    ]"
                    :labels="[
                        'ア', //16
                        'ウ', //17
                        'オ', //18
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="19〜20"
                    questionTitle="社会保障制度-②"
                    :contents="[
                        '３割',
                        '75歳', // 問19〜20
                    ]"
                    :labels="[
                        'イ', //19
                        'エ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜22"
                    questionTitle="企業向け商品-①"
                    :contents="[
                        '１年',
                        '終身', // 問21〜22
                    ]"
                    :labels="[
                        'ア', //21
                        'エ', //22
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="23〜25"
                    questionTitle="企業向け商品-②"
                    :contents="[
                        '損失補てん',
                        '国',
                        '公的医療', // 問23〜25
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
                        '37',
                        '家族の生活資金＋妻の生活資金', // 問26〜30
                    ]"
                    :labels="[
                        'イ', //26
                        'エ', //27
                        'ク', //28
                        'オ', //29
                        'ケ', //30
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    questionTitle="私たちの役割と心がまえ"
                    :contents="[
                        '正しい',
                        '預金保険法等 → 保険業法等', //p11
                        '潜在ニーズを引き出す必要はない → 潜在ニーズを引き出してアプローチする必要がある', //p12
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産の運用"
                    :contents="[
                        '積極的な資産運用 → 効率的で安定した資産運用', //p34
                        '正しい',
                        '正しい',
                        '貸付金は含まれない → 含まれる（有価証券・貸付金・不動産が主な対象）', //p35
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続の法律"
                    :contents="[
                        '法定相続の規定は遺言に優先して → 遺言は法定相続の規定に優先して', //p129
                        '正しい',
                        '配偶者が2/3、子どもが1/3 → 配偶者が1/2、子どもが1/2', //p130
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="34"
                    :title="title"
                    :subject="subject"
                    questionTitle="保全・アフターサービス手続きと留意点"
                    :contents="[
                        '正しい',
                        '正しい',
                        '払い戻されない → 払い戻す', //p96
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="35"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の募集等に関する法律"
                    :contents="[
                        '正しい',
                        '正しい',
                        '保険契約は対象に含まれない → 含まれる', //p69
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金・給付金の税法上の取り扱い（一時金で受け取った場合）"
                    :contents="[
                        '正しい',
                        '正しい',
                        '60万円 → 110万円', //p127
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="お客さまニーズへの対応"
                    :contents="[
                        '正しい',
                        '保険設計書 ↔︎ 生活設計書', //p136
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
                            questionTitle: '生命保険の役割',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '生命保険の役割',
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '生命保険の役割',
                            content: '90歳を超えている → 超えていない（男性約81歳、女性約87歳）', //p3
                        }, //40
                        {
                            questionTitle: '生命保険の役割',
                            content: '平均寿命 → 平均余命', //p4
                        }, //41
                        {
                            questionTitle: '生命保険の役割',
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '保険料の払い込み',
                            content: '保険業法 → 生命保険会社', //p50
                        }, //46
                        {
                            questionTitle: '保険料の払い込み',
                            content: '途中で変更できない → 変更できる', //p51
                        }, //47
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //49
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //50
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //51
                        {
                            questionTitle: '剰余金と配当金',
                            content: '', //p
                        }, //52
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '保険会社等を保護 → 契約者等を保護',
                        }, //53 p30
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '正しい',
                        }, //54
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '保険事業と銀行業 → 保険事業だけ',
                        }, //55 p32
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '株式会社 → 相互会社',
                        }, //56 p32
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '生命保険以外の事業を自由にできる → 他の事業を営むことを制限されている',
                        }, //57 p33
                        {
                            questionTitle: '保障の見直し',
                            content: '死亡保障額などを増やすことはできない → 増やすことができる', //p91
                        }, //58
                        {
                            questionTitle: '保障の見直し',
                            content: '正しい',
                        }, //59
                        {
                            questionTitle: '保障の見直し',
                            content: '正しい',
                        }, //60
                        {
                            questionTitle: '保障の見直し',
                            content: '正しい',
                        }, //61
                        {
                            questionTitle: '保障の見直し',
                            content: '転換前契約の加入時 → 転換時', //p92
                        }, //62
                        {
                            questionTitle: '隣接業界',
                            content: '正しい',
                        }, //63
                        {
                            questionTitle: '隣接業界',
                            content: '農林水産省 → 厚生労働省', //p108
                        }, //64
                        {
                            questionTitle: '隣接業界',
                            content: '3年以内 → 1年以内', //p109
                        }, //65
                        {
                            questionTitle: '隣接業界',
                            content: '正しい',
                        }, //66
                        {
                            questionTitle: '隣接業界',
                            content: '養老年金タイプ → 定期年金タイプ', //p110
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
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'ア', content: '注意喚起情報' }, //68
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'ア', content: '連絡先' }, //69
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'イ', content: '公序良俗' }, //70
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'イ', content: '生命保険会社' }, //71
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'ア', content: '故意に' }, //72
                        { questionTitle: '契約取り扱いの手続き', label: 'イ', content: 'が必要' }, //73
                        { questionTitle: '契約取り扱いの手続き', label: 'イ', content: '被保険者' }, //74
                        { questionTitle: '契約取り扱いの手続き', label: 'ア', content: '満年齢' }, //75
                        { questionTitle: '契約取り扱いの手続き', label: 'ア', content: '正確なものを新しく発行' }, //76
                        { questionTitle: '契約取り扱いの手続き', label: 'イ', content: '50,000円' }, //77
                        { questionTitle: '募集時の正しい説明', label: 'イ', content: '約款' }, //78
                        { questionTitle: '募集時の正しい説明', label: 'ア', content: 'ご契約のしおり' }, //79
                        { questionTitle: '募集時の正しい説明', label: 'イ', content: '契約概要' }, //80
                        { questionTitle: '募集時の正しい説明', label: 'ア', content: '注意喚起情報' }, //81
                        { questionTitle: '募集時の正しい説明', label: 'イ', content: '適合性の原則' }, //82
                    ]"
                />
            </div>
            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
