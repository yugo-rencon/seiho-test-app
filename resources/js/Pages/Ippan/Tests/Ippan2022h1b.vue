<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2022年1月〜6月実施 フォームB";
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
                    questionRange="1〜2"
                    questionTitle="企業向け商品-①"
                    :contents="[
                        '終身',
                        '確定給付型の企業年金', // 問1〜2
                    ]"
                    :labels="[
                        'ウ', //1
                        'ア', //2
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="3〜5"
                    questionTitle="企業向け商品-②"
                    :contents="[
                        '損失補てん',
                        '国',
                        '健康保険', // 問3〜5
                    ]"
                    :labels="[
                        'イ', //3
                        'カ', //4
                        'ウ', //5
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="6〜8"
                    questionTitle="生命保険の種類-①"
                    :contents="[
                        '定期',
                        '終身',
                        '生存', // 問6〜8
                    ]"
                    :labels="[
                        'ア', //6
                        'エ', //7
                        'オ', //8
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="9〜10"
                    questionTitle="生命保険の種類-②"
                    :contents="[
                        '特別',
                        'されています', // 問9〜10
                    ]"
                    :labels="[
                        'ウ', //9
                        'ア', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜12"
                    questionTitle="剰余金と配当金-①"
                    :contents="[
                        '利差益',
                        '予定利率', // 問11〜12
                    ]"
                    :labels="[
                        'ア', //11
                        'ウ', //12
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="13〜15"
                    questionTitle="剰余金と配当金-②"
                    :contents="[
                        '契約者',
                        '支払時期',
                        '生命保険会社', // 問13〜15
                    ]"
                    :labels="[
                        'ア', //13
                        'ウ', //14
                        'オ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜18"
                    questionTitle="生命保険の募集等に関する法律-①"
                    :contents="[
                        '契約者',
                        '内閣総理大臣',
                        '告知義務違反', // 問16〜18
                    ]"
                    :labels="[
                        'ア', //16
                        'ウ', //17
                        'カ', //18
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="19〜20"
                    questionTitle="生命保険の募集等に関する法律-②"
                    :contents="[
                        '1年',
                        '5年', // 問19〜20
                    ]"
                    :labels="[
                        'ア', //19
                        'エ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜23"
                    questionTitle="相続の法律-①"
                    :contents="[
                        '相続の放棄',
                        '単純',
                        '限定', // 問21〜23
                    ]"
                    :labels="[
                        'ア', //21
                        'ウ', //22
                        'オ', //23
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="24〜25"
                    questionTitle="相続の法律-②"
                    :contents="[
                        '家庭裁判所',
                        'みなし', // 問24〜25
                    ]"
                    :labels="[
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
                        '2',
                        '3000',
                        '1000',
                        '3',
                        '3000', // 問26〜30
                    ]"
                    :labels="[
                        'ア', //26
                        'ケ', //27
                        'カ', //28
                        'イ', //29
                        'ケ', //30
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産の運用"
                    :contents="[
                        '積極的な資産運用をしなければならず、安全性に配慮する必要はない → 効率的で安定した資産運用をしなければならない', //p34
                        '正しい',
                        '正しい',
                        '資産運用の対象に貸付金も含まれる', //p35
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の役割"
                    :contents="[
                        '男性・女性の平均寿命はともに90歳を超えている → 男性は約81歳、女性は約87歳（令和6年簡易生命表）', //p3
                        '平均寿命 → 平均余命', //p4
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の税法上の取り扱い"
                    :contents="[
                        '事業税 → 所得税', //p120
                        '正しい',
                        '正しい',
                        '35000円 → 28000円', //p124
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="34"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の払い込み"
                    :contents="[
                        '払い込む保険料の割り引きはない → 保険料は生命保険会社の定める利率で割り引かれる', //p50
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="35"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の仕組み"
                    :contents="[
                        '正しい',
                        '正しい',
                        '年末の生存者数 → 年始の生存者数', //p15
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社の仕組み"
                    :contents="[
                        '正しい',
                        '正しい',
                        '生命保険以外の事業を自由に営むことができる → 他の事業を営むことが制限されている', //p33
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="照会・苦情時の対応"
                    :contents="[
                        '正しい',
                        '正しい',
                        '契約者に代わって行うことができる → 行うことができない（委任状があれば可能）', //p107
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
                            questionTitle: '契約申込み時の実務',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '第1回保険料充当金払い込みのあった日 → 診査（告知）のあった日', //p46
                        }, //39
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '12日以内 → 8日以内', //p47
                        }, //40
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '隣接業界',
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '隣接業界',
                            content: '経済産業省 → 厚生労働省', //p108
                        }, //44
                        {
                            questionTitle: '隣接業界',
                            content: '3年以内 → 1年以内', //p109
                        }, //45
                        {
                            questionTitle: '隣接業界',
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '隣接業界',
                            content: '養老年金タイプ → 定期年金タイプ', //p110
                        }, //47
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '通称名でもよい → 戸籍等の公的書類記載のものを記入', //p40
                        }, //48
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '満年齢を使用するのではなく、保険年齢を使用する → 満年齢を使用する生命保険会社と保険年齢を使用する生命保険会社がある', //p41
                        }, //49
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '保険金受取人 → 契約者', //p51
                        }, //50
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                        }, //51
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '40000円以上 → 50000円以上<br>100円の収入印紙 → 200円の収入印紙', //p43
                        }, //52
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '正しい',
                        }, //53
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '全保険種類共通の約款 → 保険種類ごとの約款', //p78
                        }, //54
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '正しい',
                        }, //55
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '正しい',
                        }, //56
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '正しい',
                        }, //57
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //58
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '契約成立後に契約確認を行うことはない → 契約確認は契約の成立前に行われる場合と成立後に行われる場合がある', //p85
                        }, //59
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //60
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: 'すでに払い込んだ保険料を払い戻す → 解約返戻金があれば払い戻すが、通常、払い込んだ保険料の合計額より少なくなる', //p86
                        }, //61
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //62
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
                        }, //63
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
                        }, //64
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
                        }, //65
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '保険設計書 ↔︎ 生活設計書', //p136
                        }, //66
                        {
                            questionTitle: 'お客さまニーズへの対応',
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
                        { questionTitle: '保険金の税法上の取り扱い（一時金で受け取った場合）', label: 'ア', content: '贈与税' }, //68
                        { questionTitle: '保険金の税法上の取り扱い（一時金で受け取った場合）', label: 'ア', content: '保険金受取人' }, //69
                        { questionTitle: '保険金の税法上の取り扱い（一時金で受け取った場合）', label: 'ア', content: '50万円' }, //70
                        { questionTitle: '保険金の税法上の取り扱い（一時金で受け取った場合）', label: 'イ', content: '500万円' }, //71
                        { questionTitle: '保険金の税法上の取り扱い（一時金で受け取った場合）', label: 'イ', content: '基礎控除額' }, //72
                        { questionTitle: '保全・アフターサービス手続きと留意点', label: 'イ', content: '解約返戻金' }, //73
                        { questionTitle: '保全・アフターサービス手続きと留意点', label: 'ア', content: '同様の' }, //74
                        { questionTitle: '保全・アフターサービス手続きと留意点', label: 'イ', content: '生命保険会社' }, //75
                        { questionTitle: '保全・アフターサービス手続きと留意点', label: 'ア', content: '消滅' }, //76
                        { questionTitle: '保全・アフターサービス手続きと留意点', label: 'ア', content: 'あれば払い戻します' }, //77
                        { questionTitle: '適切な保険金・給付金の支払い', label: 'ア', content: '注意喚起情報' }, //78
                        { questionTitle: '適切な保険金・給付金の支払い', label: 'ア', content: '連絡先' }, //79
                        { questionTitle: '適切な保険金・給付金の支払い', label: 'イ', content: '生命保険会社' }, //80
                        { questionTitle: '適切な保険金・給付金の支払い', label: 'ア', content: '診断書' }, //81
                        { questionTitle: '適切な保険金・給付金の支払い', label: 'イ', content: '個人情報' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
