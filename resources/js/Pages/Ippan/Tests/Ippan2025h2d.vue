<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2025年7月〜12月実施 フォームD";
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
                        '死差益',
                        '予定事業費率', // 問6〜7
                    ]"
                    :labels="[
                        'ア', //6
                        'エ', //7
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="8〜10"
                    questionTitle="契約の選択-②"
                    :contents="[
                        '契約者',
                        '保険業法',
                        '複利', // 問9〜10
                    ]"
                    :labels="[
                        'ウ', //8
                        'オ', //9
                        'イ', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜13"
                    questionTitle="生命保険の募集等に関する法律-①"
                    :contents="[
                        '生活',
                        '金融サービスの提供及び利用環境の整備等に関する法律',
                        '重要事項', // 問11〜13
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
                    questionTitle="生命保険の募集等に関する法律-②"
                    :contents="[
                        '個人情報',
                        '保険法', // 問14〜15
                    ]"
                    :labels="[
                        'イ', //14
                        'エ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜17"
                    questionTitle="企業向け商品-①"
                    :contents="[
                        '1年',
                        '終身', // 問16〜17
                    ]"
                    :labels="[
                        'ア', //16
                        'エ', //17
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="19〜20"
                    questionTitle="企業向け商品-②"
                    :contents="[
                        '損失補てん',
                        '国',
                        '公的医療', // 問18〜20
                    ]"
                    :labels="[
                        'イ', //18
                        'エ', //19
                        'カ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜23"
                    questionTitle="保険金・給付金の税法上の取り扱い（一時金で受け取った場合）-①"
                    :contents="[
                        '保険金受取人',
                        '一時所得',
                        '500万円', // 問21〜23
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
                    questionTitle="保険金・給付金の税法上の取り扱い（一時金で受け取った場合）-②"
                    :contents="[
                        '被保険者',
                        '非課税', // 問24〜25
                    ]"
                    :labels="[
                        'イ', //24
                        'ウ', //25
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="26〜30"
                    questionTitle="保険料の仕組み（収支相等の原則）"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問26〜30
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
                    questionTitle="生命保険会社の仕組み"
                    :contents="[
                        '正しい',
                        '保険事業と銀行業 → 保険事業だけ', //p32
                        '株式会社 → 相互会社', //p32
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="照会・苦情時の対応"
                    :contents="[
                        '正しい',
                        '所属会社の専門の担当者を頼りにせず → 判断のつかない事項は専門の担当者に確認', //p106
                        '正しい',
                        '契約者に代わって行うことができる → 行うことができない（委任状があれば可能）', //p107
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
                    questionTitle="契約の選択"
                    :contents="[
                        '解約 → 加入', //p53
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="コンプライアンスの重要性"
                    :contents="[
                        '正しい',
                        '正しい',
                        '預金保険法 → 保険業法', //p60
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="募集時の正しい説明"
                    :contents="[
                        '全保険種類共通の約款 → 保険種類ごとの約款', //p78
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
                            questionTitle: '生命保険の役割',
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '生命保険の役割',
                            content: '正しい',
                        }, //49
                        {
                            questionTitle: '生命保険の役割',
                            content: '平均寿命 → 平均余命',
                        }, //50 p4
                        {
                            questionTitle: '生命保険の役割',
                            content: '正しい',
                        }, //51
                        {
                            questionTitle: '生命保険の役割',
                            content: '正しい',
                        }, //52
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //53
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '契約成立前に行う → 契約成立前に行う場合と契約成立後に行う場合がある', //p85
                        }, //54
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '1年 → 2年', //p86-87
                        }, //55
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //56
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '保険料は返還される → 返還されない', //p87
                        }, //57
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '既払込保険料総額の範囲内 → 解約返戻金の一定範囲内',
                        }, //58 p93
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '正しい',
                        }, //59
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '正しい',
                        }, //60
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '変更後も継続 → 変更後に消滅',
                        }, //61 p95
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '全くない場合はない → 全くない場合もある',
                        }, //62 p99
                        {
                            questionTitle: '隣接業界',
                            content: '正しい',
                        }, //63
                        {
                            questionTitle: '隣接業界',
                            content: '総務省 → 厚生労働省', //p108
                        }, //64
                        {
                            questionTitle: '隣接業界',
                            content: '損害保険は取り扱えない → 生命保険も損害保険も取り扱える', //p109
                        }, //65
                        {
                            questionTitle: '隣接業界',
                            content: '火災保険・地震保険：人に関する保険 → 物に関する保険<br>個人賠償責任保険：物に関する保険 → 人に関する保険', //p110
                        }, //66
                        {
                            questionTitle: '隣接業界',
                            content: '3年以内 → 1年以内', //p109
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
                        { questionTitle: '生命保険の仕組み', label: 'ア', content: '相互扶助' }, //73
                        { questionTitle: '生命保険の仕組み', label: 'イ', content: '大数の法則' }, //74
                        { questionTitle: '生命保険の仕組み', label: 'ア', content: '年始' }, //75
                        { questionTitle: '生命保険の仕組み', label: 'イ', content: '保険契約者' }, //76
                        { questionTitle: '生命保険の仕組み', label: 'イ', content: '契約者' }, //77
                        { questionTitle: '社会保障制度', label: 'イ', content: '生活保護法' }, //78
                        { questionTitle: '社会保障制度', label: 'ア', content: '全国民' }, //79
                        { questionTitle: '社会保障制度', label: 'イ', content: '20歳' }, //80
                        { questionTitle: '社会保障制度', label: 'ア', content: '障害' }, //81
                        { questionTitle: '社会保障制度', label: 'イ', content: '除く' }, //82
                    ]"
                />
            </div>
            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
