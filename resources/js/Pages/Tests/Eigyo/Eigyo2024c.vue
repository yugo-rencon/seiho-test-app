<script setup>
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'
import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "生命保険商品と営業"
const subject = '2024年度 フォームC'

const SAME = "※2024年度フォームA/B/Cで同一問題";</script>

<template>
    <SeihoTestLayout :title="title">
    <section class="bg-gray-100 text-gray-800 py-10">

        <!-- ページタイトル -->
        <Pagetitle
            :title="title"
            :description="subject"
        />

        <!-- 問題リスト -->
        <div class="max-w-4xl mx-auto mt-4 space-y-2">
            <QuestionTemp3
                :questionNumber="1"
                :title="title"
                :subject="subject"
                :contents="[
                '災害保障特約','所得補償保険','長期総合保険','貯蓄性','現物給付', // 問１〜５
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
                :contents="[
                '業務提携','競合と協調','外国保険事業者','日米保険協議','子会社', //問６〜10
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
                :contents="[
                '信用生命保険','競争条件の公平性','流出防止','抱き合わせ販売','商品情報', //問11〜15
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
                :contents="[
                '個人年金保険(定額・変額)','事前説明義務','残債務リスク','相談窓口','全面解禁', //問16〜20
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
                :contents="[
                '総務省ではなく、厚生労働省。', //p30
                '正しい',
                '介護保険サービスを利用した場合、原則として費用の1割（一定以上の所得者は2割～3割）が自己負担となる。' //p32
                ]"
            />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '「確定拠出年金保険」ではなく、「新企業年金保険」の説明。', //p91
                '「拠出型企業年金保険」は、企業や団体で運営される自助努力型年金制度を運営するための保険商品で、従業員や団体の所属員が保険料を拠出し、加入脱退が任意で（任意加入）、保険料額・年金額の自在性があるのが特徴であり、「B（型）年金」とも称される。<br>「団体生存保険」は、公務員等の共済組合の年金資産の運用を引受けるための保険商品である。' //p91
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '「外貨建保険」の商品メリットとしては、海外の比較的<b><u>高い金利</u></b>を反映することで、<b><u>予定利率を高く</u></b>設定していることが挙げられる。', //p65
                '「外貨建保険」の商品デメリットとしては、為替レートの変動により、実際に支払われる<b><u>円換算後</u></b>の保険金額が、契約時に設定された<b><u>円換算後</u></b>の保険金額や、払込保険料総額を下回ることがあるなどの損失を生じる恐れがあることである。', //p65
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '死差配当ではなく、利差配当。', //p78
                '正しい',
                '完全生命表ではなく、標準生命表。' //p79
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '生保商品の通信販売は営業職員・募集代理店による対面販売との比較において顧客との接点が非常に限られているため、<b><u>告知義務や契約始期、モラルリスク等が問題となりやすく、取扱保険商品、加入保険金額を制限しているケースが多い</u></b>。', //p104
                'インターネット上で資料請求や申込ができるだけではなく、契約の成立までも完了できる生保会社もある。', //p104
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '公的年金制度においては、基本的に、<b><u>老齢になった場合（老齢給付）</u></b>、病気やけがで障害状態になった場合（障害給付）、加入者または加入者であった者が死亡した場合（遺族給付）の3つの場合に年金が支給される。', //p25
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '「団体信用生命保険」は、<b><u>債務者を被保険者</u></b>、債権者である信用供与機関（銀行等）または<b><u>信用保証機関を保険契約者および保険金受取人</u></b>、未返済債務額を保険金額とする保険商品である。', //p86
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '「リビング・ニーズ特約」とは、病気やケガにより被保険者の余命が6カ月以内と判断されるとき、保険金の前払いを請求できる特約のことで、<b><u>支払われる保険金額は、契約した死亡保険金額の範囲内で3,000万円を上限としているところが多く、上限以上の保険金額で契約している場合、差額分は保障が継続する</u></b>。' //p61-62
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '生命保険会社では、従来より保険契約の内容を顧客情報システムに登録し、契約の維持保全の業務を行ってきたが、<b><u>近年は、この情報を既契約者への再販売等に活用することが一般的となってきている</u></b>。', //p110
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '営業職員資格の基準となる販売成績は、単なる新契約の保険金額・保険料ではなく、保険商品・払込方法・保険期間にしたがって、所定の換算率により評価されるのが一般的である。これは、<b><u>保険商品により予定事業費、とくに予定新契約費</u></b>および販売難易度が異なるからである。', //p132
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                                :items="[
                    // 問31〜40
                    { label: '解', content: '正しい' }, //31
                    { label: '解', content: '福利厚生費は、法定福利費と法定外福利費に分けられるが、このうち<b><u>法定福利費</u></b>については、高齢化に伴う厚生年金保険や健康保険の保険料の上昇に伴い、賃金を上回る増加を示している。' }, //32
                    { label: '解', content: '正しい' }, //33
                    { label: '解', content: '正しい' }, //34
                    { label: '解', content: '「勤労者財産形成年金貯蓄契約」とは、<b><u>55歳未満</u></b>の勤労者が金融機関等と契約を締結し、<b><u>5年以上</u></b>の期間にわたって定期に積立てを行い、60歳以降所定の時期より5年以上の期間にわたって年金の支払いを受けることを目的とした貯蓄である。' }, //35
                    { label: '解', content: '正しい' }, //36
                    { label: '解', content: '正しい' }, //37
                    { label: '解', content: '正しい' }, //38
                    { label: '解', content: '正しい' }, //39
                    { label: '解', content: '企業保険の営業に際しては、企業等に対する総合的なサービスの提供が必要であり、<b><u>顧客となる企業が大企業になるほど様々なニーズに対応することが要求される</u></b>。' }, //40
                    // 問41〜50
                    { label: 'イ', content: '標準報酬月額と標準賞与額それぞれ' }, //41
                    { label: 'ウ', content: '勧誘方針' }, //42
                    { label: 'ウ', content: '利差配当' }, //43
                    { label: 'ア', content: '特約保険金額' }, //44
                    { label: 'ア', content: '公的医療保険' }, //45
                    { label: 'イ', content: '賦払償還債務' }, //46
                    { label: 'オ', content: '' }, //47
                    { label: 'エ', content: '保障額' }, //48
                    { label: 'イ', content: '個別指導' }, //49
                    { label: 'オ', content: '' }, //50
                ]"
                
            />
        </div>

                <TestNavigationButtons previous-route="eigyo2024b" next-route="eigyo2023a" />

    </section>

    </SeihoTestLayout>


</template>
