<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2021年7月〜12月実施 フォーム②";
const isDraft = true;
</script>

<template>
    <SeihoTestLayout :title="title" brand-name="生命保険一般課程 過去問解説">
        <section class="bg-gray-100 py-10 text-gray-800">
            <Pagetitle :title="title" :description="subject" />
            <DraftNotice v-if="isDraft" />

            <div class="mx-auto mt-4 max-w-4xl space-y-2">
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="1〜3"
                    questionTitle="隣接業界-①"
                    :contents="[
                        '終身共済',
                        '厚生労働省',
                        '小口', // 問1〜3
                    ]"
                    :labels="[
                        'イ', //1
                        'エ', //2
                        'オ', //3
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="4〜5"
                    questionTitle="隣接業界-②"
                    :contents="[
                        '1年',
                        '1000万円', // 問4〜5
                    ]"
                    :labels="[
                        'ア', //4
                        'ウ', //5
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="6〜7"
                    questionTitle="契約申込み時の実務-①"
                    :contents="[
                        '承諾',
                        '責任開始期', // 問6〜7
                    ]"
                    :labels="[
                        'エ', //6
                        'イ', //7
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="8〜10"
                    questionTitle="契約申込み時の実務-②"
                    :contents="[
                        '8日',
                        'クリーリング・オフ',
                        '既払込金額', // 問8〜10
                    ]"
                    :labels="[
                        'ウ', //8
                        'オ', //9
                        'ア', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜12"
                    questionTitle="募集時の正しい説明-①"
                    :contents="[
                        '約款',
                        '内閣総理大臣', // 問11〜12
                    ]"
                    :labels="[
                        'ア', //11
                        'エ', //12
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="13〜15"
                    questionTitle="募集時の正しい説明-②"
                    :contents="[
                        '契約概要',
                        'いただく前に',
                        '自己責任', // 問13〜15
                    ]"
                    :labels="[
                        'ア', //13
                        'エ', //14
                        'カ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜18"
                    questionTitle="保障の見直し-①"
                    :contents="[
                        '責任準備金',
                        '死亡保障',
                        '追加', // 問16〜18
                    ]"
                    :labels="[
                        'ウ', //16
                        'オ', //17
                        'ア', //18
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="19〜20"
                    questionTitle="保障の見直し-②"
                    :contents="[
                        '契約者',
                        '意向確認書面', // 問19〜20
                    ]"
                    :labels="[
                        'イ', //19
                        'エ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜22"
                    questionTitle="社会保障制度-①"
                    :contents="[
                        '生活保護法',
                        '全', // 問21〜22
                    ]"
                    :labels="[
                        'エ', //21
                        'ア', //22
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="23〜25"
                    questionTitle="社会保障制度-②"
                    :contents="[
                        '20',
                        '遺族',
                        '国民皆保険', // 問23〜25
                    ]"
                    :labels="[
                        'カ', //23
                        'エ', //24
                        'ア', //25
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="26〜30"
                    questionTitle="保険料の仕組み（収支相等の原則）"
                    :contents="[
                        '6',
                        '12000',
                        '3000',
                        '4',
                        '12000', // 問26〜30
                    ]"
                    :labels="[
                        'エ', //26
                        'コ', //27
                        'カ', //28
                        'ウ', //29
                        'コ', //30
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の役割"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の種類"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="照会・苦情時の対応"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="34"
                    :title="title"
                    :subject="subject"
                    questionTitle="私たちの役割と心がまえ"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="35"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の払い込み"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="お客さまニーズへの対応"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="設計販売の基礎"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="38"
                    :title="title"
                    :subject="subject"
                    :useAnswerLabelForAll="true"
                    :items="[
                        // 問38〜67
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '', //p
                        }, //39
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '', //p
                        }, //42
                        {
                            questionTitle: '相続の法律',
                            content: '', //p
                        }, //43
                        {
                            questionTitle: '相続の法律',
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '相続の法律',
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '相続の法律',
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '相続の法律',
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '資産の運用',
                            content: '', //p
                        }, //48
                        {
                            questionTitle: '資産の運用',
                            content: '', //p
                        }, //49
                        {
                            questionTitle: '資産の運用',
                            content: '正しい',
                        }, //50
                        {
                            questionTitle: '資産の運用',
                            content: '正しい',
                        }, //51
                        {
                            questionTitle: '資産の運用',
                            content: '', //p
                        }, //52
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //53
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '', //p
                        }, //54
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //55
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //56
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '', //p
                        }, //57
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '', //p
                        }, //58
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '', //p
                        }, //59
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '正しい',
                        }, //60
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '正しい',
                        }, //61
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '', //p
                        }, //62
                        {
                            questionTitle: '企業向け商品',
                            content: '', //p
                        }, //63
                        {
                            questionTitle: '企業向け商品',
                            content: '正しい',
                        }, //64
                        {
                            questionTitle: '企業向け商品',
                            content: '正しい',
                        }, //65
                        {
                            questionTitle: '企業向け商品',
                            content: '', //p
                        }, //66
                        {
                            questionTitle: '企業向け商品',
                            content: '正しい',
                        }, //67
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="68"
                    :title="title"
                    :subject="subject"
                    :applyChoicePrefix="false"
                    :items="[
                        // 問68〜82
                        { questionTitle: '生命保険会社の仕組み', label: 'ア', content: '200%' }, //68
                        { questionTitle: '生命保険会社の仕組み', label: 'イ', content: '責任準備金' }, //69
                        { questionTitle: '生命保険会社の仕組み', label: 'イ', content: '契約者' }, //70
                        { questionTitle: '生命保険会社の仕組み', label: 'ア', content: '契約者本位' }, //71
                        { questionTitle: '生命保険会社の仕組み', label: 'イ', content: '内閣総理大臣' }, //72
                        { questionTitle: '契約の選択', label: 'イ', content: '環境上' }, //73
                        { questionTitle: '契約の選択', label: 'ア', content: '保険金や特約' }, //74
                        { questionTitle: '契約の選択', label: 'イ', content: '入院給付金日額' }, //75
                        { questionTitle: '契約の選択', label: 'ア', content: '契約内容登録制度' }, //76
                        { questionTitle: '契約の選択', label: 'イ', content: '面接' }, //77
                        { questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）', label: 'ア', content: '贈与税' }, //78
                        { questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）', label: 'イ', content: '所得税' }, //79
                        { questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）', label: 'ア', content: '110万円' }, //80
                        { questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）', label: 'イ', content: '500万円' }, //81
                        { questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）', label: 'ア', content: '本人（被保険者）' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
