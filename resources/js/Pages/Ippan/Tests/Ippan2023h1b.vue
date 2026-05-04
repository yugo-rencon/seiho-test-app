<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2023年1月〜6月実施 フォームB";
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
                    questionTitle="生命保険の種類-①"
                    :contents="[
                        '定期',
                        '終身',
                        '大きく', // 問6〜8
                    ]"
                    :labels="[
                        'ア', //6
                        'イ', //7
                        'カ', //8
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="9〜10"
                    questionTitle="生命保険の種類-②"
                    :contents="[
                        '特別',
                        'されています', // 問9〜10
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
                    questionRange="16〜17"
                    questionTitle="企業向け商品-①"
                    :contents="[
                        '1年',
                        '確定拠出年金', // 問16〜17
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
                    questionTitle="企業向け商品-②"
                    :contents="[
                        '損失補てん',
                        '国',
                        '公的医療', // 問18〜20
                    ]"
                    :labels="[
                        'オ', //18
                        'イ', //19
                        'ウ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜23"
                    questionTitle="相続の法律-①"
                    :contents="[
                        '相続の放棄',
                        '単純',
                        '限定', // 問21〜23
                    ]"
                    :labels="[
                        'ア', //21
                        'ウ', //22
                        'オ', //23
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="24〜25"
                    questionTitle="相続の法律-②"
                    :contents="[
                        '家庭裁判所',
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
                        '正しい',
                        '雑所得 → 一時所得', //p126
                        '700万円 → 500万円', //p127
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="保障の見直し"
                    :contents="[
                        '正しい',
                        '正しい',
                        '復活契約 → 追加契約', //p91
                        '転換前契約の加入時 → 転換時', //p92
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の税法上の取り扱い"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="34"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金・給付金の請求と支払い"
                    :contents="[
                        '正しい',
                        '死亡した被保険者の数に関わらず死亡保険金は支払われない → 死亡した被保険者の数によって死亡保険金を全額または削減して支払う', //p104
                        '正しい',
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
                    questionTitle="生命保険の募集等に関する法律"
                    :contents="[
                        '正しい',
                        '正しい',
                        '金融庁 → 生命保険協会', //p77
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="保全・アフターサービス手続きと留意点"
                    :contents="[
                        '正しい',
                        '正しい',
                        '解約返戻金があっても払い戻されない → 解約返戻金があれば払い戻す', //p96
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
                        }, //38
                        {
                            questionTitle: '生命保険の役割',
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '生命保険の役割',
                            content: '男性・女性の平均寿命はともに90歳を超えている → 男性は約81歳、女性は約87歳（令和6年簡易生命表）', //p3
                        }, //40
                        {
                            questionTitle: '生命保険の役割',
                            content: '平均寿命 → 平均余命', //p4
                        }, //41
                        {
                            questionTitle: '生命保険の役割',
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '剰余金と配当金',
                            content: '保険業法の定める利率 → 生命保険会社の定める利率', //p29
                        }, //47
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '生命保険会社等を保護するため → 契約者等を保護するため', //p30
                        }, //48
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '正しい',
                        }, //49
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '保険事業と銀行業だけ → 保険事業だけ', //p32
                        }, //50
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '株式会社 → 相互会社', //p32
                        }, //51
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '生命保険以外の事業を自由に営むことができる → 他の事業を営むことが制限されている', //p33
                        }, //52
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '正しい',
                        }, //53
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '正しい',
                        }, //54
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '', //p
                        }, //55
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '正しい',
                        }, //56
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '', //p
                        }, //57
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //58
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '契約成立後に契約確認を行うことはない → 契約確認は契約の成立前に行われる場合と成立後に行われる場合がある', //p85
                        }, //59
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '1年 → 2年', //p86-87
                        }, //60
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //61
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: 'すでに払い込んだ保険料は返還される → すでに払い込んだ保険料は返還されない', //p87
                        }, //62
                        {
                            questionTitle: '社会保障制度',
                            content: '正しい',
                        }, //63
                        {
                            questionTitle: '社会保障制度',
                            content: '正しい',
                        }, //64
                        {
                            questionTitle: '社会保障制度',
                            content: '', //p
                        }, //65
                        {
                            questionTitle: '社会保障制度',
                            content: '', //p
                        }, //66
                        {
                            questionTitle: '社会保障制度',
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
                        { questionTitle: '私たちの役割と心がまえ', label: 'イ', content: 'アドバイス' }, //73
                        { questionTitle: '私たちの役割と心がまえ', label: 'イ', content: '税務' }, //74
                        { questionTitle: '私たちの役割と心がまえ', label: 'ア', content: 'アフターサービス' }, //75
                        { questionTitle: '私たちの役割と心がまえ', label: 'イ', content: '保険業法' }, //76
                        { questionTitle: '私たちの役割と心がまえ', label: 'イ', content: '私たち自身' }, //77
                        { questionTitle: '保険料の払い込み', label: 'ア', content: '一時払' }, //78
                        { questionTitle: '保険料の払い込み', label: 'イ', content: '前納' }, //79
                        { questionTitle: '保険料の払い込み', label: 'イ', content: '生命保険会社' }, //80
                        { questionTitle: '保険料の払い込み', label: 'ア', content: '振替送金' }, //81
                        { questionTitle: '保険料の払い込み', label: 'イ', content: 'それぞれ' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
