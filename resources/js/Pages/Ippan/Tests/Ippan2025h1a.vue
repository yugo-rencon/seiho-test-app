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
                    questionTitle="資産の運用-①"
                    :relatedProblems="[]"
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
                    :relatedProblems="[]"
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
                    :relatedProblems="[]"
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
                    :relatedProblems="[]"
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
                    :relatedProblems="[]"
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
                    :relatedProblems="[]"
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
                    :relatedProblems="[]"
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
                    :relatedProblems="[]"
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
                    questionTitle="契約申込時の実務"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい', //ア
                        '正しい', //イ
                        '', //ウ
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
                        '正しい', //ア
                        '', //イ
                        '正しい', //ウ
                        '', //エ
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
                    questionTitle="生命保険会社の仕組み"
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
                    questionTitle="企業向け商品"
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
                    questionTitle="保険料の税法上の取り扱い"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい', //ア
                        '正しい', //イ
                        '', //ウ
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
                            questionTitle: '契約取り扱いの手続き',
                            content: '',
                            relatedProblems: [''],
                        }, //48 誤
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '',
                            relatedProblems: [''],
                        }, //49 誤
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //50 正
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '',
                            relatedProblems: [''],
                        }, //51 誤
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //52 正
                        {
                            questionTitle: '契約の選択',
                            content: '',
                            relatedProblems: [''],
                        }, //53 誤
                        {
                            questionTitle: '契約の選択',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //54 正
                        {
                            questionTitle: '契約の選択',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //55 正
                        {
                            questionTitle: '契約の選択',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //56 正
                        {
                            questionTitle: '契約の選択',
                            content: '',
                            relatedProblems: [''],
                        }, //57 誤
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '',
                            relatedProblems: [''],
                        }, //58 誤
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //59 正
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //60 正
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '',
                            relatedProblems: [''],
                        }, //61 誤
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //62 正
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '',
                            relatedProblems: [''],
                        }, //63 誤
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //64 正
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //65 正
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //66 正
                        {
                            questionTitle: 'お客さまニーズへの対応',
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
