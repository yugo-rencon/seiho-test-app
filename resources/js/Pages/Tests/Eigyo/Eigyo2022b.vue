<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { reactive, onMounted, ref, computed } from 'vue'
import { Inertia } from '@inertiajs/inertia';
import QuestionTemp1 from '../../../Components/QuestionTemp1.vue'
import QuestionTemp2 from '../../../Components/QuestionTemp2.vue'
import QuestionTemp3 from '../../../Components/QuestionTemp3.vue'

import Pagetitle from '../../../Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';

const title = "生命保険商品と営業"
const subject = '2022年度 フォームB'

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
                '60歳', '報酬比例', '定額保険料', '標準賞与額', '18.30%', // 問１〜５
                ]"
                :labels="[
                'ケ', 'ク', 'エ', 'カ', 'イ',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '10年', '1ヶ月', '1級〜3級', '子の数', '4分の3', //問６〜10
                ]"
                :labels="[
                'カ', 'ア', 'イ', 'コ', 'ク',  //問６〜10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '見込客', '携帯パソコン・端末', '販売活動の効率化', 'カウンセリング', 'セグメンテーション', //問11〜15
                ]"
                :labels="[
                'コ', 'ウ', 'ケ', 'イ', 'オ',  //問11〜15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '上場コード', '取引', 'パスワード', 'プライバシー', '個人情報保護法', //問16〜20
                ]"
                :labels="[
                'エ', 'カ', 'ク', 'ケ', 'ウ',  //問16〜20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '住民票を有するすべての人へ個人番号の割り当てている。',
                '正しい',
                '重大個人情報ではなく特定個人情報。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '年齢要因ではなく時代要因の説明。',
                '時代要因ではなく年齢要因の説明。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '死差配当ではなく利差配当。',
                '正しい',
                '完全生命表ではなく標準生命表。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '団体用生命保険ではなく消費者用団体生命保険。',
                '信用保証機関を保険契約者および保険金受取人、債務者を被保険者とする。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '生命限険会社とを委託契約を結び、その生命保険商品を代理販売する募集代理店。',
                '募集代理店には、個人募集代理店と法人募集代理店がある。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '学識経験者で構成され、高齢者の心身の状況調査と主治医意見書等に基づくコンピューター判定（一次判定）と主治医意見書に基づく審査判定（二次判定）を行う。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '責任準備金は生存した他の被保険者の保険金の支払に充当する。',
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
                '説明を怠った場合、業者は元本欠損額の賠償責任を負う。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '変動保険金は毎月変動、満期保険金は満期時に確定、積立金と解約返戻金は毎日変動。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '一般課程試験の目的の説明。',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                :contents="[
                // 問31〜35
                '財源構成は保険料50%、公費50%。',
                '正しい',
                '正しい',
                'メリットとしては、海外の比較的高い金利を反映することで、予定利率を高く設定していること。',
                '正しい',
                // 問36〜40
                '受け取る年金についても非課税である。',
                '正しい',
                '正しい',
                '保険仲立人は諸外国で一般的に認められている。',
                '生命保険協会ではなく内閣総理大臣。',
                 //問41〜50
                'A-男女雇用機会均等法', 'C（A・Bともに正しい）', 'A-6ヶ月', 'B-面接', 'B-ヒューマン・ヴァリュー特約',
                'A-第1号被保険者', 'A-55歳', 'B-加入保険金額', 'A-個別指導', 'A-地域',
                ]"
                :labels="[
                '解', '解', '解', '解', '解',  //問31〜35
                '解', '解', '解', '解', '解',  //問36〜40
                'イ', 'オ', 'イ', 'エ', 'ウ',  //問41〜45
                'ア', 'イ', 'エ', 'イ', 'イ',  //問46〜50
                ]"
            />
        </div>

                <TestNavigationButtons previous-route="eigyo2022a" next-route="eigyo2022c" />

    </section>
</SeihoTestLayout>
</template>
