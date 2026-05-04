<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2023年7月〜12月実施 フォームB";
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
                    questionRange="6〜7"
                    questionTitle="生命保険の仕組み-①"
                    :contents="[
                        '相互扶助',
                        '準備財産', // 問6〜7
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
                    questionTitle="生命保険の仕組み-②"
                    :contents="[
                        '大数の法則',
                        '生命表',
                        '死亡率', // 問8〜10
                    ]"
                    :labels="[
                        'イ', //8
                        'エ', //9
                        'オ', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜12"
                    questionTitle="保険料の払い込み-①"
                    :contents="[
                        '契約者',
                        '給与引去り', // 問11〜12
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
                    questionTitle="保険料の払い込み-②"
                    :contents="[
                        '集金',
                        '生命保険会社',
                        '保険料(現金)', // 問13〜15
                    ]"
                    :labels="[
                        'イ', //13
                        'ウ', //14
                        'カ', //15
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
                        'イ', //16
                        'エ', //17
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="18〜20"
                    questionTitle="正しい告知の取り扱い-②"
                    :contents="[
                        '解約返戻金があれば',
                        '1カ月',
                        '2年', // 問18〜20
                    ]"
                    :labels="[
                        'イ', //18
                        'ウ', //19
                        'カ', //20
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
                        'ア', //21
                        'エ', //22
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
                        'ア', //23
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
                    questionTitle="生命保険の役割"
                    :contents="[
                        '大隈重信 → 福沢諭吉<br>大正時代 → 明治時代', //p1
                        '正しい',
                        '正しい',
                        '社会保障制度 → 企業保障制度', //p4
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="剰余金と配当金"
                    :contents="[
                        '正しい',
                        '予定死亡率と予定事業費率の２つの予定率 → 予定死亡率と予定事業費率と予定利率の全ての予定率', //p27
                        '正しい',
                        '保険業法の定める利率 → 生命保険会社の定める利率', //p29
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
                    questionTitle="生命保険の募集等に関する法律"
                    :contents="[
                        '正しい',
                        '正しい',
                        '500万円超 → 200万円超', //p74
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="募集時の正しい説明"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続の法律"
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
                            questionTitle: '私たちの役割と心がまえ',
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '私たちの役割と心がまえ',
                            content: '', //p
                        }, //49
                        {
                            questionTitle: '私たちの役割と心がまえ',
                            content: '', //p
                        }, //50
                        {
                            questionTitle: '私たちの役割と心がまえ',
                            content: '正しい',
                        }, //51
                        {
                            questionTitle: '私たちの役割と心がまえ',
                            content: '正しい',
                        }, //52
                        {
                            questionTitle: '保障の見直し',
                            content: '死亡保障額などを増やすことができない → 死亡保障額などを増やすことができる', //p91
                        }, //53
                        {
                            questionTitle: '保障の見直し',
                            content: '正しい',
                        }, //54
                        {
                            questionTitle: '保障の見直し',
                            content: '正しい',
                        }, //55
                        {
                            questionTitle: '保障の見直し',
                            content: '正しい',
                        }, //56
                        {
                            questionTitle: '保障の見直し',
                            content: '転換前契約の加入時 → 転換時', //p92
                        }, //57
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '満期保険金の範囲内 → 解約返戻金の範囲内', //p93
                        }, //58
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '貸付を受けた契約では貸付を受けていない契約より配当金は少なくなる → 貸付を受けた契約でも貸付を受けていない契約と同様の配当金が支払われる', //p93
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
                            content: '正しい',
                        }, //62
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '', //p
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
                            content: '正しい',
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
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'ア', content: '注意喚起情報' }, //68
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'イ', content: '個人情報' }, //69
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'イ', content: '公序良俗' }, //70
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'ア', content: '復活日' }, //71
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'ア', content: '故意に' }, //72
                        { questionTitle: '生命保険の種類', label: 'イ', content: '生存保険' }, //73
                        { questionTitle: '生命保険の種類', label: 'イ', content: 'と同額' }, //74
                        { questionTitle: '生命保険の種類', label: 'ア', content: '大きくする' }, //75
                        { questionTitle: '生命保険の種類', label: 'ア', content: '特別勘定' }, //76
                        { questionTitle: '生命保険の種類', label: 'ア', content: '保証されています' }, //77
                        { questionTitle: '資産の運用', label: 'ア', content: '保険金' }, //78
                        { questionTitle: '資産の運用', label: 'イ', content: '収益性' }, //79
                        { questionTitle: '資産の運用', label: 'ア', content: '預貯金' }, //80
                        { questionTitle: '資産の運用', label: 'ア', content: '長期' }, //81
                        { questionTitle: '資産の運用', label: 'イ', content: '住宅ローン' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
