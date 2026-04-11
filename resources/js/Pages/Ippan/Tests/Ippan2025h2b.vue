<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2025年7月〜12月実施 フォームB";
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
                    questionTitle="生命保険の仕組み-①"
                    :contents="[
                        '相互扶助',
                        '準備財産', // 問6〜7
                    ]"
                    :labels="[
                        'ア', //6
                        'ウ', //7
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="8〜10"
                    questionTitle="生命保険の仕組み-②"
                    :contents="[
                        '大数の法則',
                        '生命表',
                        '死亡率', // 問9〜10
                    ]"
                    :labels="[
                        'イ', //8
                        'ウ', //9
                        'カ', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜13"
                    questionTitle="生命保険会社の仕組み-①"
                    :contents="[
                        '保険業法',
                        '免許',
                        '基礎利率', // 問11〜13
                    ]"
                    :labels="[
                        'イ', //11
                        'ウ', //12
                        'オ', //13
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="14〜15"
                    questionTitle="生命保険会社の仕組み-②"
                    :contents="[
                        '生命保険契約者保護機構',
                        '相互会社', // 問14〜15
                    ]"
                    :labels="[
                        'ア', //14
                        'エ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜17"
                    questionTitle="保全・アフターサービス手続きと留意点-①"
                    :contents="[
                        '解約返戻金',
                        '（自動）振替貸付', // 問16〜17
                    ]"
                    :labels="[
                        'イ', //16
                        'ウ', //17
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="18〜20"
                    questionTitle="保全・アフターサービス手続きと留意点-②"
                    :contents="[
                        '消滅します',
                        '減額',
                        '復活', // 問19〜20
                    ]"
                    :labels="[
                        'ア', //18
                        'エ', //19
                        'オ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜23"
                    questionTitle="隣接業界-①"
                    :contents="[
                        '終身共済',
                        '厚生労働省',
                        '小口', // 問21〜23
                    ]"
                    :labels="[
                        'イ', //21
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
                        '1000万円', // 問24〜25
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
                    questionTitle="設計販売の基礎"
                    :contents="[
                        '5',
                        '35',
                        '52',
                        '36',
                        '家族の生活資金+妻の生活資金', // 問26〜30
                    ]"
                    :labels="[
                        'ア', //26
                        'ウ', //27
                        'キ', //28
                        'エ', //29
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
                    questionTitle="生命保険の募集等に関する法律"
                    :contents="[
                        '厚生労働大臣 → 内閣総理大臣', //p63
                        '正しい',
                        '正しい',
                        '司法処分を受けることはない → 受けることがある', //p68
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会保障制度"
                    :contents="[
                        '雇用保険法 → 生活保護法', //p112
                        '正しい',
                        '正しい',
                        '4割 → 1割で所定水準以上の所得者は2割（そのうち特に所得の高い者は3割）', //p115
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
                        '大正時代 → 明治時代', //p1
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金・給付金の請求と支払い"
                    :contents="[
                        '正しい',
                        '他の受取人に対しても支払わない → 残額を支払う', //p104
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金・給付金の税法上の取り扱い（一時金で受け取った場合）"
                    :contents="[
                        '正しい',
                        '正しい',
                        '60万円 → 110万円', //p127
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
                            questionTitle: '保険料の仕組み',
                            content: '公平性の原則 → 収支相当の原則', //p23
                        }, //48
                        {
                            questionTitle: '保険料の仕組み',
                            content: '正しい',
                        }, //49
                        {
                            questionTitle: '保険料の仕組み',
                            content: '付加保険料 → 純保険料', //p24
                        }, //50
                        {
                            questionTitle: '保険料の仕組み',
                            content: '正しい',
                        }, //51
                        {
                            questionTitle: '保険料の仕組み',
                            content: '正しい',
                        }, //52
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //53
                        {
                            questionTitle: '剰余金と配当金',
                            content: '保険料は割高 → 保険料は割安', //p27
                        }, //54
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //55
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //56
                        {
                            questionTitle: '剰余金と配当金',
                            content: '保険金買増方法 → 積立（据置）方法', //p29
                        }, //57
                        {
                            questionTitle: '契約の選択',
                            content: '経済上の危険 → 環境上の危険', //p53
                        }, //58
                        {
                            questionTitle: '契約の選択',
                            content: '正しい',
                        }, //59
                        {
                            questionTitle: '契約の選択',
                            content: '正しい',
                        }, //60
                        {
                            questionTitle: '契約の選択',
                            content: '正しい',
                        }, //61
                        {
                            questionTitle: '契約の選択',
                            content: '自由条件付契約 → 特別条件付契約', //p59
                        }, //62
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '保険金受取人 → 契約者', //p78
                        }, //63
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '正しい',
                        }, //64
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '正しい',
                        }, //65
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '保険設計書 → 意向確認書面', //p81
                        }, //66
                        {
                            questionTitle: '募集時の正しい説明',
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
                        { questionTitle: '契約申込み時の実務', label: 'ア', content: '承諾' }, //68
                        { questionTitle: '契約申込み時の実務', label: 'イ', content: '責任開始期' }, //69
                        { questionTitle: '契約申込み時の実務', label: 'ア', content: '8日' }, //70
                        { questionTitle: '契約申込み時の実務', label: 'ア', content: 'クーリング・オフ' }, //71
                        { questionTitle: '契約申込み時の実務', label: 'ア', content: 'お返しします' }, //72
                        { questionTitle: '正しい告知の取り扱い', label: 'ア', content: '契約確認' }, //73
                        { questionTitle: '正しい告知の取り扱い', label: 'イ', content: '保険証券' }, //74
                        { questionTitle: '正しい告知の取り扱い', label: 'ア', content: '解約返戻金があれば' }, //75
                        { questionTitle: '正しい告知の取り扱い', label: 'イ', content: '2年' }, //76
                        { questionTitle: '正しい告知の取り扱い', label: 'ア', content: '1ヶ月' }, //77
                        { questionTitle: '相続の法律', label: 'イ', content: '3/4' }, //78
                        { questionTitle: '相続の法律', label: 'ア', content: '放棄' }, //79
                        { questionTitle: '相続の法律', label: 'イ', content: '単純承認' }, //80
                        { questionTitle: '相続の法律', label: 'イ', content: '限定承認' }, //81
                        { questionTitle: '相続の法律', label: 'ア', content: 'みなし相続財産' }, //82
                    ]"
                />
            </div>
            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
