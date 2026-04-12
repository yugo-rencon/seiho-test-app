<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2024年1月〜6月実施 フォームD";
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
                    questionTitle="生命保険会社の仕組み-①"
                    :contents="[
                        '保険業法',
                        '免許',
                        '「基礎利益」', // 問6〜8
                    ]"
                    :labels="[
                        'イ', //6
                        'ウ', //7
                        'オ', //8
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="9〜10"
                    questionTitle="生命保険会社の仕組み-②"
                    :contents="[
                        '生命保険契約者保護機構',
                        '「相互会社」', // 問9〜10
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
                    questionTitle="資産の運用-①"
                    :contents="[
                        '公共性',
                        '長期', // 問11〜12
                    ]"
                    :labels="[
                        'ウ', //11
                        'イ', //12
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="13〜15"
                    questionTitle="資産の運用-②"
                    :contents="[
                        '公社債',
                        '住宅ローン',
                        '投資', // 問13〜15
                    ]"
                    :labels="[
                        'オ', //13
                        'エ', //14
                        'イ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜18"
                    questionTitle="生命保険の募集等に関する法律-①"
                    :contents="[
                        '生活',
                        '「金融サービスの提供に関する法律」',
                        '重要事項', // 問16〜18
                    ]"
                    :labels="[
                        'イ', //16
                        'ウ', //17
                        'オ', //18
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="19〜20"
                    questionTitle="生命保険の募集等に関する法律-②"
                    :contents="[
                        '個人情報',
                        '保護法', // 問19〜20
                    ]"
                    :labels="[
                        'イ', //19
                        'エ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜23"
                    questionTitle="保障の見直し-①"
                    :contents="[
                        '責任準備金',
                        '保険期間',
                        '追加', // 問21〜23
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
                    questionTitle="保障の見直し-②"
                    :contents="[
                        '契約者',
                        '転換時', // 問24〜25
                    ]"
                    :labels="[
                        'ア', //24
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
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の役割"
                    :contents="[
                        '',
                        '正しい',
                        '',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="照会・苦情時の対応"
                    :contents="[
                        '正しい',
                        '',
                        '正しい',
                        '',
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
                    questionTitle="契約取り扱いの手続き"
                    :contents="[
                        '正しい',
                        '正しい',
                        '20000円以上 → 50000円以上', //p43
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="コンプライアンスの重要性"
                    :contents="[
                        '正しい',
                        '正しい',
                        '保険法 → 保険業法', //p60
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の税法上の取り扱い"
                    :contents="[
                        '正しい',
                        '',
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
                            content: '',
                        }, //40
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '',
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
                            content: '',
                        }, //45
                        {
                            questionTitle: '企業向け商品',
                            content: '',
                        }, //46
                        {
                            questionTitle: '企業向け商品',
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '',
                        }, //49
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '正しい',
                        }, //50
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '正しい',
                        }, //51
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '',
                        }, //52
                        {
                            questionTitle: '保険金・給付金の請求と支払い',
                            content: '正しい',
                        }, //53
                        {
                            questionTitle: '保険金・給付金の請求と支払い',
                            content: '他の受取人に対しても支払わない → 残額を支払う', //p104
                        }, //54
                        {
                            questionTitle: '保険金・給付金の請求と支払い',
                            content: '正しい',
                        }, //55
                        {
                            questionTitle: '保険金・給付金の請求と支払い',
                            content: '正しい',
                        }, //56
                        {
                            questionTitle: '保険金・給付金の請求と支払い',
                            content: '正しい',
                        }, //57
                        {
                            questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）',
                            content: '',
                        }, //58
                        {
                            questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）',
                            content: '正しい',
                        }, //59
                        {
                            questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）',
                            content: '',
                        }, //60
                        {
                            questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）',
                            content: '正しい',
                        }, //61
                        {
                            questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）',
                            content: '',
                        }, //62
                        {
                            questionTitle: '相続の法律',
                            content: '',
                        }, //63
                        {
                            questionTitle: '相続の法律',
                            content: '正しい',
                        }, //64
                        {
                            questionTitle: '相続の法律',
                            content: '正しい',
                        }, //65
                        {
                            questionTitle: '相続の法律',
                            content: '正しい',
                        }, //66
                        {
                            questionTitle: '相続の法律',
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
                        { questionTitle: '生命保険の種類', label: 'イ', content: '生存保険' }, //73
                        { questionTitle: '生命保険の種類', label: 'イ', content: 'と同額' }, //74
                        { questionTitle: '生命保険の種類', label: 'ア', content: '定期保険' }, //75
                        { questionTitle: '生命保険の種類', label: 'イ', content: '保険金額' }, //76
                        { questionTitle: '生命保険の種類', label: 'ア', content: '特別勘定' }, //77
                        { questionTitle: '剰余金と配当金', label: 'ア', content: '費差益' }, //78
                        { questionTitle: '剰余金と配当金', label: 'イ', content: '割安' }, //79
                        { questionTitle: '剰余金と配当金', label: 'ア', content: '生命保険会社' }, //80
                        { questionTitle: '剰余金と配当金', label: 'ア', content: '一定割合' }, //81
                        { questionTitle: '剰余金と配当金', label: 'ア', content: '相殺' }, //82
                    ]"
                />
            </div>
            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
