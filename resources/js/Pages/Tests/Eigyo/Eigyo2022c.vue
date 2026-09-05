<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険商品と営業";
const subject = "2022年度 フォームC";
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
                    questionTitle="消費者契約法"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '事業者',
                        '困惑',
                        '取り消す',
                        '重要',
                        '断定的', //問11〜15
                    ]"
                    :labels="[
                        'オ', //11
                        'エ', //12
                        'ク', //13
                        'カ', //14
                        'キ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融サービス提供法"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '金融商品販売業者',
                        '市場リスク',
                        '信用リスク',
                        '元本欠損額の賠償責任',
                        '勧誘方針', //問16〜20
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
                    questionTitle="マイナンバー法"
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
                    questionTitle="年金改革"
                    :contents="[
                        '正しい',
                        '3分の1 → 2分の1', //p28
                        '適用縮小 → 適用拡大', //p28
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料率に関する対応"
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
                    questionTitle="公的介護保険の給付"
                    :contents="[
                        // rev: 2026-09-06 確認済み
                        '正しい',
                        '高齢者の心身の状況調査と主治医意見書に基づく[[コンピューター判定]]の結果（一次判定）と主治医の意見書等に基づき[[審査判定]]（二次判定）を行う。', //p30
                        '施設サービスを利用した場合の食費および居住費は[[自己負担となる]]。', //p32
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険仲立人"
                    :contents="[
                        // rev: 2026-09-06 確認済み
                        '保険仲立人は契約者と保険会社との間に立って[[中立の立場]]で保険契約の締結の[[媒介]]を行う者であり、特定の保険会社に属し、その保険会社のために媒介を行う保険募集人とその点において異なる。', //p103
                        '保険仲立人は、[[諸外国においては一般的に認められている]]。', //p103
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="医療保障等を主たる目的とした保険（特約）"
                    :contents="[
                        // rev: 2026-09-03 確認済み
                        '2000年に初めて開発・販売 → 1985年には発売されている', //p60
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人保険商品の基本型"
                    :contents="[
                        '責任準備金は死亡した被保険者の遺族に支払う → 生存した他の被保険者の保険金の支払に充当', //p47
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者信用団体生命保険"
                    :contents="[
                        '正しい',
                        '債務返済期間を保険期間 → 保険期間を1年', //p87
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="販売チャネルの多様化"
                    :contents="[
                        // rev: 2026-09-05 確認済み
                        '子会社・兄弟会社限定が[[解除]]され、生保商品の銀行窓販が実質的に解禁されることとなった。', //p102
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人営業機構（直販）、代理店営業機構"
                    :contents="[
                        // rev: 2026-09-04 確認済み
                        '正しい',
                        '正しい',
                        'スーパーバイザー → ホールセラー', //p146
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '企業の福利厚生費',
                            content: '正しい',
                        }, //31
                        {
                            questionTitle: '個人情報保護法',
                            content: '親族からの開示請求 → 本人からの開示請求',
                        }, //32 p40
                        {
                            questionTitle: '転換制度',
                            content: '特別配当の権利は転換後の契約に引き継がれる。',
                        }, //33
                        {
                            // rev: 2026-09-04 確認済み
                            questionTitle: '外貨建保険',
                            content: '商品のメリットとしては[[海外の比較的高い金利]]を反映することで、[[予定利率を高く]]設定していることが挙げられる。',//p65
                        }, //34
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '特別勘定',
                            content: '正しい',
                        }, //35
                        {
                            // rev: 2026-09-04 確認済み
                            questionTitle: '団体就業不能保障保険',
                            content: '被保険者が傷害または疾病を直接の原因として、[[入院または医師の指示による自宅療養をし、業務に全く従事できない状態（就業不能状態）が所定の期間を超えて継続した場合に就業不能保険金を支払う保険]]である。', //p97
                        }, //36
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '心身障害者扶養者生命保険',
                            content: '正しい',
                        }, //37
                        {
                            questionTitle: '営業職員チャネル',
                            content: '生命保険商品に特化した → 生命保険商品の枠を超えた',
                        }, //38 p101
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '個人顧客システム',
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '生命保険大学課程',
                            content: 'ファイナンシャル・ライフ・コンサルタント（FLC） → トータル・ライフ・コンサルタント（TLC）',
                        }, //40 p125
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'シルバー市場',
                            label: 'ア',
                            content: '65歳',
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '公的介護保険制度の概要',
                            label: 'ウ',
                            content: '所得段階別',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '保険料の払込に関する特約',
                            label: 'ウ',
                            content: '団体扱特約',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '危険選択の方法',
                            label: 'エ',
                            content: '面接',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '加入後の自在性',
                            label: 'オ',
                            content: '',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '国民年金基金制度',
                            label: 'ア',
                            content: '第1号被保険者',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '営業職員の退職金',
                            label: 'イ',
                            content: '傷病',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '支社の配置',
                            label: 'ウ',
                            content: '分割',
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '代理店',
                            label: 'オ',
                            content: '',
                        }, //49
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '営業職員の給与体系',
                            label: 'イ',
                            content: '地域',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="eigyo2022b" next-route="eigyo2021a" />
        </section>
    </SeihoTestLayout>
</template>
