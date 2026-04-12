<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2024年1月〜6月実施 フォームA";
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
                    questionTitle="保全・アフターサービス手続きと留意点-①"
                    :contents="[
                        '解約返戻金',
                        '有効に',
                        '（自動）振替貸付', // 問1〜3
                    ]"
                    :labels="[
                        'イ', //1
                        'ウ', //2
                        'オ', //3
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="4〜5"
                    questionTitle="保全・アフターサービス手続きと留意点-②"
                    :contents="[
                        '3年',
                        '復活', // 問4〜5
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
                    questionTitle="生命保険会社の仕組み-①"
                    :contents="[
                        '保険業法',
                        '免許', // 問6〜7
                    ]"
                    :labels="[
                        'イ', //6
                        'ウ', //7
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="8〜10"
                    questionTitle="生命保険会社の仕組み-②"
                    :contents="[
                        '基礎利益',
                        '生命保険契約者保護機構',
                        '「相互会社」', // 問8〜10
                    ]"
                    :labels="[
                        'イ', //8
                        'エ', //9
                        'カ', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜13"
                    questionTitle="募集時の正しい説明-①"
                    :contents="[
                        '約款',
                        '内閣総理大臣',
                        '平易', // 問11〜13
                    ]"
                    :labels="[
                        'ア', //11
                        'エ', //12
                        'オ', //13
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="14〜15"
                    questionTitle="募集時の正しい説明-②"
                    :contents="[
                        '契約概要',
                        'いただく前', // 問14〜15
                    ]"
                    :labels="[
                        'ア', //14
                        'ウ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜18"
                    questionTitle="隣接業界-①"
                    :contents="[
                        '終身共済',
                        '厚生労働省',
                        '小口', // 問16〜18
                    ]"
                    :labels="[
                        'イ', //16
                        'エ', //17
                        'オ', //18
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="19〜20"
                    questionTitle="隣接業界-②"
                    :contents="[
                        '1年',
                        '1000万円', // 問19〜20
                    ]"
                    :labels="[
                        'ア', //19
                        'ウ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜22"
                    questionTitle="保険料の税法上の取り扱い-①"
                    :contents="[
                        '課税所得',
                        '所得税', // 問21〜22
                    ]"
                    :labels="[
                        'ア', //21
                        'ウ', //22
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="23〜25"
                    questionTitle="保険料の税法上の取り扱い-②"
                    :contents="[
                        '35000円',
                        '介護医療',
                        '28000円', // 問23〜25
                    ]"
                    :labels="[
                        'イ', //23
                        'ウ', //24
                        'ア', //25
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="26〜30"
                    questionTitle="設計販売の基礎"
                    :contents="[
                        '5',
                        '37',
                        '54',
                        '35',
                        '家族の生活資金＋妻の生活資金', // 問26〜30
                    ]"
                    :labels="[
                        'イ', //26
                        'オ', //27
                        'キ', //28
                        'ウ', //29
                        'ケ', //30
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="31"
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
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約取り扱いの手続き"
                    :contents="[
                        '通称名でもよい → 戸籍等の公的書類記載のものを記入', //p40
                        '正しい',
                        '正しい',
                        '20000円以上 → 50000円以上<br>500円の収入印紙 → 200円の収入印紙', //p43
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
                    questionTitle="保険料の払い込み"
                    :contents="[
                        '正しい',
                        '途中で変更できない → 変更できる', //p51
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="35"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産の運用"
                    :contents="[
                        '正しい',
                        '正しい',
                        '貸付金は含まれない → 含まれる（有価証券・貸付金・不動産が主な対象）', //p35
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="コンプライアンスの重要性"
                    :contents="[
                        '正しい',
                        '個人情報保護法 → 保険業法', //p60
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金・給付金の請求と支払い"
                    :contents="[
                        '他の受取人に対しても支払わない → 残額を支払う', //p104
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
                            questionTitle: '生命保険の仕組み',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '', //p
                        }, //40
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '', //p
                        }, //41
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '企業向け商品',
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '企業向け商品',
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '企業向け商品',
                            content: '', //p
                        }, //45
                        {
                            questionTitle: '企業向け商品',
                            content: '', //p
                        }, //46
                        {
                            questionTitle: '企業向け商品',
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '剰余金と配当金',
                            content: '', //p
                        }, //49
                        {
                            questionTitle: '剰余金と配当金',
                            content: '', //p
                        }, //50
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //51
                        {
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //52
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '正しい',
                        }, //53
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '', //p
                        }, //54
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '', //p
                        }, //55
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '正しい',
                        }, //56
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '正しい',
                        }, //57
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //58
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //59
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //60
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '', //p
                        }, //61
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '', //p
                        }, //62
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //63
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '', //p
                        }, //64
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //65
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '', //p
                        }, //66
                        {
                            questionTitle: '正しい告知の取り扱い',
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
                        { questionTitle: '契約の選択', label: 'イ', content: '環境上' }, //68
                        { questionTitle: '契約の選択', label: 'ア', content: '保険金や特約' }, //69
                        { questionTitle: '契約の選択', label: 'イ', content: '入院給付金日額' }, //70
                        { questionTitle: '契約の選択', label: 'ア', content: '契約内容登録制度' }, //71
                        { questionTitle: '契約の選択', label: 'イ', content: '面接' }, //72
                        { questionTitle: '生命保険の役割', label: 'ア', content: '明治' }, //73
                        { questionTitle: '生命保険の役割', label: 'イ', content: '自己' }, //74
                        { questionTitle: '生命保険の役割', label: 'ア', content: '弔慰金' }, //75
                        { questionTitle: '生命保険の役割', label: 'イ', content: '3倍' }, //76
                        { questionTitle: '生命保険の役割', label: 'ア', content: '約27兆円' }, //77
                        { questionTitle: '私たちの役割と心がまえ', label: 'イ', content: 'アドバイス' }, //78
                        { questionTitle: '私たちの役割と心がまえ', label: 'イ', content: '税務' }, //79
                        { questionTitle: '私たちの役割と心がまえ', label: 'ア', content: 'アフターサービス' }, //80
                        { questionTitle: '私たちの役割と心がまえ', label: 'イ', content: '保険業法' }, //81
                        { questionTitle: '私たちの役割と心がまえ', label: 'イ', content: '私たち自身' }, //82
                    ]"
                />
            </div>
            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
