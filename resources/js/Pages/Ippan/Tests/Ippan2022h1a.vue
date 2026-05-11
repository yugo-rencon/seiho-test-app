<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2022年1月〜6月実施 フォームA";
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
                    questionTitle="私たちの役割と心がまえ-①"
                    :contents="[
                        '税務',
                        'アフターサービス',
                        '継続', // 問6〜8
                    ]"
                    :labels="[
                        'ア', //6
                        'ウ', //7
                        'カ', //8
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="9〜10"
                    questionTitle="私たちの役割と心がまえ-②"
                    :contents="[
                        '保険業法',
                        '行動規範', // 問9〜10
                    ]"
                    :labels="[
                        'ア', //9
                        'ウ', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜12"
                    questionTitle="契約取り扱いの手続き-①"
                    :contents="[
                        '被保険者',
                        '満年齢', // 問11〜12
                    ]"
                    :labels="[
                        'イ', //11
                        'エ', //12
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="13〜15"
                    questionTitle="契約取り扱いの手続き-②"
                    :contents="[
                        '正確なものを新しく発行',
                        '50000円',
                        '生命保険面接士', // 問13〜15
                    ]"
                    :labels="[
                        'ア', //13
                        'エ', //14
                        'オ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜17"
                    questionTitle="生命保険の募集等に関する法律-①"
                    :contents="[
                        '内閣総理大臣',
                        '媒介', // 問16〜17
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
                    questionTitle="生命保険の募集等に関する法律-②"
                    :contents="[
                        '告知義務違反',
                        '特別の利益の提供',
                        '行政処分', // 問18〜20
                    ]"
                    :labels="[
                        'エ', //18
                        'オ', //19
                        'イ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜22"
                    questionTitle="保険金・給付金の請求と支払い-①"
                    :contents="[
                        '注意喚起情報',
                        '手続き窓口', // 問21〜22
                    ]"
                    :labels="[
                        'イ', //21
                        'エ', //22
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="23〜25"
                    questionTitle="保険金・給付金の請求と支払い-②"
                    :contents="[
                        '生命保険会社',
                        '診断書',
                        'センシティブ', // 問23〜25
                    ]"
                    :labels="[
                        'イ', //23
                        'ウ', //24
                        'カ', //25
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
                    questionTitle="正しい告知の取り扱い"
                    :contents="[
                        '正しい',
                        'すでに払い込んだ保険料を払い戻す → 解約返戻金があれば払い戻すが、通常、払い込んだ保険料の合計額より少なくなる', //p86
                        '正しい',
                        'お客さまに有利な説明であり問題ない → 重大な法令違反に該当する', //p87
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険料控除"
                    :contents="[
                        '正しい',
                        '生命保険料控除の対象 → 生命保険料控除の対象から除かれる', //p122
                        '4月1日から翌年3月31日まで → 1月1日から12月31日まで', //p122
                        '正しい',
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
                    questionTitle="契約の選択"
                    :contents="[
                        '申込みの動機・経路についても注意が必要', //p53
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="保全・アフターサービスの重要性"
                    :contents="[
                        'お客さまの生活環境、家族構成等に変化がないかどうか等の情報収集を行うことも大切', //p89
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="照会・苦情時の対応"
                    :contents="[
                        '正しい',
                        '契約者に代わって行うことができる → 行うことができない（委任状があれば可能）', //p107
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
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '剰余金と配当金',
                            content: '保険料は割高 → 保険料は割安', //p27
                        }, //49
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //50
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //51
                        {
                            questionTitle: '剰余金と配当金',
                            content: '保険金買増方法 → 積立（据置）方法', //p29
                        }, //52
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '正しい',
                        }, //53
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '正しい',
                        }, //54
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '保険事業と銀行業だけ → 保険事業だけ', //p32
                        }, //55
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '正しい',
                        }, //56
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '兼営のみ認められている → 兼営は禁止されている', //p33
                        }, //57
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '生命保険会社と保険金受取人との間 → 生命保険会社と契約者との間', //p78
                        }, //58
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '正しい',
                        }, //59
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '正しい',
                        }, //60
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '保険設計書 → 意向確認書面', //p81
                        }, //61
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '正しい',
                        }, //62
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '満期保険金の範囲内 → 解約返戻金の範囲内', //p93
                        }, //63
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '貸付を受けた契約では貸付を受けていない契約より配当金は少なくなる → 貸付を受けた契約でも貸付を受けていない契約と同様の配当金が支払われる', //p93
                        }, //64
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '正しい',
                        }, //65
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '正しい',
                        }, //66
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
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
                        { questionTitle: '生命保険の仕組み', label: 'ア', content: '相互扶助' }, //73
                        { questionTitle: '生命保険の仕組み', label: 'イ', content: '性別' }, //74
                        { questionTitle: '生命保険の仕組み', label: 'ア', content: '大数の法則' }, //75
                        { questionTitle: '生命保険の仕組み', label: 'ア', content: '年始' }, //76
                        { questionTitle: '生命保険の仕組み', label: 'ア', content: '被保険者' }, //77
                        { questionTitle: 'お客さまニーズへの対応', label: 'イ', content: 'ライフサイクル' }, //78
                        { questionTitle: 'お客さまニーズへの対応', label: 'ア', content: '生活' }, //79
                        { questionTitle: 'お客さまニーズへの対応', label: 'ア', content: '40歳' }, //80
                        { questionTitle: 'お客さまニーズへの対応', label: 'イ', content: '計画的' }, //81
                        { questionTitle: 'お客さまニーズへの対応', label: 'イ', content: '生活設計書' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
