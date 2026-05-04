<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2023年7月〜12月実施 フォームA";
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
                    questionRange="6〜8"
                    questionTitle="私たちの役割と心がまえ-①"
                    :contents="[
                        '税務',
                        'アフターサービス',
                        '継続', // 問6〜8
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
                    questionTitle="私たちの役割と心がまえ-②"
                    :contents="[
                        '保険業法',
                        '行動規範', // 問9〜10
                    ]"
                    :labels="[
                        'ア', //9
                        'ウ', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜12"
                    questionTitle="資産の運用-①"
                    :contents="[
                        '配当金',
                        '公共性', // 問11〜12
                    ]"
                    :labels="[
                        'イ', //11
                        'ウ', //12
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="13〜15"
                    questionTitle="資産の運用-②"
                    :contents="[
                        '長期',
                        '公社債',
                        '住宅ローン', // 問13〜15
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
                    questionTitle="募集時の正しい説明-①"
                    :contents="[
                        '約款',
                        '内閣総理大臣',
                        '平易', // 問16〜18
                    ]"
                    :labels="[
                        'ア', //16
                        'エ', //17
                        'オ', //18
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="19〜20"
                    questionTitle="募集時の正しい説明-②"
                    :contents="[
                        '契約概要',
                        'いただく前', // 問19〜20
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
                    questionTitle="保険金・給付金の税法上の取り扱い（一時金で受け取った場合）-①"
                    :contents="[
                        '一時所得',
                        '法定相続人',
                        '110万円', // 問21〜23
                    ]"
                    :labels="[
                        'イ', //21
                        'ウ', //22
                        'カ', //23
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="24〜25"
                    questionTitle="保険金・給付金の税法上の取り扱い（一時金で受け取った場合）-②"
                    :contents="[
                        '（被保険者）',
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
                    questionTitle="保険料の税法上の取り扱い"
                    :contents="[
                        '正しい',
                        '生命保険料控除の対象 → 生命保険料控除の対象から除れる', //p122
                        '4月1日から翌年3月31日まで → 1月1日から12月31日まで', //p122
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="お客さまニーズへの対応"
                    :contents="[
                        'ライフスタイル → ライフサイクル', //p133
                        '正しい',
                        '正しい',
                        '保険設計書 → 生活設計書', //p136
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
                    questionTitle="剰余金と配当金"
                    :contents="[
                        '費差益 → 利差益 ', //p26
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="保全・アフターサービス手続きと留意点"
                    :contents="[
                        '正しい',
                        '経過期間 → 猶予期間', //p96
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="企業向け商品"
                    :contents="[
                        '正しい',
                        '財形貯蓄積立保険・財形教育積立保険・財形医療積立保険 → 財形貯蓄積立保険・財形住宅積立保険・財形年金積立保険', //p119
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
                            content: '雇用保険法 → 生活保護法', //p112
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
                            content: '60歳以上の第1号被保険者と35歳以上60歳未満の第2号被保険者 → 65歳以上の第1号被保険者と40歳以上65歳未満の第2号被保険者', //p115
                        }, //47
                        {
                            questionTitle: '生命保険の役割',
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '生命保険の役割',
                            content: '男性・女性の平均寿命はともに90歳を超えている → 男性は約81歳、女性は約87歳（令和6年簡易生命表）', //p3
                        }, //49
                        {
                            questionTitle: '生命保険の役割',
                            content: '正しい',
                        }, //50
                        {
                            questionTitle: '生命保険の役割',
                            content: '正しい',
                        }, //51
                        {
                            questionTitle: '生命保険の役割',
                            content: '株主の遺族の生活保障 → 従業員の遺族の生活保障', //p4
                        }, //52
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                        }, //53
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                        }, //54
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                        }, //55
                        {
                            questionTitle: '保険料の払い込み',
                            content: '保険業法の定める利率 → 生命保険会社の定める利率', //p50
                        }, //56
                        {
                            questionTitle: '保険料の払い込み',
                            content: '途中で変更することはできない → 途中で変更することができる', //p51
                        }, //57
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '契約成立後に契約確認を行うことはない → 契約確認は契約の成立前に行われる場合と成立後に行われる場合がある', //p85
                        }, //58
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //59
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //60
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: 'すでに払い込んだ保険料は返還される → すでに払い込んだ保険料は返還されない', //p87
                        }, //61
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //62
                        {
                            questionTitle: '保障の見直し',
                            content: '正しい',
                        }, //63
                        {
                            questionTitle: '保障の見直し',
                            content: '正しい',
                        }, //64
                        {
                            questionTitle: '保障の見直し',
                            content: '正しい',
                        }, //65
                        {
                            questionTitle: '保障の見直し',
                            content: '正しい',
                        }, //66
                        {
                            questionTitle: '保障の見直し',
                            content: '転換前契約の加入時 → 転換時', //p92
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
                        { questionTitle: '生命保険の仕組み', label: 'ア', content: '相互扶助' }, //73
                        { questionTitle: '生命保険の仕組み', label: 'イ', content: '大数の法則' }, //74
                        { questionTitle: '生命保険の仕組み', label: 'ア', content: '年始' }, //75
                        { questionTitle: '生命保険の仕組み', label: 'イ', content: '保険契約者' }, //76
                        { questionTitle: '生命保険の仕組み', label: 'イ', content: '契約者' }, //77
                        { questionTitle: '生命保険の種類', label: 'イ', content: '生存保険' }, //78
                        { questionTitle: '生命保険の種類', label: 'イ', content: 'と同額' }, //79
                        { questionTitle: '生命保険の種類', label: 'ア', content: '定期保険' }, //80
                        { questionTitle: '生命保険の種類', label: 'イ', content: '保険金額' }, //81
                        { questionTitle: '生命保険の種類', label: 'ア', content: '特別勘定' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
