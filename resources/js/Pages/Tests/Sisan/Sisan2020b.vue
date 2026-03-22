<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "資産の運用";
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
                    questionTitle="生保資金の運用規制-①"
                    :contents="[
                        '固有業務',
                        '自己責任',
                        '通達・事務連絡',
                        '保険会社向けの総合的な監督指針',
                        'リスク管理', // 問１〜５
                    ]"
                    :labels="[
                        'ウ', //1
                        'ア', //2
                        'キ', //3
                        'カ', //4
                        'コ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="生保資金の運用規制-②"
                    :contents="[
                        '独占禁止法',
                        '10%',
                        '5%',
                        '準備預金制度',
                        '信用創造機能', // 問6〜10
                    ]"
                    :labels="[
                        'コ', //6
                        'イ', //7
                        'ア', //8
                        'カ', //9
                        'ケ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="特別勘定-①"
                    :contents="[
                        '金利選好',
                        'インフレ・ヘッジ',
                        '投資リスク',
                        '受託者',
                        '運用割合', // 問11〜15
                    ]"
                    :labels="[
                        'ウ', //11
                        'ク', //12
                        'カ', //13
                        'イ', //14
                        'ケ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="特別勘定-②"
                    :contents="[
                        '大口信用供与規制',
                        '安全性',
                        '契約者',
                        '合同運用',
                        'スケールメリット', // 問16〜20
                    ]"
                    :labels="[
                        'キ', //16
                        'ア', //17
                        'エ', //18
                        'ク', //19
                        'オ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="運用機構"
                    :contents="[
                        '単独制 → 委員会制', //p46
                        '委員会制 → 単独制', //p47
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="有価証券におけるリスク・リターン特性"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="各国における保険会社の周辺業務の取り扱い"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="戦後の日本経済と生命保険業"
                    :contents="[
                        '正しい',
                        '5000円以上 → 1万円以上<br>解散することなく → 解散した', //p174
                        '第1位の保険大国 → 米国に次ぐ第2位の保険大国', //p176
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="改正保険業法の施行（1998年（平成10年）12月）（金融システム改革法）"
                    :contents="[
                        '新たに認められた → 改正前から認められていた', //p210
                        '法定他業 → 付随業務', //p210
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="生保資金の特徴と構成"
                    :contents="[
                        '正しい',
                        '保険契約準備金 → 保険料積立金', //p11
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="海外投融資"
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
                    questionTitle="各国の金融制度"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="戦前の生保資産運用"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="日本版ビッグバン、金融システム改革法"
                    :contents="[
                        '正しい',
                        '正しい',
                        '新しく設けられた → 廃止された<br>統一された → 完全自由化された', //p208
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '日本の金融制度', content: '正しい' }, //31
                        { questionTitle: '投資リスク回避策', content: '' }, //32
                        { questionTitle: '貸付形態別分類', content: '' }, //33
                        { questionTitle: '公社債', content: '変動利付 → 確定利付' }, //34 p69
                        { questionTitle: 'スワップ取引', content: '通過スワップ → 金利スワップ' }, //35 p94
                        { questionTitle: '外国為替実務', content: '' }, //36
                        { questionTitle: 'アメリカの資産運用規制', content: '正しい' }, //37
                        { questionTitle: '公共投資', content: '正しい' }, //38
                        { questionTitle: 'バブル崩壊後の外国証券投資', content: '正しい' }, //39
                        { questionTitle: '金融審議会報告書', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '資産運用機能の充実', label: 'ウ', content: 'ALM（Asset Liability Management）' }, //41
                        { questionTitle: '資産運用の専門化の進展', label: 'イ', content: 'ファンド・マネージャー' }, //42
                        { questionTitle: '融資審査', label: 'オ', content: '' }, //43
                        { questionTitle: 'コール・オプション', label: 'ウ', content: '買い付ける' }, //44
                        { questionTitle: '不動産の投資手法', label: 'ア', content: '新借地' }, //45
                        { questionTitle: 'イギリスの資産運用', label: 'オ', content: '' }, //46
                        { questionTitle: '特定金銭信託の活用', label: 'イ', content: 'キャピタル・ゲイン' }, //47
                        { questionTitle: '資産運用手段の多様化', label: 'エ', content: 'オルタナティブ投資' }, //48
                        { questionTitle: '金融商品会計に関する実務指針', label: 'ア', content: '日本公認会計士協会' }, //49
                        { questionTitle: 'リスクの多様化', label: 'エ', content: '先物' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="sisan2020a" next-route="sisan2020c" />
        </section>
    </SeihoTestLayout>
</template>
