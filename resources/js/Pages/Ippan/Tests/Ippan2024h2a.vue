<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2024年7月〜12月実施 フォームA";
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
                    questionRange="1〜2"
                    questionTitle="資産の運用-①"
                    :contents="[
                        '公共性',
                        '長期', // 問1〜2
                    ]"
                    :labels="[
                        'ウ', //1
                        'イ', //2
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="3〜5"
                    questionTitle="資産の運用-②"
                    :contents="[
                        '公社債',
                        '住宅ローン',
                        '投資', // 問3〜5
                    ]"
                    :labels="[
                        'オ', //3
                        'エ', //4
                        'イ', //5
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
                    questionRange="11〜12"
                    questionTitle="生命保険の募集等に関する法律-①"
                    :contents="[
                        '内閣総理大臣',
                        '「媒介」', // 問11〜12
                    ]"
                    :labels="[
                        'イ', //11
                        'ウ', //12
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="13〜15"
                    questionTitle="生命保険の募集等に関する法律-②"
                    :contents="[
                        '告知義務違反',
                        '特別の利益の提供',
                        '行政処分', // 問13〜15
                    ]"
                    :labels="[
                        'イ', //13
                        'ウ', //14
                        'オ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜17"
                    questionTitle="正しい告知の取り扱い-①"
                    :contents="[
                        '契約確認',
                        '保険証券', // 問16〜17
                    ]"
                    :labels="[
                        'ア', //16
                        'ウ', //17
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="18〜20"
                    questionTitle="正しい告知の取り扱い-②"
                    :contents="[
                        '2年',
                        '1カ月',
                        '取消し', // 問18〜20
                    ]"
                    :labels="[
                        'イ', //18
                        'ウ', //19
                        'オ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜23"
                    questionTitle="相続の法律-①"
                    :contents="[
                        '3/4',
                        '2/3',
                        '相続の放棄', // 問21〜23
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
                    questionTitle="相続の法律-②"
                    :contents="[
                        '単純',
                        'みなし', // 問24〜25
                    ]"
                    :labels="[
                        'イ', //24
                        'エ', //25
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
                        '34',
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
                    questionTitle="照会・苦情時の対応"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="保障の見直し"
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
                    questionTitle="企業向け商品"
                    :contents="[
                        '役員を除く → 役員を含むことができる<br>2年更新の任意加入 → 1年更新の全員加入', //p116
                        '正しい',
                        '財形貯蓄積立保険・財形教育積立保険・財形医療積立保険 → 財形貯蓄積立保険・財形住宅積立保険・財形年金積立保険', //p119
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="34"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約申込み時の実務"
                    :contents="[
                        '正しい',
                        '正しい',
                        '契約申込みの撤回ができる → 撤回はできない', //p47
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="35"
                    :title="title"
                    :subject="subject"
                    questionTitle="私たちの役割と心がまえ"
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
                    questionTitle="保険料の払い込み"
                    :contents="[
                        '払い込む保険料の割り引きはない → 生命保険会社の定める利率で割り引かれる', //p50
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
                            questionTitle: '生命保険の種類',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '生命保険の種類',
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '生命保険の種類',
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '生命保険の種類',
                            content: '', //p
                        }, //41
                        {
                            questionTitle: '生命保険の種類',
                            content: '', //p
                        }, //42
                        {
                            questionTitle: '隣接業界',
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '隣接業界',
                            content: '', //p
                        }, //44
                        {
                            questionTitle: '隣接業界',
                            content: '', //p
                        }, //45
                        {
                            questionTitle: '隣接業界',
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: '隣接業界',
                            content: '', //p
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
                            content: '収支相当の法則 → 大数の法則', //p14
                        }, //50
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '年末の生存者数 → 年始の生存者数', //p15
                        }, //51
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '出生率 → 死亡率', //p15
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
                            content: '', //p
                        }, //55
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '正しい',
                        }, //56
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '', //p
                        }, //57
                        {
                            questionTitle: '契約の選択',
                            content: '', //p
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
                            content: '', //p
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
                            content: '福祉販売 → 設計販売', //p136
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
                        { questionTitle: '社会保障制度', label: 'イ', content: '生活保護法' }, //68
                        { questionTitle: '社会保障制度', label: 'ア', content: '全国民' }, //69
                        { questionTitle: '社会保障制度', label: 'イ', content: '20歳' }, //70
                        { questionTitle: '社会保障制度', label: 'イ', content: '報酬比例' }, //71
                        { questionTitle: '社会保障制度', label: 'イ', content: '強制加入' }, //72
                        { questionTitle: '剰余金と配当金', label: 'ア', content: '費差益' }, //73
                        { questionTitle: '剰余金と配当金', label: 'イ', content: '割安' }, //74
                        { questionTitle: '剰余金と配当金', label: 'イ', content: '支払時期' }, //75
                        { questionTitle: '剰余金と配当金', label: 'ア', content: '積立（据置）方法' }, //76
                        { questionTitle: '剰余金と配当金', label: 'ア', content: '生命保険会社' }, //77
                        { questionTitle: '保険料の税法上の取り扱い', label: 'イ', content: '贈与税' }, //78
                        { questionTitle: '保険料の税法上の取り扱い', label: 'イ', content: '保険金などの受取人' }, //79
                        { questionTitle: '保険料の税法上の取り扱い', label: 'ア', content: '5年未満' }, //80
                        { questionTitle: '保険料の税法上の取り扱い', label: 'ア', content: '払い込まれた保険料がそのまま' }, //81
                        { questionTitle: '保険料の税法上の取り扱い', label: 'イ', content: '40000円' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
