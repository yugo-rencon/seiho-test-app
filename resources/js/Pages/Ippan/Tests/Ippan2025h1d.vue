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
                    questionRange="6〜8"
                    questionTitle="生命保険の種類-①"
                    :relatedProblems="[]"
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
                    :relatedProblems="[]"
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
                    :relatedProblems="[]"
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
                    :relatedProblems="[]"
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
                    :relatedProblems="[]"
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
                    :relatedProblems="[]"
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
                    :relatedProblems="[]"
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
                    :relatedProblems="[]"
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
                    questionTitle="資産の運用"
                    :relatedProblems="[]"
                    :contents="[
                        '', //ア
                        '正しい', //イ
                        '正しい', //ウ
                        '', //エ
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続の法律"
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
                    questionTitle="生命保険の募集等に関する法律"
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
                    questionTitle="保険金・給付金の税法上の取り扱い（一時金で受け取った場合）"
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
                    questionTitle="お客さまニーズへの対応"
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
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //48 正
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //49 正
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //50 正
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //51 正
                        {
                            questionTitle: '剰余金と配当金',
                            content: '',
                            relatedProblems: [''],
                        }, //52 誤
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '',
                            relatedProblems: [''],
                        }, //53 誤
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //54 正
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '',
                            relatedProblems: [''],
                        }, //55 誤
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '',
                            relatedProblems: [''],
                        }, //56 誤
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '',
                            relatedProblems: [''],
                        }, //57 誤
                        {
                            questionTitle: '保障の見直し',
                            content: '',
                            relatedProblems: [''],
                        }, //58 誤
                        {
                            questionTitle: '保障の見直し',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //59 正
                        {
                            questionTitle: '保障の見直し',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //60 正
                        {
                            questionTitle: '保障の見直し',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //61 正
                        {
                            questionTitle: '保障の見直し',
                            content: '',
                            relatedProblems: [''],
                        }, //62 誤
                        {
                            questionTitle: '隣接業界',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //63 正
                        {
                            questionTitle: '隣接業界',
                            content: '',
                            relatedProblems: [''],
                        }, //64 誤
                        {
                            questionTitle: '隣接業界',
                            content: '',
                            relatedProblems: [''],
                        }, //65 誤
                        {
                            questionTitle: '隣接業界',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //66 正
                        {
                            questionTitle: '隣接業界',
                            content: '',
                            relatedProblems: [''],
                        }, //67 誤
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
