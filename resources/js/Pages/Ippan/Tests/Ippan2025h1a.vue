<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2025年1月〜6月実施 フォームA";
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
                    questionRange="6〜7"
                    questionTitle="資産の運用-①"
                    :contents="[
                        '公共性',
                        '長期', // 問6〜7
                    ]"
                    :labels="[
                        'ウ', //6
                        'イ', //7
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="8〜10"
                    questionTitle="資産の運用-②"
                    :contents="[
                        '公社債',
                        '住宅ローン',
                        '投資', // 問8〜10
                    ]"
                    :labels="[
                        'オ', //8
                        'エ', //9
                        'イ', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜13"
                    questionTitle="生命保険の募集等に関する法律-①"
                    :contents="[
                        '契約者',
                        '内閣総理大臣',
                        '告知義務違反', // 問11〜13
                    ]"
                    :labels="[
                        'ア', //11
                        'ウ', //12
                        'カ', //13
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="14〜15"
                    questionTitle="生命保険の募集等に関する法律-②"
                    :contents="[
                        '１年',
                        '５年', // 問14〜15
                    ]"
                    :labels="[
                        'ア', //14
                        'エ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜17"
                    questionTitle="保障の見直し-①"
                    :contents="[
                        '解約',
                        '健康状態', // 問16〜17
                    ]"
                    :labels="[
                        'ア', //16
                        'ウ', //17
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="18〜20"
                    questionTitle="保障の見直し-②"
                    :contents="[
                        'ニーズ',
                        '契約転換制度',
                        '中途付加', // 問18〜20
                    ]"
                    :labels="[
                        'ア', //18
                        'ウ', //19
                        'オ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜23"
                    questionTitle="保険金・給付金の税法上の取り扱い（一時金で受け取った場合）-①"
                    :contents="[
                        '保険金受取人',
                        '一時所得',
                        '500万円', // 問21〜23
                    ]"
                    :labels="[
                        'ア', //21
                        'エ', //22
                        'オ', //23
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="24〜25"
                    questionTitle="保険金・給付金の税法上の取り扱い（一時金で受け取った場合）-②"
                    :contents="[
                        '被保険者',
                        '非課税', // 問24〜25
                    ]"
                    :labels="[
                        'イ', //24
                        'ウ', //25
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
                    questionTitle="契約申込時の実務"
                    :contents="[
                        '正しい',
                        '正しい',
                        '10日以内 → 8日以内', //p47
                        '解約返戻金相当額 → 既払込金額', //p47
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続の法律"
                    :contents="[
                        '正しい',
                        '配偶者が2/3、子どもが1/3 → 配偶者が1/2、子どもが1/2', //p130
                        '正しい',
                        '配偶者が2/3、兄弟姉妹が1/3 → 配偶者が3/4、兄弟姉妹が1/4', //p130
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
                    questionTitle="生命保険会社の仕組み"
                    :contents="[
                        '正しい',
                        '正しい',
                        '生命保険以外の事業を自由にできる → 他の事業を営むことを制限されている', //p33
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="企業向け商品"
                    :contents="[
                        '正しい',
                        '正しい',
                        '契約者 = 経営者（個人） → 契約者 = 企業（団体）', //p118
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の税法上の取り扱い"
                    :contents="[
                        '正しい',
                        '正しい',
                        '4月1日から翌年3月31日まで → 1月1日から12月31日まで', //p122
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
                            questionTitle: '契約取り扱いの手続き',
                            content: '通称名でもよい → 戸籍等の公的書類記載のものを記入', //p40
                        }, //48
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: 'すべての保険会社が保険年齢を使用 → 満年齢・保険年齢それぞれ使用する会社がある', //p41
                        }, //49
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                        }, //50
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '保険料が30000円以上の時は100円の収入印紙 → 50000円以上の時は200円の収入印紙', //p43
                        }, //51
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                        }, //52
                        {
                            questionTitle: '契約の選択',
                            content: '経済上の危険 → 環境上の危険', //p52
                        }, //53
                        {
                            questionTitle: '契約の選択',
                            content: '正しい',
                        }, //54
                        {
                            questionTitle: '契約の選択',
                            content: '正しい',
                        }, //55
                        {
                            questionTitle: '契約の選択',
                            content: '正しい',
                        }, //56
                        {
                            questionTitle: '契約の選択',
                            content: '自由条件付契約 → 特別条件付契約', //p59
                        }, //57
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '',
                        }, //58
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '正しい',
                        }, //59
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '正しい',
                        }, //60
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '',
                        }, //61
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '正しい',
                        }, //62
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '',
                        }, //63
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
                        }, //64
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
                        }, //65
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
                        }, //66
                        {
                            questionTitle: 'お客さまニーズへの対応',
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
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'ア', content: '注意喚起情報' }, //68
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'ア', content: '連絡先' }, //69
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'イ', content: '公序良俗' }, //70
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'イ', content: '生命保険会社' }, //71
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'ア', content: '故意に' }, //72
                        { questionTitle: '正しい告知の取り扱い', label: 'ア', content: '契約確認' }, //73
                        { questionTitle: '正しい告知の取り扱い', label: 'イ', content: '保険証券' }, //74
                        { questionTitle: '正しい告知の取り扱い', label: 'ア', content: '解約返戻金があれば' }, //75
                        { questionTitle: '正しい告知の取り扱い', label: 'イ', content: '２年' }, //76
                        { questionTitle: '正しい告知の取り扱い', label: 'ア', content: '１カ月' }, //77
                        { questionTitle: '社会保障制度', label: 'イ', content: '生活保護法' }, //78
                        { questionTitle: '社会保障制度', label: 'ア', content: '全国民' }, //79
                        { questionTitle: '社会保障制度', label: 'イ', content: '20歳' }, //80
                        { questionTitle: '社会保障制度', label: 'ア', content: '障害' }, //81
                        { questionTitle: '社会保障制度', label: 'イ', content: '除く' }, //82
                    ]"
                />
            </div>
            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
