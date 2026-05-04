<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2023年7月〜12月実施 フォームE";
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
                        '農林水産省',
                        '終身共済',
                        '1年', // 問1〜3
                    ]"
                    :labels="[
                        'ア', //1
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
                        '定期年金', // 問4〜5
                    ]"
                    :labels="[
                        'ア', //4
                        'ウ', //5
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="6〜8"
                    questionTitle="生命保険の役割-①"
                    :contents="[
                        '自己責任',
                        '81',
                        '88', // 問6〜8
                    ]"
                    :labels="[
                        'イ', //6
                        'エ', //7
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
                    questionTitle="私たちの役割と心がまえ-①"
                    :contents="[
                        '税務',
                        'アフターサービス',
                        '継続', // 問11〜13
                    ]"
                    :labels="[
                        'ア', //11
                        'ウ', //12
                        'オ', //13
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="14〜15"
                    questionTitle="私たちの役割と心がまえ-②"
                    :contents="[
                        '保険業法',
                        '行動規範', // 問14〜15
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
                        '「契約概要」',
                        'いただく前に',
                        '自己責任', // 問18〜20
                    ]"
                    :labels="[
                        'ア', //18
                        'エ', //19
                        'カ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜22"
                    questionTitle="企業向け商品-①"
                    :contents="[
                        '終身',
                        '「確定給付型の企業年金」', // 問21〜22
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
                    questionTitle="企業向け商品-②"
                    :contents="[
                        '損失補てん',
                        '国',
                        '健康保険', // 問23〜25
                    ]"
                    :labels="[
                        'イ', //23
                        'エ', //24
                        'オ', //25
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
                        '家族の生活資金＋妻の生活資金', // 問26〜30
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
                    questionTitle="契約の選択"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の払い込み"
                    :contents="[
                        '正しい',
                        '保険金受取人の指定した口座 → 契約者の指定した口座', //p50
                        '途中で変更することはできない → 途中で変更することができる', //p51
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="保障の見直し"
                    :contents="[
                        '既払込保険料相当額（転換価格） → 責任準備金や配当金など（転換価格）', //p91
                        '正しい',
                        '正しい',
                        '契約者、保険金額などが全く新しく切り替わる → 保障内容、保険金額、保険料などが全く新しく切り替わる<br>保険金受取人に説明 → 契約者に説明', //p92
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="34"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約取り扱いの手続き"
                    :contents="[
                        '平均年齢 → 保険年齢', //p41
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
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="コンプライアンスの重要性"
                    :contents="[
                        '社会的規範や企業倫理を除いた、法令や社内ルールだけを守るという意味で用いられる → 法令や社内ルールだけでなく、社会的規範や企業倫理を守るということも含めて用いられる', //p60
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="保全・アフターサービスの重要性"
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
                            questionTitle: '生命保険会社の仕組み',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '保険事業と銀行業だけ → 保険事業だけ', //p32
                        }, //41
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '生命保険以外の事業を自由に営むことができる → 他の事業を営むことが制限されている', //p33
                        }, //42
                        {
                            questionTitle: '社会保障制度',
                            content: '雇用保険法 → 生活保護法', //p112
                        }, //43
                        {
                            questionTitle: '社会保障制度',
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '社会保障制度',
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '社会保障制度',
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '社会保障制度',
                            content: '60歳以上の第1号被保険者と35歳以上60歳未満の第2号被保険者 → 65歳以上の第1号被保険者と40歳以上65歳未満の第2号被保険者', //p115
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
                            content: '', //p
                        }, //50
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '', //p
                        }, //51
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '正しい',
                        }, //52
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '賛同 → 承諾', //p45
                        }, //53
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '正しい',
                        }, //54
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '正しい',
                        }, //55
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '12日以内 → 8日以内', //p47
                        }, //56
                        {
                            questionTitle: '契約申込み時の実務',
                            content: '解約返戻金相当額 → 既払込金額', //p47
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
                            content: '保険契約は対象外 → 保険契約も対象に含まれる', //p69
                        }, //60
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //61
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //62
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '既払込保険料総額の範囲内 → 解約返戻金の範囲内', //p93
                        }, //63
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '正しい',
                        }, //64
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '正しい',
                        }, //65
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '元の契約の各種特約部分は変更後も継続 → 変更後は消滅', //p95
                        }, //66
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '解約返戻金が全くない場合もある', //p99
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
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'ア', content: '注意喚起情報' }, //68
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'イ', content: '個人情報' }, //69
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'イ', content: '公序良俗' }, //70
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'ア', content: '復活日' }, //71
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'ア', content: '故意に' }, //72
                        { questionTitle: '資産の運用', label: 'イ', content: '安全' }, //73
                        { questionTitle: '資産の運用', label: 'ア', content: '公共性' }, //74
                        { questionTitle: '資産の運用', label: 'ア', content: '長期' }, //75
                        { questionTitle: '資産の運用', label: 'イ', content: '公社債' }, //76
                        { questionTitle: '資産の運用', label: 'イ', content: '住宅ローン' }, //77
                        { questionTitle: '正しい告知の取り扱い', label: 'ア', content: '契約確認' }, //78
                        { questionTitle: '正しい告知の取り扱い', label: 'イ', content: '保険証券' }, //79
                        { questionTitle: '正しい告知の取り扱い', label: 'イ', content: '2年' }, //80
                        { questionTitle: '正しい告知の取り扱い', label: 'ア', content: '1カ月' }, //81
                        { questionTitle: '正しい告知の取り扱い', label: 'イ', content: '取消し' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
