<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "約款と法律";
const subject = "2024年度 フォームC";
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
                    questionTitle="クーリング・オフ制度-①"
                    :contents="[
                        '承諾',
                        '商事特別法',
                        '申込日',
                        '8日',
                        '第1回保険料相当額', // 問１〜５
                    ]"
                    :labels="[
                        'カ', //1
                        'オ', //2
                        'コ', //3
                        'ア', //4
                        'ク', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="クーリング・オフ制度-②"
                    :contents="[
                        '1年',
                        '申込者等が自ら指定した',
                        '医師の診査',
                        '債務',
                        '更改、更新', // 問6〜10
                    ]"
                    :labels="[
                        'ア', //6
                        'コ', //7
                        'ウ', //8
                        'ク', //9
                        'カ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="生損保兼営の禁止と子会社による生損保兼営-①"
                    :contents="[
                        '免許',
                        '確実性',
                        '負担する危険',
                        '統計上',
                        '大損害', // 問11〜15
                    ]"
                    :labels="[
                        'コ', //11
                        'イ', //12
                        'ケ', //13
                        'カ', //14
                        'オ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="生損保兼営の禁止と子会社による生損保兼営-②"
                    :contents="[
                        '議決権',
                        '50%',
                        '認可',
                        '特定関係者',
                        '弊害防止措置', // 問16〜20
                    ]"
                    :labels="[
                        'ウ', //16
                        'イ', //17
                        'ク', //18
                        'キ', //19
                        'ケ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約等に対する法の適用"
                    :contents="[
                        '内閣総理大臣宛の免許申請書に添付する必要はない → 添付しなければならない', //p11
                        '無効 → 有効', //p11
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="第三者のためにする生命保険契約等"
                    :contents="[
                        '保険金受取人の代理人として契約する → 代理人として契約するのではない', //p55
                        '正しい',
                        '受益の意思表示が必要 → 受益の意思表示は必要としない', //p56
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の取消しまたは無効"
                    :contents="[
                        '生命保険会社が立証する必要はない → 立証しなければならない', //p134
                        '保険法に規定されている → 保険法に規定はないが、一部の会社で保険約款に規定されている', //p134-135
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険会社の合併"
                    :contents="[
                        '正しい',
                        '保険株式会社にすることができる → 相互会社であることを要する。', //p251
                        '保険法 → 会社法', //p251
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の締結または保険募集に関する禁止行為"
                    :contents="[
                        '将来における配当に関して断定的判断を示すことは禁止の対象とならない → 禁止の対象となる', //p267
                        '基礎書類に基づく行為でも禁止 → 基礎書類に基づいた行為は禁止されていない', //p266
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険約款の拘束力の根拠"
                    :contents="[
                        '意思推定説 → 法規範説', //p7
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務"
                    :contents="[
                        '正しい',
                        '強制しうる権利を有する → 権利を有しない<br>損害を賠償をする義務を負う → 義務を負わない', //p48
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="災害入院給付金の支払"
                    :contents="[
                        '正しい',
                        '正しい',
                        '180日 → 120日', //p175
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険持株会社"
                    :contents="[
                        '正しい',
                        '正しい',
                        '金融庁長官の承認を受けなければならない → 承認は不要', //p216
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="乗合の禁止"
                    :contents="[
                        '損害保険募集人と同様の → 損害保険にはみられない', //p260-261
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
                        { questionTitle: '生命保険契約等に対する法の適用', content: 'どちらも営業的商行為である → 営利保険のみ営業的商行為' }, //31 p5-6
                        { questionTitle: '保険料の返還', content: '正しい' }, //32
                        { questionTitle: '個人情報取扱事業者の義務', content: '正しい' }, //33
                        { questionTitle: '保険給付請求権の譲渡等', content: '保険契約者の同意 → 被保険者の同意' }, //34 p58
                        { questionTitle: '保険金受取人の変更', content: '被保険者の同意は不要 → 被保険者の同意が必要' }, //35 p57
                        { questionTitle: '被保険者による解除請求', content: '正しい' }, //36
                        { questionTitle: '災害入院特約と疾病入院特約', content: '4日不担保等の免責規定が適用される → 適用されない' }, //37 p178
                        { questionTitle: '保険契約者への貸付', content: '翌日からオーバーローンによる失効 → 通知額を期限までに払わないとき失効' }, //38 p157
                        { questionTitle: '監督の方法', content: '正しい' }, //39
                        { questionTitle: '外国保険業者', content: '法人であることが条件 → 法人でなくてもよく、個人でもよい' }, //40 p256
                        // 問41〜50
                        { questionTitle: '生命保険契約等の性質', label: 'ア', content: '射倖' }, //41
                        { questionTitle: '契約上の保障責任', label: 'エ', content: '契約日' }, //42
                        { questionTitle: '生命保険契約等の解除の効力等', label: 'オ', content: '' }, //43
                        { questionTitle: '保険料払込免除', label: 'オ', content: '' }, //44
                        { questionTitle: '生死不明の場合の取扱', label: 'イ', content: '生命保険会社' }, //45
                        { questionTitle: '保険金受取人の死亡', label: 'エ', content: '当該保険金受取人の相続人全員' }, //46
                        { questionTitle: '年齢の計算、誤りの処理', label: 'オ', content: '' }, //47
                        { questionTitle: '基礎書類', label: 'エ', content: '定款' }, //48
                        { questionTitle: '株主の権利行使の基準日', label: 'ウ', content: '4ヶ月' }, //49
                        { questionTitle: '保険募集の制限', label: 'ウ', content: '媒介' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="yakkan2024b" next-route="yakkan2023a" />
        </section>
    </SeihoTestLayout>
</template>
