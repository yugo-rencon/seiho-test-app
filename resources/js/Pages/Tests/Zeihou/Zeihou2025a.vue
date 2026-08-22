<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税法";
const subject = "2025年度 フォームA";
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-[#fdfbff] text-gray-800 py-10">
            <!-- ページタイトル -->
            <Pagetitle :title="title" :description="subject" />

            <!-- 問題リスト -->
            <div class="max-w-4xl mx-auto mt-4 space-y-2">
                <QuestionTemp3
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税課税における所得控除①"
                    :contents="[
                        // rev: 2026-08-22 確認済み
                        '横領',
                        '1/10',
                        '200万円',
                        '選択によって',
                        '労働保険', // 問１〜５
                    ]"
                    :labels="[
                        'オ', //1
                        'ア', //2
                        'エ', //3
                        'キ', //4
                        'コ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税課税における所得控除②"
                    :contents="[
                        // rev: 2026-08-22 確認済み
                        '2,000円',
                        '27万円',
                        '75万円',
                        '123万円',
                        '2,500万円', // 問6〜10
                    ]"
                    :labels="[
                        'オ', //6
                        'キ', //7
                        'コ', //8
                        'イ', //9
                        'カ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の生命保険料控除（2012年（平成24年）1月1日以後の締結契約）①"
                    :contents="[
                        // rev: 2026-08-22 確認済み
                        '3親等',
                        '保険金受取人',
                        '5年',
                        '身体の傷害',
                        '配偶者', // 問11〜15
                    ]"
                    :labels="[
                        'ア', //11
                        'ケ', //12
                        'ウ', //13
                        'カ', //14
                        'ク', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の生命保険料控除（2012年（平成24年）1月1日以後の締結契約）②"
                    :contents="[
                        // rev: 2026-08-22 確認済み
                        '10年',
                        '一時払',
                        '60歳',
                        '退職年金',
                        '1回', // 問16〜20
                    ]"
                    :labels="[
                        'ウ', //16
                        'キ', //17
                        'カ', //18
                        'ケ', //19
                        'ア', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税法における所得"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の申告と納税"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税額の計算"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="事業税"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税通達による事業保険の取扱い"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="税率"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="遺産分割の方法"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人の住民税"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人保険における保険金等の取扱い"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="確定拠出年金制度の税制上の取扱い"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            questionTitle: '租税の種類',
                            content: '',
                        }, //31
                        {
                            questionTitle: '非課税所得',
                            content: '',
                        }, //32
                        {
                            questionTitle: '相続税と贈与税',
                            content: '',
                        }, //33
                        {
                            questionTitle: '教育資金一括贈与の非課税措置',
                            content: '',
                        }, //34
                        {
                            questionTitle: '宅地の評価方法',
                            content: '',
                        }, //35
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '有価証券の評価',
                            content: '正しい',
                        }, //36
                        {
                            questionTitle: '外貨建て生命保険の取扱い',
                            content: '',
                        }, //37
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '総合福祉団体定期保険の保険料',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '財形住宅貯蓄積立保険',
                            content: '',
                        }, //39
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '最低課税方式',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '租税の種類',
                            label: 'オ',
                            content: '',
                        }, //41
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '給与所得',
                            label: 'ウ',
                            content: '特定支出',
                        }, //42
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '税額の計算',
                            label: 'エ',
                            content: '税額控除',
                        }, //43
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '法定相続分',
                            label: 'エ',
                            content: '民法',
                        }, //44
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '法人の種類と課税の範囲',
                            label: 'オ',
                            content: '',
                        }, //45
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '法人の確定申告',
                            label: 'ア',
                            content: '2カ月',
                        }, //46
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '法人の住民税',
                            label: 'イ',
                            content: '均等割額と法人税割額',
                        }, //47
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '固定資産税の課税標準',
                            label: 'ウ',
                            content: '3年',
                        }, //48
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '確定給付企業年金',
                            label: 'イ',
                            content: '厚生労働大臣',
                        }, //49
                        {
                            // rev: 2026-08-22 確認済み
                            questionTitle: '生命保険代理店の事業免許等に係る税',
                            label: 'オ',
                            content: '',
                        }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons next-route="zeihou2025b" />
        </section>
    </SeihoTestLayout>
</template>
