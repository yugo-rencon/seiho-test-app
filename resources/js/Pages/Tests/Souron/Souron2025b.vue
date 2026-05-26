<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険総論";
const subject = "2025年度 フォームB";
const isDraft = false;
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-[#fdfbff] text-gray-800 py-10">
            <!-- ページタイトル -->
            <Pagetitle :title="title" :description="subject" />
            <DraftNotice v-if="isDraft" />

            <!-- 問題リスト -->
            <div class="max-w-4xl mx-auto mt-4 space-y-2">
                <QuestionTemp3
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="狭義の社会保障制度-①"
                    :contents="[
                        '保険料の拠出',
                        '全国健康保険協会管掌保険',
                        '国家公務員',
                        '国民健康保険',
                        '後期高齢者', // 問１〜５
                    ]"
                    :labels="[
                        'イ', //1
                        'オ', //2
                        'ケ', //3
                        'キ', //4
                        'エ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="狭義の社会保障制度-②"
                    :contents="[
                        '共済年金',
                        '国民年金',
                        '労働者災害補償保険',
                        '生活保護',
                        '資力調査（ミーンズ・テスト）', // 問6〜10
                    ]"
                    :labels="[
                        'ケ', //6
                        'イ', //7
                        'カ', //8
                        'オ', //9
                        'エ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会構造の変化-①"
                    :contents="[
                        '平均寿命',
                        '7',
                        '速い',
                        '扶養',
                        '15〜64', // 問11〜15
                    ]"
                    :labels="[
                        'ク', //11
                        'ウ', //12
                        'キ', //13
                        'カ', //14
                        'コ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会構造の変化-②"
                    :contents="[
                        '年金',
                        '70',
                        '合計特殊出生率',
                        '出生数',
                        '労働力率', // 問16〜20
                    ]"
                    :labels="[
                        'エ', //16
                        'ケ', //17
                        'イ', //18
                        'オ', //19
                        'コ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険の対象となる危険の種類"
                    :contents="[
                        // rev: 2026-05-26 確認済み
                        '正しい',
                        '同様な危険を多数引き受けることにより、危険の発生頻度の変動幅を[[縮小]]させ、[[平均経験率]]を得る必要がある', //p4
                        '保険料と危険度の積 → 保険金額と危険度の積', //p4
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="アメリカにおける生命保険事業の発展"
                    :contents="[
                        // rev: 2026-05-26 確認済み
                        '解約価格法 → 不没収法', //p62
                        'マッカラン調査委員会 → アームストロング調査委員会', //p63
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="介護保険制度"
                    :contents="[
                        // rev: 2026-05-26 確認済み
                        '介護保険制度の被保険者は、[[65歳以上]]を第1号被保険者とし、[[40歳〜65歳未満]]の医療保険加入者を第2号被保険者とする', //p141
                        '正しい',
                        '[[第1号被保険者の保険料]]は、各市町村ごとに基準保険料（所得段階別の定額保険料）が設定され、[[第2号被保険者の保険料]]は、それぞれ加入する医療保険者が制度の算定基準に基づき設定される', //p141
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="少額短期保険業"
                    :contents="[
                        // rev: 2026-05-26 確認済み
                        '「少額短期保険業」は、短期（生保・医療保険で1年以内、損害保険で2年以内）かつ少額保険金額（疾病による死亡保険金[[300万円]]以内、疾病・傷害による入院給付金等[[80万円]]以内、損害保険金1,000万円以内等）の保険のみを引き受ける保険業である', //p177z
                        '1500万円以上 → 1000万円以上', //p176
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費構造の変化"
                    :contents="[
                        '正しい',
                        '商品の選択に当たっても、従来であれば、[[「周りの人が持っているから」とか「テレビのコマーシャルで見たから」といった外的要素に左右される面が多かった]]のであるが、今日では、[[自分の好みに合っているか、本当に必要か、価格は適切かなどを判断し、自分で納得のいく商品を購入する方向]]に変わってきている。', //p185
                        '企業としても、[[画一的商品を大量生産、低価格で販売する]]という戦略だけでは対応し切れなくなってきた面もあり、[[いかにニーズを先取りし、他に先駆けて新製品を市場に提供できる]]かが、重要な課題となっている', //p184-185
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険約款"
                    :contents="[
                        '保険約款の効力は生じない → 保険約款には拘束力がある', //p8
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="日本における生命保険の発展"
                    :contents="[
                        '正しい',
                        '正しい',
                        '第一次世界大戦 → スペインかぜ', //p76
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度"
                    :contents="[
                        '正しい',
                        '付加年金制度 → 確定拠出年金（企業型）', //p127
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業法の概要"
                    :contents="[
                        // rev: 2026-05-26 確認済み
                        '正しい',
                        '[[免許制]]（少額短期保険業者については[[登録制]]）が採用されている', //p150
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="生保業界におけるシステム動向"
                    :contents="[
                        // rev: 2026-05-26 確認済み
                        '最初に機械化されたのは最も事務量の多い[[個人保険分野]]である', //p198
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        {
                            questionTitle: '生命保険契約の法的性質',
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-05-26 確認済み
                            questionTitle: '危険選択の意義',
                            content: '収支相当の原則 → 危険均一性の原則', //p16
                        }, //32
                        {
                            questionTitle: '確定拠出年金保険',
                            content: '正しい',
                        }, //33
                        {
                            questionTitle: 'イギリスにおける生命保険の発展',
                            content: '正しい',
                        }, //34
                        {
                            questionTitle: '生命保険会社の資金の性格',
                            content: '純資産の大部分 → 負債の大部分', //p108
                        }, //35
                        {
                            // rev: 2026-05-26 確認済み
                            questionTitle: '組織変更',
                            content: '100株未満 → 1株未満', //p163
                        }, //36
                        {
                            // rev: 2026-05-26 確認済み
                            questionTitle: '共済と保険',
                            content: '適合性の原則 → 給付・反対給付均等の原則', //p165
                        }, //37
                        {
                            questionTitle: '日本の金融制度',
                            content: '今日の日本の金融制度 → 戦後の日本の金融制度', //p174
                        }, //38
                        {
                            questionTitle: '生命保険会社の資産運用の今後のあり方',
                            content: '特別勘定の導入 → 区分経理の導入', //p200
                        }, //39
                        {
                            questionTitle: '医療・介護ニーズへの対応',
                            content: '正しい',
                        }, //40
                        // 問41〜50
                        { questionTitle: '保険契約の当事者', label: 'ア', content: '保険契約者' }, //41
                        { questionTitle: '死亡表', label: 'オ', content: '' }, //42
                        { questionTitle: '生命保険商品の基本型', label: 'イ', content: '生存保険' }, //43
                        { questionTitle: '賦課式保険', label: 'エ', content: '同額の分担金で' }, //44
                        { questionTitle: 'ユニバーサル保険', label: 'オ', content: '' }, //45
                        { questionTitle: '生保資産運用の基本原則', label: 'ウ', content: '公共性' }, //46
                        { questionTitle: '生命保険業の監督の方法', label: 'エ', content: '財務大臣' }, //47
                        { questionTitle: '労働者共済', label: 'イ', content: 'こくみん共済coop <全労災>' }, //48
                        { questionTitle: '損害保険', label: 'ア', content: '保険者' }, //49
                        { questionTitle: '年金型商品の開発', label: 'ウ', content: '変額年金' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="souron2025a" next-route="souron2025c" />
        </section>
    </SeihoTestLayout>
</template>
