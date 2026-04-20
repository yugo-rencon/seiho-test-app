<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2023年1月〜6月実施 フォームA";
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
                    questionRange="11〜12"
                    questionTitle="契約申込み時の実務-①"
                    :contents="[
                        '承諾',
                        '責任開始期', // 問11〜12
                    ]"
                    :labels="[
                        'エ', //11
                        'ア', //12
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="13〜15"
                    questionTitle="契約申込み時の実務-②"
                    :contents="[
                        '8日',
                        'クーリング・オフ',
                        '既払込金額', // 問13〜15
                    ]"
                    :labels="[
                        'ウ', //13
                        'オ', //14
                        'ア', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜18"
                    questionTitle="契約の選択-①"
                    :contents="[
                        '環境',
                        '契約内容登録制度',
                        '面接', // 問16〜18
                    ]"
                    :labels="[
                        'イ', //16
                        'オ', //17
                        'ウ', //18
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="19〜20"
                    questionTitle="契約の選択-①"
                    :contents="[
                        '保険金削減',
                        '特別条件', // 問19〜20
                    ]"
                    :labels="[
                        'ウ', //19
                        'イ', //20
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
                        'ウ', //21
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
                        'エ', //24
                        'ア', //25
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="26〜30"
                    questionTitle="保険料の仕組み（収支相等の原則）"
                    :contents="[
                        '2',
                        '4,000',
                        '1,000',
                        '4',
                        '4,000', // 問26〜30
                    ]"
                    :labels="[
                        'イ', //26
                        'ケ', //27
                        'カ', //28
                        'ウ', //29
                        'ケ', //30
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金・給付金の税法上の取り扱い（一時金で受け取った場合）"
                    :contents="[
                        '正しい', //p
                        '', //p
                        '', //p
                        '正しい', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の払い込み"
                    :contents="[
                        '正しい', //p
                        '正しい', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の募集等に関する法律"
                    :contents="[
                        '正しい', //p
                        '正しい', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="34"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金・給付金の請求と支払い"
                    :contents="[
                        '正しい', //p
                        '', //p
                        '正しい', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="35"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産の運用"
                    :contents="[
                        '', //p
                        '正しい', //p
                        '正しい', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="保障の見直し"
                    :contents="[
                        '正しい', //p
                        '', //p
                        '正しい', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="保全・アフターサービス手続きと留意点"
                    :contents="[
                        '正しい', //p
                        '正しい', //p
                        '', //p
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
                            content: '正しい', //p
                        }, //38
                        {
                            questionTitle: '生命保険の役割',
                            content: '正しい', //p
                        }, //39
                        {
                            questionTitle: '生命保険の役割',
                            content: '', //p
                        }, //40
                        {
                            questionTitle: '生命保険の役割',
                            content: '', //p
                        }, //41
                        {
                            questionTitle: '生命保険の役割',
                            content: '正しい', //p
                        }, //42
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい', //p
                        }, //43
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい', //p
                        }, //44
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい', //p
                        }, //45
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい', //p
                        }, //46
                        {
                            questionTitle: '剰余金と配当金',
                            content: '', //p
                        }, //47
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '正しい', //p
                        }, //48
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '正しい', //p
                        }, //49
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '正しい', //p
                        }, //50
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '', //p
                        }, //51
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '', //p
                        }, //52
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい', //p
                        }, //53
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '', //p
                        }, //54
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '', //p
                        }, //55
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい', //p
                        }, //56
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい', //p
                        }, //57
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '', //p
                        }, //58
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい', //p
                        }, //59
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい', //p
                        }, //60
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '', //p
                        }, //61
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい', //p
                        }, //62
                        {
                            questionTitle: '企業向け商品',
                            content: '正しい', //p
                        }, //63
                        {
                            questionTitle: '企業向け商品',
                            content: '正しい', //p
                        }, //64
                        {
                            questionTitle: '企業向け商品',
                            content: '', //p
                        }, //65
                        {
                            questionTitle: '企業向け商品',
                            content: '正しい', //p
                        }, //66
                        {
                            questionTitle: '企業向け商品',
                            content: '', //p
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
                        { questionTitle: '隣接業界', label: 'ア', content: '終身共済' }, //68
                        { questionTitle: '隣接業界', label: 'イ', content: '厚生労働省' }, //69
                        { questionTitle: '隣接業界', label: 'イ', content: '1,000万円' }, //70
                        { questionTitle: '隣接業界', label: 'ア', content: '所得補償保険' }, //71
                        { questionTitle: '隣接業界', label: 'ア', content: '定期年金' }, //72
                        { questionTitle: '生命保険の種類', label: 'ア', content: '定期保険' }, //73
                        { questionTitle: '生命保険の種類', label: 'イ', content: '生存保険' }, //74
                        { questionTitle: '生命保険の種類', label: 'イ', content: '大きくする' }, //75
                        { questionTitle: '生命保険の種類', label: 'ア', content: '特別勘定' }, //76
                        { questionTitle: '生命保険の種類', label: 'ア', content: '保証されています' }, //77
                        { questionTitle: '社会保障制度', label: 'イ', content: '生活保護法' }, //78
                        { questionTitle: '社会保障制度', label: 'ア', content: '全国民' }, //79
                        { questionTitle: '社会保障制度', label: 'イ', content: '強制加入' }, //80
                        { questionTitle: '社会保障制度', label: 'イ', content: '20歳' }, //81
                        { questionTitle: '社会保障制度', label: 'イ', content: '障害' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
