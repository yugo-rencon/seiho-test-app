<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険総論";
const subject = "2022年度 フォームB";


</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 text-gray-800 py-10">
            <!-- ページタイトル -->
            <Pagetitle :title="title" :description="subject" />

            <!-- 問題リスト -->
            <div class="max-w-4xl mx-auto mt-4 space-y-2">
                <QuestionTemp3
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融機関としての生命保険会社-①"
                    :contents="[
                        '保険契約準備金',
                        '責任準備金',
                        '安全',
                        '収益',
                        '予定利率', // 問１〜５
                    ]"
                    :labels="[
                        'イ', //1
                        'エ', //2
                        'ア', //3
                        'コ', //4
                        'カ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融機関としての生命保険会社-②"
                    :contents="[
                        '長期',
                        '貯蓄性',
                        '公共',
                        '貸付金',
                        '有価証券', //問６〜10
                    ]"
                    :labels="[
                        'カ', //6
                        'オ', //7
                        'ク', //8
                        'ウ', //9
                        'コ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会構造の変化-①"
                    :contents="[
                        '平均寿命',
                        '7',
                        '速い',
                        '扶養',
                        '15〜64', //問11〜15
                    ]"
                    :labels="[
                        'ク', //11
                        'ウ', //12
                        'キ', //13
                        'カ', //14
                        'コ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会構造の変化-②"
                    :contents="[
                        '年金',
                        '70',
                        '合計特殊出生率',
                        '下回って',
                        '労働力率', //問16〜20
                    ]"
                    :labels="[
                        'エ', //16
                        'ケ', //17
                        'イ', //18
                        'オ', //19
                        'コ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約の要素"
                    :contents="[
                        '保険契約者の資格について制限はない（行為能力者である必要もない）', //p13
                        '正しい',
                        '保険金受取人の資格について制限はない（行為能力者である必要もない）', //p14
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約の特殊性"
                    :contents="[
                        '保険業法 → 保険法', //p7
                        '正しい',
                        '保険法 → 保険約款', //p9
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="介護保険制度"
                    :contents="[
                        '65歳以上 → 第1号<br>40歳～65歳未満 → 第2号', //p140
                        '正しい',
                        '第1号被保険者および第2号被保険者 → 第1号被保険者のみ', //p141
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="アメリカにおける生命保険事業の発展"
                    :contents="[
                        '解約価格法 → 不没収法', //p62
                        'マッカラン調査委員会 → アームストロング調査委員会', //p63
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="損害保険"
                    :contents="[
                        '正しい',
                        '第三分野：生損保本体での相互参入<br>それ以外の分野：子会社方式で相互参入', //p173
                        '一部制限が現在も継続 → 2001年（平成13年）に全面解禁', //p174
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="現在の主な生命保険商品"
                    :contents="[
                        '正しい',
                        '正しい',
                        '定期保険タイプの変額保険（有期型） → 養老保険タイプの変額保険（有期型）', //p41
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険事業の現状"
                    :contents="[
                        '自己資本比率が4%未満の保険会社 → ソルベンシー・マージン比率が200%未満の会社', //p99-100
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="賦課式保険"
                    :contents="[
                        '正しい',
                        '分担金が年々増加 → 年々減少<br>給付金が増加 → 減少', //p56
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度"
                    :contents="[
                        '正しい',
                        '付加年金制度 → 確定拠出年金（企業型）', //p127
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社の資産運用の今後のあり方"
                    :contents="[
                        '正しい',
                        '正しい',
                        '特別勘定 → 区分経理', //p200
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '責任準備金', content: '正しい' }, //31
                        { questionTitle: '保険料', content: '正しい' }, //32
                        { questionTitle: '科学的な生命保険会社', content: 'ロイヤル・エクスチェンジ → エクイタブル' }, //33
                        { questionTitle: '生命保険に関する情報提供', content: '契約成立後 → 契約申込時' }, //34
                        { questionTitle: '保険金・給付金の支払い', content: '正しい' }, //35
                        { questionTitle: '社会保障制度', content: '社会扶助制度 → 公的扶助制度' }, //36
                        { questionTitle: '組織変更', content: '正しい' }, //37
                        { questionTitle: 'ソルベンシー・マージン比率', content: '分母と分子が逆' }, //38
                        { questionTitle: 'こくみん共済coop（全労災）', content: '正しい' }, //39
                        { questionTitle: '医療・介護ニーズへの対応', content: '人間ドック紹介、健康相談サービス、介護事業者の紹介等を行っている' }, //40
                        // 問41〜50
                        { questionTitle: '危険評価軸', label: 'オ', content: '' }, //41
                        { questionTitle: '死亡表', label: 'オ', content: '' }, //42
                        { questionTitle: '保険金額', label: 'エ', content: 'あらかじめ定められた' }, //43
                        { questionTitle: '自主的な団結と相互扶助', label: 'オ', content: '' }, //44
                        { questionTitle: 'ユニバーサル保険', label: 'イ', content: '自由' }, //45
                        { questionTitle: '国民経済における生命保険', label: 'イ', content: '経済的保障' }, //46
                        { questionTitle: '生命共済事業', label: 'ウ', content: '損害共済' }, //47
                        { questionTitle: '生命保険業の監督の方法', label: 'エ', content: '財務大臣' }, //48
                        { questionTitle: '銀行による保険販売', label: 'ウ', content: '個人年金' }, //49
                        { questionTitle: '生保業界共通のシステム', label: 'ア', content: '団体定期保険' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="souron2022a" next-route="souron2022c" />
        </section>
    </SeihoTestLayout>
</template>
