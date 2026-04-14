<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2024年1月〜6月実施 フォームE";
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
                    questionRange="1〜3"
                    questionTitle="保全・アフターサービス手続きと留意点-①"
                    :contents="[
                        '解約返戻金',
                        '有効に',
                        '（自動）振替貸付', // 問1〜3
                    ]"
                    :labels="[
                        'イ', //1
                        'ウ', //2
                        'オ', //3
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="4〜5"
                    questionTitle="保全・アフターサービス手続きと留意点-②"
                    :contents="[
                        '3年',
                        '復活', // 問4〜5
                    ]"
                    :labels="[
                        'イ', //4
                        'ウ', //5
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="6〜8"
                    questionTitle="生命保険の役割-①"
                    :contents="[
                        '福沢諭吉',
                        '明治',
                        '核家族', // 問6〜8
                    ]"
                    :labels="[
                        'ア', //6
                        'ウ', //7
                        'オ', //8
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="9〜10"
                    questionTitle="生命保険の役割-②"
                    :contents="[
                        '平均余命',
                        '最低限度', // 問9〜10
                    ]"
                    :labels="[
                        'ア', //9
                        'ウ', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜13"
                    questionTitle="私たちの役割と心がまえ-①"
                    :contents="[
                        '税務',
                        'アフターサービス',
                        '保全', // 問11〜13
                    ]"
                    :labels="[
                        'ア', //11
                        'エ', //12
                        'カ', //13
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="14〜15"
                    questionTitle="私たちの役割と心がまえ-②"
                    :contents="[
                        '保険業法',
                        '所属生命保険会社', // 問14〜15
                    ]"
                    :labels="[
                        'ア', //14
                        'ウ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜18"
                    questionTitle="保障の見直し-①"
                    :contents="[
                        '責任準備金',
                        '死亡保障',
                        '追加', // 問16〜18
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
                    questionTitle="保障の見直し-②"
                    :contents="[
                        '契約者',
                        '意向確認書面', // 問19〜20
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
                    questionTitle="保険金・給付金の請求と支払い-①"
                    :contents="[
                        '「注意喚起情報」',
                        '手続き窓口', // 問21〜22
                    ]"
                    :labels="[
                        'イ', //21
                        'エ', //22
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="23〜25"
                    questionTitle="保険金・給付金の請求と支払い-②"
                    :contents="[
                        '生命保険会社',
                        '診断書',
                        'センシティブ', // 問23〜25
                    ]"
                    :labels="[
                        'イ', //23
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
                        '5',
                        '37',
                        '54',
                        '35',
                        '家族の生活資金＋妻の生活資金', // 問26〜30
                    ]"
                    :labels="[
                        'イ', //26
                        'オ', //27
                        'キ', //28
                        'ウ', //29
                        'ケ', //30
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会保障制度"
                    :contents="[
                        '雇用保険法 → 生活保護法', //p112
                        '正しい',
                        '正しい',
                        '4割 → 1割で所定水準以上の所得者は2割（そのうち特に所得の高い者は3割）', //p115
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
                        '保険金額（基本保険金額）は保証されない → 保証される', //p20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="剰余金と配当金"
                    :contents="[
                        '正しい',
                        '2つ → 3つ（予定死亡率・予定利率・予定事業比率）', //p26
                        '正しい',
                        '保険業法の定める利率 → 生命保険会社の定める利率', //p29
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="34"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の払い込み"
                    :contents="[
                        '正しい',
                        '途中で変更できない → 変更できる', //p51
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="35"
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
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="保全・アフターサービスの重要性"
                    :contents="[
                        '当初の契約内容のまま継続することが重要 → 変更になることケースが少なからずある', //p88
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="隣接業界"
                    :contents="[
                        '広く一般の国民を対象 → 組合員を対象', //p108
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
                            questionTitle: '生命保険の仕組み',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '年末の生存者数 → 年始の生存者数', //p15
                        }, //40
                        {
                            questionTitle: '生命保険の仕組み',
                            content: 'それまでに積み立てられた元利合計額 → 契約した保障額の死亡保険金', //p15
                        }, //41
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '企業向け商品',
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '企業向け商品',
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '企業向け商品',
                            content: '従業員の生活保障および従業員の退職金 → 遺族の生活保障および経営者の退職金', //p118
                        }, //45
                        {
                            questionTitle: '企業向け商品',
                            content: '財形医療積立保険・財形教育積立保険・財形福祉積立保険 → 財形貯蓄積立保険・財形住宅積立保険・財形年金積立保険', //p119
                        }, //46
                        {
                            questionTitle: '企業向け商品',
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '資産の運用',
                            content: '積極的な資産運用 → 効率的で安定した資産運用', //p34
                        }, //48
                        {
                            questionTitle: '資産の運用',
                            content: '短期の資金 → 長期の資金', //p35
                        }, //49
                        {
                            questionTitle: '資産の運用',
                            content: '正しい',
                        }, //50
                        {
                            questionTitle: '資産の運用',
                            content: '貸付金は含まれない → 含まれる（有価証券・貸付金・不動産が主な対象）', //p35
                        }, //51
                        {
                            questionTitle: '資産の運用',
                            content: '正しい',
                        }, //52
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '財務大臣 → 内閣総理大臣', //p63
                        }, //53
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '承諾 → 媒介', //p64
                        }, //54
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //55
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //56
                        {
                            questionTitle: '生命保険の募集等に関する法律',
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
                            questionTitle: 'お客さまニーズへの対応',
                            content: 'ライフスタイル → ライフサイクル', //p133
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
                        { questionTitle: '契約の選択', label: 'イ', content: '環境上' }, //68
                        { questionTitle: '契約の選択', label: 'ア', content: '保険金や特約' }, //69
                        { questionTitle: '契約の選択', label: 'イ', content: '入院給付金日額' }, //70
                        { questionTitle: '契約の選択', label: 'ア', content: '契約内容登録制度' }, //71
                        { questionTitle: '契約の選択', label: 'イ', content: '面接' }, //72
                        { questionTitle: '契約申込み時の実務', label: 'ア', content: '承諾' }, //73
                        { questionTitle: '契約申込み時の実務', label: 'イ', content: '責任開始期' }, //74
                        { questionTitle: '契約申込み時の実務', label: 'ア', content: '8日' }, //75
                        { questionTitle: '契約申込み時の実務', label: 'ア', content: 'クーリング・オフ' }, //76
                        { questionTitle: '契約申込み時の実務', label: 'ア', content: 'お返しします' }, //77
                        { questionTitle: '相続の法律', label: 'ア', content: '2/3' }, //78
                        { questionTitle: '相続の法律', label: 'イ', content: '3/4' }, //79
                        { questionTitle: '相続の法律', label: 'ア', content: '放棄' }, //80
                        { questionTitle: '相続の法律', label: 'ア', content: '単純承認' }, //81
                        { questionTitle: '相続の法律', label: 'ア', content: 'みなし相続財産' }, //82
                    ]"
                />
            </div>
            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
