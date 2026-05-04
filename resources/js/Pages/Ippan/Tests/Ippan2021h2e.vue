<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2021年7月〜12月実施 フォーム⑤";
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
                    questionTitle="隣接業界-①"
                    :contents="[
                        '終身共済',
                        '厚生労働省',
                        '小口', // 問1〜3
                    ]"
                    :labels="[
                        'イ', //1
                        'エ', //2
                        'オ', //3
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="4〜5"
                    questionTitle="隣接業界-②"
                    :contents="[
                        '1年',
                        '1000万円', // 問4〜5
                    ]"
                    :labels="[
                        'ア', //4
                        'ウ', //5
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="6〜7"
                    questionTitle="生命保険の仕組み-①"
                    :contents="[
                        '相互扶助',
                        '準備財産', // 問6〜7
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
                    questionTitle="生命保険の仕組み-②"
                    :contents="[
                        '大数の法則',
                        '生命表',
                        '死亡率', // 問8〜10
                    ]"
                    :labels="[
                        'オ', //8
                        'ウ', //9
                        'ア', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜13"
                    questionTitle="契約取り扱いの手続き-①"
                    :contents="[
                        '戸籍等の公的書類記載の',
                        '被保険者',
                        '保険年齢', // 問11〜13
                    ]"
                    :labels="[
                        'オ', //11
                        'エ', //12
                        'イ', //13
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="14〜15"
                    questionTitle="契約取り扱いの手続き-②"
                    :contents="[
                        '正確なものを新しく発行',
                        '50000円', // 問14〜15
                    ]"
                    :labels="[
                        'ウ', //14
                        'イ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜17"
                    questionTitle="契約の選択-①"
                    :contents="[
                        '環境',
                        '契約内容登録制度', // 問16〜17
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
                    questionTitle="契約の選択-②"
                    :contents="[
                        '面接',
                        '割増保険料',
                        '特別条件', // 問18〜20
                    ]"
                    :labels="[
                        'ア', //18
                        'ウ', //19
                        'カ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜22"
                    questionTitle="保全・アフターサービス手続きと留意点-①"
                    :contents="[
                        '契約者貸付',
                        '（自動）振替貸付', // 問21〜22
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
                    questionTitle="保全・アフターサービス手続きと留意点-②"
                    :contents="[
                        '消滅します',
                        '短く',
                        '減額', // 問23〜25
                    ]"
                    :labels="[
                        'ア', //23
                        'ウ', //24
                        'オ', //25
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="26〜30"
                    questionTitle="設計販売の基礎"
                    :contents="[
                        '5',
                        '34',
                        '51',
                        '38',
                        '家族の生活資金 + 妻の生活資金', // 問26〜30
                    ]"
                    :labels="[
                        'ア', //26
                        'ウ', //27
                        'ク', //28
                        'カ', //29
                        'ケ', //30
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の役割"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="募集時の正しい説明"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="正しい告知の取り扱い"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="34"
                    :title="title"
                    :subject="subject"
                    questionTitle="私たちの役割と心がまえ"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="35"
                    :title="title"
                    :subject="subject"
                    questionTitle="コンプライアンスの重要性"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="保全・アフターサービスの重要性"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金・給付金の請求と支払い"
                    :contents="[
                        '正しい',
                        '', //p
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
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '', //p
                        }, //39
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '', //p
                        }, //42
                        {
                            questionTitle: '相続の法律',
                            content: '', //p
                        }, //43
                        {
                            questionTitle: '相続の法律',
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '相続の法律',
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '相続の法律',
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '相続の法律',
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '生命保険の種類',
                            content: '', //p
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
                            content: '', //p
                        }, //52
                        {
                            questionTitle: '保障の見直し',
                            content: '正しい',
                        }, //53
                        {
                            questionTitle: '保障の見直し',
                            content: '正しい',
                        }, //54
                        {
                            questionTitle: '保障の見直し',
                            content: '正しい',
                        }, //55
                        {
                            questionTitle: '保障の見直し',
                            content: '正しい',
                        }, //56
                        {
                            questionTitle: '保障の見直し',
                            content: '', //p
                        }, //57
                        {
                            questionTitle: '照会・苦情時の対応',
                            content: '正しい',
                        }, //58
                        {
                            questionTitle: '照会・苦情時の対応',
                            content: '', //p
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
                            content: '', //p
                        }, //62
                        {
                            questionTitle: '企業向け商品',
                            content: '', //p
                        }, //63
                        {
                            questionTitle: '企業向け商品',
                            content: '正しい',
                        }, //64
                        {
                            questionTitle: '企業向け商品',
                            content: '正しい',
                        }, //65
                        {
                            questionTitle: '企業向け商品',
                            content: '', //p
                        }, //66
                        {
                            questionTitle: '企業向け商品',
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
                        { questionTitle: '生命保険会社の仕組み', label: 'ア', content: '200%' }, //68
                        { questionTitle: '生命保険会社の仕組み', label: 'イ', content: '責任準備金' }, //69
                        { questionTitle: '生命保険会社の仕組み', label: 'イ', content: '契約者' }, //70
                        { questionTitle: '生命保険会社の仕組み', label: 'ア', content: '契約者本位' }, //71
                        { questionTitle: '生命保険会社の仕組み', label: 'イ', content: '内閣総理大臣' }, //72
                        { questionTitle: '保険料の払い込み', label: 'イ', content: '一時払' }, //73
                        { questionTitle: '保険料の払い込み', label: 'イ', content: '前納' }, //74
                        { questionTitle: '保険料の払い込み', label: 'ア', content: '生命保険会社' }, //75
                        { questionTitle: '保険料の払い込み', label: 'イ', content: '契約者' }, //76
                        { questionTitle: '保険料の払い込み', label: 'ア', content: 'できます' }, //77
                        { questionTitle: 'お客さまニーズへの対応', label: 'イ', content: 'ライフサイクル' }, //78
                        { questionTitle: 'お客さまニーズへの対応', label: 'ア', content: '生活' }, //79
                        { questionTitle: 'お客さまニーズへの対応', label: 'ア', content: '40歳' }, //80
                        { questionTitle: 'お客さまニーズへの対応', label: 'イ', content: '計画的' }, //81
                        { questionTitle: 'お客さまニーズへの対応', label: 'イ', content: '生活設計書' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
