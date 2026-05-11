<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2021年1月〜6月実施 フォームC";
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
                    questionTitle="私たちの役割と心がまえ-①"
                    :contents="[
                        '税務',
                        'アフターサービス',
                        '継続', // 問6〜8
                    ]"
                    :labels="[
                        'ア', //6
                        'ウ', //7
                        'エ', //8
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="9〜10"
                    questionTitle="私たちの役割と心がまえ-②"
                    :contents="[
                        '保険業法',
                        '行動規範', // 問9〜10
                    ]"
                    :labels="[
                        'ア', //9
                        'エ', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜12"
                    questionTitle="保険料の仕組み-①"
                    :contents="[
                        '純保険料',
                        '付加保険料', // 問11〜12
                    ]"
                    :labels="[
                        'ウ', //11
                        'エ', //12
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="13〜15"
                    questionTitle="保険料の仕組み-②"
                    :contents="[
                        '死亡保険料',
                        '生存保険料',
                        '利率', // 問13〜15
                    ]"
                    :labels="[
                        'エ', //13
                        'ア', //14
                        'オ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜18"
                    questionTitle="契約の選択-①"
                    :contents="[
                        '高い',
                        '多く',
                        '公平性', // 問16〜18
                    ]"
                    :labels="[
                        'ア', //16
                        'カ', //17
                        'エ', //18
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="19〜20"
                    questionTitle="契約の選択-②"
                    :contents="[
                        '身体',
                        '道徳', // 問19〜20
                    ]"
                    :labels="[
                        'イ', //19
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
                    questionTitle="剰余金と配当金"
                    :contents="[
                        '正しい',
                        '正しい',
                        '契約後7年目から → 契約後6年目から', //p28
                        '保険金買増方法 → 積立（据置）方法', //p29
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産の運用"
                    :contents="[
                        '積極的な資産運用をしなければならず、安全性に配慮して運用する必要はない → 効率的で安定した資産運用をしなければならない', //p34
                        '3つの原則 → 4つの原則（安全性、収益性、換金性（流動性）、公共性）', //p34
                        '正しい',
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
                    questionTitle="募集時の正しい説明"
                    :contents="[
                        '生命保険会社と保険金受取人との間 → 生命保険会社と契約者との間', //p78
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="正しい告知の取り扱い"
                    :contents="[
                        '正しい',
                        '被保険者（または保険金受取人） → 被保険者（または契約者）', //p86
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金・給付金の税法上の取り扱い（一時金で受け取った場合）"
                    :contents="[
                        '正しい',
                        '配当所得 → 一時所得', //p126
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
                            questionTitle: '生命保険の仕組み',
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '正しい',
                        }, //49
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '年末の生存者数 → 年始の生存者数', //p15
                        }, //50
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '生命保険では〜 → 預貯金では〜', //p15
                        }, //51
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '正しい',
                        }, //52
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '正しい',
                        }, //53
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '正しい',
                        }, //54
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '保険事業と銀行業だけ → 保険事業だけ', //p32
                        }, //55
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '株式会社 → 相互会社', //p32
                        }, //56
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '正しい',
                        }, //57
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                        }, //58
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '単に会社員とか、あるいは会社名を記入していただければ良い → 現在の仕事の内容を具体的に記入していただく必要がある', //p40
                        }, //59
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '5ヶ月 → 6ヶ月', //p41
                        }, //60
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                        }, //61
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                        }, //62
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //63
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //64
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '保険契約は対象外 → 保険契約も対象', //p69
                        }, //65
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //66
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '質問応答義務から自発的申告義務に変更 → 自発的申告義務から質問応答義務に変更', //p76
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
                        { questionTitle: '契約申込みの実務', label: 'ア', content: '承諾' }, //73
                        { questionTitle: '契約申込みの実務', label: 'イ', content: '責任開始期' }, //74
                        { questionTitle: '契約申込みの実務', label: 'ア', content: '8日' }, //75
                        { questionTitle: '契約申込みの実務', label: 'ア', content: 'クーリング・オフ' }, //76
                        { questionTitle: '契約申込みの実務', label: 'ア', content: 'お返しします' }, //77
                        { questionTitle: 'お客さまニーズへの対応', label: 'イ', content: 'ライフサイクル' }, //78
                        { questionTitle: 'お客さまニーズへの対応', label: 'ア', content: '生活' }, //79
                        { questionTitle: 'お客さまニーズへの対応', label: 'イ', content: '生活設計書' }, //80
                        { questionTitle: 'お客さまニーズへの対応', label: 'ア', content: '40歳' }, //81
                        { questionTitle: 'お客さまニーズへの対応', label: 'イ', content: '計画的' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
