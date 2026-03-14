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
                        '未成年者を除くすべての人 → 住民票を有するすべての人', //p40
                        '正しい',
                        '重大個人情報 → 特定個人情報', //p40
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
                        '正しい',
                        '一次判定：審査判定 → コンピューター判定<br>二次判定：コンピューター判定 → 審査判定', //p30
                        '食費および居住費の自己負担割合も同様 → 全額自己負担', //p32
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険仲立人"
                    :contents="[
                        '契約者の立場で → 中立の立場で<br>締結の代理または媒介 → 締結の媒介', //p103
                        '日本固有の制度 → 諸外国で一般的', //p103
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="医療保障等を主たる目的とした保険（特約）"
                    :contents="[
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
                        '子会社・兄弟会社に限定 → 限定は解除されている', //p102
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
                        // 問31〜40
                        { questionTitle: '企業の福利厚生費', content: '正しい' }, //31
                        { questionTitle: '個人情報保護法', content: '親族からの開示請求 → 本人からの開示請求' }, //32 p40
                        { questionTitle: '転換制度', content: '特別配当の権利は転換後の契約に引き継がれる。' }, //33
                        { questionTitle: '外貨建保険', content: '安い為替手数料 → 高い金利<br>予定事業費率を低く → 予定利率を高く' }, //34 p65
                        { questionTitle: '特別勘定', content: '正しい' }, //35
                        { questionTitle: '団体就業不能保障保険', content: '治療給付金・入院給付金・死亡保険金を支払う → 就業不能保険金を支払う' }, //36 p97
                        { questionTitle: '心身障害者扶養者生命保険', content: '正しい' }, //37
                        { questionTitle: '営業職員チャネル', content: '生命保険商品に特化した → 生命保険商品の枠を超えた' }, //38 p101
                        { questionTitle: '個人顧客システム', content: '正しい' }, //39
                        { questionTitle: '生命保険大学課程', content: 'ファイナンシャル・ライフ・コンサルタント（FLC） → トータル・ライフ・コンサルタント（TLC）' }, //40 p125
                        // 問41〜50
                        { questionTitle: 'シルバー市場', label: 'ア', content: '65歳' }, //41
                        { questionTitle: '公的介護保険制度の概要', label: 'ウ', content: '所得段階別' }, //42
                        { questionTitle: '保険料の払込に関する特約', label: 'ウ', content: '団体扱特約' }, //43
                        { questionTitle: '危険選択の方法', label: 'エ', content: '面接' }, //44
                        { questionTitle: '加入後の自在性', label: 'オ', content: '' }, //45
                        { questionTitle: '国民年金基金制度', label: 'ア', content: '第1号被保険者' }, //46
                        { questionTitle: '営業職員の退職金', label: 'イ', content: '傷病' }, //47
                        { questionTitle: '支社の配置', label: 'ウ', content: '分割' }, //48
                        { questionTitle: '代理店', label: 'オ', content: '' }, //49
                        { questionTitle: '営業職員の給与体系', label: 'イ', content: '地域' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="eigyo2022b" next-route="eigyo2021a" />
        </section>
    </SeihoTestLayout>
</template>
