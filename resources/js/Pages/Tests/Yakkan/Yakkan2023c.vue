<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "約款と法律";
const subject = "2023年度 フォームC";
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
                    questionTitle="保険契約の失効等-①"
                    :contents="[
                        '払込猶予期間',
                        'オーバーローン',
                        '解約返戻金',
                        '生命保険会社所定',
                        '複利', // 問１〜５
                    ]"
                    :labels="[
                        'ク', //1
                        'イ', //2
                        'ウ', //3
                        'エ', //4
                        'ケ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険契約の失効等-②"
                    :contents="[
                        '3年',
                        '復活',
                        '延滞保険料',
                        '失効期間',
                        '利息', //問６〜10
                    ]"
                    :labels="[
                        'ウ', //6
                        'ケ', //7
                        'ア', //8
                        'エ', //9
                        'コ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融庁長官等による監督など-①"
                    :contents="[
                        '事業方法書',
                        '停止',
                        '期限',
                        '財産の供託',
                        '免許の取消', //問11〜15
                    ]"
                    :labels="[
                        'ク', //11
                        'エ', //12
                        'カ', //13
                        'ケ', //14
                        'ア', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融庁長官等による監督など-②"
                    :contents="[
                        'ソルベンシー・マージン',
                        '基金',
                        '超える',
                        '200％',
                        '小さな', //問16〜20
                    ]"
                    :labels="[
                        'キ', //16
                        'ア', //17
                        'イ', //18
                        'ク', //19
                        'カ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険約款"
                    :contents="[
                        '免許申請書を添付する必要はない → 添付しなければならない', //p11
                        '正しい',
                        '普通保険約款が適用される → 特約が適用される', //p12
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="クーリング・オフ制度"
                    :contents="[
                        '商法 → 民法', //p45
                        '民事特別法 → 商事特別法', //p45
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約等の性質"
                    :contents="[
                        '要物契約 → 諾成契約（保険契約は当事者の合意のみで成立し、第1回保険料払込は責任開始の要件にすぎない）', //p35
                        '要式契約 → 不要式契約（申込書提出や保険証券発行は事務処理上の便宜）', //p35
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="配当金の支払"
                    :contents="[
                        '正しい',
                        '規定していないのが一般的 → 規定するのが一般的', //p159-160
                        '契約日から起算して２年 → 1年', //p160
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="乗合の禁止"
                    :contents="[
                        '損害保険と同様の → 損害保険にはみられない', //p260-261
                        '制限はない → 制限されている', //p261
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約等に対する法の適用"
                    :contents="[
                        '正しい',
                        '相互保険は、商法の商行為一般の規定は適用されない → 保険業法により商法が準用される', //p5-6
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険募集人"
                    :contents="[
                        '締結の媒介を行う場合 → 締結の代理を行う場合', //p47
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="告知義務違反による解除"
                    :contents="[
                        '正しい',
                        '2年 → 5年', //p62
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金受取人の変更"
                    :contents="[
                        '正しい',
                        '正しい',
                        '保険金受取人またはその承継人 → 保険契約者またはその承継人', //p149
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="生損保兼営の禁止の趣旨"
                    :contents="[
                        '正しい',
                        '生命保険業 ↔︎ 損害保険業', //p205
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '生命保険契約等の定義', content: '傷害疾病定額保険契約 → 傷害疾病損害保険契約' }, //31 p33
                        { questionTitle: '保険料不可分の原則', content: '保険料不可分の原則を前提としている → 前提としていない（未経過保険料は返還）' }, //32 p44
                        { questionTitle: '責任開始期', content: '正しい' }, //33
                        { questionTitle: '保険契約者に対する貸付の法的性質', content: '保険証券担保貸付説 → 相殺予約付消費賃借契約説' }, //34 p155
                        { questionTitle: '遺言による保険金受取人の変更', content: '正しい' }, //35
                        { questionTitle: '特約の消滅', content: '主契約の解約返戻金によって → 主契約と特約の解約返戻金を合算して' }, //36 p176
                        { questionTitle: '契約内容の登録', content: '満期保険金登録制度 → 死亡保険金登録制度' }, //37 p168
                        { questionTitle: '帳簿閲覧権', content: '正しい' }, //38
                        { questionTitle: '意向把握義務', content: '設計書 → 意向確認書面' }, //39 p263
                        { questionTitle: '外国保険会社等の保険業の廃止', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '金融サービスの提供に関する法律', label: 'ア', content: '重要事項' }, //41
                        { questionTitle: '生命保険契約等の要素', label: 'オ', content: '' }, //42
                        { questionTitle: '保険金の支払', label: 'ア', content: '10月18日' }, //43
                        { questionTitle: '保険契約の解除', label: 'イ', content: '保険法' }, //44
                        { questionTitle: '保険会社の業務の範囲', label: 'ア', content: '法定他業' }, //45
                        { questionTitle: '保険持株会社', label: 'エ', content: '総資産' }, //46
                        { questionTitle: '株主の権利行使の基準日', label: 'イ', content: '3ヶ月' }, //47
                        { questionTitle: '災害入院給付金の免責事由', label: 'オ', content: '' }, //48
                        { questionTitle: '供託', label: 'ウ', content: '供託所' }, //49
                        { questionTitle: '保険契約の締結または保険募集に関する禁止行為', label: 'オ', content: '' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="yakkan2023b" next-route="yakkan2022a" />
        </section>
    </SeihoTestLayout>
</template>
