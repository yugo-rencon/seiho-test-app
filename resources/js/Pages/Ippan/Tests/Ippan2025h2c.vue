<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2025年7月〜12月実施 フォームC";
const isDraft = false;
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
                    questionTitle="保障の見直し-①"
                    :contents="[
                        '責任準備金',
                        '死亡保障',
                        '追加', // 問1〜3
                    ]"
                    :labels="[
                        'ア', //1
                        'ウ', //2
                        'オ', //3
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="4〜5"
                    questionTitle="保障の見直し-②"
                    :contents="[
                        '契約者',
                        '意向確認書面', // 問4〜5
                    ]"
                    :labels="[
                        'イ', //4
                        'ウ', //5
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="6〜7"
                    questionTitle="契約の選択-①"
                    :contents="[
                        '環境',
                        '契約内容登録制度', // 問6〜7
                    ]"
                    :labels="[
                        'イ', //6
                        'エ', //7
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="8〜10"
                    questionTitle="契約の選択-②"
                    :contents="[
                        '面接',
                        '割増保険料',
                        '特別条件', // 問9〜10
                    ]"
                    :labels="[
                        'ア', //8
                        'ウ', //9
                        'カ', //10
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
                        '自己責任', // 問14〜15
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
                    questionRange="16〜17"
                    questionTitle="正しい告知の取り扱い-①"
                    :contents="[
                        '契約確認',
                        '保険証券', // 問16〜17
                    ]"
                    :labels="[
                        'ア', //16
                        'ウ', //17
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="19〜20"
                    questionTitle="正しい告知の取り扱い-②"
                    :contents="[
                        '2年',
                        '1ヶ月',
                        '取消し', // 問18〜20
                    ]"
                    :labels="[
                        'イ', //18
                        'ウ', //19
                        'オ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜23"
                    questionTitle="隣接業界-①"
                    :contents="[
                        '農林水産省',
                        '終身共済',
                        '1年', // 問21〜23
                    ]"
                    :labels="[
                        'ア', //21
                        'エ', //22
                        'オ', //23
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="24〜25"
                    questionTitle="隣接業界-②"
                    :contents="[
                        '1年',
                        '定期年金', // 問24〜25
                    ]"
                    :labels="[
                        'ア', //24
                        'ウ', //25
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="26〜30"
                    questionTitle="保険料の仕組み（収支相等の原則）"
                    :contents="[
                        '2',
                        '4000',
                        '1000',
                        '4',
                        '4000', // 問26〜30
                    ]"
                    :labels="[
                        'イ', //26
                        'ケ', //27
                        'カ', //28
                        'ウ', //29
                        'ケ', //30
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産の運用"
                    :contents="[
                        '積極的で投機的な資産運用 → 効率的で安定した資産運用', //p34
                        '正しい',
                        '貸付金は含まれない → 含まれる（有価証券・貸付金・不動産が主な対象）', //p35
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続の法律"
                    :contents="[
                        '法定相続の規定は遺言に優先して → 遺言は法定相続の規定に優先して', //p129
                        '正しい',
                        '配偶者が2/3、子どもが1/3 → 配偶者が1/2、子どもが1/2', //p130
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="お客さまニーズへの対応"
                    :contents="[
                        'ライフバリュー → ライフサイクル', //p133
                        '末子の成人（18歳）までの生活資金を確保 → 末子の大学卒業時（22歳）までの生活資金とそれ以降の妻の平均余命期間の生活資金を確保', //p135
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="34"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の種類"
                    :contents="[
                        '正しい',
                        '正しい',
                        '一般勘定 → 特別勘定', //p20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="35"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の役割"
                    :contents="[
                        '正しい',
                        '正しい',
                        '平均寿命 → 平均余命', //p4
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="私たちの役割と心がまえ"
                    :contents="[
                        '正しい',
                        '正しい',
                        '預金保険法等 → 保険業法等', //p11
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社の仕組み"
                    :contents="[
                        '正しい',
                        '正しい',
                        '生命保険以外の事業を自由にできる → 他の事業を営むことを制限されている', //p33
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
                            questionTitle: '契約取り扱いの手続き',
                            content: '通称名でもよい → 戸籍等の公的書類記載のものを記入', //p40
                        }, //38
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '契約者 → 被保険者', //p40
                        }, //39
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '保険料が30000円以上 → 50000円以上', //p43
                        }, //42
                        {
                            questionTitle: '保険料の払い込み',
                            content: '割り引きはない → 生命保険会社の定めた利率で割り引かれる', //p50
                        }, //43
                        {
                            questionTitle: '保険料の払い込み',
                            content: '保険金受取人 → 契約者', //p50
                        }, //44
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '正しい',
                        }, //49
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '公平の法則 → 大数の法則',
                        }, //50
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '年末の生存者数 → 年始の生存者数', //p15
                        }, //51
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '正しい',
                        }, //52
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //53
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //54
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '保険契約は対象外 → 保険契約も対象', //p69
                        }, //55
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //56
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //57
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '既払込保険料総額の範囲内 → 解約返戻金の一定範囲内', //p93
                        }, //58
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '配当金が少なくなる → 同様の配当金が支払われる', //p93
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
                            content: '正しい',
                        }, //62
                        {
                            questionTitle: '社会保障制度',
                            content: '正しい',
                        }, //63
                        {
                            questionTitle: '社会保障制度',
                            content: '正しい',
                        }, //64
                        {
                            questionTitle: '社会保障制度',
                            content: '18歳以上65歳未満 → 20歳以上60歳未満<br>老齢・疾病・遺族 → 老齢・障害・遺族', //p113
                        }, //65
                        {
                            questionTitle: '社会保障制度',
                            content: '70歳以上の高齢者(および60歳以上） → 75歳以上の高齢者(および65歳以上）',
                        }, //66
                        {
                            questionTitle: '社会保障制度',
                            content: '70歳以上の第1号被保険者と40歳以上70歳未満の第2号被保険者 → 65歳以上の第1号被保険者と40歳以上65歳未満の第2号被保険者', //p115
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
                        { questionTitle: '契約申込み時の実務', label: 'ア', content: '承諾' }, //68
                        { questionTitle: '契約申込み時の実務', label: 'イ', content: '責任開始期' }, //69
                        { questionTitle: '契約申込み時の実務', label: 'ア', content: '8日' }, //70
                        { questionTitle: '契約申込み時の実務', label: 'ア', content: 'クーリング・オフ' }, //71
                        { questionTitle: '契約申込み時の実務', label: 'ア', content: 'お返しします' }, //72
                        { questionTitle: '剰余金と配当金', label: 'ア', content: '費差益' }, //73
                        { questionTitle: '剰余金と配当金', label: 'イ', content: '割安' }, //74
                        { questionTitle: '剰余金と配当金', label: 'ア', content: '生命保険会社' }, //75
                        { questionTitle: '剰余金と配当金', label: 'ア', content: '一定割合' }, //76
                        { questionTitle: '剰余金と配当金', label: 'ア', content: '相殺' }, //77
                        { questionTitle: '企業向け商品', label: 'ア', content: '1年' }, //78
                        { questionTitle: '企業向け商品', label: 'イ', content: '確定拠出年金' }, //79
                        { questionTitle: '企業向け商品', label: 'ア', content: '企業（団体）' }, //80
                        { questionTitle: '企業向け商品', label: 'ア', content: '財形貯蓄積立保険' }, //81
                        { questionTitle: '企業向け商品', label: 'イ', content: '公的医療保険' }, //82
                    ]"
                />
            </div>
            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
