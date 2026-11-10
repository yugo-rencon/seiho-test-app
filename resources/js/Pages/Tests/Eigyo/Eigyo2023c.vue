<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";
import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険商品と営業";
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
                    questionTitle="公的介護保険制度の概要-①"
                    :relatedProblems="['2023c1']"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '40歳以上',
                        '65歳以上',
                        '医療費抑制',
                        '所得段階別',
                        '18万円', // 問１〜５
                    ]"
                    :labels="[
                        'ウ', //1
                        'カ', //2
                        'キ', //3
                        'コ', //4
                        'ア', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的介護保険制度の概要-②"
                    :relatedProblems="['2023c6']"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '厚生労働省',
                        '介護認定審査会',
                        '予防給付',
                        '地域密着サービス',
                        '居住費', //問６〜10
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
                    questionTitle="顧客サービスの向上と多様化-①"
                    :relatedProblems="['2023a11', '2023b11', '2023c11']"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '継続的',
                        'マーケティング',
                        '転換制度',
                        'エージェント',
                        '不可分化', //問11〜15
                    ]"
                    :labels="[
                        'ウ', //11
                        'コ', //12
                        'キ', //13
                        'イ', //14
                        'ケ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="顧客サービスの向上と多様化-②"
                    :relatedProblems="['2023a16', '2023b16', '2023c16']"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        'face to face',
                        '情報通信機器',
                        '囲い込み',
                        'CS（Customer Satisfaction）',
                        '選択', //問16〜20
                    ]"
                    :labels="[
                        'ケ', //16
                        'エ', //17
                        'ア', //18
                        'ク', //19
                        'オ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人保険商品の構造"
                    :relatedProblems="['2023a28', '2023c21']"
                    :contents="[
                        // rev: 2026-09-05 確認済み
                        '特約の保険期間は、主契約の保険期間と[[同じ]]場合と、主契約より[[短い]]場合がある。', //p49
                        '短縮払 → 短期払', //p49
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額保険"
                    :relatedProblems="['2023a22', '2023b22', '2023c22']"
                    :contents="[
                        // rev: 2026-09-05 確認済み
                        '正しい',
                        '変動する部分は、変動保険金（[[毎月変動]]）、満期保険金（[[満期時に確定]]）のほか積立金（[[毎日変動]]）や、解約返戻金（[[毎日変動]]）がある。', //p64
                        '契約時に定めた基本保険金額、特約保険金額は[[変動しない]]。', //p64
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険"
                    :relatedProblems="['2023a23', '2023b23', '2023c23']"
                    :contents="[
                        // rev: 2026-09-05 確認済み
                        '正しい',
                        '1年以上 → 2年以上<br>前後6か月以内 → 前後1年以内', //p97
                        '健康保険組合連合会 → 地方公共団体', //p97
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="通信販売とインターネット通販"
                    :relatedProblems="['2023c24']"
                    :contents="[
                        // rev: 2026-09-05 確認済み
                        '通信販売は営業職員・募集代理店による対面販売との比較において顧客との接点が非常に限られているため、[[告知義務や契約始期、モラルリスク等が問題となりやすく]]、取扱保険商品、加入保険金額を制限しているケースが[[多い]]。', //p104
                        'パソコンやスマートフォンで資料請求や申込ができるだけではなく、[[契約の成立までも完了できる生保会社もある]]。', //p104
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="営業職員の募集人登録"
                    :relatedProblems="['2023c25']"
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
                    questionTitle="金融サービス提供法"
                    :relatedProblems="['2023c26']"
                    :contents="[
                        // rev: 2026-09-06 確認済み
                        '正しい',
                        '正しい',
                        '消費者はその契約を取り消すことができる → 業者は元本欠損額の賠償責任を負う', //p38
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金の保険料"
                    :relatedProblems="['2023a27', '2023b27', '2023c27']"
                    :contents="[
                        // rev: 2026-09-06 確認済み
                        '正しい',
                        '第3号被保険者 → 第1号被保険者', //p25
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="特化型営業職員制度・法人営業機構（直販）"
                    :relatedProblems="['2023c28']"
                    :contents="[
                        // rev: 2026-09-04 確認済み
                        '正しい',
                        'ホールセラー → 法人営業第⚪︎部', //p145
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="情報活用型マーケティング"
                    :relatedProblems="['2023c29']"
                    :contents="[
                        // rev: 2026-09-06 確認済み
                        '近年は、この情報を既契約者への再販売等に活用することが[[一般的となってきている]]。', //p110
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="支社機構・機関機構"
                    :relatedProblems="['2023c30']"
                    :contents="[
                        // rev: 2026-09-06 確認済み
                        '[[これまで]]支社の配置は管理スパン上の問題や地域社会における店舗サービス機能の発揮ならびにPR効果の観点から、組織がある一定規模までに達すれば支社を分割するのが一般的であった。しかし、[[近年では]]コスト、効率化のため事務面の集約化や規模の大型化に向かう傾向も見られる。', //p140
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
                            questionTitle: '企業福祉制度',
                            relatedProblems: ['2023c31'],
                            content: '企業福祉制度のあり方も、従来のような総合的・恩恵的福祉から、自己責任原則の下、従業員の自助努力・自立を側面から支援するものに重点が移されつつある。', //p33
                        }, //31
                        {
                            // rev: 2026-09-06 確認済み
                            questionTitle: '第三分野市場',
                            relatedProblems: ['2023a32', '2023c32'],
                            content: '損害保険 ↔︎ 生命保険', //p34
                        }, //32
                        {
                            // rev: 2026-09-06 確認済み
                            questionTitle: '生命年金',
                            relatedProblems: ['2023a33', '2023b33', '2023c33'],
                            content: '生命年金とは、確定年金とは異なり、[[被保険者の生存中にかぎり]]、周期的に一定の金額の支払をするものをいう。', //p47
                        }, //33
                        {
                            // rev: 2026-09-06 確認済み
                            questionTitle: '危険選択の方法',
                            relatedProblems: ['2023a34', '2023b34', '2023c34'],
                            content: '生命保険支払専門士 → 生命保険面接士', //p52
                        }, //34
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '消費者契約法',
                            relatedProblems: ['2023c35'],
                            content: '正しい',
                        }, //35
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '特別勘定',
                            relatedProblems: ['2023a36', '2023b36', '2023c36'],
                            content: '正しい',
                        }, //36
                        {
                            // rev: 2026-09-06 確認済み
                            questionTitle: '医療保険',
                            relatedProblems: ['2023c37'],
                            content: '所得税の課税対象 → 非課税', //p59-61
                        }, //37
                        {
                            // rev: 2026-09-03 確認済み
                            questionTitle: '財形貯蓄制度と税制',
                            relatedProblems: ['2023c38'],
                            content: '一般の生命保険と異なり保険料は生命保険料控除の対象とはならない。', //p96
                        }, //38
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '営業職員の給与体系',
                            relatedProblems: ['2023a49', '2023c39'],
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '代理店',
                            relatedProblems: ['2023c40'],
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '代理・代行',
                            relatedProblems: ['2023b31', '2023c41'],
                            label: 'ア',
                            content: '保険業法',
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '遺族年金',
                            relatedProblems: ['2023a42', '2023b42', '2023c42'],
                            label: 'ア',
                            content: '３分の１',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '近年の商品対応（保険料率）',
                            relatedProblems: ['2023c43'],
                            label: 'オ',
                            content: '',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '団体信用生命保険',
                            relatedProblems: ['2023c44'],
                            label: 'イ',
                            content: '賦払償還債務',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '月払保険の普及',
                            relatedProblems: ['2023a45', '2023b45', '2023c45'],
                            label: 'オ',
                            content: '',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '総合福祉団体定期保険',
                            relatedProblems: ['2023a46', '2023b46', '2023c46'],
                            label: 'イ',
                            content: '企業等',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '団体年金保険',
                            relatedProblems: ['2023b24', '2023c47'],
                            label: 'ウ',
                            content: '個人',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '医療保障保険（団体型）',
                            relatedProblems: ['2023b35', '2023c48'],
                            label: 'エ',
                            content: '代表者',
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '保険仲立人',
                            relatedProblems: ['2023a30', '2023b25', '2023c49'],
                            label: 'ウ',
                            content: '媒介',
                        }, //49
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '変額保険販売資格要件',
                            relatedProblems: ['2023c50'],
                            label: 'オ',
                            content: '',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="eigyo2023b" next-route="eigyo2022a" />
        </section>
    </SeihoTestLayout>
</template>
