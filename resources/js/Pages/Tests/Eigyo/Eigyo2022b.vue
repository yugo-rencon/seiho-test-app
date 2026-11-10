<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険商品と営業";
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
                    questionTitle="公的年金制度の動向-①"
                    :relatedProblems="['2022a1', '2022b1', '2022c1']"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '60歳',
                        '報酬比例',
                        '定額保険料',
                        '標準賞与額',
                        '18.30%', // 問１〜５
                    ]"
                    :labels="[
                        'ケ', //1
                        'ク', //2
                        'エ', //3
                        'カ', //4
                        'イ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度の動向-②"
                    :relatedProblems="['2022a6', '2022b6', '2022c6']"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '10年',
                        '1ヶ月',
                        '1級〜3級',
                        '子の数',
                        '4分の3', //問６〜10
                    ]"
                    :labels="[
                        'カ', //6
                        'ア', //7
                        'イ', //8
                        'コ', //9
                        'ク', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="情報活用型マーケティング-①"
                    :relatedProblems="['2022b11']"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '見込客',
                        '携帯パソコン・端末',
                        '販売活動の効率化',
                        'カウンセリング',
                        'セグメンテーション', //問11〜15
                    ]"
                    :labels="[
                        'コ', //11
                        'ウ', //12
                        'ケ', //13
                        'イ', //14
                        'オ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="情報活用型マーケティング-②"
                    :relatedProblems="['2022b16']"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '上場コード',
                        '取引',
                        'パスワード',
                        'プライバシー',
                        '個人情報保護法', //問16〜20
                    ]"
                    :labels="[
                        'エ', //16
                        'カ', //17
                        'ク', //18
                        'ケ', //19
                        'ウ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="マイナンバー法"
                    :relatedProblems="['2022a21', '2022b21', '2022c21']"
                    :contents="[
                        // rev: 2026-09-03 確認済み
                        '未成年者を除くすべての人 → 住民票を有するすべての人', //p41
                        '正しい',
                        '重大個人情報 → 特定個人情報', //p41
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="価値観の変化の要因"
                    :relatedProblems="['2022b22']"
                    :contents="[
                        // rev: 2026-09-06 確認済み
                        '正しい',
                        '年齢要因 → 時代要因', //p2-3
                        '時代要因 → 年齢要因', //p2-3
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料率に関する対応"
                    :relatedProblems="['2022a23', '2022b23', '2022c23']"
                    :contents="[
                        // rev: 2026-09-05 確認済み
                        '死差配当 → 利差配当。', //p78
                        '正しい',
                        '完全生命表 → 標準生命表。', //p79
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体信用生命保険"
                    :relatedProblems="['2022b24']"
                    :contents="[
                        // rev: 2026-09-03 確認済み
                        '団体信用生命保険 → 消費者信用団体生命保険', //p87
                        '債権者である信用供与機関（銀行等）または信用保証機関を[[保険契約者および保険金受取人]]、債務者を[[被保険者]]、未返済債務額を保険金額とする商品である。', //p86
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="代理店営業機構"
                    :relatedProblems="['2022b25']"
                    :contents="[
                        // rev: 2026-09-06 確認済み
                        '生命保険商品を紹介する紹介代理店 → 生命保険商品を代理販売する募集代理店', //p145
                        '保全代理店と集金代理店 → 個人募集代理店と法人募集代理店', //p145
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的介護保険の給付"
                    :relatedProblems="['2022b26', '2022c24']"
                    :contents="[
                        // rev: 2026-09-06 確認済み
                        '正しい',
                        '高齢者の心身の状況調査と主治医意見書に基づく[[コンピューター判定]]の結果（一次判定）と主治医の意見書等に基づき[[審査判定]]（二次判定）を行う。', //p30
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人保険商品の基本型"
                    :relatedProblems="['2022a27', '2022b27', '2022c27']"
                    :contents="[
                        // rev: 2026-09-06 確認済み
                        '責任準備金は[[生存した他の被保険者の保険金の支払に充当する]]。', //p47
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融サービス提供法"
                    :relatedProblems="['2022a43', '2022b28', '2022c16']"
                    :contents="[
                        // rev: 2026-09-06 確認済み
                        '正しい',
                        '消費者はその契約を取り消すことができる → 業者は元本欠損額の賠償責任を負う', //p38
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額保険"
                    :relatedProblems="['2022b29']"
                    :contents="[
                        // rev: 2026-09-05 確認済み
                        '正しい',
                        '正しい',
                        '変動保険金（毎日変動） → 変動保険金（毎月変動）', //p64
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="業界共通教育制度"
                    :relatedProblems="['2022b30']"
                    :contents="[
                        // rev: 2026-09-05 確認済み
                        '専門課程の目的は、[[保険販売に関連する専門知識と周辺知識を習得し、顧客ニーズへの基本的対応力を高めること]]にある。', //p124
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-09-06 確認済み
                            questionTitle: '公的介護保険の保険料',
                            relatedProblems: ['2022b31'],
                            content: '保険料75%、公費25% → 保険料50%、公費50%', //p30
                        }, //31
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '消費者契約法',
                            relatedProblems: ['2022a26', '2022b32', '2022c11'],
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '保険料変更の自在性',
                            relatedProblems: ['2022b33'],
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-09-04 確認済み
                            questionTitle: '外貨建保険',
                            relatedProblems: ['2022a34', '2022b34', '2022c34'],
                            content: '商品のメリットとしては[[海外の比較的高い金利]]を反映することで、[[予定利率を高く]]設定していることが挙げられる。', //p65
                        }, //34
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '特別勘定',
                            relatedProblems: ['2022a35', '2022b35', '2022c35'],
                            content: '正しい',
                        }, //35
                        {
                            // rev: 2026-09-03 確認済み
                            questionTitle: '財形貯蓄制度と税制',
                            relatedProblems: ['2022b36'],
                            content: '受け取る年金についても[[非課税]]とされている。', //p95
                        }, //36
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '心身障害者扶養者生命保険',
                            relatedProblems: ['2022a37', '2022b37', '2022c37'],
                            content: '正しい',
                        }, //37
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '窓販の弊害防止措置',
                            relatedProblems: ['2022b38'],
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-09-06 確認済み
                            questionTitle: '保険仲立人',
                            relatedProblems: ['2022a48', '2022b39', '2022c25'],
                            content: '保険仲立人は、[[諸外国においては一般的に認められている]]。', //p103
                        }, //39
                        {
                            // rev: 2026-09-05 確認済み
                            questionTitle: '募集人登録',
                            relatedProblems: ['2022b40'],
                            content: '生命保険協会 → 内閣総理大臣（金融庁長官に委任）', //p118
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '女性の社会進出',
                            relatedProblems: ['2022b41'],
                            label: 'イ',
                            content: '男女雇用機会均等法',
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '消費者保護とコンプライアンス',
                            relatedProblems: ['2022b42'],
                            label: 'オ',
                            content: '',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'リビング・ニーズ特約',
                            relatedProblems: ['2022b43'],
                            label: 'イ',
                            content: '6ヶ月',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '危険選択の方法',
                            relatedProblems: ['2022a44', '2022b44', '2022c44'],
                            label: 'エ',
                            content: '面接',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '団体保険',
                            relatedProblems: ['2022b45'],
                            label: 'ウ',
                            content: 'ヒューマン・ヴァリュー特約',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '国民年金基金制度',
                            relatedProblems: ['2022a46', '2022b46', '2022c46'],
                            label: 'ア',
                            content: '第1号被保険者',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '財形貯蓄制度の種類',
                            relatedProblems: ['2022b47'],
                            label: 'イ',
                            content: '55歳',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '通信販売',
                            relatedProblems: ['2022a38', '2022b48'],
                            label: 'エ',
                            content: '加入保険金額',
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '営業職員の教育',
                            relatedProblems: ['2022b49'],
                            label: 'イ',
                            content: '個別指導',
                        }, //49
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '営業職員の給与体系',
                            relatedProblems: ['2022a50', '2022b50', '2022c50'],
                            label: 'イ',
                            content: '地域',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="eigyo2022a" next-route="eigyo2022c" />
        </section>
    </SeihoTestLayout>
</template>
