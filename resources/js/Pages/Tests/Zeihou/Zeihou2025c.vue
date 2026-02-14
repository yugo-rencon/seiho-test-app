<script setup>
import QuestionTemp1 from '@/Components/QuestionTemp1.vue'
import QuestionTemp2 from '@/Components/QuestionTemp2.vue'
import QuestionTemp3 from '@/Components/QuestionTemp3.vue'
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';
import Pagetitle from '@/Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';

const title = "生命保険と税法"
const subject = '2025年度 フォームC'
</script>

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
                '特別控除','1/2','20%（所属税15%、地方税5%）','保険金減額','5倍', // 問１〜５
                ]"
                :labels="[
                'ク','ア','カ','コ','ウ',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '1年','2年','3/4','相続','贈与', //問６〜10
                ]"
                :labels="[
                'ア','イ','オ','ク','ケ',  //問６〜10
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
                'オ','カ','ウ','キ','イ',  //問11〜15
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
                'イ','ウ','コ','キ','エ',  //問16〜20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい<br>勤続（在任）年数5年以下の法人役員等に支払われる退職手当金等の場合<br>退職所得の金額 = 収入金額 - 退職所得控除額<br>退職所得控除額（勤続年数20年以下） = 40万円 × 勤続年数',
                'アの解説を参照',
                'アの解説を参照',
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '「（所属金額 - 800万円）✕ 税率」ではなく、「全所得金額 ✕ 税率」。',
                '同族会社における留保金課税の場合の同族要件は、<b><u>1株主グループ</u></b>による株式等の保有割合が50%超の特定同族会社の場合（資本金または出資金の額が1億円以下の会社を<b><u>除く</u></b>。）となる。',
                '正しい',
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '定期部分は損金となり、養老部分は資産計上される。',
                '正しい',
                '主契約保険料は資産計上される。',
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '各事業年度において、配当準備金として繰り入れた金額については、<b><u>翌期配当所要額を限度</u></b>として損金に算入される。',
                '損金不算入適用ではなく、益金不算入適用。',
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
                '租税特別措置法によるものではなく、その他の法律によるもの。',
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
                '原則として法人の営業年度が税法上の事業年度となるが、営業年度等が1年を超える場合には、その営業年度等を1年ごとに区分し、それぞれの期間（最後に1年未満の期間を生じたときは、その1年未満の期間）を事業年度とすることとされている。たとえば営業年度等が1年6ヵ月の場合には、最初の1年間を1事業年度（第1期）とし、残り6ヵ月間を1事業年度（第2期）とする。',
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '一時払契約は対象外。',
                '正しい',
                '正しい',
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                :contents="[
                // 問31〜35
                '外国税ではなく、内国税。',
                '源泉徴収制度は、特定の所得を支払う際、支払者が源泉徴収義務者として一定の所得税を徴収し、これを支払った日の属する<b><u>月の翌月10日</u></b>までに国に納付する制度である。',
                '相続税と贈与税は密接な関係にあるため、これら2つの税は、いずれも相続税法という一つの法律の中で規定されている。また、財産の評価についても相続財産の評価と贈与財産の評価は同じ基準にしたがって行われる。',
                '正しい',
                '正しい',
                // 問36〜40
                '事業年度が6カ月を超える普通法人は、事業年度開始の日以後6カ月を経過した日から2カ月以内に、税務署長に対し、仮決算により作成した法人税の中間報告書または前年度の実績による中間報告書いずれかを提出しなければならない。',
                '正しい',
                '相続による取得や法人の合併による取得など形式的な所有権の移転については課税されない。',
                '正しい',
                '14%ではなく、7%。',
                 //問41〜50
                'B-確定申告', 'C（A・Bともに正しい）', 'B-住宅借入金（取得）等特別控除', 'A-2,000円', 'A-申告調整',
                'A-公益事業用', 'C（A・Bともに正しい）', 'B-株式', 'A-事業所得', 'C（A・Bともに正しい）',
                ]"
                :labels="[
                '解','解','解','解','解',  //問31〜35
                '解','解','解','解','解',  //問36〜40
                'エ','オ','ウ','ア','ア',  //問41〜45
                'イ','オ','ウ','イ','オ',  //問46〜50
                ]"
            />
        </div>

        <!-- ボタングループ -->
        <TestNavigationButtons
            previous-route="zeihou2025b"
            next-route="zeihou2024a"
        />

    </section>

</SeihoTestLayout>

</template>
