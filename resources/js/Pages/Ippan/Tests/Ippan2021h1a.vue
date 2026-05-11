<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2021年1月〜6月実施 フォームA";
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
                    questionTitle="保険金・給付金の請求と支払い-①"
                    :contents="[
                        '公序良俗',
                        '約款', // 問1〜2
                    ]"
                    :labels="[
                        'イ', //1
                        'エ', //2
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="3〜5"
                    questionTitle="保険金・給付金の請求と支払い-②"
                    :contents="[
                        '復活日',
                        '故意',
                        '戦争その他の変乱', // 問3〜5
                    ]"
                    :labels="[
                        'エ', //3
                        'オ', //4
                        'ア', //5
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="6〜7"
                    questionTitle="剰余金と配当金-①"
                    :contents="[
                        '死差益',
                        '予定死亡率', // 問6〜7
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
                    questionTitle="剰余金と配当金-②"
                    :contents="[
                        '契約者',
                        '生命保険会社',
                        '複利', // 問8〜10
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
                    questionRange="11〜12"
                    questionTitle="生命保険会社の仕組み-①"
                    :contents="[
                        '保険業法',
                        '免許', // 問11〜12
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
                    questionTitle="生命保険会社の仕組み-②"
                    :contents="[
                        '基礎利益',
                        '生命保険契約者保護機構',
                        '禁止', // 問13〜15
                    ]"
                    :labels="[
                        'イ', //13
                        'エ', //14
                        'カ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜17"
                    questionTitle="募集時の正しい説明-①"
                    :contents="[
                        '約款',
                        '内閣総理大臣', // 問16〜17
                    ]"
                    :labels="[
                        'ア', //16
                        'エ', //17
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="18〜20"
                    questionTitle="募集時の正しい説明-②"
                    :contents="[
                        '契約概要',
                        '注意喚起情報',
                        '適合性の原則', // 問18〜20
                    ]"
                    :labels="[
                        'ウ', //18
                        'オ', //19
                        'ア', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜22"
                    questionTitle="企業向け商品-①"
                    :contents="[
                        '1年',
                        '終身', // 問21〜22
                    ]"
                    :labels="[
                        'イ', //21
                        'ア', //22
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="23〜25"
                    questionTitle="企業向け商品-②"
                    :contents="[
                        '損失補てん',
                        '国',
                        '公的医療', // 問23〜25
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
                    questionTitle="設計販売の基礎"
                    :contents="[
                        '4',
                        '37',
                        '55',
                        '34',
                        '家族の生活資金 + 妻の生活資金', // 問26〜30
                    ]"
                    :labels="[
                        'ア', //26
                        'オ', //27
                        'ク', //28
                        'ウ', //29
                        'ケ', //30
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    questionTitle="保障の見直し"
                    :contents="[
                        '既払込保険料相当額や配当金など（転換価格） → 責任準備金や配当金など（転換価格）', //p91
                        '正しい',
                        '正しい',
                        '契約者、保障内容、保険金額などが全く新しく切り替わる → 保障内容、保険金額、保険料などが全く新しく切り替わる', //p92
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の仕組み"
                    :contents="[
                        '公平性の原則 → 収支相当の原則', //p23
                        '正しい',
                        '正しい',
                        '予定利率 → 予定事業費率', //p24
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
                    questionTitle="コンプライアンスの重要性"
                    :contents="[
                        '社会的規範や企業倫理を除き、法令や社内ルールだけを守るという意味で用いられる → 法令や社内ルールだけでなく、社会的規範や企業倫理を守るということも含めて用いられる', //p60
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="35"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の種類"
                    :contents="[
                        '養老保険 → 年金保険', //p18
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の募集等に関する法律"
                    :contents="[
                        '保険契約は対象に含まれない → 保険契約も対象に含まれる', //p69
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="お客さまニーズへの対応"
                    :contents="[
                        '正しい',
                        '正しい',
                        '福祉販売 → 設計販売', //p136
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
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '保険料の払い込み',
                            content: '保険業法の定める利率 → 生命保険会社の定める利率', //p50
                        }, //41
                        {
                            questionTitle: '保険料の払い込み',
                            content: '途中で変更することはできない → 途中で変更することができる', //p51
                        }, //42
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: 'お客さまの生活環境、家族構成等に変化がないかどうか等の情報収集を行うことも大切', //p89
                        }, //45
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '資産の運用',
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '資産の運用',
                            content: '正しい',
                        }, //49
                        {
                            questionTitle: '資産の運用',
                            content: '短期の資金 → 長期の資金', //p35
                        }, //50
                        {
                            questionTitle: '資産の運用',
                            content: '正しい',
                        }, //51
                        {
                            questionTitle: '資産の運用',
                            content: '自社の営業用のものに限られる → 自社の営業用のものと投資用のものがある', //p35
                        }, //52
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '正しい',
                        }, //53
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '第1回保険料充当金払い込みのあった日 → 診査（告知）のあった日', //p46
                        }, //54
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '12日以内 → 8日以内', //p47
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
                            questionTitle: '契約の選択',
                            content: '経済上の危険 → 環境上の危険', //p52
                        }, //58
                        {
                            questionTitle: '契約の選択',
                            content: '正しい',
                        }, //59
                        {
                            questionTitle: '契約の選択',
                            content: '健康情報登録制度 → 契約内容登録制度や契約内容照会制度', //p53
                        }, //60
                        {
                            questionTitle: '契約の選択',
                            content: '正しい',
                        }, //61
                        {
                            questionTitle: '契約の選択',
                            content: '正しい',
                        }, //62
                        {
                            questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）',
                            content: '相続税 → 贈与税', //p126
                        }, //63
                        {
                            questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）',
                            content: '正しい',
                        }, //64
                        {
                            questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）',
                            content: '正しい',
                        }, //65
                        {
                            questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）',
                            content: '正しい',
                        }, //66
                        {
                            questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）',
                            content: '課税対象 → 非課税', //p128
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
                        { questionTitle: '相続の法律', label: 'ア', content: '放棄' }, //68
                        { questionTitle: '相続の法律', label: 'イ', content: '限定承認' }, //69
                        { questionTitle: '相続の法律', label: 'イ', content: '単純承認' }, //70
                        { questionTitle: '相続の法律', label: 'ア', content: 'みなし相続財産' }, //71
                        { questionTitle: '相続の法律', label: 'イ', content: '3/4' }, //72
                        { questionTitle: '生命保険の役割', label: 'ア', content: '明治時代' }, //73
                        { questionTitle: '生命保険の役割', label: 'イ', content: '自己' }, //74
                        { questionTitle: '生命保険の役割', label: 'イ', content: '平均余命' }, //75
                        { questionTitle: '生命保険の役割', label: 'ア', content: '弔慰金制度' }, //76
                        { questionTitle: '生命保険の役割', label: 'イ', content: '3倍以上' }, //77
                        { questionTitle: '保全・アフターサービス手続きと留意点', label: 'イ', content: '解約返戻金' }, //78
                        { questionTitle: '保全・アフターサービス手続きと留意点', label: 'ア', content: '同様の' }, //79
                        { questionTitle: '保全・アフターサービス手続きと留意点', label: 'イ', content: '生命保険会社' }, //80
                        { questionTitle: '保全・アフターサービス手続きと留意点', label: 'ア', content: '消滅' }, //81
                        { questionTitle: '保全・アフターサービス手続きと留意点', label: 'イ', content: 'あれば払い戻されます' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
