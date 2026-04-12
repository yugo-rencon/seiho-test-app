<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2024年7月〜12月実施 フォームB";
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
                    questionTitle="資産の運用-①"
                    :contents="[
                        '公共性',
                        '長期', // 問1〜2
                    ]"
                    :labels="[
                        'ウ', //1
                        'イ', //2
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="3〜5"
                    questionTitle="資産の運用-②"
                    :contents="[
                        '公社債',
                        '住宅ローン',
                        '投資', // 問3〜5
                    ]"
                    :labels="[
                        'オ', //3
                        'エ', //4
                        'イ', //5
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="6〜8"
                    questionTitle="生命保険の募集等に関する法律-①"
                    :contents="[
                        '契約者',
                        '内閣総理大臣',
                        '告知義務違反', // 問6〜8
                    ]"
                    :labels="[
                        'ア', //6
                        'ウ', //7
                        'カ', //8
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="9〜10"
                    questionTitle="生命保険の募集等に関する法律-②"
                    :contents="[
                        '1年',
                        '5年', // 問9〜10
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
                    questionTitle="正しい告知の取り扱い-①"
                    :contents="[
                        '契約確認',
                        '保険証券', // 問11〜12
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
                    questionTitle="正しい告知の取り扱い-②"
                    :contents="[
                        '解約返戻金があれば',
                        '1カ月',
                        '2年', // 問13〜15
                    ]"
                    :labels="[
                        'イ', //13
                        'ウ', //14
                        'カ', //15
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
                        'イ', //16
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
                        '転換時', // 問19〜20
                    ]"
                    :labels="[
                        'ア', //19
                        'ウ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜23"
                    questionTitle="保険料の税法上の取り扱い-①"
                    :contents="[
                        '契約者（保険料負担者）',
                        '住民税',
                        '5年', // 問21〜23
                    ]"
                    :labels="[
                        'オ', //21
                        'ア', //22
                        'エ', //23
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="24〜25"
                    questionTitle="保険料の税法上の取り扱い-②"
                    :contents="[
                        '50000円',
                        '40000円', // 問24〜25
                    ]"
                    :labels="[
                        'ウ', //24
                        'イ', //25
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
                        '34',
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
                <QuestionTemp1 :questionNumber="31" :title="title" :subject="subject" questionTitle="照会・苦情時の対応" :contents="['正しい', '', '正しい', '']" />
                <QuestionTemp1 :questionNumber="32" :title="title" :subject="subject" questionTitle="契約の選択" :contents="['', '正しい', '正しい', '']" />
                <QuestionTemp1 :questionNumber="33" :title="title" :subject="subject" questionTitle="相続の法律" :contents="['正しい', '', '正しい', '']" />
                <QuestionTemp1 :questionNumber="34" :title="title" :subject="subject" questionTitle="契約申込み時の実務" :contents="['正しい', '正しい', '']" />
                <QuestionTemp1 :questionNumber="35" :title="title" :subject="subject" questionTitle="生命保険の仕組み" :contents="['', '正しい', '正しい']" />
                <QuestionTemp1 :questionNumber="36" :title="title" :subject="subject" questionTitle="保全・アフターサービスの重要性" :contents="['正しい', '正しい', '']" />
                <QuestionTemp1 :questionNumber="37" :title="title" :subject="subject" questionTitle="保険金・給付金の税法上の取り扱い（一時金で受け取った場合）" :contents="['', '正しい', '正しい']" />
                <QuestionTemp2
                    :questionNumber="38"
                    :title="title"
                    :subject="subject"
                    :useAnswerLabelForAll="true"
                    :items="[
                        // 問38〜67
                        {
                            questionTitle: '生命保険の種類',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '生命保険の種類',
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '生命保険の種類',
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '生命保険の種類',
                            content: '',
                        }, //41
                        {
                            questionTitle: '生命保険の種類',
                            content: '',
                        }, //42
                        {
                            questionTitle: '隣接業界',
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '隣接業界',
                            content: '',
                        }, //44
                        {
                            questionTitle: '隣接業界',
                            content: '',
                        }, //45
                        {
                            questionTitle: '隣接業界',
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '隣接業界',
                            content: '',
                        }, //47
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '剰余金と配当金',
                            content: '',
                        }, //49
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //50
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //51
                        {
                            questionTitle: '剰余金と配当金',
                            content: '',
                        }, //52
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '通称名でもよい → 戸籍等の公的書類記載のものを記入', //p40
                        }, //53
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                        }, //54
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                        }, //55
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '40000円以上 → 50000円以上<br>100円の収入印紙 → 200円の収入印紙', //p43
                        }, //56
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '回収する必要はない → 必ず回収する', //p43
                        }, //57
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '正しい',
                        }, //58
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '正しい',
                        }, //59
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '正しい',
                        }, //60
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '正しい',
                        }, //61
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '',
                        }, //62
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '正しい',
                        }, //63
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '正しい',
                        }, //64
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '正しい',
                        }, //65
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '',
                        }, //66
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
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
                        { questionTitle: '社会保障制度', label: 'イ', content: '生活保護法' }, //68
                        { questionTitle: '社会保障制度', label: 'ア', content: '全国民' }, //69
                        { questionTitle: '社会保障制度', label: 'イ', content: '20歳' }, //70
                        { questionTitle: '社会保障制度', label: 'イ', content: '報酬比例' }, //71
                        { questionTitle: '社会保障制度', label: 'イ', content: '強制加入' }, //72
                        { questionTitle: '生命保険会社の仕組み', label: 'ア', content: '200％' }, //73
                        { questionTitle: '生命保険会社の仕組み', label: 'イ', content: '基礎利益' }, //74
                        { questionTitle: '生命保険会社の仕組み', label: 'イ', content: '契約者' }, //75
                        { questionTitle: '生命保険会社の仕組み', label: 'ア', content: '契約者本位' }, //76
                        { questionTitle: '生命保険会社の仕組み', label: 'イ', content: '内閣総理大臣' }, //77
                        { questionTitle: '企業向け商品', label: 'ア', content: '1年' }, //78
                        { questionTitle: '企業向け商品', label: 'ア', content: '確定拠出年金' }, //79
                        { questionTitle: '企業向け商品', label: 'ア', content: '企業（団体）' }, //80
                        { questionTitle: '企業向け商品', label: 'イ', content: '財形貯蓄積立保険' }, //81
                        { questionTitle: '企業向け商品', label: 'ア', content: '一部負担制' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
