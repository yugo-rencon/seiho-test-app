<script setup>
import { Head, Link } from '@inertiajs/vue3';
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'
import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "生命保険商品と営業"
const subject = '2025年度 フォームA'
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
                '災害保障特約','所得補償保険','長期総合保険','貯蓄性','現物給付', // 問１〜５
                ]"
                :labels="[
                'カ','ウ','コ','エ','ア',  //問１〜５
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
                'ケ','オ','カ','ウ','ア',  //問６〜10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '老後の生活資金','生死混合保険','生存給付金','有期年金','契約者', //問11〜15
                ]"
                :labels="[
                'オ','ア','コ','ウ','エ',  //問11〜15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '災害','急性心筋梗塞','6ヶ月','保険料払込免除','被保険者', //問16〜20
                ]"
                :labels="[
                'カ','ウ','コ','ケ','キ',  //問16〜20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '30歳代ではなく、20歳代。', //p12
                '20～30歳代で医療保障へのニーズ、40～50歳代で<b><u>老後保障へのニーズ</u></b>、50～60歳代で<b><u>介護保障へのニーズ</u></b>が一番高い。' //p12
                ]"
            />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '生命保険契約は、保険法に「保険契約のうち、<b><u>保険者が人の生存又は死亡に関し一定の保険給付を行うことを約するもの</u></b>（傷害疾病定額保険契約に該当するものを除く。）をいう。」と定義されている。', //p46
                '有期払ではなく、短期払。', //p49
                '正しい'
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
                '一定の条件を満たす保険代理店においては、一社専属制の例外が認められ、複数の生命保険会社の商品を取り扱うことができる。', //p101
                '正しい',
                '2016年（平成28年）の改正保険業法において、生命保険募集人に対し募集の実態に応じた体制整備を義務付ける規制が導入され、<b><u>保険代理店についても、複数の生命保険会社の商品の取扱いの有無など、業務の特性や規模に応じて、体制整備が求められることとなった。</u></b>' //p101
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                'マーケット・セグメントではなく、デビットシステム。', //p66
                '正しい',
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
                '60歳未満ではなく、55歳未満。' //p94
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '訪問販売ではなく、抱き合わせ販売。', //p102
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '応用課程試験は、専門課程試験に合格していることが受験要件になっている。', //p124-125
                '正しい'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                :contents="[
                // 問31〜35
                '2分の1以上ではんく、3分の1以上。', //p26
                '福利厚生費は、法定福利費と法定外福利費に分けられるが、このうち<b><u>法定福利費</u></b>については、高齢化に伴う厚生年金保険や健康保険の保険料の上昇に伴い、賃金を上回る増加を示している。', //p33
                '正しい',
                '「個人年金保険料税制適格特約」は、資産形成への自助努力を推進するため、個人年金保険に付加することにより払い込まれた保険料が<b><u>一般生命保険料や介護医療保険料とは別枠で所得控除の対象となるものである。</u></b>', //p49
                '保険料の積立を可能とする主契約を持ち、ここに積み立てた資金を保障部分に充当することで、払込保険料の変更や払込停止を可能とする仕組みである。', //p80
                // 問36〜40
                '正しい',
                '正しい',
                '正しい',
                '1974年（昭和49年）に最低賃金法に基づく地域別最低賃金が生保営業職員に適用されたことを受け、各社とも地域、資格等に応じた保障額を設定し，当月の給与支給額が保障額に満たない場合は、差額を支給している。', //p136
                'スーパーバイザーではなく、ホールセラー。', //p146
                 //問41〜50
                'A-標準報酬月額と標準賞与額それぞれ','B-65歳','C（A・Bともに正しい）','B-個人','A-公的医療保険',
                'A-職域や法人','C（A・Bともに正しい）','A-保険業法','B-本社直轄','C（A・Bともに正しい）',
                ]"
                :labels="[
                '解','解','解','解','解',  //問31〜35
                '解','解','解','解','解',  //問36〜40
                'イ','ウ','オ','ウ','ア',  //問41〜45
                'ア','オ','イ','ウ','オ',  //問46〜50
                ]"
            />
        </div>

        <!-- ボタングループ -->
        <TestNavigationButtons
            next-route="eigyo2025b"
        />

    </section>

    </SeihoTestLayout>


</template>
