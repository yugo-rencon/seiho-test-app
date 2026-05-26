<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "約款と法律";
const subject = "2025年度 フォームC";
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
                    questionTitle="保険契約の失効および自動振替貸付の取扱い-①"
                    :contents="[
                        '猶予期間',
                        'オーバーローン',
                        '契約者貸付金',
                        '解約返戻金',
                        '生命保険会社所定', // 問１〜５
                    ]"
                    :labels="[
                        'コ', //1
                        'イ', //2
                        'エ', //3
                        'ウ', //4
                        'オ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の失効および自動振替貸付の取扱い-②"
                    :contents="[
                        '解約返戻金',
                        '復活',
                        '3年',
                        '延滞保険料',
                        '遅い時', // 問6〜10
                    ]"
                    :labels="[
                        'ウ', //6
                        'ケ', //7
                        'カ', //8
                        'ア', //9
                        'イ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融庁長官等による監督など-①"
                    :contents="[
                        '事業方法書',
                        '停止',
                        '財産の供託',
                        '免許の取消',
                        '会計参与', // 問11〜15
                    ]"
                    :labels="[
                        'カ', //11
                        'ケ', //12
                        'オ', //13
                        'コ', //14
                        'イ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融庁長官等による監督など-②"
                    :contents="[
                        '基金',
                        '通常の予測',
                        '最低保証リスク',
                        '200%',
                        '早期是正措置', // 問16〜20
                    ]"
                    :labels="[
                        'ウ', //16
                        'ク', //17
                        'オ', //18
                        'イ', //19
                        'キ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当金の支払"
                    :contents="[
                        '正しい',
                        '保険約款で、契約者配当金を保険契約者に支払う旨[[規定する]]のが一般的になっている', //p159-160
                        '事業年度末において契約日から起算して[[1年]]を超えている有効な保険契約', //p160
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険約款の必要性と拘束力・監督"
                    :contents="[
                        '正しい',
                        '保険契約のすべてについて申込人の理解や納得のない場合でも、保険約款は[[拘束力あり]]とされている', //p7
                        '認可を受けない保険約款もその内容が強行規定や公益に反するものでない限り、保険契約者との間では[[有効である]]とするのが判例、通説である', //p11
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業免許の定義"
                    :contents="[
                        'それぞれの保険に係る再保険の[[引受ができる]]', //p203
                        '正しい',
                        'かつては生命保険と損害保険の区別は[[商法でのみ定義されていた]]', //p204
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社の経理"
                    :contents="[
                        '生命保険会社においては責任準備金などの計算に比較的長期間を要するため[[年2回以上の決算を行うことは難しい]]', //p238
                        '財務局 → 金融庁長官', //p238
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険仲立人"
                    :contents="[
                        '当該契約の保険金の額に応じて[[供託しないことができる]]', //p270
                        '40% → 50%', //p270
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約等の当事者、その他の関係者"
                    :contents="[
                        '民法では、未成年者、成年被後見人、成年被保佐人、および成年被補助人の場合、[[所定の手続きを経ずに締結された契約については、後で取り消されることがある]]', //p37
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者契約法"
                    :contents="[
                        '「消費者」とは生命保険商品を購入（加入）する[[個人]]のこと', //p19
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="クーリング・オフ制度の取扱の制限"
                    :contents="[
                        '正しい',
                        '2年以下 → 1年以下', //p46
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の解約"
                    :contents="[
                        '正しい',
                        '解約の効力発生時期は、保険契約者の解約の意思表示が[[生命保険会社に到達した時]]', //p137
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の締結または保険募集に関する禁止行為"
                    :contents="[
                        '正しい',
                        '正しい',
                        '営業職員による保険料の立替も「特別の利益の提供」に[[該当する]]', //p266
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        {
                            questionTitle: '法律と保険約款',
                            content: '保険約款に規定のない事項については、おおむね、[[保険法、民法]]の順に適用される', //p13
                        }, //31
                        {
                            questionTitle: '保険料不可分の原則',
                            content: '保険法は、保険料不可分の原則を前提とした規定が[[設けられていない]]ことから、未経過期間に対応した保険料を[[返還する必要がある]]', //p44
                        }, //32
                        {
                            questionTitle: '保険金受取人の死亡',
                            content: '保険契約者 → 相続人の全員', //p58
                        }, //33
                        {
                            questionTitle: '保険給付の履行期',
                            content: '正しい',
                        }, //34
                        {
                            questionTitle: '生命保険募集人',
                            content: '「保険契約の締結の[[媒介]]」とは保険契約の成立に尽力する事実行為であるのに対し、「保険契約の締結の[[代理]]」とは保険契約の締結そのものと考えて良い', //p47
                        }, //35
                        {
                            questionTitle: '特約の消滅',
                            content: '正しい',
                        }, //36
                        {
                            questionTitle: '責任開始期',
                            content: '契約日とは、契約の成立日（承諾日）[[を意味するものではなく]]、保険期間の起算日を明確にするために、責任開始の日を契約日と呼称しているにすぎない', //p83
                        }, //37
                        {
                            questionTitle: '疾病入院特約',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '外国保険業者',
                            content: '外国保険業者の場合は、株式会社や相互会社[[でなくてもよく]]、個人でも良い', //p256
                        }, //39
                        {
                            questionTitle: '乗合の禁止',
                            content: '正しい',
                        }, //40
                        // 問41〜50
                        { questionTitle: '生命保険契約等の性質', label: 'オ', content: '' }, //41
                        { questionTitle: '保険料の返還', label: 'オ', content: '' }, //42
                        { questionTitle: '生命保険契約等の効力', label: 'オ', content: '' }, //43
                        { questionTitle: '生死不明の場合の取扱', label: 'イ', content: '生命保険会社' }, //44
                        { questionTitle: '保険契約の解除', label: 'ウ', content: '重大事由' }, //45
                        { questionTitle: '保険契約者の変更', label: 'ア', content: '承継人' }, //46
                        { questionTitle: '保険会社の業務の範囲', label: 'ア', content: '法定他業' }, //47
                        { questionTitle: '保険業の監督の方法', label: 'イ', content: '実体的監督' }, //48
                        { questionTitle: '株主の権利行使の基準日', label: 'イ', content: '3ヶ月' }, //49
                        { questionTitle: '供託', label: 'オ', content: '' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="yakkan2025b" next-route="yakkan2024a" />
        </section>
    </SeihoTestLayout>
</template>
