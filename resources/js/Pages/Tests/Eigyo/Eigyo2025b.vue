<script setup>
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'
import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "生命保険商品と営業"
const subject = '2025年度 フォームB'
const SAME = "※2025年度フォームA/B/Cで同一問題";</script>

<template>
    <SeihoTestLayout :title="title">
    <section class="bg-[#fdfbff] text-gray-800 py-10">

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
                '規約型','GIC（利率保証契約）','拠出型企業年金','B（型）年金','国民年金基金', //問11〜15
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
                :contents="[
                '団体生存保険','公務員','新企業年金保険','A（型）年金','合同', //問16〜20
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
                :contents="[
                '老齢厚生年金は、厚生年金保険の被保険者期間が<b><u>1カ月以上</u></b>あり、老齢基礎年金の受給資格期間を満たしている場合に65歳から原則支給される', //p26
                '障害基礎年金は、障害等級<b><u>1級・2級</u></b>の場合に支給される。障害厚生年金は、障害等級<b><u>1級～3級</u></b>の場合に支給される。', //p26
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '保険仲立人は契約者と保険会社との間に立って<b><u>中立の立場で保険契約の締結の媒介を行う者</u></b>であり、特定の保険会社に属し、その保険会社のために媒介を行う保険募集人とその点において異なる。', //p103
                '正しい',
                '2013年（平成25年）の金融審議会の報告書によると、保険契約者保護の観点から問題のないものについて保険仲立人に係る<b><u>規制を緩和する</u></b>ことが適当であるとされている。それを受け。2014年（平成26年）の保険業法の改正で、<b><u>保証金の額の引き下げなどー部の規制が緩和された</u></b>。' //p103
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
                '正しい',
                '変額保険販売の資格要件の一つは、所定の研修（2日間以上、10時間以上、各社で実施）を履修していることとなっている。', //p126
                '日本証券業協会ではなく、生命保険協会。' //p126
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '年齢別に見てみると、20歳代の女性の加入率が他の年齢層に比べ一番低く、市場として開拓の余地を残している。', //p12
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
                '介護保険サービスを利用した場合、原則として費用の1割（一定以上の所得者は2割～3割）が自己負担となる。' //p32
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '以前は国内生保の大部分を占めていた「相互会社」形態の会社では、有配当保険しか取り扱いができず、「株式会社」形態の会社のみが、無配当保険を取り扱っていた。その後、保険業法改正によって相互会社でも剰余金を社員に分配しなくてもよい非社員契約の取り扱いが一定の制限のもとで可能となり、一部の会社で取り扱いを行っている。' //p51
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '企業保険の販売を中心とした活動を行いつつ，個人保険販売の支援のため担当企業やその関連企業の基盤化を推進している法人営業組織もある。' //p145
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                                :items="[
                    // 問31〜40
                    { label: '解', content: '公的介護保険制度の運営主体（保険者）は、各市区町村（広域連合，一部事務組合を含む）となっているが、介護保険事業が健全かつ円滑に行われるよう、<b><u>国，都道府県、被保険者</u></b>が重層的に支えあう制度となっている。' }, //31
                    { label: '解', content: '福利厚生費は、法定福利費と法定外福利費に分けられるが、このうち<b><u>法定福利費</u></b>については、高齢化に伴う厚生年金保険や健康保険の保険料の上昇に伴い、賃金を上回る増加を示している。' }, //32
                    { label: '解', content: '正しい' }, //33
                    { label: '解', content: '生命保険支払専門士ではなく、生命保険面接士。' }, //34
                    { label: '解', content: '一時払退職後終身保険は、団体と協定を結び、<b><u>2年以上</u></b>団体保険契約（企業年金保険を含む）の被保険者で、かつ、退職日をはさみ<b><u>前後1年以内</u></b>の者（退職者であっても、団体保険の被保険者として継続加入中の者は、団体保険から脱退した日から1ヵ月以内に限り加入が認められる）に限って加入が認められる商品であり、団体保険を補完する特殊な商品といえる。' }, //35
                    { label: '解', content: '正しい' }, //36
                    { label: '解', content: '最近の個人金融資産の増大、金利選好意識の高まりを受けて、<b><u>生命保険商品の枠を超えた</u></b>コンサルティングセールスも要求されてきており、「ファイナンシャル・プランナー（FP）」の育成制度を導入する会社が増えている。' }, //37
                    { label: '解', content: '正しい' }, //38
                    { label: '解', content: '生命保険協会ではなく、内閣総理大臣（金融庁長官に委任）。' }, //39
                    { label: '解', content: '正しい' }, //40
                    // 問41〜50
                    { label: 'イ', content: '標準報酬月額と標準賞与額それぞれ' }, //41
                    { label: 'ウ', content: '10年' }, //42
                    { label: 'エ', content: '保険金受取人' }, //43
                    { label: 'オ', content: '' }, //44
                    { label: 'ア', content: '公的医療保険' }, //45
                    { label: 'ア', content: '職域や法人' }, //46
                    { label: 'ウ', content: '予定利率' }, //47
                    { label: 'オ', content: '' }, //48
                    { label: 'オ', content: '' }, //49
                    { label: 'オ', content: '' }, //50
                ]"
                
            />
        </div>

        <!-- ボタングループ -->
        <TestNavigationButtons
            previous-route="eigyo2025a"
            next-route="eigyo2025c"
        />

    </section>

    </SeihoTestLayout>


</template>
