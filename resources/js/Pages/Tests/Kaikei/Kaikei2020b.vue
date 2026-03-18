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
                        '内部関係者 → 株主、債権者などの外部利害関係者', //p9
                        '正しい',
                        '精算表 → 総勘定元帳', //p12
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="責任準備金"
                    :contents="[
                        '正しい',
                        '保険料勘定の修正を行う → 修正は行わない', //p40
                        '全額損金算入が認められている → 損金とはならない', //p41
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="負債勘定の内容"
                    :contents="[
                        '正しい',
                        '未払賞与はすべて損金算入が可能 → 損金算入が認められていない', //p129
                        '負債の部 → 資産の部', //p134
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社のディスクロージャー"
                    :contents="[
                        '正しい',
                        '事業方法書 → 定款', //p180-181
                        '四半期開示について法令上定めれていない → 2008年から努力義務として規定された', //p186
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="会計監査人による監査"
                    :contents="[
                        '公認会計士または弁護士 → 公認会計士または公認会計士によって設立された監査法人', //p207
                        '取締役会により選任 → 株主総会（相互会社では総代会）により選任', //p208
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="企業会計原則（一般原則）"
                    :contents="[
                        '正しい',
                        '継続性の原則 → 保守主義の原則', //p26
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="税務会計"
                    :contents="[
                        '会計情報の開示という機能が含まれているという点で同じ → 含まれていないという点で異なる', //p32
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="一般勘定・特別勘定"
                    :contents="[
                        '正しい',
                        '正しい',
                        '両勘定の勘定科目を明確に分離 → 両者を合併', //p47
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産勘定の内容"
                    :contents="[
                        '正しい',
                        '20万円未満または使用可能期間が3年未満 → 10万円未満または使用可能期間が1年未満', //p115
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="費用に属する科目"
                    :contents="[
                        '正しい',
                        '含めて計上する → 除いて計上する', //p154
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '試算表', content: '正しい' }, //31
                        { questionTitle: '開示書類', content: '四半期報告書は開示が求められていない → 開示が求められている' }, //32 p30
                        { questionTitle: '保険金等支払金の計上', content: '各費用勘定で期間修正 → 支払備金・責任準備金で調整' }, //33 p42-43
                        { questionTitle: '会計に関する事項の標準的な取扱い', content: '正しい' }, //34
                        { questionTitle: '繰延税金資産', content: '正しい' }, //35
                        { questionTitle: '提供していない役務に対する対価', content: '借受金 → 前受収益' }, //36 p129
                        { questionTitle: '費用収益対応の原則', content: '費用に収益を対応させる方法が一般的 → 収益の実現に費用を対応させる方法が一般的' }, //37 p143
                        { questionTitle: '保険金', content: '正しい' }, //38
                        { questionTitle: '投資に係る税金', content: '正しい' }, //39
                        { questionTitle: '事業費の分類', content: '減価償却費 → 集金費' }, //40 p170
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
