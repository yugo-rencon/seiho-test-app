<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";
import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険商品と営業";
const subject = "2024年度 フォームC";
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
                    questionTitle="銀行窓販-①"
                    :contents="[
                        '信用生命保険',
                        '競争条件の公平性',
                        '流出防止',
                        '抱き合わせ販売',
                        '商品情報', //問11〜15
                    ]"
                    :labels="[
                        'キ', //11
                        'エ', //12
                        'コ', //13
                        'ク', //14
                        'カ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="銀行窓販-②"
                    :contents="[
                        '個人年金保険(定額・変額)',
                        '事前説明義務',
                        '残債務リスク',
                        '相談窓口',
                        '全面解禁', //問16〜20
                    ]"
                    :labels="[
                        'カ', //16
                        'ク', //17
                        'キ', //18
                        'コ', //19
                        'ケ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的介護保険の給付"
                    :contents="[
                        '総務省 → 厚生労働省', //p30
                        '正しい',
                        '費用の2割（一定以上の所得者は3割） → 費用の1割（一定以上の所得者は2割～3割）', //p32
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体年金保険"
                    :contents="[
                        '正しい',
                        '確定拠出年金保険 → 新企業年金保険', //p91
                        '公務員等の共済組合の年金資産の運用を引き受けるため → 企業や団体で運営される自助努力型年金制度を運営するため', //p91
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="外貨建保険"
                    :contents="[
                        '安い為替手数料 → 高い金利<br>予定事業費率を低く → 予定利率を高く', //p65
                        '外貨建 → 円換算後', //p65
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料率に関する対応"
                    :contents="[
                        '死差配当 → 利差配当', //p78
                        '正しい',
                        '完全生命表 → 標準生命表', //p79
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="通信販売とインターネット通販"
                    :contents="[
                        'モラルリスク等が問題となりにくい → 問題となりやすい<br>制限しているケースは少ない → 多い', //p104
                        '生保会社はまだ現れていない → 契約の成立まで完了できる生保会社もある', //p104
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度の動向"
                    :contents="[
                        '正しい',
                        '退職した場合（退職給付） → 老齢になった場合（老齢給付）', //p25
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険"
                    :contents="[
                        '債務者を保険契約者および被保険者 → 被保険者<br>債権者を保険金受取人 → 保険契約者および保険金受取人', //p86
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人保険商品の特約"
                    :contents="[
                        '正しい',
                        '正しい',
                        '差額分は消滅する → 差額分は保障が継続する', //p61-62
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="情報活用型マーケティング"
                    :contents="[
                        '正しい',
                        '再販売等に活用することは行われていない → 活用することが一般的', //p110
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="営業職員の成績計上"
                    :contents="[
                        '予定利率 → 予定事業費', //p132
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
                        { questionTitle: '豊かな老後生活への備え', content: '正しい' }, //31
                        { questionTitle: '企業の福利厚生費', content: '法定外複利費については → 法定福利費については' }, //32 p33
                        { questionTitle: 'マイナンバー法', content: '正しい' }, //33
                        { questionTitle: '転換制度', content: '正しい' }, //34
                        { questionTitle: '財形貯蓄制度', content: '50歳未満 → 55歳未満<br>10年以上の期間 → 5年以上の期間' }, //35 p94
                        { questionTitle: '付帯サービス', content: '正しい' }, //36
                        { questionTitle: '営業職員の適格性要素', content: '正しい' }, //37
                        { questionTitle: '名寄せ', content: '正しい' }, //38
                        { questionTitle: '変額保険販売資格制度', content: '正しい' }, //39
                        { questionTitle: '企業保険の営業', content: '企業規模が小さくなれば → 企業が大企業なれば' }, //40 p144
                        // 問41〜50
                        { questionTitle: '厚生年金保険の保険料', label: 'イ', content: '標準報酬月額と標準賞与額それぞれ' }, //41
                        { questionTitle: '金融サービス提供法', label: 'ウ', content: '勧誘方針' }, //42
                        { questionTitle: '個人保険商品', label: 'ウ', content: '利差配当' }, //43
                        { questionTitle: '変額保険', label: 'ア', content: '特約保険金額' }, //44
                        { questionTitle: '医療保障保険（団体型）', label: 'ア', content: '公的医療保険' }, //45
                        { questionTitle: '団体信用生命保険', label: 'イ', content: '賦払償還債務' }, //46
                        { questionTitle: '心身障害者扶養者生命保険', label: 'オ', content: '' }, //47
                        { questionTitle: '営業職員の給与体系', label: 'エ', content: '保障額' }, //48
                        { questionTitle: '営業職員の教育', label: 'イ', content: '個別指導' }, //49
                        { questionTitle: '代理店', label: 'オ', content: '' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="eigyo2024b" next-route="eigyo2023a" />
        </section>
    </SeihoTestLayout>
</template>
