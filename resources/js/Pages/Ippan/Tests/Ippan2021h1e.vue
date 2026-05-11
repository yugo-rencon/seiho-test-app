<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2021年1月〜6月実施 フォームE";
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
                    questionTitle="保険金・給付金の請求と支払い-①"
                    :contents="[
                        '公序良俗',
                        '約款', // 問1〜2
                    ]"
                    :labels="[
                        'イ', //1
                        'エ', //2
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="3〜5"
                    questionTitle="保険金・給付金の請求と支払い-②"
                    :contents="[
                        '復活日',
                        '故意',
                        '戦争その他の変乱', // 問3〜5
                    ]"
                    :labels="[
                        'エ', //3
                        'オ', //4
                        'ア', //5
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="6〜8"
                    questionTitle="生命保険の役割-①"
                    :contents="[
                        '核家族',
                        '悪性新生物（ガン）',
                        '最低限度', // 問6〜8
                    ]"
                    :labels="[
                        'イ', //6
                        'エ', //7
                        'オ', //8
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="9〜10"
                    questionTitle="生命保険の役割-②"
                    :contents="[
                        '弔慰金',
                        '26', // 問9〜10
                    ]"
                    :labels="[
                        'イ', //9
                        'エ', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜13"
                    questionTitle="生命保険の種類-①"
                    :contents="[
                        '定期',
                        '終身',
                        '大きく', // 問11〜13
                    ]"
                    :labels="[
                        'ア', //11
                        'イ', //12
                        'カ', //13
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="14〜15"
                    questionTitle="生命保険の種類-②"
                    :contents="[
                        '特別',
                        'されています', // 問14〜15
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
                    questionTitle="剰余金と配当金-①"
                    :contents="[
                        '費差益',
                        '予定死亡利率', // 問16〜17
                    ]"
                    :labels="[
                        'ア', //16
                        'エ', //17
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="18〜20"
                    questionTitle="剰余金と配当金-②"
                    :contents="[
                        '契約者',
                        '生命保険会社',
                        '複利', // 問18〜20
                    ]"
                    :labels="[
                        'ア', //18
                        'カ', //19
                        'エ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜22"
                    questionTitle="企業向け商品-①"
                    :contents="[
                        '1年',
                        '企業年金保険', // 問21〜22
                    ]"
                    :labels="[
                        'ウ', //21
                        'ア', //22
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
                        '健康保険', // 問23〜25
                    ]"
                    :labels="[
                        'イ', //23
                        'エ', //24
                        'オ', //25
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="26〜30"
                    questionTitle="設計販売の基礎"
                    :contents="[
                        '4',
                        '37',
                        '55',
                        '34',
                        '家族の生活資金 + 妻の生活資金', // 問26〜30
                    ]"
                    :labels="[
                        'ア', //26
                        'オ', //27
                        'ク', //28
                        'ウ', //29
                        'ケ', //30
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    questionTitle="保障の見直し"
                    :contents="[
                        '既払込保険料相当額や配当金など（転換価格） → 責任準備金や配当金など（転換価格）', //p91
                        '正しい',
                        '正しい',
                        '契約者、保障内容、保険金額などが全く新しく切り替わる → 保障内容、保険金額、保険料などが全く新しく切り替わる', //p92
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社の仕組み"
                    :contents="[
                        '正しい',
                        '保険事業と銀行業だけ → 保険事業だけ', //p32
                        '株式会社 → 相互会社', //p32
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="お客さまニーズへの対応"
                    :contents="[
                        'ライフプラン → ライフサイクル', //p133
                        '正しい',
                        '正しい',
                        '保険設計書 → 生活設計書', //p136
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="34"
                    :title="title"
                    :subject="subject"
                    questionTitle="コンプライアンスの重要性"
                    :contents="[
                        '社会的規範や企業倫理を除き、法令や社内ルールだけを守るという意味で用いられる → 法令や社内ルールだけでなく、社会的規範や企業倫理を守るということも含めて用いられる', //p60
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="35"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産の運用"
                    :contents="[
                        '積極的な資産運用をしなければならず、安全性に配慮して運用する必要はない → 効率的で安定した資産運用をしなければならない', //p34
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約の選択"
                    :contents="[
                        '正しい',
                        '申込みの動機・経路についても注意が必要', //p53
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="正しい告知の取り扱い"
                    :contents="[
                        '契約成立後に契約確認を行うことはない → 契約確認は契約の成立前に行われる場合と成立後に行われる場合がある', //p85
                        '正しい',
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
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '保険料の払い込み',
                            content: '保険業法の定める利率 → 生命保険会社の定める利率', //p50
                        }, //41
                        {
                            questionTitle: '保険料の払い込み',
                            content: '途中で変更することはできない → 途中で変更することができる', //p51
                        }, //42
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: 'お客さまの生活環境、家族構成等に変化がないかどうか等の情報収集を行うことも大切', //p89
                        }, //45
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '私たちの役割と心がまえ',
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '私たちの役割と心がまえ',
                            content: '厚生労働大臣 → 所属生命保険会社', //p11
                        }, //49
                        {
                            questionTitle: '私たちの役割と心がまえ',
                            content: '生命保険募集人 → 生命保険会社', //p12
                        }, //50
                        {
                            questionTitle: '私たちの役割と心がまえ',
                            content: '正しい',
                        }, //51
                        {
                            questionTitle: '私たちの役割と心がまえ',
                            content: '正しい',
                        }, //52
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '正しい',
                        }, //53
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '正しい',
                        }, //54
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '収支相当の法則 → 大数の法則', //p14
                        }, //55
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '年末の生存者数 → 年始の生存者数', //p15
                        }, //56
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '出生率 → 死亡率', //p15
                        }, //57
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                        }, //58
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '結婚しているか否かに関わらず → 結婚している場合不要となるケースもある', //不明
                        }, //59
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                        }, //60
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                        }, //61
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '30000円以上 → 50000円以上<br>100円の収入印紙 → 200円の収入印紙', //p43
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
                            content: '契約者に代わって行うことができる → 行うことができない（委任状があれば可能）', //p107
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
                        { questionTitle: '相続の法律', label: 'ア', content: '放棄' }, //68
                        { questionTitle: '相続の法律', label: 'イ', content: '限定承認' }, //69
                        { questionTitle: '相続の法律', label: 'イ', content: '単純承認' }, //70
                        { questionTitle: '相続の法律', label: 'ア', content: 'みなし相続財産' }, //71
                        { questionTitle: '相続の法律', label: 'イ', content: '3/4' }, //72
                        { questionTitle: '募集時の正しい説明', label: 'イ', content: 'お互い' }, //73
                        { questionTitle: '募集時の正しい説明', label: 'ア', content: 'ご契約のしおり' }, //74
                        { questionTitle: '募集時の正しい説明', label: 'イ', content: '契約概要' }, //75
                        { questionTitle: '募集時の正しい説明', label: 'ア', content: '注意喚起情報' }, //76
                        { questionTitle: '募集時の正しい説明', label: 'イ', content: '適合性の原則' }, //77
                        { questionTitle: '保険金の税法上の取り扱い（一時金で受け取った場合）', label: 'イ', content: '保険金受取人' }, //78
                        { questionTitle: '保険金の税法上の取り扱い（一時金で受け取った場合）', label: 'イ', content: '贈与税' }, //79
                        { questionTitle: '保険金の税法上の取り扱い（一時金で受け取った場合）', label: 'ア', content: '500万円' }, //80
                        { questionTitle: '保険金の税法上の取り扱い（一時金で受け取った場合）', label: 'イ', content: '110万円' }, //81
                        { questionTitle: '保険金の税法上の取り扱い（一時金で受け取った場合）', label: 'ア', content: '非課税' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
