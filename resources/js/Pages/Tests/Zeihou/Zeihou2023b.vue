<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税法";
const subject = "2023年度 フォームB";
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
                    questionTitle="贈与税-①"
                    :contents="[
                        '所属税',
                        '生活費',
                        '結婚・子育て',
                        '配偶者控除額',
                        '110', // 問１〜５
                    ]"
                    :labels="[
                        'オ', //1
                        'カ', //2
                        'ウ', //3
                        'キ', //4
                        'イ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税-②"
                    :contents="[
                        '20',
                        '居住用不動産',
                        '2,000',
                        '2月1日から3月15日',
                        '贈与を受けた人', //問６〜10
                    ]"
                    :labels="[
                        'イ', //6
                        'ウ', //7
                        'コ', //8
                        'キ', //9
                        'エ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="グループ通算制度-①"
                    :contents="[
                        '経済のグローバル化',
                        '連結',
                        '分社化・持株会社化',
                        '税務情報',
                        '個別申告方式', //問11〜15
                    ]"
                    :labels="[
                        'エ', //11
                        'コ', //12
                        'ケ', //13
                        'カ', //14
                        'オ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="グループ通算制度-②"
                    :contents="[
                        '完全支配関係',
                        '納税申告書',
                        'は除く',
                        '3ヶ月',
                        '子法人のすべて', //問16〜20
                    ]"
                    :labels="[
                        'ウ', //16
                        'ク', //17
                        'ケ', //18
                        'イ', //19
                        'カ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税法における各種所得の金額の計算"
                    :contents="[
                        '不動産所得 → 事業所得', //p18
                        '正しい',
                        '特別控除額を控除した金額 → 特別控除額は控除しない', //p19
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の課税財産"
                    :contents="[
                        '公益事業用財産は非課税財産に該当', //p76,81
                        '全額が課税財産 → 被相続人負担分のみ課税財産', //p76
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の申告と納税"
                    :contents="[
                        '1500万円 → 2000万円', //p56
                        '譲渡所得は含まれない', //p58
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税通達による事業保険の取扱"
                    :contents="[
                        '正しい',
                        '定期部分、養老部分ともに損金 → 定期部分は損金、養老部分は資産計上', //p183
                        '給与 → 資産計上', //p183
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税の性格"
                    :contents="[
                        '正しい',
                        '法人擬制説 → 法人実在説', //p118
                        '法人実在説 → 法人擬制説', //p118
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当所得"
                    :contents="[
                        '正しい',
                        '正しい',
                        '控除可能である → 控除できない', //p16
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税額の計算"
                    :contents="[
                        '逓増税率 → 超過累進税率', //p51
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続税の申告と納税"
                    :contents="[
                        '正しい',
                        '正しい',
                        '不動産、船舶は財産から除かれる → 財産に含まれる', //p95-96
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人の住民税"
                    :contents="[
                        '正しい',
                        '道府県民税は所得割のみ課される → 均等割と所得割が課される。', //p147
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人保険における保険金の取扱"
                    :contents="[
                        '正しい',
                        '正しい',
                        '必ず課税の対象 → 配偶者や直系血族、生計を一にする親族も非課税', //p176
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '流通税', content: '印紙税・消費税等 → 印紙税・不動産取得税等' }, //31 p4
                        { questionTitle: '生命保険と相続対策', content: '正しい' }, //32
                        { questionTitle: '確定申告', content: '正しい' }, //33
                        { questionTitle: '遺産分割の方法', content: '満20歳以上 → 満15歳以上' }, //34 p72
                        { questionTitle: '税額控除', content: '正しい' }, //35
                        { questionTitle: '総合福祉団体定期保険の保険料', content: '正しい' }, //36
                        { questionTitle: '不動産取得税', content: '正しい' }, //37
                        { questionTitle: '最低課税方式', content: '13% → 7%' }, //38 p225
                        { questionTitle: '営業職員報酬の必要経費', content: '正しい' }, //39
                        { questionTitle: '財形住宅貯蓄積立保険', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '退職所得控除額', label: 'ウ', content: '40万円' }, //41
                        { questionTitle: '医療費控除（セルフメディケーション）', label: 'ア', content: 'との選択により' }, //42
                        { questionTitle: '相続税の非課税財産', label: 'エ', content: '心身障害者扶養共済制度' }, //43
                        { questionTitle: '相続時精算課税制度', label: 'オ', content: '' }, //44
                        { questionTitle: '資産評価益の益金不算入', label: 'オ', content: '' }, //45
                        { questionTitle: '同族会社', label: 'オ', content: '' }, //46
                        { questionTitle: '法人の住民税', label: 'イ', content: '均等割額と法人税割額' }, //47
                        { questionTitle: '生命保険料控除の手続き', label: 'ウ', content: '第1回保険料充当金領収証' }, //48
                        { questionTitle: '確定給付企業年金', label: 'エ', content: '事業主' }, //49
                        { questionTitle: '生命保険代理店の事業免許等に係る税', label: 'ア', content: '登録免許税' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="zeihou2023a" next-route="zeihou2023c" />
        </section>
    </SeihoTestLayout>
</template>
