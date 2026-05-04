<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2023年7月〜12月実施 フォームC";
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
                        '農林水産省',
                        '終身共済',
                        '1年', // 問1〜3
                    ]"
                    :labels="[
                        'ア', //1
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
                        '定期年金', // 問4〜5
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
                    questionTitle="剰余金と配当金-①"
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
                    questionRange="11〜13"
                    questionTitle="保険料の払い込み-①"
                    :contents="[
                        '一時払',
                        '前納',
                        '生命保険会社', // 問11〜13
                    ]"
                    :labels="[
                        'ア', //11
                        'エ', //12
                        'オ', //13
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="14〜15"
                    questionTitle="保険料の払い込み-②"
                    :contents="[
                        '振替送金',
                        'できます', // 問14〜15
                    ]"
                    :labels="[
                        'ア', //14
                        'エ', //15
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
                    questionRange="21〜22"
                    questionTitle="企業向け商品-①"
                    :contents="[
                        '1年',
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
                    :contents="[
                        '4',
                        '37',
                        '55',
                        '34',
                        '家族の生活資金＋妻の生活資金', // 問26〜30
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
                    questionTitle="契約の選択"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="私たちの役割と心がまえ"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '', //p
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
                        'すでに払い込まれた保険料 → 解約返戻金', //p86
                        'すでに払い込んだ保険料は返還される → すでに払い込んだ保険料は返還されない', //p87
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="34"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約取り扱いの手続き"
                    :contents="[
                        '平均年齢 → 保険年齢', //p41
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="35"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の仕組み"
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
                    questionTitle="コンプライアンスの重要性"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の税法上の取り扱い"
                    :contents="[
                        '', //p
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
                            questionTitle: '生命保険会社の仕組み',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '保険事業と銀行業だけ → 保険事業だけ', //p32
                        }, //41
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '生命保険以外の事業を自由に営むことができる → 他の事業を営むことが制限されている', //p33
                        }, //42
                        {
                            questionTitle: '社会保障制度',
                            content: '', //p
                        }, //43
                        {
                            questionTitle: '社会保障制度',
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '社会保障制度',
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '社会保障制度',
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '社会保障制度',
                            content: '', //p
                        }, //47
                        {
                            questionTitle: '資産の運用',
                            content: '積極的な資産運用をしなければならず、安全性に配慮して運用する必要はない → 効率的で安定した資産運用をしなければならない', //p34
                        }, //48
                        {
                            questionTitle: '資産の運用',
                            content: '正しい',
                        }, //49
                        {
                            questionTitle: '資産の運用',
                            content: '正しい',
                        }, //50
                        {
                            questionTitle: '資産の運用',
                            content: '正しい',
                        }, //51
                        {
                            questionTitle: '資産の運用',
                            content: '自社の営業用のものに限られる → 自社の営業用のものと投資用のものがある', //p35
                        }, //52
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '', //p
                        }, //53
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '正しい',
                        }, //54
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '正しい',
                        }, //55
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '', //p
                        }, //56
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '正しい',
                        }, //57
                        {
                            questionTitle: '相続の法律',
                            content: '', //p
                        }, //58
                        {
                            questionTitle: '相続の法律',
                            content: '正しい',
                        }, //59
                        {
                            questionTitle: '相続の法律',
                            content: '正しい',
                        }, //60
                        {
                            questionTitle: '相続の法律',
                            content: '', //p
                        }, //61
                        {
                            questionTitle: '相続の法律',
                            content: '正しい',
                        }, //62
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
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
                            content: '', //p
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
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'ア', content: '注意喚起情報' }, //68
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'イ', content: '個人情報' }, //69
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'イ', content: '公序良俗' }, //70
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'ア', content: '復活日' }, //71
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'ア', content: '故意に' }, //72
                        { questionTitle: '生命保険の役割', label: 'ア', content: '明治時代' }, //73
                        { questionTitle: '生命保険の役割', label: 'イ', content: '自己' }, //74
                        { questionTitle: '生命保険の役割', label: 'イ', content: '平均余命' }, //75
                        { questionTitle: '生命保険の役割', label: 'ア', content: '弔慰金制度' }, //76
                        { questionTitle: '生命保険の役割', label: 'イ', content: '3倍以上' }, //77
                        { questionTitle: '生命保険の種類', label: 'ア', content: '定期保険' }, //78
                        { questionTitle: '生命保険の種類', label: 'イ', content: '生存保険' }, //79
                        { questionTitle: '生命保険の種類', label: 'イ', content: '大きくする' }, //80
                        { questionTitle: '生命保険の種類', label: 'ア', content: '特別勘定' }, //81
                        { questionTitle: '生命保険の種類', label: 'ア', content: '保証されています' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
