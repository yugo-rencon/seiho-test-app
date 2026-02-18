<script setup>
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "約款と法律"
const subject = '2022年度 フォームA'

const SAME = "※2022年度フォームA/B/Cで同一問題";</script>

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
                '自己','民法','受益の意思表示','自己固有の権利','するのではない', // 問１〜５
                ]"
                :labels="[
                    'イ', //1
                    'ケ', //2
                    'エ', //3
                    'ウ', //4
                    'カ', //5
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '賭博的行為','死亡保険契約','傷害疾病定額保険契約','効力発生','保険会社向けの総合的な監督指針', //問６〜10
                ]"
                :labels="[
                    'ク', //6
                    'キ', //7
                    'カ', //8
                    'エ', //9
                    'ケ', //10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '一定額','てん補','傷害','人の状態','死亡', //問11〜15
                ]"
                :labels="[
                    'ア', //11
                    'ク', //12
                    'オ', //13
                    'コ', //14
                    'エ', //15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '不妊治療','老衰','介護','身体の','治療', //問16〜20
                ]"
                :labels="[
                    'ク', //16
                    'エ', //17
                    'カ', //18
                    'ケ', //19
                    'ア', //20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '金融庁長官ではなく、内閣総理大臣。',
                '認可を受けない保険約款も、その内容が強行規定や公益に反するものでない限り、保険契約者との間では有効であるとするのが判例、通説である。',
                '正しい'
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '民法では、未婚の未成年者、成年被後見人、成年被保佐人、および成年被補助人の場合、所定の手続きを経ずに締結された契約については、後で取り消されることがあることに注意しなければならない。',
                '一契約における被保険者は、必ずしも一人であることを要しない。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '保険約款で契約者配当金を保険契約者に支払う旨規定するのが一般的になっている。',
                '消滅時特別配当ではなく、社員配当平衡積立金。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '生命保険会社においては、責任準備金などの計算に比較的長期間を要するため、年2回以上の決算には対応が難しい面がある',
                '財務局ではなく金融庁長官。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '「保険仲立人賠償責任保険契約」を締結し、金融庁長官の承認を受けたときは、当該契約の効力の存する間、当該契約の保険金の額に応じて供託しないことができる。',
                '正しい',
                '保険仲立人は、顧客からの求めに応じて保険契約締結の媒介に関する受取手数料、報酬等を明らかにしなければならない。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '白地慣習法説ではなく、慣習法説の説明。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '保険契約者からあらかじめ貸付を受けない旨の申し出があった場合には、自動振替は行わない。',
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
                '2種類以上の手術を同時に受けた場合は、最も給付倍率の高い1種類の手術を受けたものとみなして計算する。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '他の業務を営むことができない。',
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
                '保険料の収受ならびに保険金および払い戻される保険料その他の返戻金の支払に関する事項については、算出方法書ではなく事業方法書の内容。'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                                :items="[
                    // 問31〜40
                    { label: '解', content: '営利保険ではなく相互保険。' }, //31
                    { label: '解', content: '正しい' }, //32
                    { label: '解', content: '倫理委員会ではなく、個人情報保護委員会。' }, //33
                    { label: '解', content: '保険証券は、生命保険契約等の成立およびその内容に関する証拠材料となる証拠証券に過ぎず、その作成交付は契約成立の要件ではない。' }, //34
                    { label: '解', content: '保険契約の復活の法的性格については、契約当事者の合意に基づいて失効状態の保険契約を有効状態に戻すための一種特別な契約と解する「特別契約説」の考え方が妥当である。' }, //35
                    { label: '解', content: '正しい' }, //36
                    { label: '解', content: '正しい' }, //37
                    { label: '解', content: '相互会社は営利も公益も目的としない中間法人。' }, //38
                    { label: '解', content: '金融庁長官ではなく、内閣総理大臣。' }, //39
                    { label: '解', content: '正しい' }, //40
                    // 問41〜50
                    { label: 'ウ', content: '元本欠損' }, //41
                    { label: 'エ', content: '善意' }, //42
                    { label: 'イ', content: '申込日' }, //43
                    { label: 'ア', content: '両眼の視力' }, //44
                    { label: 'エ', content: '取立債務' }, //45
                    { label: 'ア', content: '保険金受取人' }, //46
                    { label: 'オ', content: '' }, //47
                    { label: 'ウ', content: '定款' }, //48
                    { label: 'イ', content: '1,000' }, //49
                    { label: 'オ', content: '' }, //50
                ]"
                
            />
        </div>

                <TestNavigationButtons previous-route="yakkan2023c" next-route="yakkan2022b" />

    </section>

    </SeihoTestLayout>


</template>
