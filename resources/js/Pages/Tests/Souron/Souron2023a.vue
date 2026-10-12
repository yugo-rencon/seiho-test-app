<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険総論";
const subject = "2023年度 フォームA";
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
                    questionTitle="危険の選択-①"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '危険均一性',
                        '高額',
                        '健康',
                        '診査医',
                        '生命保険面接士', // 問１〜５
                    ]"
                    :labels="[
                        'カ', //1
                        'イ', //2
                        'ク', //3
                        'エ', //4
                        'コ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険の選択-②"
                    :contents="[
                        // rev: 2026-07-05 確認済み
                        '契約確認',
                        '公平性',
                        '評価',
                        '高危険',
                        '事業費', //問６〜10
                    ]"
                    :labels="[
                        'キ', //6
                        'ア', //7
                        'オ', //8
                        'イ', //9
                        'ク', //10
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
                    questionTitle="生命保険契約の法的性質"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '正しい',
                        '生命保険契約は、保険法上、一定の要式を要するとはしておらず、[[不要式契約である]]。', //p11
                        '生命保険契約は、大量の定型的取引を行い、またその技術性、専門性ゆえに、[[生命保険会社があらかじめ定めた保険約款をもとに契約を締結している]]わけであり、付合契約である。', //p12
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険・団体年金保険"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '主契約 ↔︎ ヒューマン・ヴァリュー特約', //p47
                        '正しい',
                        '拠出型企業年金保険 ↔︎ 新企業年金保険', //p49
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
                    questionTitle="生命保険会社の資産運用の原則"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '正しい',
                        '近年他の貯蓄性金融商品との競合が[[激化]]し、生保資金の流動性が[[上昇]]しているため、流動性の原則の[[重要性が高まっている]]。', //p109
                        '運用に際しては、[[公共性の発揮が常に要請される]]。', //p110
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険商品の充実等"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '5000万円 → 1000万円', //p191
                        '生命保険の取り扱う個人年金保険は、他の金融機関の年金型商品と比べて[[優れた特色がある]]。', //p190
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
                    questionTitle="日本における生命保険の発展"
                    :contents="[
                        // rev: 2026-05-26 確認済み
                        '正しい',
                        '正しい',
                        '第一次世界大戦 → スペインかぜ', //p76
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
                    questionTitle="保険監督の方法"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '公示主義 ↔︎ 準則主義', //p148
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="損害保険"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '正しい',
                        '1996年（平成８年）施行の改正保険業法において、生命保険、損害保険、第三分野の定義が明定され、[[第三分野については生損保本体で取り扱えることとし、それ以外の分野については子会社方式により相互参入が可能とされた]]。', //p174
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
                            questionTitle: '保険金受取人',
                            content: '保険金受取人の資格については[[何らの制限はなく、個人であると法人であると、また行為能力者であると否とを問わない]]。', //p14
                        }, //31
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '生命保険契約の特殊性',
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: 'イギリスにおける科学的な生命保険会社',
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '生命保険事業の革新',
                            content: '正しい',
                        }, //34
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '生命保険会社の資金の性格',
                            content: '正しい',
                        }, //35
                        {
                            // rev: 2026-07-07 確認済み
                            questionTitle: '公的介護保険の保険料',
                            content: '国 → 各市町村', //p141
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
                            // rev: 2026-07-07 確認済み
                            questionTitle: '生保業界のネットワークシステム',
                            content: '生保ANSERシステム → LINC（Life Insurance Network Center）',
                        }, //39
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '国際化の方向',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '危険の種類',
                            label: 'オ',
                            content: '',
                        }, //41
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '責任準備金',
                            label: 'ア',
                            content: '負債',
                        }, //42
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '生命保険商品の基本型',
                            label: 'ウ',
                            content: '養老保険',
                        }, //43
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: 'エリザ・ライト',
                            label: 'エ',
                            content: '不没収法',
                        }, //44
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '保険業法の一部改正',
                            label: 'イ',
                            content: '更生手続',
                        }, //45
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '国民経済における生命保険',
                            label: 'ア',
                            content: '家計可処分所得',
                        }, //46
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '公的医療保険',
                            label: 'エ',
                            content: '各種共済組合',
                        }, //47
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '消費者保護',
                            label: 'イ',
                            content: '消費者契約法',
                        }, //48
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '生命共済事業',
                            label: 'イ',
                            content: '組合員',
                        }, //49
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '社会構造の変化',
                            label: 'オ',
                            content: '',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="souron2024c" next-route="souron2023b" />
        </section>
    </SeihoTestLayout>
</template>
