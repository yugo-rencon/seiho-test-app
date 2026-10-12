<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険総論";
const subject = "2023年度 フォームC";
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
                    questionTitle="保険募集と監督法-①"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '内閣総理大臣',
                        '委託',
                        '禁止行為',
                        '販売チャネル',
                        '保険ブローカー（保険仲立人）', // 問１〜５
                    ]"
                    :labels="[
                        'キ', //1
                        'エ', //2
                        'コ', //3
                        'ア', //4
                        'ウ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険募集と監督法-②"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '意向把握義務',
                        '勧誘方針',
                        '消費者契約法',
                        '金融商品取引法',
                        '特定保険契約', //問６〜10
                    ]"
                    :labels="[
                        'ケ', //6
                        'ア', //7
                        'ク', //8
                        'ウ', //9
                        'コ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険の歴史的発展-①"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '保障制度',
                        '自給自足',
                        '経済単位',
                        '相互扶助',
                        'ギルド', //問11〜15
                    ]"
                    :labels="[
                        'オ', //11
                        'ア', //12
                        'コ', //13
                        'キ', //14
                        'カ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険の歴史的発展-②"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '海上保険',
                        '冒険貸借',
                        '統計学',
                        'ドイツ',
                        '社会保険', //問16〜20
                    ]"
                    :labels="[
                        'カ', //16
                        'イ', //17
                        'エ', //18
                        'ケ', //19
                        'オ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険の対象となる危険の種類"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '正しい',
                        '保険者の危険引受けが可能となるためには、同様な危険を多数引き受けることにより、危険の発生頻度の変動幅を[[縮小]]させ、[[平均経験率]]を得る必要がある。', //p4
                        '危険により被る経済的損失が保険金額として貨幣で計算され、危険の程度が危険度として数量化されれば、[[保険金額]]と危険度の積として危険評価額は数量化可能となる。', //p4
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約者配当"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '80% → 20%', //p27
                        '正しい',
                        '生命保険会社における配当は[[保険料の精算]]という意味合いが強く、[[保険料を投資することによる利潤というイメージではない]]ので一般会社における株主配当とは性格が[[異なる]]。', //p29
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="アメリカにおける金融革命の進展と生命保険事業"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        'デリバティブ商品 → ニューウェーブ商品', //p69
                        '正しい',
                        '金融規制改革法（ドッド・フランク法） → グラム・リーチ・ブライリー法', //p71
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '18歳以上65歳未満 → 20歳以上60歳未満', //p127
                        '付加年金 → 確定拠出年金（企業型）', //p127
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="銀行による保険販売"
                    :contents="[
                        // rev: 2026-07-08 確認済み
                        '2001年（平成13年）に、[[住宅ローン関連の信用生命保険と長期火災保険等]]の販売からスタートしたが、2002年（平成14年）に個人年金の販売が認められたことを受け、一気に販売額が急増した。', //p175
                        '2005年（平成17年）には、[[一時払終身保険、一時払養老保険や期間10年以下の平準払養老保険等]]が販売対象に加えられた。', //p175
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約の要素"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '正しい',
                        '正しい',
                        '保険契約の一方の当事者である保険契約者は、[[保険者]]が危険を負担していることに対して、保険事故発生の可能性に応じたものとして保険料を支払う。', //p15
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="アメリカにおけるアームストロング調査"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '正しい',
                        'アームストロング調査委員会の勧告に基づき、1906年に、「契約条項に保険料払込猶予期間と不可争期間の[[規定を設ける]]」などの内容の取締法がニューヨーク州で制定された。', //p64
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会保険の特質"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '正しい',
                        '正しい',
                        '収支相等の原則 → 大数の法則', //p126
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="共済と保険"
                    :contents="[
                        // rev: 2026-07-08 確認済み
                        '正しい',
                        '適合性の原則 → 給付・反対給付均等の原則', //p165
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="生保業界におけるシステム動向"
                    :contents="[
                        // rev: 2026-07-08 確認済み
                        '[[個人保険分野]]が、最初に機械化された分野である。', //p198-199
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
                            // rev: 2026-07-07 確認済み
                            questionTitle: '生命保険契約の法的性質',
                            content: '生命保険契約は[[保険金支払債務と保険料支払債務とが対価関係になる双務契約]]といえる。', //p11
                        }, //31
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '危険選択の意義',
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: 'イギリスにおける科学的な生命保険会社',
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '死亡保険',
                            content: '正しい',
                        }, //34
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '資産運用の自由化',
                            content: '正しい',
                        }, //35
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '実体的監督主義',
                            content: '正しい',
                        }, //36
                        {
                            // rev: 2026-07-07 確認済み
                            questionTitle: '組織変更',
                            content: '100株未満 → 1株未満', //p163
                        }, //37
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: 'JA共済事業',
                            content: 'JA共済事業は、農協系統組織の一環であり、農業協同組合の行う信用・購入・販売など、他の事業と同様、[[JA（単位農協）、JA共済連という２段階]]による組織機構により運営されている。', //p167
                        }, //38
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '消費者ニーズの変化',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-07-08 確認済み
                            questionTitle: '医療保障商品',
                            content: '倍額 → 同額', //p192
                        }, //40
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '保険の始期',
                            label: 'エ',
                            content: 'いずれか遅い日',
                        }, //41
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '責任準備金',
                            label: 'ア',
                            content: '負債',
                        }, //42
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '事業費',
                            label: 'エ',
                            content: '維持費',
                        }, //43
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '団体年金保険',
                            label: 'オ',
                            content: '',
                        }, //44
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '保険業法の一部改正',
                            label: 'イ',
                            content: '更生手続',
                        }, //45
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '国民経済における生命保険',
                            label: 'ア',
                            content: '家計可処分所得',
                        }, //46
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '保険の有用性',
                            label: 'オ',
                            content: '',
                        }, //47
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '生保資産運用の基本原則',
                            label: 'イ',
                            content: '安全性',
                        }, //48
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '公的介護保険制度の概要',
                            label: 'ウ',
                            content: '第2号被保険者',
                        }, //49
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '損害保険',
                            label: 'ウ',
                            content: '保険金額',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="souron2023b" next-route="souron2022a" />
        </section>
    </SeihoTestLayout>
</template>
