<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "約款と法律";
const subject = "2024年度 フォームB";
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
                    questionTitle="株式会社と相互会社-①"
                    :contents="[
                        '含む',
                        '10億円',
                        '中間法人',
                        '基金拠出者',
                        '総代会', // 問11〜15
                    ]"
                    :labels="[
                        'コ', //11
                        'ア', //12
                        'ク', //13
                        'オ', //14
                        'キ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="株式会社と相互会社-②"
                    :contents="[
                        '責任準備金',
                        '4ヶ月',
                        '100',
                        '1000分の3',
                        '損失てん補準備金', // 問16〜20
                    ]"
                    :labels="[
                        'ケ', //16
                        'ア', //17
                        'ウ', //18
                        'カ', //19
                        'コ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約等に対する法の適用"
                    :contents="[
                        '正しい',
                        '契約の拘束から免れる事由がある → 契約の拘束から免れる自由はない', //p3
                        '意思表示が内容的に一致している必要はない →  一致している（合意）必要がある', //p4
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約等の要素"
                    :contents="[
                        '正しい',
                        '必ず1人であることを要する → 必ずしも1人であることを要しない', //p39
                        '損害保険契約と同様 → 異なり<br>保険価額等が問題となる → 問題とならない<br>超過保険・一部保険・重複保険等の問題を生ずる → 生じない', //p40
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="自動振替貸付"
                    :contents="[
                        '申出を行うことはできない → 申出を行うことができる', //p101
                        '正しい',
                        '返済させる旨の規定はない → 返済させる旨の規定がある', //p101
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業免許の定義"
                    :contents="[
                        '少額短期保険業免許は含まれない', //p204
                        '再保険の引受はできない → 再保険の引受が可能', //p203-204
                        '正しい',
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
                    questionTitle="生命保険募集人"
                    :contents="[
                        '正しい',
                        '保険契約の締結の媒介または請負を行う者 → 保険契約の締結の代理または媒介を行う者', //p47
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
                    questionTitle="保険契約の解約"
                    :contents="[
                        '正しい',
                        '過去に遡って → 将来に向かって', //p136
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="外国保険業者"
                    :contents="[
                        '株式会社または相互会社でなければならない → 株式会社や相互会社でなくてもよく、個人でもよい', //p256
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
                        { questionTitle: '監督', content: '正しい' }, //31
                        { questionTitle: '保険料の返還', content: '正しい' }, //32
                        { questionTitle: '保険者の免責', content: 'すべての保険金受取人 → 故意に死亡させた保険金受取人' }, //33 p60
                        { questionTitle: '保険給付請求権の譲渡等', content: '保険契約者の同意 → 被保険者の同意' }, //34 p58
                        { questionTitle: '告知義務違反による解除', content: '6ヶ月以内 → 1ヶ月以内' }, //35 p62
                        { questionTitle: '受取人の変更', content: '正しい' }, //36
                        { questionTitle: '災害入院特約と疾病入院特約', content: '4日不担保等の免責規定が適用される → 適用されない' }, //37 p178
                        { questionTitle: '定款の変更', content: '認可は不要 → 認可は必要' }, //38 p222
                        { questionTitle: '免許取消', content: '金融庁長官 → 内閣総理大臣' }, //39 p201
                        { questionTitle: '意向把握義務', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '契約の取り消し', label: 'ア', content: '民法' }, //41
                        { questionTitle: '保険料払込の猶予期間', label: 'ウ', content: '2024年（令和6年）12月31日' }, //42
                        { questionTitle: '生命保険契約等の解除の効力等', label: 'オ', content: '' }, //43
                        { questionTitle: '解除・免責時の支払', label: 'オ', content: '' }, //44
                        { questionTitle: '解除の通知', label: 'イ', content: '解除の原因を知った時' }, //45
                        { questionTitle: '傷害特約の給付', label: 'エ', content: '感染症' }, //46
                        { questionTitle: '年齢の計算、誤りの処理', label: 'オ', content: '' }, //47
                        { questionTitle: '監督体制', label: 'ア', content: '保険契約者保護機構' }, //48
                        { questionTitle: '保険会社に特有な準備金', label: 'ア', content: '毎決算期' }, //49
                        { questionTitle: '保険募集の制限', label: 'ウ', content: '媒介' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="yakkan2024a" next-route="yakkan2024c" />
        </section>
    </SeihoTestLayout>
</template>
