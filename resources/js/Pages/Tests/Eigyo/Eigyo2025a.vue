<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";
import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険商品と営業";
const subject = "2025年度 フォームA";
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-[#fdfbff] text-gray-800 py-10">
            <!-- ページタイトル -->
            <Pagetitle :title="title" :description="subject" />

            <!-- 問題リスト -->
            <div class="max-w-4xl mx-auto mt-4 space-y-2">
                <QuestionTemp3
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的介護保険制度の概要①"
                    :contents="[
                        // rev: 2026-08-22 確認済み
                        '40歳以上',
                        '40〜64歳',
                        '医療費抑制',
                        '所得段階別',
                        '18万円', // 問１〜５
                    ]"
                    :labels="[
                        'ウ', //1
                        'エ', //2
                        'キ', //3
                        'コ', //4
                        'ア', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的介護保険制度の概要②"
                    :contents="[
                        // rev: 2026-08-22 確認済み
                        '厚生労働省',
                        '介護認定審査会',
                        '予防給付',
                        '地域密着型サービス',
                        '居住費', // 問6〜10
                    ]"
                    :labels="[
                        'オ', //6
                        'ア', //7
                        'ケ', //8
                        'ク', //9
                        'エ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者契約法・金融サービス提供法①"
                    :contents="[
                        // rev: 2026-08-22 確認済み
                        '事業者',
                        '困惑',
                        '取り消す',
                        '重要事項',
                        '断定的', // 問11〜15
                    ]"
                    :labels="[
                        'ウ', //11
                        'イ', //12
                        'オ', //13
                        'エ', //14
                        'カ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者契約法・金融サービス提供法②"
                    :contents="[
                        // rev: 2026-08-22 確認済み
                        '金融商品販売業者等',
                        '市場リスク',
                        '信用リスク',
                        '元本欠損額の賠償責任',
                        '勧誘方針', // 問16〜20
                    ]"
                    :labels="[
                        'ウ', //16
                        'カ', //17
                        'キ', //18
                        'ア', //19
                        'イ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="女性の社会進出"
                    :contents="[
                        // rev: 2026-09-03 確認済み
                        '日本の女性の労働力率をみると、[[30〜39歳の年齢層において一旦低下している]]。これは、この年齢層においては、結婚して退職し、子育てに専念している女性が多いことに起因するものと考えられる。', //p12
                        '保障準備については、20〜30歳代女性の医療保障へのニーズ、40〜50歳代女性の[[老後保障]]へのニーズ、および50〜60歳代女性の[[介護保障]]ニーズが高いことがうかがえる。', //p12
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="マイナンバー法（行政手続における特定の個人を識別するための番号の利用等に関する法律）"
                    :contents="[
                        // rev: 2026-09-03 確認済み
                        '未成年者を除くすべての人 → 住民票を有するすべての人', //p41
                        '正しい',
                        '重大個人情報 → 特定個人情報', //p41
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="医療保障等を主たる目的とした保険（特約）"
                    :contents="[
                        // rev: 2026-09-03 確認済み
                        '正しい',
                        '1985年（昭和60年）に認知症による要介護状態に対する保障を行う保険が、同年９月には寝たきり状態に対する保障を行う保険が発売された。', //p60
                        '余命9ヶ月 → 余命6ヶ月<br>2000万円を上限 → 3000万円を上限', //p61
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体信用生命保険"
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
                    questionTitle="営業職員の募集人登録"
                    :contents="[
                        // rev: 2026-09-03 確認済み
                        '生命保険協会 → 内閣総理大臣（金融庁長官に委任）', //p118
                        '正しい',
                        '基礎研修修了者は生命保険協会の一般課程試験を受験し、合格点（70点）に達した営業職員について再度支社長等が面接、研修受講状況も含め、総合的に登録の可否を判定する。', //p118
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="長い老後生活を見据えたライフ・プランニング"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料率"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="財形貯蓄制度"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="銀行窓販"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="営業職員の成績計上"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '公的年金のしくみ',
                            content: '正しい',
                        }, //31
                        {
                            questionTitle: '福利厚生費',
                            content: '',
                        }, //32
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '継続教育制度',
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '個人年金保険',
                            content: '正しい',
                        }, //34
                        {
                            questionTitle: '外貨建保険',
                            content: '',
                        }, //35
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: 'ユニバーサル保険',
                            content: '正しい',
                        }, //36
                        {
                            questionTitle: '特別勘定特約',
                            content: '',
                        }, //37
                        {
                            questionTitle: '団体就業不能保障保険',
                            content: '',
                        }, //38
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '生命保険マーケティング',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '生命保険大学課程',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '公的年金の保険料',
                            label: 'エ',
                            content: '労使折半により',
                        }, //41
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '年金改革',
                            label: 'イ',
                            content: '第3号',
                        }, //42
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '代理・代行',
                            label: 'ア',
                            content: '保険業法',
                        }, //43
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '保険料の払込に関する特約',
                            label: 'ウ',
                            content: '団体扱特約',
                        }, //44
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '危険選択の方法',
                            label: 'イ',
                            content: '生命保険協会',
                        }, //45
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '保険料率の改定',
                            label: 'ウ',
                            content: '引き下げ',
                        }, //46
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '近年の商品対応（保険料率）',
                            label: 'オ',
                            content: '',
                        }, //47
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '顧客サービスの向上',
                            label: 'オ',
                            content: '',
                        }, //48
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '営業職員の教育',
                            label: 'オ',
                            content: '',
                        }, //49
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '代理店',
                            label: 'ア',
                            content: '募集代理店',
                        }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons next-route="eigyo2025b" />
        </section>
    </SeihoTestLayout>
</template>
