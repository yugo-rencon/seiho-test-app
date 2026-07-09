<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2021年1月〜6月実施 フォームD";
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
                    questionTitle="剰余金と配当金-①"
                    :contents="[
                        '利差益',
                        '予定',
                        '契約者', // 問6〜8
                    ]"
                    :labels="[
                        'イ', //6
                        'ウ', //7
                        'カ', //8
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="9〜10"
                    questionTitle="剰余金と配当金-②"
                    :contents="[
                        '有配当',
                        '生命保険会社', // 問9〜10
                    ]"
                    :labels="[
                        'ア', //9
                        'ウ', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜12"
                    questionTitle="契約の選択-①"
                    :contents="[
                        '環境',
                        '契約内容登録制度', // 問11〜12
                    ]"
                    :labels="[
                        'イ', //11
                        'エ', //12
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="13〜15"
                    questionTitle="契約の選択-②"
                    :contents="[
                        '面接',
                        '割増保険料',
                        '特別条件', // 問13〜15
                    ]"
                    :labels="[
                        'ア', //13
                        'ウ', //14
                        'カ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜18"
                    questionTitle="募集時の正しい説明-①"
                    :contents="[
                        '約款',
                        '内閣総理大臣',
                        '平易', // 問16〜18
                    ]"
                    :labels="[
                        'ア', //16
                        'エ', //17
                        'オ', //18
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="19〜20"
                    questionTitle="募集時の正しい説明-②"
                    :contents="[
                        '契約概要',
                        '注意喚起情報', // 問19〜20
                    ]"
                    :labels="[
                        'ア', //19
                        'ウ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜22"
                    questionTitle="企業向け商品-①"
                    :contents="[
                        '1年',
                        '終身', // 問21〜22
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
                    questionTitle="企業向け商品-②"
                    :contents="[
                        '損失補てん',
                        '国',
                        '健康保険', // 問23〜25
                    ]"
                    :labels="[
                        'ア', //23
                        'ウ', //24
                        'カ', //25
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
                        '正しい',
                        '保険事業と銀行業だけ → 保険事業だけ', //p32
                        '生命保険以外の事業を自由に営むことができる → 他の事業を営むことが制限されている', //p33
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約申込み時の実務"
                    :contents="[
                        '正しい',
                        '承諾した日 → 払い込みのあった日にさかのぼって', //p46
                        '12日以内 → 8日以内', //p47
                        '正しい',
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
                    questionTitle="私たちの役割と心がまえ"
                    :contents="[
                        '正しい',
                        '生命保険募集人 → 生命保険会社', //p12
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金・給付金の税法上の取り扱い（一時金で受け取った場合）"
                    :contents="[
                        '相続税 → 贈与税', //p126
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="お客さまニーズへの対応"
                    :contents="[
                        'ライフプラン → ライフサイクル', //p133
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
                            questionTitle: '保険料の仕組み',
                            content: '公平性の原則 → 収支相等の原則', //p23
                        }, //48
                        {
                            questionTitle: '保険料の仕組み',
                            content: '正しい',
                        }, //49
                        {
                            questionTitle: '保険料の仕組み',
                            content: '正しい',
                        }, //50
                        {
                            questionTitle: '保険料の仕組み',
                            content: '満期保険料 → 生存保険料', //p24
                        }, //51
                        {
                            questionTitle: '保険料の仕組み',
                            content: '正しい',
                        }, //52
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '通称名でもよい → 戸籍等の公的書類記載のものを記入', //p40
                        }, //53
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '結婚しているか否かに関わらず → 結婚している場合不要となるケースもある', //不明
                        }, //54
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                        }, //55
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                        }, //56
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                        }, //57
                        {
                            questionTitle: '照会・苦情時の対応',
                            content: '正しい',
                        }, //58
                        {
                            questionTitle: '照会・苦情時の対応',
                            content: '所属会社の専門の担当者を頼りにせず → 判断のつかない事項は専門の担当者に確認', //p106
                        }, //59
                        {
                            questionTitle: '照会・苦情時の対応',
                            content: '正しい',
                        }, //60
                        {
                            questionTitle: '照会・苦情時の対応',
                            content: '正しい',
                        }, //61
                        {
                            questionTitle: '照会・苦情時の対応',
                            content: '契約者に代わって行うことができる → 行うことができない（委任状があれば可能）', //p107
                        }, //62
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '正しい',
                        }, //63
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '正しい',
                        }, //64
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '正しい',
                        }, //65
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '4月1日から翌年3月31日まで → 1月1日から12月31日まで', //p122
                        }, //66
                        {
                            questionTitle: '保険料の税法上の取り扱い',
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
                        { questionTitle: '生命保険の種類', label: 'ア', content: '定期保険' }, //73
                        { questionTitle: '生命保険の種類', label: 'イ', content: '生存保険' }, //74
                        { questionTitle: '生命保険の種類', label: 'イ', content: '大きくする' }, //75
                        { questionTitle: '生命保険の種類', label: 'ア', content: '特別勘定' }, //76
                        { questionTitle: '生命保険の種類', label: 'ア', content: '保証されています' }, //77
                        { questionTitle: '生命保険の募集等に関する法律', label: 'イ', content: '保険業法' }, //78
                        { questionTitle: '生命保険の募集等に関する法律', label: 'ア', content: '特別の利益の提供' }, //79
                        { questionTitle: '生命保険の募集等に関する法律', label: 'イ', content: '消費者契約法' }, //80
                        { questionTitle: '生命保険の募集等に関する法律', label: 'ア', content: '個人情報保護法' }, //81
                        { questionTitle: '生命保険の募集等に関する法律', label: 'イ', content: '10万円' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
