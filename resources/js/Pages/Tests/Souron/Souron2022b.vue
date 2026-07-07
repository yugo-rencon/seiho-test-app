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
                    :relatedProblems="['2022b1']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
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
                    :relatedProblems="['2022b6']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
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
                    :relatedProblems="['2022a11', '2022b11', '2022c11']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
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
                    :relatedProblems="['2022a16', '2022b16', '2022c16']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
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
                    :relatedProblems="['2022a21', '2022b21', '2022c21']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '保険契約者の資格については別段の制限はなく、個人であると法人であるとを問わず、また[[行為能力者であると否とを問わない]]。', //p13
                        '正しい',
                        '保険金受取人の資格については何らの制限はなく、個人であると法人であると、また[[行為能力者であると否とを問わない]]。', //p14
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約の特殊性"
                    :relatedProblems="['2022b22', '2022c32']"
                    :contents="[
                        // rev: 2026-07-07 確認済み
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
                    :relatedProblems="['2022a23', '2022b23', '2022c23']"
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
                    :relatedProblems="['2022b24']"
                    :contents="[
                        // rev: 2026-07-07 確認済み
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
                    :relatedProblems="['2022a39', '2022b25', '2022c49']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '正しい',
                        '1996年（平成８年）施行の改正保険業法において、生命保険、損害保険、第三分野の定義が明定され、[[第三分野については生損保本体で取り扱えることとし、それ以外の分野については子会社方式により相互参入が可能とされた]]。', //p174
                        '第三分野商品（傷害保険・がん保険等）の生損保本体での取扱いについては、日米保険協議の結果を踏まえ、一部制限する激変緩和措置が講じられたが、[[2001年（平成13年）に全面解禁された]]。', //p175
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="現在の主な生命保険商品"
                    :relatedProblems="['2022b26']"
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
                    :relatedProblems="['2022b27']"
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
                    :relatedProblems="['2022a28', '2022b28', '2022c28']"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '正しい',
                        '賦課式の生命保険では、年を経るにつれ死亡率が高くなるので、給付金を一定にすれば、[[分担金が年々増加]]し、一方、分担金を一定にすれば、[[給付金が減少]]せざるを得ないことになる。', //p56
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度"
                    :relatedProblems="['2022b29']"
                    :contents="[
                        // rev: 2026-07-07 確認済み
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
                    :relatedProblems="['2022b30']"
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
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '責任準備金',
                            relatedProblems: ['2022a31', '2022b31', '2022c31'],
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '保険料',
                            relatedProblems: ['2022b32'],
                            content: '正しい',
                        }, //32
                        {
                            questionTitle: '科学的な生命保険会社',
                            relatedProblems: ['2022a33', '2022b33', '2022c33'],
                            content: 'ロイヤル・エクスチェンジ → エクイタブル',
                        }, //33
                        {
                            questionTitle: '生命保険に関する情報提供',
                            relatedProblems: ['2022b34'],
                            content: '契約成立後 → 契約申込時',
                        }, //34
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '保険金・給付金の支払い',
                            relatedProblems: ['2022b35'],
                            content: '正しい',
                        }, //35
                        {
                            // rev: 2026-07-07 確認済み
                            questionTitle: '社会保障制度',
                            relatedProblems: ['2022a47', '2022b36'],
                            content: '社会扶助制度 → 公的扶助制度', //p123
                        }, //36
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '組織変更',
                            relatedProblems: ['2022a37', '2022b37', '2022c37'],
                            content: '正しい',
                        }, //37
                        {
                            questionTitle: 'ソルベンシー・マージン比率',
                            relatedProblems: ['2022b38'],
                            content: '分母と分子が逆',
                        }, //38
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: 'こくみん共済coop（全労災）',
                            relatedProblems: ['2022b39'],
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '医療・介護ニーズへの対応',
                            relatedProblems: ['2022b40'],
                            content: '人間ドック紹介、健康相談サービス、介護事業者の紹介等を行っている',
                        }, //40
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '危険評価軸',
                            relatedProblems: ['2022b41'],
                            label: 'オ',
                            content: '',
                        }, //41
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '死亡表',
                            relatedProblems: ['2022a42', '2022b42', '2022c42'],
                            label: 'オ',
                            content: '',
                        }, //42
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '保険金額',
                            relatedProblems: ['2022b43'],
                            label: 'エ',
                            content: 'あらかじめ定められた',
                        }, //43
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '自主的な団結と相互扶助',
                            relatedProblems: ['2022b44'],
                            label: 'オ',
                            content: '',
                        }, //44
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: 'ユニバーサル保険',
                            relatedProblems: ['2022b45'],
                            label: 'イ',
                            content: '自由',
                        }, //45
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '国民経済における生命保険',
                            relatedProblems: ['2022b46'],
                            label: 'イ',
                            content: '経済的保障',
                        }, //46
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '生命共済事業',
                            relatedProblems: ['2022b47'],
                            label: 'ウ',
                            content: '損害共済',
                        }, //47
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '生命保険業の監督の方法',
                            relatedProblems: ['2022a48', '2022b48', '2022c48'],
                            label: 'エ',
                            content: '財務大臣',
                        }, //48
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '銀行による保険販売',
                            relatedProblems: ['2022b49'],
                            label: 'ウ',
                            content: '個人年金',
                        }, //49
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '生保業界共通のシステム',
                            relatedProblems: ['2022a50', '2022b50', '2022c50'],
                            label: 'ア',
                            content: '団体定期保険',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="souron2022a" next-route="souron2022c" />
        </section>
    </SeihoTestLayout>
</template>
