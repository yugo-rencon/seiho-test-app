<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";
import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険商品と営業";
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
                    questionTitle="消費者保護とコンプライアンス-①"
                    :contents="[
                        '規制緩和',
                        '民法',
                        '元本割れリスク',
                        '投資性',
                        '特定保険契約', // 問１〜５
                    ]"
                    :labels="[
                        'イ', //1
                        'コ', //2
                        'ア', //3
                        'キ', //4
                        'ク', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者保護とコンプライアンス-②"
                    :contents="[
                        '商法',
                        '共済契約',
                        '傷害疾病保険契約',
                        '遺言',
                        '顧客重視・法令等の遵守', //問６〜10
                    ]"
                    :labels="[
                        'ク', //6
                        'ウ', //7
                        'カ', //8
                        'ア', //9
                        'オ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="顧客サービスの向上と多様化-①"
                    :contents="[
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
                    :contents="[
                        'face to face',
                        '情報通信機器',
                        '囲い込み',
                        'CS（customer Satisfaciton）',
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
                    questionTitle="医療保障等を主たる目的とした保険（特約）"
                    :contents="[
                        '2000年に初めて開発・販売 → 1985年には発売されている', //p60
                        '正しい',
                        '2000万円を上限とし、特約保険料も割安 → 3000万円を上限とし、特約保険料は不要（無料）', //p61
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額保険"
                    :contents="[
                        '正しい',
                        'いずれも毎日変動する → 変動保険金は毎月変動、満期保険金は満期時に確定する', //p64
                        '基本保険金額、特約保険金額は変動する → 変動しない', //p64
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険"
                    :contents="[
                        '正しい',
                        '1年以上 → 2年以上<br>前後6か月以内 → 前後1年以内', //p97
                        '健康保険組合連合会 → 地方公共団体', //p97
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険代理店"
                    :contents="[
                        '一社専属制が認められ、複数の生命保険会社の商品を取り扱いが可能', //p101
                        '正しい',
                        '業務の特性や規模にかかわらず → 業務の特性や規模に応じて', //p101
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="業界共通教育制度"
                    :contents="[
                        '専門課程 → 応用課程', //p125
                        'トータル・ライフ・コンサルタント → シニア・ライフ・コンサルタント', //p125
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="長い老後生活を見据えたライフ・プランニング"
                    :contents="[
                        '生活習慣病罹患率 → 乳児死亡率', //p20
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金の保険料"
                    :contents="[
                        '正しい',
                        '第3号被保険者 → 第1号被保険者', //p25
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人保険商品の構造"
                    :contents="[
                        '正しい',
                        '正しい',
                        '相互会社を除き → 相互会社でも販売可能', //p51
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料払込負担の軽減"
                    :contents="[
                        '主契約ではなく → 主契約にも充当可能', //p71-72
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険仲立人"
                    :contents="[
                        '正しい',
                        '正しい',
                        '規制の強化 → 規制の緩和<br>保証金の額の引き上げ → 保証金の額の引き下げ', //p103
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '人の一生', content: 'ライフスタイル → ライフステージ<br>ライフ・プランニング → ライフサイクル' }, //31 p20
                        { questionTitle: '第三分野市場', content: '保険監督者会議 → 日米保険協議<br>生損保本体 ↔︎ 子会社' }, //32 p35
                        { questionTitle: '生命年金', content: '被保険者の生死を問わず → 被保険者の生存中に限り' }, //33 p47
                        { questionTitle: '危険選択の方法', content: '生命保険支払専門士 → 生命保険面接士' }, //34 p52
                        { questionTitle: '契約者単位の通算割引', content: '払込保険料を割り引く方式のみ → 給付金として割り戻す方式もある' }, //35 p78
                        { questionTitle: '特別勘定', content: '正しい' }, //36
                        { questionTitle: '財形貯蓄制度', content: '勤労者財産形成教育貯蓄契約（財形教育） → 勤労者財産形成住宅貯蓄契約（財形住宅）' }, //37 p94
                        { questionTitle: 'インターネット通販', content: '生保会社の出現に至ってない → 契約の成立まで完了できる生保会社もある' }, //38 p104
                        { questionTitle: '営業職員の育成体系', content: '正しい' }, //39
                        { questionTitle: '企業保険の営業', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '種類別貯蓄高', label: 'ウ', content: '通貨性預貯金' }, //41
                        { questionTitle: '遺族年金', label: 'ア', content: '３分の１' }, //42
                        { questionTitle: '公的介護保険制度の概要', label: 'ウ', content: '介護認定審査会' }, //43
                        { questionTitle: '個人保険商品の配当', label: 'ア', content: '資産運用成果' }, //44
                        { questionTitle: '月払保険の普及', label: 'オ', content: '' }, //45
                        { questionTitle: '総合福祉団体定期保険', label: 'イ', content: '企業等' }, //46
                        { questionTitle: '国民年金基金制度', label: 'イ', content: '厚生労働大臣' }, //47
                        { questionTitle: '営業職員の登録', label: 'オ', content: '' }, //48
                        { questionTitle: '営業職員の給与体系', label: 'エ', content: '保障額' }, //49
                        { questionTitle: '支社の配置', label: 'オ', content: '' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="eigyo2024c" next-route="eigyo2023b" />
        </section>
    </SeihoTestLayout>
</template>
