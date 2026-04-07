<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2025年1月〜6月実施 フォームB";
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
                    :relatedProblems="[]"
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
                    :relatedProblems="[]"
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
                    questionTitle="剰余金と配当金-①"
                    :relatedProblems="[]"
                    :contents="[
                        '死差益',
                        '予定事業費率', // 問6〜7
                    ]"
                    :labels="[
                        'イ', //6
                        'ウ', //7
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="8〜10"
                    questionTitle="剰余金と配当金-②"
                    :relatedProblems="[]"
                    :contents="[
                        '契約者',
                        '生命保険会社',
                        '複利', // 問8〜10
                    ]"
                    :labels="[
                        'イ', //8
                        'エ', //9
                        'カ', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜12"
                    questionTitle="契約申込み時の実務-①"
                    :relatedProblems="[]"
                    :contents="[
                        '承諾',
                        '責任開始期', // 問11〜12
                    ]"
                    :labels="[
                        'エ', //11
                        'イ', //12
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="13〜15"
                    questionTitle="契約申込み時の実務-②"
                    :relatedProblems="[]"
                    :contents="[
                        '８日',
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
                    questionRange="16〜17"
                    questionTitle="正しい告知の取り扱い-①"
                    :relatedProblems="[]"
                    :contents="[
                        '契約確認',
                        '保険証券', // 問16〜17
                    ]"
                    :labels="[
                        'イ', //16
                        'エ', //17
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="18〜20"
                    questionTitle="正しい告知の取り扱い-②"
                    :relatedProblems="[]"
                    :contents="[
                        '解約返戻金があれば',
                        '１カ月',
                        '２年', // 問18〜20
                    ]"
                    :labels="[
                        'イ', //18
                        'ウ', //19
                        'カ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜22"
                    questionTitle="お客さまニーズへの対応-①"
                    :relatedProblems="[]"
                    :contents="[
                        'ライフサイクル',
                        '資金', // 問21〜22
                    ]"
                    :labels="[
                        'イ', //21
                        'ウ', //22
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="23〜25"
                    questionTitle="お客さまニーズへの対応-②"
                    :relatedProblems="[]"
                    :contents="[
                        '経済準備',
                        '保険設計書',
                        '設計', // 問23〜25
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
                    :relatedProblems="[]"
                    :contents="[
                        '７',
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
                    :relatedProblems="[]"
                    :contents="[
                        '正しい', //ア
                        '', //イ
                        '', //ウ
                        '正しい', //エ
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の募集等に関する法律"
                    :relatedProblems="[]"
                    :contents="[
                        '', //ア
                        '', //イ
                        '正しい', //ウ
                        '正しい', //エ
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="企業向け商品"
                    :relatedProblems="[]"
                    :contents="[
                        '', //ア
                        '正しい', //イ
                        '', //ウ
                        '正しい', //エ
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="34"
                    :title="title"
                    :subject="subject"
                    questionTitle="保全・アフターサービス手続きと留意点"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい', //ア
                        '正しい', //イ
                        '', //ウ
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="35"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産の運用"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい', //ア
                        '正しい', //イ
                        '', //ウ
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="保障の見直し"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい', //ア
                        '正しい', //イ
                        '', //ウ
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続の法律"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい', //ア
                        '', //イ
                        '正しい', //ウ
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
                            relatedProblems: [''],
                        }, //38 正
                        {
                            questionTitle: '生命保険の役割',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //39 正
                        {
                            questionTitle: '生命保険の役割',
                            content: '',
                            relatedProblems: [''],
                        }, //40 誤
                        {
                            questionTitle: '生命保険の役割',
                            content: '',
                            relatedProblems: [''],
                        }, //41 誤
                        {
                            questionTitle: '生命保険の役割',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //42 正
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //43 正
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //44 正
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //45 正
                        {
                            questionTitle: '保険料の払い込み',
                            content: '',
                            relatedProblems: [''],
                        }, //46 誤
                        {
                            questionTitle: '保険料の払い込み',
                            content: '',
                            relatedProblems: [''],
                        }, //47 誤
                        {
                            questionTitle: '生命保険の種類',
                            content: '',
                            relatedProblems: [''],
                        }, //48 誤
                        {
                            questionTitle: '生命保険の種類',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //49 正
                        {
                            questionTitle: '生命保険の種類',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //50 正
                        {
                            questionTitle: '生命保険の種類',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //51 正
                        {
                            questionTitle: '生命保険の種類',
                            content: '',
                            relatedProblems: [''],
                        }, //52 誤
                        {
                            questionTitle: '隣接業界',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //53 正
                        {
                            questionTitle: '隣接業界',
                            content: '',
                            relatedProblems: [''],
                        }, //54 誤
                        {
                            questionTitle: '隣接業界',
                            content: '',
                            relatedProblems: [''],
                        }, //55 誤
                        {
                            questionTitle: '隣接業界',
                            content: '',
                            relatedProblems: [''],
                        }, //56 誤
                        {
                            questionTitle: '隣接業界',
                            content: '',
                            relatedProblems: [''],
                        }, //57 誤
                        {
                            questionTitle: '社会保障制度',
                            content: '',
                            relatedProblems: [''],
                        }, //58 誤
                        {
                            questionTitle: '社会保障制度',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //59 正
                        {
                            questionTitle: '社会保障制度',
                            content: '',
                            relatedProblems: [''],
                        }, //60 誤
                        {
                            questionTitle: '社会保障制度',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //61 正
                        {
                            questionTitle: '社会保障制度',
                            content: '',
                            relatedProblems: [''],
                        }, //62 誤
                        {
                            questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）',
                            content: '',
                            relatedProblems: [''],
                        }, //63 誤
                        {
                            questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //64 正
                        {
                            questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //65 正
                        {
                            questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）',
                            content: '',
                            relatedProblems: [''],
                        }, //66 誤
                        {
                            questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //67 正
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
                        { questionTitle: '生命保険会社の仕組み', label: 'ア', content: '予測を超えて' }, //73
                        { questionTitle: '生命保険会社の仕組み', label: 'イ', content: '責任準備金' }, //74
                        { questionTitle: '生命保険会社の仕組み', label: 'イ', content: '契約者' }, //75
                        { questionTitle: '生命保険会社の仕組み', label: 'ア', content: '契約者本位' }, //76
                        { questionTitle: '生命保険会社の仕組み', label: 'イ', content: '内閣総理大臣' }, //77
                        { questionTitle: '契約の選択', label: 'イ', content: '環境上' }, //78
                        { questionTitle: '契約の選択', label: 'ア', content: '保険金や特約' }, //79
                        { questionTitle: '契約の選択', label: 'イ', content: '入院給付金日額' }, //80
                        { questionTitle: '契約の選択', label: 'ア', content: '契約内容登録制度' }, //81
                        { questionTitle: '契約の選択', label: 'イ', content: '面接' }, //82
                    ]"
                />
            </div>
            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
