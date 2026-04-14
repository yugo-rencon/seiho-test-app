<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2024年1月〜6月実施 フォームB";
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
                    questionTitle="私たちの役割と心がまえ-①"
                    :contents="[
                        '継続',
                        '保険業法',
                        '所属生命保険会社', // 問6〜8
                    ]"
                    :labels="[
                        'オ', //6
                        'ア', //7
                        'エ', //8
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="9〜10"
                    questionTitle="私たちの役割と心がまえ-②"
                    :contents="[
                        '適切な情報提供',
                        '社会的', // 問9〜10
                    ]"
                    :labels="[
                        'エ', //9
                        'イ', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜13"
                    questionTitle="資産の運用-①"
                    :contents="[
                        '配当金',
                        '安全',
                        '公共性', // 問11〜13
                    ]"
                    :labels="[
                        'イ', //11
                        'ウ', //12
                        'オ', //13
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="14〜15"
                    questionTitle="資産の運用-②"
                    :contents="[
                        '長期',
                        '投資', // 問14〜15
                    ]"
                    :labels="[
                        'イ', //14
                        'エ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜17"
                    questionTitle="募集時の正しい説明-①"
                    :contents="[
                        '約款',
                        '内閣総理大臣', // 問16〜17
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
                    questionTitle="募集時の正しい説明-②"
                    :contents="[
                        '「契約概要」',
                        'いただく前に',
                        '自己責任', // 問18〜20
                    ]"
                    :labels="[
                        'ア', //18
                        'エ', //19
                        'カ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜23"
                    questionTitle="相続の法律-①"
                    :contents="[
                        '2/3',
                        '3/4',
                        '相続の放棄', // 問21〜23
                    ]"
                    :labels="[
                        'イ', //21
                        'エ', //22
                        'オ', //23
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="24〜25"
                    questionTitle="相続の法律-②"
                    :contents="[
                        '限定',
                        'みなし', // 問24〜25
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
                <QuestionTemp1 :questionNumber="32" :title="title" :subject="subject" questionTitle="生命保険の役割" :contents="['', '', '正しい', '正しい']" />
                <QuestionTemp1 :questionNumber="33" :title="title" :subject="subject" questionTitle="保険料の税法上の取り扱い" :contents="['', '正しい', '正しい', '']" />
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
                    questionTitle="契約取り扱いの手続き"
                    :contents="[
                        '平均年齢 → 保険年齢', //p41
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1 :questionNumber="36" :title="title" :subject="subject" questionTitle="照会・苦情時の対応" :contents="['正しい', '正しい', '']" />
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
                            questionTitle: '生命保険の種類',
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '生命保険の種類',
                            content: '正しい',
                        }, //49
                        {
                            questionTitle: '生命保険の種類',
                            content: '正しい',
                        }, //50
                        {
                            questionTitle: '生命保険の種類',
                            content: '正しい',
                        }, //51
                        {
                            questionTitle: '生命保険の種類',
                            content: '',
                        }, //52
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '正しい',
                        }, //53
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '正しい',
                        }, //54
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '12日以内 → 8日以内', //p47
                        }, //55
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '正しい',
                        }, //56
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '契約者および被保険者、保険金受取人に説明 → 契約者に説明', //p48
                        }, //57
                        {
                            questionTitle: '保障の見直し',
                            content: '正しい',
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
                            content: '',
                        }, //61
                        {
                            questionTitle: '保障の見直し',
                            content: '',
                        }, //62
                        {
                            questionTitle: '保険金・給付金の請求と支払い（保険金・給付金を支払わない場合）',
                            content: '正しい',
                        }, //63
                        {
                            questionTitle: '保険金・給付金の請求と支払い（保険金・給付金を支払わない場合）',
                            content: '他の受取人に対しても支払わない → 残額を支払う', //p104
                        }, //64
                        {
                            questionTitle: '保険金・給付金の請求と支払い（保険金・給付金を支払わない場合）',
                            content: '正しい',
                        }, //65
                        {
                            questionTitle: '保険金・給付金の請求と支払い（保険金・給付金を支払わない場合）',
                            content: '正しい',
                        }, //66
                        {
                            questionTitle: '保険金・給付金の請求と支払い（保険金・給付金を支払わない場合）',
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
                        { questionTitle: '隣接業界', label: 'ア', content: '終身共済' }, //73
                        { questionTitle: '隣接業界', label: 'イ', content: '厚生労働省' }, //74
                        { questionTitle: '隣接業界', label: 'ア', content: '1000万円以下' }, //75
                        { questionTitle: '隣接業界', label: 'ア', content: '所得補償保険' }, //76
                        { questionTitle: '隣接業界', label: 'ア', content: '定期年金' }, //77
                        { questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）', label: 'ア', content: '贈与税' }, //78
                        { questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）', label: 'イ', content: '所得税' }, //79
                        { questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）', label: 'ア', content: '110万円' }, //80
                        { questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）', label: 'イ', content: '500万円' }, //81
                        { questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）', label: 'ア', content: '非課税' }, //82
                    ]"
                />
            </div>
            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
