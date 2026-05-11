<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2022年7月〜12月実施 フォームD";
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
                    questionTitle="私たちの役割と心がまえ-①"
                    :contents="[
                        '税務',
                        'アフターサービス',
                        '継続', // 問1〜3
                    ]"
                    :labels="[
                        'ア', //1
                        'ウ', //2
                        'エ', //3
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="4〜5"
                    questionTitle="私たちの役割と心がまえ-②"
                    :contents="[
                        '保険業法',
                        '行動規範', // 問4〜5
                    ]"
                    :labels="[
                        'ア', //4
                        'エ', //5
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="6〜8"
                    questionTitle="生命保険の役割-①"
                    :contents="[
                        '自己責任',
                        '82',
                        '88', // 問6〜8
                    ]"
                    :labels="[
                        'イ', //6
                        'ウ', //7
                        'オ', //8
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="9〜10"
                    questionTitle="生命保険の役割-②"
                    :contents="[
                        '弔慰金',
                        '27', // 問9〜10
                    ]"
                    :labels="[
                        'ア', //9
                        'ウ', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜13"
                    questionTitle="生命保険の種類-①"
                    :contents="[
                        '定期',
                        '同額',
                        '大きく', // 問11〜13
                    ]"
                    :labels="[
                        'ア', //11
                        'オ', //12
                        'エ', //13
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="14〜15"
                    questionTitle="生命保険の種類-②"
                    :contents="[
                        '特別',
                        'されています', // 問14〜15
                    ]"
                    :labels="[
                        'イ', //14
                        'エ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜18"
                    questionTitle="契約取り扱いの手続き-①"
                    :contents="[
                        '仕事の内容',
                        '被保険者',
                        '保険年齢', // 問16〜18
                    ]"
                    :labels="[
                        'イ', //16
                        'ウ', //17
                        'カ', //18
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="19〜20"
                    questionTitle="契約取り扱いの手続き-②"
                    :contents="[
                        '正確なものを新しく発行',
                        '50000円', // 問19〜20
                    ]"
                    :labels="[
                        'ウ', //19
                        'イ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜23"
                    questionTitle="募集時の正しい説明-①"
                    :contents="[
                        '約款',
                        '内閣総理大臣',
                        '平易', // 問21〜23
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
                    questionTitle="募集時の正しい説明-②"
                    :contents="[
                        '契約概要',
                        '注意喚起情報', // 問24〜25
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
                        '34',
                        '51',
                        '38',
                        '家族の生活資金 + 妻の生活資金', // 問26〜30
                    ]"
                    :labels="[
                        'ア', //26
                        'ウ', //27
                        'ク', //28
                        'カ', //29
                        'ケ', //30
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会保障制度"
                    :contents="[
                        '正しい',
                        '自営業者等、一般の勤労者等ともに → 自営業者等は個別に納める', //p113
                        '被保険者と事業主が1:2で負担 → 被保険者と事業主が折半で負担', //p113
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="保障の見直し"
                    :contents="[
                        '正しい',
                        '正しい',
                        '復活契約 → 追加契約', //p91
                        '転換前契約の加入時 → 転換時', //p92
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="隣接業界"
                    :contents="[
                        '正しい',
                        '3年更新 → 1年更新', //p108
                        '損害保険は取り扱えない → 生命保険も損害保険も取り扱える', //p109
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="34"
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
                    :questionNumber="35"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産の運用"
                    :contents="[
                        '正しい',
                        '正しい',
                        '自社の営業用のものに限られる → 自社の営業用のものと投資用のものがある', //p35
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の募集等に関する法律"
                    :contents="[
                        '正しい',
                        '正しい',
                        '自社の営業用のものに限られる → 自社の営業用のものと投資用のものがある', //p35
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="企業向け商品"
                    :contents="[
                        '正しい',
                        '正しい',
                        '契約者 = 経営者（個人） → 契約者 = 企業（団体）', //p118
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
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: 'お客さまの生活環境、家族構成等に変化がないかどうか等の情報収集を行うことも大切', //p89
                        }, //40
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '福祉販売 → 設計販売', //p136
                        }, //46
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '契約の選択',
                            content: '経済上の危険 → 環境上の危険', //p52
                        }, //48
                        {
                            questionTitle: '契約の選択',
                            content: '申込みの動機・経路についても注意が必要', //p53
                        }, //49
                        {
                            questionTitle: '契約の選択',
                            content: '正しい',
                        }, //50
                        {
                            questionTitle: '契約の選択',
                            content: '正しい',
                        }, //51
                        {
                            questionTitle: '契約の選択',
                            content: '正しい',
                        }, //52
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //53
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '契約成立後に契約確認を行うことはない → 契約確認は契約の成立前に行われる場合と成立後に行われる場合がある', //p85
                        }, //54
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //55
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: 'すでに払い込んだ保険料を払い戻す → 解約返戻金があれば払い戻すが、通常、払い込んだ保険料の合計額より少なくなる', //p86
                        }, //56
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //57
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '既払込保険料総額の一定範囲内 → 解約返戻金の一定範囲内', //p93
                        }, //58
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '元の契約の保険期間を短縮したうえ → 元の契約の保険期間を変えないで', //p94
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
                            content: '全くない場合はない → 全くない場合もある',
                        }, //62
                        {
                            questionTitle: '保険金・給付金の請求と支払い',
                            content: '正しい',
                        }, //63
                        {
                            questionTitle: '保険金・給付金の請求と支払い',
                            content: '他の受取人に対しても死亡保険金を支払われない → 他の受取人に対してはその残額を支払う', //p104
                        }, //64
                        {
                            questionTitle: '保険金・給付金の請求と支払い',
                            content: '正しい',
                        }, //65
                        {
                            questionTitle: '保険金・給付金の請求と支払い',
                            content: '正しい',
                        }, //66
                        {
                            questionTitle: '保険金・給付金の請求と支払い',
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
                        { questionTitle: '生命保険の仕組み', label: 'ア', content: '相互扶助' }, //68
                        { questionTitle: '生命保険の仕組み', label: 'イ', content: '性別' }, //69
                        { questionTitle: '生命保険の仕組み', label: 'イ', content: '大数の法則' }, //70
                        { questionTitle: '生命保険の仕組み', label: 'ア', content: '年始' }, //71
                        { questionTitle: '生命保険の仕組み', label: 'ア', content: '保険契約者' }, //72
                        { questionTitle: '剰余金と配当金', label: 'ア', content: '費差益' }, //73
                        { questionTitle: '剰余金と配当金', label: 'イ', content: '割安' }, //74
                        { questionTitle: '剰余金と配当金', label: 'イ', content: '支払時期' }, //75
                        { questionTitle: '剰余金と配当金', label: 'ア', content: '積立（据置）方法' }, //76
                        { questionTitle: '剰余金と配当金', label: 'ア', content: '生命保険会社' }, //77
                        { questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）', label: 'イ', content: '贈与税' }, //78
                        { questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）', label: 'ア', content: '一時所得' }, //79
                        { questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）', label: 'ア', content: '1/2' }, //80
                        { questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）', label: 'ア', content: '500万円' }, //81
                        { questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）', label: 'イ', content: '110万円' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
