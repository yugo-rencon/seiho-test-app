<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "資産の運用";
const subject = "2021年度 フォームA";
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
                    questionTitle="生保資金と運用原則-①"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '剰余金',
                        '保険契約準備金',
                        '信託財産',
                        '流動性',
                        '自己責任原則', // 問１〜５
                    ]"
                    :labels="[
                        'エ', //1
                        'カ', //2
                        'コ', //3
                        'ク', //4
                        'キ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    questionTitle="生保資金と運用原則-②"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '国際決済銀行',
                        '自己資本',
                        'リスク・ヘッジ',
                        '負債特性',
                        '区分経理', //問６〜10
                    ]"
                    :labels="[
                        'ケ', //6
                        'カ', //7
                        'ウ', //8
                        'コ', //9
                        'オ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    questionTitle="貸付の実行-①"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '財団抵当',
                        '時価',
                        '瑕疵（かし）',
                        '不動産鑑定士',
                        '控除', //問11〜15
                    ]"
                    :labels="[
                        'エ', //11
                        'ク', //12
                        'カ', //13
                        'イ', //14
                        'オ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    questionTitle="貸付の実行-②"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '一括返済',
                        '収益性',
                        'プライム・レート',
                        '低く',
                        '金銭消費貸借契約証書', //問16〜20
                    ]"
                    :labels="[
                        'オ', //16
                        'ア', //17
                        'コ', //18
                        'ク', //19
                        'ケ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    questionTitle="生命保険会社と金融仲介機能"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '機関投資家的 ↔︎ 金融仲介機能', //p10
                        '間接金融的 → 直接金融的', //p10-11
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    questionTitle="不動産の投資手法"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '共同ビル方式 → 借地方式', //p99
                        '正しい',
                        '契約の更新を自動的に行う → 契約更新はしない', //p100
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    questionTitle="各国の生保資産運用の傾向"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        'フランス・イタリア・ベルギー → ドイツ・オランダ・スイス', //p124-125
                        'ドイツ・オランダ・スイス → フランス、イタリア、ベルギー', //p124-125
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    questionTitle="金融の自由化と生保資産運用の多様化"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '金利の面 → 業務面', //p201
                        '業務面 → 金利の面', //p201
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    questionTitle="有価証券の評価方法"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '取得価額 → 時価', //p213
                        '時価 → 取得価額', //p213
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    questionTitle="消費者ローン"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '正しい',
                        '30% → 20%', //p58
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    questionTitle="海外投融資の実務"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '正しい',
                        '負債構造が外貨建て → 負債構造が円建て<br>円建債務を作って → 外貨建債務を作って', //p109
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    questionTitle="各国の生命保険会社の資産運用規制"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '公社債 ↔︎ 不動産関連投資', //p138
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    questionTitle="安定成長期の貸付面の多様化"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '正しい',
                        '住宅ローンから撤退 → 住宅ローンへ進出', //p196
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    questionTitle="日本版ビッグバン、金融システム改革法"
                    :title="title"
                    :subject="subject"
                    :contents="[
                        '正しい',
                        '取引所集中の義務化、店頭登録市場の廃止、私設取引システムの撤廃 → 取引所集中義務の撤廃、店頭登録市場の機能強化、私設取引システムの導入', //p209
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '日本の金融制度における生命保険会社の地位', content: '正しい' }, //31
                        { questionTitle: '金融関連業務', content: '付随業務 → 法定他業' }, //32 見つからない
                        { questionTitle: '融資審査', content: '正しい' }, //33
                        { questionTitle: '貸付期間別分類', content: '長期資金・中期資金・短期資金に分類 → 長期資金・短期資金に分類<br>1年以内のものを短期、1年超のものを長期' }, //34 p53
                        { questionTitle: '国債', content: '繰延債 → 歳入債' }, //35 見つからない
                        { questionTitle: '不動産投資の実務', content: '正しい' }, //36
                        { questionTitle: 'イギリスの資産運用の特徴', content: '正しい' }, //37
                        { questionTitle: '長期金融機関としての役割', content: '正しい' }, //38
                        { questionTitle: '海外投融資', content: '0%に近い → 近くない' }, //39 p109
                        { questionTitle: '改正保険業法', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '生保資金の運用規制', label: 'イ', content: '独占禁止法' }, //41
                        { questionTitle: '資産運用の専門化の進展', label: 'エ', content: 'アナリスト' }, //42
                        { questionTitle: '有価証券の定義', label: 'ア', content: '金融商品取引法' }, //43
                        { questionTitle: 'コール・オプション', label: 'ア', content: '上昇' }, //44
                        { questionTitle: '短期金融市場の概要', label: 'オ', content: '' }, //45
                        { questionTitle: '個人変額保険の特別勘定', label: 'イ', content: '時価主義' }, //46
                        { questionTitle: 'アメリカの資産運用規制', label: 'オ', content: '' }, //47
                        { questionTitle: '創業時の生命保険会社の資産運用', label: 'ウ', content: '銀行預金' }, //48
                        { questionTitle: '資産運用手段の多様化', label: 'イ', content: 'ヘッジファンド' }, //49
                        { questionTitle: 'ソルベンシー確保', label: 'エ', content: 'リスク係数' }, //50
                    ]"
                />
            </div>

            <!-- ボタングループ -->
            <TestNavigationButtons previous-route="sisan2022c" next-route="sisan2021b" />
        </section>
    </SeihoTestLayout>
</template>
