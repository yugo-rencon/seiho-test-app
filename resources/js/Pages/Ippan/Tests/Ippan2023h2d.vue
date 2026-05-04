<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2023年7月〜12月実施 フォームD";
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
                        '福沢諭吉',
                        '明治',
                        '核家族', // 問6〜8
                    ]"
                    :labels="[
                        'ア', //6
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
                        '平均余命',
                        '最低限度', // 問9〜10
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
                    questionTitle="生命保険の仕組み-①"
                    :contents="[
                        '相互扶助',
                        '大数の法則',
                        '生命表', // 問11〜13
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
                    questionTitle="生命保険の仕組み-②"
                    :contents="[
                        '保険契約者',
                        '被保険者', // 問14〜15
                    ]"
                    :labels="[
                        'ア', //14
                        'イ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜18"
                    questionTitle="相続の法律-①"
                    :contents="[
                        '相続の放棄',
                        '単純',
                        '限定', // 問16〜18
                    ]"
                    :labels="[
                        'ア', //16
                        'ウ', //17
                        'オ', //18
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="19〜20"
                    questionTitle="相続の法律-②"
                    :contents="[
                        '家庭裁判所',
                        'みなし', // 問19〜20
                    ]"
                    :labels="[
                        'エ', //19
                        'ア', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜22"
                    questionTitle="お客さまニーズへの対応-①"
                    :contents="[
                        'ライフサイクル',
                        '資金', // 問21〜22
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
                    questionTitle="お客さまニーズへの対応-②"
                    :contents="[
                        '必要経費',
                        '介護',
                        '公的介護保険', // 問23〜25
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
                    questionTitle="私たちの役割と心がまえ"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="保全・アフターサービス手続きと留意点"
                    :contents="[
                        '既払込保険料総額の範囲内 → 解約返戻金の範囲内', //p93
                        '正しい',
                        '正しい',
                        '解約返戻金があっても払い戻されない → 解約返戻金があれば払い戻す', //p96
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
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産の運用"
                    :contents="[
                        '積極的で投機的な資産運用をしなければならない → 効率的で安定した資産運用をしなければならない', //p34
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の払い込み"
                    :contents="[
                        '払い込む保険料の割り引きはない → 保険料は生命保険会社の定める利率で割り引かれる', //p50
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
                            content: '', //p
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
                            content: '', //p
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
                            questionTitle: '募集時の正しい説明',
                            content: '正しい',
                        }, //53
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '', //p
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
                            content: '', //p
                        }, //57
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '', //p
                        }, //58
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '正しい',
                        }, //59
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '正しい',
                        }, //60
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '正しい',
                        }, //61
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '', //p
                        }, //62
                        {
                            questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）',
                            content: '正しい',
                        }, //63
                        {
                            questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）',
                            content: '正しい',
                        }, //64
                        {
                            questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）',
                            content: '', //p
                        }, //65
                        {
                            questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）',
                            content: '', //p
                        }, //66
                        {
                            questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）',
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
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'ア', content: '注意喚起情報' }, //68
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'イ', content: '個人情報' }, //69
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'イ', content: '公序良俗' }, //70
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'ア', content: '復活日' }, //71
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'ア', content: '故意に' }, //72
                        { questionTitle: '契約申込み時の実務', label: 'イ', content: '払い込み' }, //73
                        { questionTitle: '契約申込み時の実務', label: 'イ', content: '払い込み' }, //74
                        { questionTitle: '契約申込み時の実務', label: 'ア', content: '診査(告知)' }, //75
                        { questionTitle: '契約申込み時の実務', label: 'ア', content: 'クーリング・オフ' }, //76
                        { questionTitle: '契約申込み時の実務', label: 'ア', content: 'お返しします' }, //77
                        { questionTitle: '正しい告知の取り扱い', label: 'ア', content: '契約確認' }, //78
                        { questionTitle: '正しい告知の取り扱い', label: 'イ', content: '保険証券' }, //79
                        { questionTitle: '正しい告知の取り扱い', label: 'ア', content: '解約返戻金があれば' }, //80
                        { questionTitle: '正しい告知の取り扱い', label: 'イ', content: '2年' }, //81
                        { questionTitle: '正しい告知の取り扱い', label: 'ア', content: '1カ月' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
