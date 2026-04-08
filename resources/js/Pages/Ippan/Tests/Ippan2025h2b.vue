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
                    questionTitle="生命保険の仕組み-①"
                    :contents="[
                        '',
                        '', // 問6〜7
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
                        '',
                        '',
                        '', // 問9〜10
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
                        '',
                        '',
                        '', // 問21〜23
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
                        '',
                        '', // 問24〜25
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
                        '',
                        '',
                        '',
                        '',
                        '', // 問26〜30
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
                        '', //p
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の募集等に関する法律"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会保障制度"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '', //p
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
                        '', //p
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
                        '', //p
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
                        '', //p
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
                            content: '',
                        }, //38
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '',
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
                            content: '',
                        }, //42
                        {
                            questionTitle: '保険料の払い込み',
                            content: '',
                        }, //43
                        {
                            questionTitle: '保険料の払い込み',
                            content: '',
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
                            content: '',
                        }, //48
                        {
                            questionTitle: '保険料の仕組み',
                            content: '正しい',
                        }, //49
                        {
                            questionTitle: '保険料の仕組み',
                            content: '',
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
                            content: '',
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
                            content: '',
                        }, //57
                        {
                            questionTitle: '契約の選択',
                            content: '',
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
                            content: '',
                        }, //62
                        {
                            questionTitle: '募集時の正しい説明',
                            content: '',
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
                            content: '',
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
