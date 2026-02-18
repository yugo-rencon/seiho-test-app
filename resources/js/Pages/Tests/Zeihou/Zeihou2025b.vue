<script setup>
import QuestionTemp1 from '@/Components/QuestionTemp1.vue'
import QuestionTemp2 from '@/Components/QuestionTemp2.vue'
import QuestionTemp3 from '@/Components/QuestionTemp3.vue'
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';
import Pagetitle from '@/Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';

const title = "生命保険と税法"
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
                '均等割額のみ','4%','3,000円','寡婦またはひとり親','43万円', // 問１〜５
                ]"
                :labels="[
                    'イ', //1
                    'カ', //2
                    'キ', //3
                    'ア', //4
                    'コ', //5
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '普通徴収','市町村','5月','均等割額のみ','従業者数', //問６〜10
                ]"
                :labels="[
                    'キ', //6
                    'イ', //7
                    'コ', //8
                    'ア', //9
                    'ウ', //10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '所得税','生活費','結婚・子育て','配偶者控除額','110', //問11〜15
                ]"
                :labels="[
                    'オ', //11
                    'カ', //12
                    'ウ', //13
                    'キ', //14
                    'イ', //15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '20','居住用不動産','2,000','2月1日から3月15日','贈与を受けた人', //問16〜20
                ]"
                :labels="[
                    'イ', //16
                    'ウ', //17
                    'コ', //18
                    'キ', //19
                    'エ', //20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '投資信託（公社債投資信託及び公募公社債等運用投信信託を<b><u>含む</u></b>）及び特定受益証券発行信託の収益の分配は、利子所得になる。',
                'アパート、貸間等のように食事を供さない場合の所得は不動産所得となるが、下宿等のように食事を供する場合には事業所得または雑所得となる。',
                '正しい',
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '山林所得については、長年をかけて得た所得が一時に実現することから、超過累進税率による過重の税負担を避ける意味で、課税山林所得の5分の1に相当する金額に応ずる税額を求め、これを5倍した金額を税額とする「5分5乗方式」が適用される。',
                '事業用ではなく、居住用。',
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '公益事業用財産は非課税財産に該当する。',
                '被相続人の死亡により取得した保険金については、その保険金のうち、死亡時までに払い込まれた保険料合計額に対する被相続人が負担した保険料の金額の割合に相当する部分が、課税財産となる。',
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '資産の評価について税法は<b><u>取得原価主義</u></b>を原則としており、評価益は益金の額に<b><u>算入しない</u></b>。',
                '正しい',
                '法人の支出した寄附金について税法は一定の限度を定め、これを超える部分については損金の額に算入しないものとしている。',
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '運営管理機関（企業または国民年金基金連合会によって選任）ではなく、資産管理機関（企業による選任）または国民年金基金連合会。',
                '年金払いの老齢給付金については、雑所得として公的年金等控除を適用するが、一時払いの老齢給付金については、所得税法上の「退職手当等」とみなす。',
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '1,200万円ではなく、2,000万円。',
                '正しい',
                '正しい',
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '相続税と贈与税は密接な関係にあるため、これら2つの税は、いずれも相続税法という一つの法律の中で規定されている。また、財産の評価についても相続財産の評価と贈与財産の評価は同じ基準にしたがって行われる。',
                '正しい',
                '正しい',
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '毎年4月1日ではなく、毎年1月1日。',
                '正しい',
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '当該制度を選択した場合、その選択した年以後は、選択した贈与者からの贈与は、すべて当該制度の対象となり、当該制度を選択した贈与者からの贈与は、暦年課税への変更はできない。',
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '責任準備金相当額ではなく、解約返戻金相当額。',
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
                    { label: '解', content: '消費税のような間接税では、<b><u>担税者は消費者</u></b>、<b><u>納税義務者は業者</u></b>となり、両者は一致しない。' }, //31
                    { label: '解', content: '正しい' }, //32
                    { label: '解', content: '特定扶養親族とは、扶養親族のうち<b><u>年齢19歳以上23歳未満</u></b>の者をいい、その者の控除額は一人につき<b><u>63万円</u></b>である。' }, //33
                    { label: '解', content: '正しい' }, //34
                    { label: '解', content: '正しい' }, //35
                    { label: '解', content: '事業年度が6カ月を超える普通法人は、事業年度開始の日以後6カ月を経過した日から2カ月以内に、税務署長に対し、仮決算により作成した法人税の中間報告書または前年度の実績による中間報告書いずれかを提出しなければならない。' }, //36
                    { label: '解', content: '正しい' }, //37
                    { label: '解', content: '相続による取得や法人の合併による取得など形式的な所有権の移転については課税されない。' }, //38
                    { label: '解', content: '正しい' }, //39
                    { label: '解', content: '14%ではなく、7%。' }, //40
                    // 問41〜50
                    { label: 'ウ', content: '租税特別措置法' }, //41
                    { label: 'オ', content: '' }, //42
                    { label: 'エ', content: '必要経費' }, //43
                    { label: 'ウ', content: '3分の1' }, //44
                    { label: 'ア', content: '申告調整' }, //45
                    { label: 'エ', content: '10ヶ月' }, //46
                    { label: 'イ', content: '公共法人' }, //47
                    { label: 'オ', content: '' }, //48
                    { label: 'ア', content: '第3種事業' }, //49
                    { label: 'オ', content: '' }, //50
                ]"
                
            />
        </div>

        <!-- ボタングループ -->
        <TestNavigationButtons
            previous-route="zeihou2025a"
            next-route="zeihou2025c"
        />

    </section>

</SeihoTestLayout>

</template>
