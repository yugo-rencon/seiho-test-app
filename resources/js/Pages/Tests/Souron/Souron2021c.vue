<script setup>
import { Head, Link } from '@inertiajs/vue3';
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "生命保険総論"
const subject = '2021年度 フォームC'

</script>

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
                '負債','定款','20%','非社員契約','公平性', // 問１〜５
                ]"
                :labels="[
                'コ','ク','イ','エ','キ',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '利源分析','増加','上回る','解約益','小さく', //問６〜10
                ]"
                :labels="[
                'キ','ア','オ','ケ','エ',  //問６〜10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                'こくみん共済 coop<全労災>','無認可','保険業法','不特定','特定', //問11〜15
                ]"
                :labels="[
                'ケ','ア','キ','ク','オ',  //問11〜15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '2年','80万円','資本金','責任準備金の積立て','特定保険業者', //問16〜20
                ]"
                :labels="[
                'ア','コ','ウ','エ','ク',  //問16〜20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '一般に、生命保険契約の締結に際して保険契約の申込者が保険約款の各条項を知ったうえで理解し納得しているとは限らないが、一般的には保険約款には拘束力があるとされている。', //p8
                '生命保険会社が自らの利益のみしか考えず一方的に有利な条項を作ることのないよう、保険約款について国による監督を行い。保険契約者の利益を保護する必要性が生じてくるのである', //p8
                '正しい'
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '支払能力は弱体化されたのではなく強化された。', //p62
                '不没収法の制定によって、契約を失効させた契約者に対し、それまでに積み立てた責任準備金を完全に没収することなくその時の不没収価格を基にして、以後の保険料払込みを中止して死亡保障だけを続ける延長定期保険に変更できることとなった。' //p62
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '保険金の支払い余力を示すソルベンシー・マージン比率が200%未満の会社が対象となる。', //p99-100
                '正しい',
                '既契約の予定利率引き上げではなく引き下げ。' //p100
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '社会保険の場合は保険料の負担能力、すなわち年齢に関係なく保険加入者の所得によって、その金額が決められる。', //p125
                '被保険者と事業主で分担することになっており、分担割合は、少なくとも50%となっている。', //p125
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '財産利用方法書は必要ない。', //p150
                '0%未満の場合に、当該会社に業務の一部または全部の停止を命令することができる。', //p155
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '保険契約の一方の当事者である保険契約者は、保険者が危険を負担していることに対して、保険事故発生の可能性に応じたものとして保険料を支払う。' //p15
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '傷害・疾病危険に関しては、商法では明確な規定がなかったが、保険法においては「傷害疾病定額保険契約」として典型契約としての地位が与えられ、同保険契約は「人の傷害疾病に基づき一定の保険給付を行うことを約するもの」と規定されている。' //p5
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '第1号被保険者は、原因を問わず常に介護が必要な状態（要介護状態）あるいは日常生活に支援が必要な状態（要支援状態）であれば保険給付の対象となるが、第2号被保険者については、初老期の認知症など老化を原因とする特定の疾病による要支援状態または要介護状態であることが保険給付の要件となっている。', //p140
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '自動車共済・建物更生共済といった損害系の共済商品も取り扱っている。', //p166
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '特別勘定ではなく区分経理の導入' //p200
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                :contents="[
                // 問31〜35
                '正しい',
                '死亡率は同年齢の合計死亡率より通常は低い結果となる。', //p15
                '正しい',
                '合衆国統一の取締法ではなくニューヨーク州の取締法が先に制定され、その後合衆国の大多数の州で同様の法律が制定された。', //p63-64
                '正しい',
                // 問36〜40
                '生命保険会社の資金は大別すると負債と純資産によって構成されている。負債の大部分は保険契約準備金で、責任準備金、支払備金、契約者配当準備金から構成される。その中でも、保険料の積立金部分からなる責任準備金が大半を占めている。', //p108
                '正しい',
                '社会保障給付費のうち、一番多いのは年金であり、ついで医療となっている。', //p181
                '正しい',
                '個人保険分野が、最初に機械化された分野である。', //p197-198
                 //問41〜50
                'A-保険金額', 'B-維持費', 'A-ギルド', 'B-同額の分担金で', 'B-公共性',
                'C（A・Bともに正しい）', 'C（A・Bともに正しい）', 'A-保険業法', 'B-変額年金', 'A-LINC（Life Insurance Network Center）',
                ]"
                :labels="[
                '解','解','解','解','解',  //問31〜35
                '解','解','解','解','解',  //問36〜40
                'ア','ウ','ア','エ','エ',  //問41〜45
                'オ','オ','イ','ウ','イ',  //問46〜50
                ]"
            />
        </div>

                <TestNavigationButtons previous-route="souron2021b" />

    </section>

    </SeihoTestLayout>


</template>
