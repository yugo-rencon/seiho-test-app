<script setup>
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "約款と法律"
const subject = '2021年度 フォームC'

const SAME = "※2021年度フォームA/B/Cで同一問題";</script>

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
                '免許','確実性','負担する危険','統計上','大損害', // 問１〜５
                ]"
                :labels="[
                    'キ', //1
                    'コ', //2
                    'ア', //3
                    'ウ', //4
                    'カ', //5
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '比較的長期（20年、30年）','比較的短期（1年）','議決権','50％','認可', //問６〜10
                ]"
                :labels="[
                    'オ', //6
                    'ク', //7
                    'ウ', //8
                    'イ', //9
                    'コ', //10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '会社法','財産','公衆の縦覧','子会社','価格変動準備金', //問11〜15
                ]"
                :labels="[
                    'ア', //11
                    'カ', //12
                    'コ', //13
                    'エ', //14
                    'オ', //15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '債務','標準責任準備金','平準純保険料式','日本アクチュアリー会','未経過保険料', //問16〜20
                ]"
                :labels="[
                    'オ', //16
                    'イ', //17
                    'キ', //18
                    'ク', //19
                    'ウ', //20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '保険契約は保険契約者と保険者との合意によってのみ成立し、第一回保険料相当額の払込などは、保険者の責任開始の要件であるに過ぎず、要物契約ではないと解される。',
                '正しい',
                '符号契約ではなく射倖契約。'
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '典型契約ではなく無名契約。',
                '生命保険契約等には、民法の一般規定が適用される。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '未婚の未成年者、成年被後見人、成年被保佐人、および成年被補助人も保険契約者になることができる。',
                '事業保険ではなく団体保険',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '保険金受取人は必ずしも一人である必要はなく、あるいは選択的に、あるいは保険金額の一部ずつについて並列的に、数人を保険金受取人と定めることことができる。',
                '正しい',
                '保険金受取人が可取得する権利は、保険給付請求権のみであり、保険料減額請求権、保険証券交付請求権なは契約当事者である保険契約者に属する。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '重大事由による保険契約の解除の場合も支払われる。',
                '保険金額の減額の場合も支払われる。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '消費者とは生命保険商品を購入する個人であり、法人は含まれない。',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '保険業法ではなく保険法。',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                '保険契約者、保険金受取人および被保険者も閲覧権が認められている。',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '他の生命保険会社の委託もしくはその委託を受けた者の再委託を受けて募集を行う者の役員、使用人となって募集を行うことも禁止されている。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '外国保険業者の場合は、株式会社や相互会社でなくてもよく、個人でもよい。',
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
                    { label: '解', content: '特約に規定のある事項については優先的に特約が運用され、特約に規定のない事項については普通保険約款が適用される。' }, //31
                    { label: '解', content: '正しい' }, //32
                    { label: '解', content: '死亡保険契約ではなく生存保険契約。' }, //33
                    { label: '解', content: '正しい' }, //34
                    { label: '解', content: '正しい' }, //35
                    { label: '解', content: '災害入院給付金の支払要件と疾病入院給付金の支払要件にともに該当していても、災害入院給付金と疾病入院給付金を重複して支払うことはせず、災害入院給付金を支払う。' }, //36
                    { label: '解', content: '正しい' }, //37
                    { label: '解', content: '正しい' }, //38
                    { label: '解', content: '死亡保険契約ではなく生存保険契約。' }, //39
                    { label: '解', content: '正しい' }, //40
                    // 問41〜50
                    { label: 'ウ', content: '適合性の原則' }, //41
                    { label: 'オ', content: '' }, //42
                    { label: 'イ', content: '3年間' }, //43
                    { label: 'ア', content: '10月18日' }, //44
                    { label: 'ウ', content: '1ヶ月以内に届くように' }, //45
                    { label: 'ウ', content: '取消し' }, //46
                    { label: 'ウ', content: '取り消すことができる' }, //47
                    { label: 'エ', content: '当該保険金受取人の相続人全員' }, //48
                    { label: 'エ', content: '財務大臣' }, //49
                    { label: 'オ', content: '' }, //50
                ]"
                
            />
        </div>

                <TestNavigationButtons previous-route="yakkan2021b" />

    </section>

    </SeihoTestLayout>


</template>
