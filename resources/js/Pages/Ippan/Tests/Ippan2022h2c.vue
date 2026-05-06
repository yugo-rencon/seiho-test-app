<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2022年7月〜12月実施 フォームC";
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
                    questionTitle="私たちの役割と心がまえ-①"
                    :contents="[
                        '税務',
                        'アフターサービス',
                        '継続', // 問1〜3
                    ]"
                    :labels="[
                        'ア', //1
                        'ウ', //2
                        'エ', //3
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="4〜5"
                    questionTitle="私たちの役割と心がまえ-②"
                    :contents="[
                        '保険業法',
                        '行動規範', // 問4〜5
                    ]"
                    :labels="[
                        'ア', //4
                        'エ', //5
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="6〜7"
                    questionTitle="正しい告知の取り扱い-①"
                    :contents="[
                        '契約確認',
                        '保険証券', // 問6〜7
                    ]"
                    :labels="[
                        'ア', //6
                        'ウ', //7
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="8〜10"
                    questionTitle="正しい告知の取り扱い-②"
                    :contents="[
                        '2年',
                        '1ヶ月',
                        '取消し', // 問8〜10
                    ]"
                    :labels="[
                        'イ', //8
                        'ウ', //9
                        'オ', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜12"
                    questionTitle="保全・アフターサービス手続きと留意点-①"
                    :contents="[
                        '契約者貸付',
                        '利息', // 問11〜12
                    ]"
                    :labels="[
                        'ア', //11
                        'エ', //12
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="13〜15"
                    questionTitle="保全・アフターサービス手続きと留意点-②"
                    :contents="[
                        '消滅します',
                        'を超える',
                        '減額', // 問13〜15
                    ]"
                    :labels="[
                        'ア', //13
                        'ウ', //14
                        'カ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜17"
                    questionTitle="保険金・給付金の請求と支払い-①"
                    :contents="[
                        '保険料',
                        '公序良俗', // 問16〜17
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
                    questionTitle="保険金・給付金の請求と支払い-②"
                    :contents="[
                        '契約日',
                        '故意',
                        '戦争その他の変乱', // 問18〜20
                    ]"
                    :labels="[
                        'イ', //18
                        'ウ', //19
                        'オ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜23"
                    questionTitle="相続の法律-①"
                    :contents="[
                        '3/4',
                        '2/3',
                        '相続の放棄', // 問21〜23
                    ]"
                    :labels="[
                        'エ', //21
                        'イ', //22
                        'オ', //23
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="24〜25"
                    questionTitle="相続の法律-②"
                    :contents="[
                        '単純',
                        'みなし', // 問24〜25
                    ]"
                    :labels="[
                        'イ', //24
                        'ア', //25
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
                    questionTitle="社会保障制度"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の役割"
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
                    questionTitle="保険料の税法上の取り扱い"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="34"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社の仕組み"
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
                    questionTitle="保険料の払い込み"
                    :contents="[
                        '', //p
                        '正しい',
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
                    questionTitle="保険金・給付金の税法上の取り扱い"
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
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '', //p
                        }, //40
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '', //p
                        }, //46
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
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
                            content: '資産運用の対象に貸付金も含まれる', //p35
                        }, //51
                        {
                            questionTitle: '資産の運用',
                            content: '自社の営業用のものに限られる → 自社の営業用のものと投資用のものがある', //p35
                        }, //52
                        {
                            questionTitle: '契約の選択',
                            content: '', //p
                        }, //53
                        {
                            questionTitle: '契約の選択',
                            content: '正しい',
                        }, //54
                        {
                            questionTitle: '契約の選択',
                            content: '正しい',
                        }, //55
                        {
                            questionTitle: '契約の選択',
                            content: '正しい',
                        }, //56
                        {
                            questionTitle: '契約の選択',
                            content: '', //p
                        }, //57
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '', //p
                        }, //58
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '', //p
                        }, //59
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //60
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //61
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //62
                        {
                            questionTitle: '隣接業界',
                            content: '正しい',
                        }, //63
                        {
                            questionTitle: '隣接業界',
                            content: '', //p
                        }, //64
                        {
                            questionTitle: '隣接業界',
                            content: '', //p
                        }, //65
                        {
                            questionTitle: '隣接業界',
                            content: '', //p
                        }, //66
                        {
                            questionTitle: '隣接業界',
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
                        { questionTitle: '生命保険の仕組み', label: 'ア', content: '相互扶助' }, //68
                        { questionTitle: '生命保険の仕組み', label: 'イ', content: '性別' }, //69
                        { questionTitle: '生命保険の仕組み', label: 'イ', content: '大数の法則' }, //70
                        { questionTitle: '生命保険の仕組み', label: 'ア', content: '年始' }, //71
                        { questionTitle: '生命保険の仕組み', label: 'ア', content: '保険契約者' }, //72
                        { questionTitle: '生命保険の種類', label: 'ア', content: '定期保険' }, //73
                        { questionTitle: '生命保険の種類', label: 'イ', content: '生存保険' }, //74
                        { questionTitle: '生命保険の種類', label: 'イ', content: '大きくする' }, //75
                        { questionTitle: '生命保険の種類', label: 'ア', content: '特別勘定' }, //76
                        { questionTitle: '生命保険の種類', label: 'ア', content: '保証されています' }, //77
                        { questionTitle: '保障の見直し', label: 'ア', content: '責任準備金' }, //78
                        { questionTitle: '保障の見直し', label: 'ア', content: '死亡保障額' }, //79
                        { questionTitle: '保障の見直し', label: 'ア', content: '追加契約' }, //80
                        { questionTitle: '保障の見直し', label: 'イ', content: '保険料' }, //81
                        { questionTitle: '保障の見直し', label: 'ア', content: '書面' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
