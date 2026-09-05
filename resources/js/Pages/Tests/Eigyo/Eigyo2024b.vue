<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";
import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険商品と営業";
const subject = "2024年度 フォームB";
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
                    questionTitle="第三分野市場-①"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '災害保障特約',
                        '所得補償保険',
                        '長期総合保険',
                        '貯蓄性',
                        '現物給付', // 問１〜５
                    ]"
                    :labels="[
                        'カ', //1
                        'ウ', //2
                        'コ', //3
                        'エ', //4
                        'ア', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="第三分野市場-②"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '業務提携',
                        '競合と協調',
                        '外国保険事業者',
                        '日米保険協議',
                        '子会社', //問６〜10
                    ]"
                    :labels="[
                        'ケ', //6
                        'オ', //7
                        'カ', //8
                        'ウ', //9
                        'ア', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体年金保険-①"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '規約型',
                        'GIC（利率保証契約）',
                        '拠出型企業年金',
                        'B（型）年金',
                        '国民年金基金', //問11〜15
                    ]"
                    :labels="[
                        'キ', //11
                        'オ', //12
                        'ケ', //13
                        'イ', //14
                        'ク', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体年金保険-②"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '団体生存保険',
                        '公務員',
                        '新企業年金保険',
                        'A（型）年金',
                        '合同', //問16〜20
                    ]"
                    :labels="[
                        'カ', //16
                        'オ', //17
                        'キ', //18
                        'ケ', //19
                        'ク', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金の給付"
                    :contents="[
                        // rev: 2026-09-04 確認済み
                        '1年以上 → 1ヶ月以上', //p26
                        '障害基礎年金 ↔︎ 障害厚生年金', //p26
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険仲立人"
                    :contents="[
                        // rev: 2026-09-06 確認済み
                        '保険仲立人は契約者と保険会社との間に立って[[中立の立場]]で保険契約の締結の[[媒介]]を行う者であり、特定の保険会社に属し、その保険会社のために媒介を行う保険募集人とその点において異なる。', //p103
                        '正しい',
                        '2013年（平成25年）の金融審議会の報告書によると、保険契約者保護の観点から問題のないものについて保険仲立人に係る[[規制を緩和]]することが適当であるとされている。それを受け、2014年（平成26年）の保険業法の改正で、[[保証金の額の引き下げなど一部の規制が緩和された]]。', //p103
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="外貨建保険"
                    :contents="[
                        // rev: 2026-09-04 確認済み
                        '商品のメリットとしては[[海外の比較的高い金利]]を反映することで、[[予定利率を高く]]設定していることが挙げられる。',//p65
                        '外貨建の保険金額 → 円換算後の保険金額', //p65
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料率に関する対応"
                    :contents="[
                        // rev: 2026-09-05 確認済み
                        '死差配当 → 利差配当', //p78
                        '正しい',
                        '完全生命表 → 標準生命表', //p79
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額保険販売資格制度"
                    :contents="[
                        // rev: 2026-09-06 確認済み
                        '正しい',
                        '研修時間は定められていない → 2日間以上、10時間以上と定められている', //p126
                        '日本証券業協会 → 生命保険協会', //p126
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="顧客構造の変化"
                    :contents="[
                        // rev: 2026-09-06 確認済み
                        '正しい',
                        '一番高くなっている → 低くなっている', //p12
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険"
                    :contents="[
                        // rev: 2026-09-05 確認済み
                        '債権者である信用供与機関（銀行等）または信用保証機関を[[保険契約者および保険金受取人]]、債務者を[[被保険者]]、未返済債務額を保険金額とする商品である。', //p86
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的介護保険の給付"
                    :contents="[
                        // rev: 2026-09-06 確認済み
                        '正しい',
                        '正しい',
                        '介護保険サービスを利用した場合、原則として費用の[[１割]]（一定以上の所得者は[[２割〜３割]]）が自己負担となる。', //p32
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人保険商品構造"
                    :contents="[
                        '正しい',
                        '正しい',
                        '株式会社の形態のみ → 相互会社も販売可能', //p51
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人営業機構（直販）"
                    :contents="[
                        // rev: 2026-09-04 確認済み
                        '正しい',
                        '正しい',
                        '企業保険の販売を中心とした活動を行いつつ、[[個人保険販売の支援のため担当企業やその関連企業の基盤化を推進している法人営業組織もある]]。', //p145
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-09-05 確認済み
                            questionTitle: '公的介護保険制度の運営主体',
                            content: '公的介護保険制度の運営主体（保険者）は、各市区町村となっているが、介護保険事業が健全かつ円滑に行われるよう、[[国、都道府県、被保険者]]が重層的に支えあう制度となっている。', //p30
                        }, //31
                        {
                            // rev: 2026-09-04 確認済み
                            questionTitle: '企業の福利厚生費',
                            content: 'このうち[[法定福利費]]については、高齢化に伴う厚生年金保険や健康保険の保険料の上昇に伴い、賃金を上回る増加を示している。',//p33
                        }, //32
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'マイナンバー法',
                            content: '正しい',
                        }, //33
                        {
                            questionTitle: '危険選択の方法',
                            content: '生命保険支払専門士 → 生命保険面接士',
                        }, //34 p52
                        {
                            questionTitle: '一時払退職後終身保険',
                            content: '1年以上 → 2年以上<br>前後6か月以内 → 前後1年以内',
                        }, //35 p97
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '付帯サービス',
                            content: '正しい',
                        }, //36
                        {
                            questionTitle: '営業職員チャネル',
                            content: '生命保険商品に特化した → 生命保険商品の枠を超えた',
                        }, //37 p101
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '契約者カード',
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-09-05 確認済み
                            questionTitle: '募集人登録',
                            content: '生命保険協会 → 内閣総理大臣（金融庁長官に委任）', //p118
                        }, //39
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '機関の機能',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '厚生年金保険の保険料',
                            label: 'イ',
                            content: '標準報酬月額と標準賞与額それぞれ',
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '年金改革',
                            label: 'ウ',
                            content: '10年',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '消費者保護とコンプライアンス',
                            label: 'エ',
                            content: '保険金受取人',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'リビング・ニーズ特約',
                            label: 'オ',
                            content: '',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '医療保障保険（団体型）',
                            label: 'ア',
                            content: '公的医療保険',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '特化型営業職員制度',
                            label: 'ア',
                            content: '職域や法人',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '生保財形の特徴',
                            label: 'ウ',
                            content: '予定利率',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '顧客サービスの向上',
                            label: 'オ',
                            content: '',
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '支社の配置',
                            label: 'オ',
                            content: '',
                        }, //49
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '代理店',
                            label: 'オ',
                            content: '',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="eigyo2024a" next-route="eigyo2024c" />
        </section>
    </SeihoTestLayout>
</template>
