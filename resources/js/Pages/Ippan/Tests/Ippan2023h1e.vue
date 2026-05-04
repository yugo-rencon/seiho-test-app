<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2023年1月〜6月実施 フォームE";
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
                        '生存', // 問6〜8
                    ]"
                    :labels="[
                        'ア', //6
                        'エ', //7
                        'オ', //8
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
                        'ウ', //9
                        'ア', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜13"
                    questionTitle="契約の選択-①"
                    :contents="[
                        '高い',
                        '多く',
                        '公平性', // 問11〜13
                    ]"
                    :labels="[
                        'ア', //11
                        'カ', //12
                        'エ', //13
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="14〜15"
                    questionTitle="契約の選択-②"
                    :contents="[
                        '身体',
                        '道徳', // 問14〜15
                    ]"
                    :labels="[
                        'イ', //14
                        'ウ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜18"
                    questionTitle="社会保障制度-①"
                    :contents="[
                        '公的扶助',
                        '20歳',
                        '障害', // 問16〜18
                    ]"
                    :labels="[
                        'イ', //16
                        'ウ', //17
                        'カ', //18
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="19〜20"
                    questionTitle="社会保障制度-②"
                    :contents="[
                        '強制加入',
                        '世帯主', // 問19〜20
                    ]"
                    :labels="[
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
                    questionTitle="生命保険会社の仕組み"
                    :contents="[
                        '正しい',
                        '保険事業と銀行業だけ → 保険事業だけ', //p32
                        '正しい',
                        '生命保険以外の事業を自由に営むことができる → 他の事業を営むことが制限されている', //p33
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="お客さまニーズへの対応"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '正しい',
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
                    questionTitle="私たちの役割と心がまえ"
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
                    questionTitle="募集時の正しい説明"
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
                    questionTitle="保険料の税法上の取り扱い"
                    :contents="[
                        '正しい',
                        '正しい',
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
                            questionTitle: '資産の運用',
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '資産の運用',
                            content: '3つの原則 → 4つの原則（安全性、収益性、換金性、公共性）', //p34
                        }, //49
                        {
                            questionTitle: '資産の運用',
                            content: '短期の資金 → 長期の資金', //p35
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
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                        }, //53
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '契約者の生年月日 → 被保険者の生年月日', //p40
                        }, //54
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '平均年齢 → 満年齢', //p41
                        }, //55
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                        }, //56
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '20000円以上 → 50000円以上', //p43
                        }, //57
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '正しい',
                        }, //58
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '', //p
                        }, //59
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '', //p
                        }, //60
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '正しい',
                        }, //61
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '', //p
                        }, //62
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //63
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '契約成立後に契約確認を行うことはない → 契約確認は契約の成立前に行われる場合と成立後に行われる場合がある', //p85
                        }, //64
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //65
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: 'すでに払い込んだ保険料 → 解約返戻金', //p86
                        }, //66
                        {
                            questionTitle: '正しい告知の取り扱い',
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
                        { questionTitle: '隣接業界', label: 'ア', content: '終身共済' }, //68
                        { questionTitle: '隣接業界', label: 'イ', content: '厚生労働省' }, //69
                        { questionTitle: '隣接業界', label: 'イ', content: '1,000万円' }, //70
                        { questionTitle: '隣接業界', label: 'ア', content: '所得補償保険' }, //71
                        { questionTitle: '隣接業界', label: 'ア', content: '定期年金' }, //72
                        { questionTitle: '保全・アフターサービス手続きと留意点', label: 'イ', content: '解約返戻金' }, //73
                        { questionTitle: '保全・アフターサービス手続きと留意点', label: 'ア', content: '同様の' }, //74
                        { questionTitle: '保全・アフターサービス手続きと留意点', label: 'イ', content: '生命保険会社' }, //75
                        { questionTitle: '保全・アフターサービス手続きと留意点', label: 'ア', content: '消滅' }, //76
                        { questionTitle: '保全・アフターサービス手続きと留意点', label: 'ア', content: 'あれば払い戻します' }, //77
                        { questionTitle: '企業向け商品', label: 'ア', content: '1年' }, //78
                        { questionTitle: '企業向け商品', label: 'イ', content: '確定拠出年金' }, //79
                        { questionTitle: '企業向け商品', label: 'ア', content: '企業(団体)' }, //80
                        { questionTitle: '企業向け商品', label: 'ア', content: '財形年金積立保険' }, //81
                        { questionTitle: '企業向け商品', label: 'イ', content: '一部負担制' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
