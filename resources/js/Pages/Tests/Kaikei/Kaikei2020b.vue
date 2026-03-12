<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";
import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険会計";
const subject = "2020年度 フォームB";
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 text-gray-800 py-10">
            <!-- ページタイトル -->
            <Pagetitle :title="title" :description="subject" />

            <!-- 問題リスト -->
            <div class="max-w-4xl mx-auto mt-4 space-y-2">
                <QuestionTemp3
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="決算整理手続-①"
                    :contents="[
                        '総勘定元帳',
                        '期末棚卸',
                        '保有目的',
                        '売掛金',
                        '固定資産', // 問1〜5
                    ]"
                    :labels="[
                        'イ', //1
                        'ウ', //2
                        'オ', //3
                        'コ', //4
                        'ク', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="決算整理手続-②"
                    :contents="[
                        '前払費用',
                        '未払費用',
                        '未収収益',
                        '元帳の締切',
                        '純資産勘定', // 問6〜10
                    ]"
                    :labels="[
                        'ア', //6
                        'コ', //7
                        'キ', //8
                        'エ', //9
                        'カ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="主な純資産勘定の内容-①"
                    :contents="[
                        '10',
                        '損失填補準備金',
                        '資産',
                        '設立費用',
                        '同類', // 問11〜15
                    ]"
                    :labels="[
                        'ウ', //11
                        'イ', //12
                        'カ', //13
                        'キ', //14
                        'ケ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="主な純資産勘定の内容-②"
                    :contents="[
                        '簿価',
                        '含む',
                        '資本準備金',
                        '5',
                        '繰越', // 問16〜20
                    ]"
                    :labels="[
                        'ケ', //16
                        'ウ', //17
                        'コ', //18
                        'エ', //19
                        'キ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="複式簿記の原理"
                    :contents="[
                        '', //p
                        '正しい', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="責任準備金"
                    :contents="[
                        '正しい', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="負債勘定の内容"
                    :contents="[
                        '正しい', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社のディスクロージャー"
                    :contents="[
                        '正しい', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="会計監査人による監査"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="企業会計原則（一般原則）"
                    :contents="[
                        '正しい', //p
                        '', //p
                        '正しい', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="税務会計"
                    :contents="[
                        '', //p
                        '正しい', //p
                        '正しい', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="一般勘定・特別勘定"
                    :contents="[
                        '正しい', //p
                        '正しい', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産勘定の内容"
                    :contents="[
                        '正しい', //p
                        '', //p
                        '正しい', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="費用に属する科目"
                    :contents="[
                        '正しい', //p
                        '', //p
                        '正しい', //p
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '試算表', content: '正しい' }, //31
                        { questionTitle: '開示書類', content: '' }, //32
                        { questionTitle: '保険金等支払金の計上', content: '' }, //33
                        { questionTitle: '会計に関する事項の標準的な取扱い', content: '正しい' }, //34
                        { questionTitle: '繰延税金資産', content: '正しい' }, //35
                        { questionTitle: '提供していない役務に対する対価', content: '' }, //36
                        { questionTitle: '費用収益対応の原則', content: '' }, //37
                        { questionTitle: '保険金', content: '正しい' }, //38
                        { questionTitle: '投資に係る税金', content: '正しい' }, //39
                        { questionTitle: '事業費の分類', content: '' }, //40
                        // 問41〜50
                        { questionTitle: '会計公準', label: 'ウ', content: '貨幣的評価' }, //41
                        { questionTitle: '決算', label: 'エ', content: '財政状態' }, //42
                        { questionTitle: '連結決算', label: 'オ', content: '' }, //43
                        { questionTitle: '会計に関する法律', label: 'オ', content: '' }, //44
                        { questionTitle: 'ソフトウェア', label: 'ウ', content: '定額法' }, //45
                        { questionTitle: '退職給付引当金', label: 'エ', content: '未認識過去勤務費用' }, //46
                        { questionTitle: '損益の認識', label: 'ア', content: '実現主義' }, //47
                        { questionTitle: '保険料', label: 'イ', content: '未収保険料' }, //48
                        { questionTitle: '区分経理', label: 'イ', content: '一般勘定' }, //49
                        { questionTitle: '企業が受ける検査', label: 'ア', content: '税務調査' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="kaikei2020a" next-route="kaikei2020c" />
        </section>
    </SeihoTestLayout>
</template>
