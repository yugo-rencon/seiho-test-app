<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険商品と営業";
const subject = "2022年度 フォームB";
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
                    questionTitle="公的年金制度の動向-①"
                    :contents="[
                        '60歳',
                        '報酬比例',
                        '定額保険料',
                        '標準賞与額',
                        '18.30%', // 問１〜５
                    ]"
                    :labels="[
                        'ケ', //1
                        'ク', //2
                        'エ', //3
                        'カ', //4
                        'イ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度の動向-②"
                    :contents="[
                        '10年',
                        '1ヶ月',
                        '1級〜3級',
                        '子の数',
                        '4分の3', //問６〜10
                    ]"
                    :labels="[
                        'カ', //6
                        'ア', //7
                        'イ', //8
                        'コ', //9
                        'ク', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="情報活用型マーケティング-①"
                    :contents="[
                        '見込客',
                        '携帯パソコン・端末',
                        '販売活動の効率化',
                        'カウンセリング',
                        'セグメンテーション', //問11〜15
                    ]"
                    :labels="[
                        'コ', //11
                        'ウ', //12
                        'ケ', //13
                        'イ', //14
                        'オ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="情報活用型マーケティング-②"
                    :contents="[
                        '上場コード',
                        '取引',
                        'パスワード',
                        'プライバシー',
                        '個人情報保護法', //問16〜20
                    ]"
                    :labels="[
                        'エ', //16
                        'カ', //17
                        'ク', //18
                        'ケ', //19
                        'ウ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="マイナンバー法"
                    :contents="[
                        '未成年者を除くすべての人 → 住民票を有するすべての人', //p40
                        '正しい',
                        '重大個人情報 → 特定個人情報', //p40
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="価値観の変化の要因"
                    :contents="[
                        '正しい',
                        '年齢要因 → 時代要因', //p2-3
                        '時代要因 → 年齢要因', //p2-3
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料率に関する対応"
                    :contents="[
                        '死差配当 → 利差配当。', //p78
                        '正しい',
                        '完全生命表 → 標準生命表。', //p79
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体信用生命保険"
                    :contents="[
                        '団体用生命保険 → 消費者用団体生命保険', //p86-87
                        '債権者：保険金受取人 → 保険契約者および保険金受取人<br>債務者：保険契約者・被保険者 → 被保険者', //p86
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="代理店営業機構"
                    :contents="[
                        '生命保険商品を紹介する紹介代理店 → 代理販売する募集代理店', //p145
                        '保全代理店と集金代理店 → 個人募集代理店と法人募集代理店', //p145
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的介護保険の給付"
                    :contents="[
                        '正しい',
                        '一次判定：審査判定 → コンピューター判定<br>二次判定：コンピューター判定 → 審査判定', //p30
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人保険商品の基本型"
                    :contents="[
                        '責任準備金は死亡した被保険者の遺族に支払う → 生存した他の被保険者の保険金の支払に充当', //p47
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融サービス提供法"
                    :contents="[
                        '正しい',
                        '消費者はその契約を取り消すことができる → 業者は元本欠損額の賠償責任を負う', //p38
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額保険"
                    :contents="[
                        '正しい',
                        '正しい',
                        '変動保険金（毎日変動） → 変動保険金（毎月変動）', //p64
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="業界共通教育制度"
                    :contents="[
                        '基礎知識および顧客への販売能力 → 専門知識と周辺知識および顧客ニーズへの基本的対応力', //124
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '公的介護保険の保険料', content: '保険料75%、公費25% → 保険料50%、公費50%' }, //31 p30
                        { questionTitle: '消費者契約法', content: '正しい' }, //32
                        { questionTitle: '保険料変更の自在性', content: '正しい' }, //33
                        { questionTitle: '外貨建保険', content: '安い為替手数料 → 高い金利<br>予定事業費率を低く → 予定利率を高く' }, //34 p65
                        { questionTitle: '特別勘定', content: '正しい' }, //35
                        { questionTitle: '財形貯蓄制度と税制', content: '所得税の公的年金控除の対象 → 非課税' }, //36 p95
                        { questionTitle: '心身障害者扶養者生命保険', content: '正しい' }, //37
                        { questionTitle: '窓販の弊害防止措置', content: '正しい' }, //38
                        { questionTitle: '保険仲立人', content: '諸外国ではあまり例がない → 諸外国で一般的' }, //39 p103
                        { questionTitle: '募集人登録', content: '生命保険協会 → 内閣総理大臣（金融庁長官に委任）' }, //40 p118
                        // 問41〜50
                        { questionTitle: '女性の社会進出', label: 'イ', content: '男女雇用機会均等法' }, //41
                        { questionTitle: '消費者保護とコンプライアンス', label: 'オ', content: '' }, //42
                        { questionTitle: 'リビング・ニーズ特約', label: 'イ', content: '6ヶ月' }, //43
                        { questionTitle: '危険選択の方法', label: 'エ', content: '面接' }, //44
                        { questionTitle: '団体保険', label: 'ウ', content: 'ヒューマン・ヴァリュー特約' }, //45
                        { questionTitle: '国民年金基金制度', label: 'ア', content: '第1号被保険者' }, //46
                        { questionTitle: '財形貯蓄制度の種類', label: 'イ', content: '55歳' }, //47
                        { questionTitle: '通信販売', label: 'エ', content: '加入保険金額' }, //48
                        { questionTitle: '営業職員の教育', label: 'イ', content: '個別指導' }, //49
                        { questionTitle: '営業職員の給与体系', label: 'イ', content: '地域' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="eigyo2022a" next-route="eigyo2022c" />
        </section>
    </SeihoTestLayout>
</template>
