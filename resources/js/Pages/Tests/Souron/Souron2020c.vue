<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険総論";
const subject = "2020年度 フォームC";
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 text-gray-800 py-10">
            <Pagetitle :title="title" :description="subject" />

            <div class="max-w-4xl mx-auto mt-4 space-y-2">
                <QuestionTemp3
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険の主な保険種類-①"
                    :relatedProblems="['2020c1']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '無診査', //1
                        '1年', //2
                        '損金', //3
                        '総合福祉', //4
                        'ヒューマン', //5
                    ]"
                    :labels="[
                        'ウ', //1
                        'オ', //2
                        'イ', //3
                        'ケ', //4
                        'キ', //5
                    ]"
                />

                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険の主な保険種類-②"
                    :relatedProblems="['2020c6']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '減少', //6
                        '退職後', //7
                        '一時払い', //8
                        '就業不能', //9
                        '健康保険法', //10
                    ]"
                    :labels="[
                        'エ', //6
                        'カ', //7
                        'ク', //8
                        'ウ', //9
                        'コ', //10
                    ]"
                />

                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産運用-①"
                    :relatedProblems="['2020a11', '2020b11', '2020c11']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '予定利率', //11
                        '逆ざや', //12
                        'ALM（資産負債統合管理）', //13
                        '法令等の遵守（コンプライアンス）', //14
                        '負債特性', //15
                    ]"
                    :labels="[
                        'ウ', //11
                        'オ', //12
                        'コ', //13
                        'カ', //14
                        'イ', //15
                    ]"
                />

                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産運用-②"
                    :relatedProblems="['2020a16', '2020b16', '2020c16']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '法定他業', //16
                        '規制緩和', //17
                        '金融システム改革法', //18
                        '50', //19
                        'デリバティブ', //20
                    ]"
                    :labels="[
                        'コ', //16
                        'エ', //17
                        'キ', //18
                        'オ', //19
                        'ア', //20
                    ]"
                />

                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険の対象となる危険の種類"
                    :relatedProblems="['2020c21']"
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
                    questionTitle="ギルド"
                    :relatedProblems="['2020a22', '2020b22', '2020c22']"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '都市経済では商人とその家族は１つの経済単位であり、彼らが被った経済的損失は、[[貴族も領主も救済してくれず、自らが補塡していかねばならない]]。', //p53
                        '正しい',
                        '太古の共同体や奴隷制度、さらに封建社会における農奴制度などは、社会それ自体が保障制度であったが、[[ギルドは封建社会の中で独立的な経済単位が結合して、自らの力で危険に対処した最初の試み]]である。', //p53
                    ]"
                />

                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約の要素"
                    :relatedProblems="['2020a26', '2020c23']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '保険契約者の資格については別段の制限はなく、個人であると法人であるとを問わず、また[[行為能力者であると否とを問わない]]。', //p13
                        '正しい',
                        '保険金受取人の資格については何らの制限はなく、個人であると法人であると、また[[行為能力者であると否とを問わない]]。', //p14
                    ]"
                />

                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="相互会社と株式会社"
                    :relatedProblems="['2020a24', '2020b24', '2020c24']"
                    :contents="[
                        '財団法人 → 社団法人', //24-ア p160
                        '資本金 → 資金', //24-イ p160
                        '正しい', //24-ウ
                    ]"
                />

                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="銀行による保険販売"
                    :relatedProblems="['2020c25']"
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
                    questionTitle="契約者配当"
                    :relatedProblems="['2020a21', '2020c26']"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '相互会社でも一定の範囲内で剰余金の分配のない[[非社員契約（無配当保険）の取扱いが可能である]]。', //p27
                        '正しい',
                        '正しい',
                    ]"
                />

                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="アメリカにおけるアームストロング調査"
                    :relatedProblems="['2020c27']"
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
                    questionTitle="狭義の社会保障制度"
                    :relatedProblems="['2020a28', '2020b28', '2020c28']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '正しい',
                        '正しい',
                        '社会扶助制度 → 公的扶助制度', //p123
                    ]"
                />

                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="少額短期保険業"
                    :relatedProblems="['2020a40', '2020c29']"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '正しい',
                        '正しい',
                        '1500万円 → 1000万円', //p176
                    ]"
                />

                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険商品の充実等"
                    :relatedProblems="['2020c30']"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '5000万円 → 1000万円', //p191
                        '生命保険の取り扱う個人年金保険は、他の金融機関の年金型商品と比べて[[優れた特色がある]]。', //p190
                        '正しい',
                    ]"
                />

                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '生命保険契約の特殊性',
                            relatedProblems: ['2020a31', '2020b31', '2020c31'],
                            content: '正しい',
                        }, //31
                        {
                            questionTitle: '死亡表',
                            relatedProblems: ['2020a32', '2020b32', '2020c32'],
                            content: '国民生命表 → 経験生命表',
                        }, //32 p15
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '国民年金基金保険',
                            relatedProblems: ['2020c33'],
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-07-07 確認済み
                            questionTitle: 'アメリカの保険事業規制',
                            relatedProblems: ['2020c34'],
                            content: '連邦政府 → 州政府', //p65
                        }, //34
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '国際比較',
                            relatedProblems: ['2020c35'],
                            content: '正しい',
                        }, //35
                        {
                            questionTitle: '戦後混乱期から再建への足どり',
                            relatedProblems: ['2020a36', '2020b36', '2020c36'],
                            content: '相互会社から株式会社 → 株式会社から相互会社',
                        }, //36 p78
                        {
                            questionTitle: '介護保険制度',
                            relatedProblems: ['2020c37'],
                            content: '国 → 各市町村',
                        }, //37 p141
                        {
                            questionTitle: '外国保険業者',
                            relatedProblems: ['2020c38'],
                            content: '責任準備金 → 供託金',
                        }, //38 p159
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '各都道府県民共済',
                            relatedProblems: ['2020c39'],
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '社会構造の変化',
                            relatedProblems: ['2020a50', '2020b25', '2020c40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '契約の法的性質',
                            relatedProblems: ['2020c41'],
                            label: 'ア',
                            content: '付合契約',
                        }, //41
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '保険者',
                            relatedProblems: ['2020a42', '2020b42', '2020c42'],
                            label: 'ア',
                            content: '10',
                        }, //42
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '責任準備金',
                            relatedProblems: ['2020b33', '2020c43'],
                            label: 'オ',
                            content: '',
                        }, //43
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: 'エリザ・ライト',
                            relatedProblems: ['2020c44'],
                            label: 'オ',
                            content: '',
                        }, //44
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '保険組合の誕生',
                            relatedProblems: ['2020a45', '2020b45', '2020c45'],
                            label: 'エ',
                            content: '賦課式',
                        }, //45
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '契約条件変更',
                            relatedProblems: ['2020c46'],
                            label: 'ウ',
                            content: '既契約',
                        }, //46
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '社会保障と生命保険',
                            relatedProblems: ['2020c47'],
                            label: 'オ',
                            content: '',
                        }, //47
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '消費者保護',
                            relatedProblems: ['2020a48', '2020b48', '2020c48'],
                            label: 'イ',
                            content: '消費者契約法',
                        }, //48
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '生命共済事業',
                            relatedProblems: ['2020c49'],
                            label: 'イ',
                            content: '組合員',
                        }, //49
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '損害保険',
                            relatedProblems: ['2020a29', '2020c50'],
                            label: 'ウ',
                            content: '保険金額',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="souron2020b" />
        </section>
    </SeihoTestLayout>
</template>
