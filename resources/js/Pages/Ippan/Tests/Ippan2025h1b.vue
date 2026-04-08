<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2025年1月〜6月実施 フォームB";
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
                    questionTitle="生命保険の仕組み-①"
                    :contents="[
                        '相互扶助',
                        '準備財産', // 問1〜2
                    ]"
                    :labels="[
                        'ア', //1
                        'ウ', //2
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="3〜5"
                    questionTitle="生命保険の仕組み-②"
                    :contents="[
                        '大数の法則',
                        '生命表',
                        '死亡率', // 問3〜5
                    ]"
                    :labels="[
                        'イ', //3
                        'ウ', //4
                        'カ', //5
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="6〜7"
                    questionTitle="剰余金と配当金-①"
                    :contents="[
                        '死差益',
                        '予定事業費率', // 問6〜7
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
                    questionTitle="剰余金と配当金-②"
                    :contents="[
                        '契約者',
                        '生命保険会社',
                        '複利', // 問8〜10
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
                    questionRange="11〜12"
                    questionTitle="契約申込み時の実務-①"
                    :contents="[
                        '承諾',
                        '責任開始期', // 問11〜12
                    ]"
                    :labels="[
                        'エ', //11
                        'イ', //12
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="13〜15"
                    questionTitle="契約申込み時の実務-②"
                    :contents="[
                        '８日',
                        'クーリング・オフ',
                        '既払込金額', // 問13〜15
                    ]"
                    :labels="[
                        'ウ', //13
                        'オ', //14
                        'ア', //15
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
                        '１カ月',
                        '２年', // 問18〜20
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
                    questionTitle="お客さまニーズへの対応-①"
                    :contents="[
                        'ライフサイクル',
                        '資金', // 問21〜22
                    ]"
                    :labels="[
                        'イ', //21
                        'ウ', //22
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="23〜25"
                    questionTitle="お客さまニーズへの対応-②"
                    :contents="[
                        '経済準備',
                        '保険設計書',
                        '設計', // 問23〜25
                    ]"
                    :labels="[
                        'ア', //23
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
                        '７',
                        '36',
                        '51',
                        '37',
                        '家族の生活資金＋妻の生活資金', // 問26〜30
                    ]"
                    :labels="[
                        'イ', //26
                        'エ', //27
                        'ク', //28
                        'オ', //29
                        'ケ', //30
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    questionTitle="私たちの役割と心がまえ"
                    :contents="[
                        '正しい',
                        '預金保険法等 → 保険業法等', //p11
                        '潜在ニーズを引き出す必要はない → 潜在ニーズを引き出してアプローチする必要がある', //p12
                        '正しい',
                    ]"
                />
                <QuestionTemp1 :questionNumber="32" :title="title" :subject="subject" questionTitle="生命保険の募集等に関する法律" :contents="['', '', '正しい', '正しい']" />
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
                    questionTitle="保全・アフターサービス手続きと留意点"
                    :contents="[
                        '正しい',
                        '正しい',
                        '払い戻されない → 払い戻す', //p96
                    ]"
                />
                <QuestionTemp1 :questionNumber="35" :title="title" :subject="subject" questionTitle="資産の運用" :contents="['正しい', '正しい', '']" />
                <QuestionTemp1 :questionNumber="36" :title="title" :subject="subject" questionTitle="保障の見直し" :contents="['正しい', '正しい', '']" />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続の法律"
                    :contents="[
                        '正しい',
                        '配偶者が4/5、兄弟姉妹が1/5 → 配偶者が3/4、兄弟姉妹が1/4', //p130
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
                            questionTitle: '生命保険の役割',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '生命保険の役割',
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '生命保険の役割',
                            content: '90歳を超えている → 超えていない（男性約81歳、女性約87歳）', //p3
                        }, //40
                        {
                            questionTitle: '生命保険の役割',
                            content: '平均寿命 → 平均余命', //p4
                        }, //41
                        {
                            questionTitle: '生命保険の役割',
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '保険料の払い込み',
                            content: '',
                        }, //46
                        {
                            questionTitle: '保険料の払い込み',
                            content: '',
                        }, //47
                        {
                            questionTitle: '生命保険の種類',
                            content: '',
                        }, //48
                        {
                            questionTitle: '生命保険の種類',
                            content: '正しい',
                        }, //49
                        {
                            questionTitle: '生命保険の種類',
                            content: '正しい',
                        }, //50
                        {
                            questionTitle: '生命保険の種類',
                            content: '正しい',
                        }, //51
                        {
                            questionTitle: '生命保険の種類',
                            content: '',
                        }, //52
                        {
                            questionTitle: '隣接業界',
                            content: '正しい',
                        }, //53
                        {
                            questionTitle: '隣接業界',
                            content: '',
                        }, //54
                        {
                            questionTitle: '隣接業界',
                            content: '',
                        }, //55
                        {
                            questionTitle: '隣接業界',
                            content: '',
                        }, //56
                        {
                            questionTitle: '隣接業界',
                            content: '',
                        }, //57
                        {
                            questionTitle: '社会保障制度',
                            content: '',
                        }, //58
                        {
                            questionTitle: '社会保障制度',
                            content: '正しい',
                        }, //59
                        {
                            questionTitle: '社会保障制度',
                            content: '',
                        }, //60
                        {
                            questionTitle: '社会保障制度',
                            content: '正しい',
                        }, //61
                        {
                            questionTitle: '社会保障制度',
                            content: '',
                        }, //62
                        {
                            questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）',
                            content: '',
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
                            content: '',
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
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'ア', content: '連絡先' }, //69
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'イ', content: '公序良俗' }, //70
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'イ', content: '生命保険会社' }, //71
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'ア', content: '故意に' }, //72
                        { questionTitle: '生命保険会社の仕組み', label: 'ア', content: '予測を超えて' }, //73
                        { questionTitle: '生命保険会社の仕組み', label: 'イ', content: '責任準備金' }, //74
                        { questionTitle: '生命保険会社の仕組み', label: 'イ', content: '契約者' }, //75
                        { questionTitle: '生命保険会社の仕組み', label: 'ア', content: '契約者本位' }, //76
                        { questionTitle: '生命保険会社の仕組み', label: 'イ', content: '内閣総理大臣' }, //77
                        { questionTitle: '契約の選択', label: 'イ', content: '環境上' }, //78
                        { questionTitle: '契約の選択', label: 'ア', content: '保険金や特約' }, //79
                        { questionTitle: '契約の選択', label: 'イ', content: '入院給付金日額' }, //80
                        { questionTitle: '契約の選択', label: 'ア', content: '契約内容登録制度' }, //81
                        { questionTitle: '契約の選択', label: 'イ', content: '面接' }, //82
                    ]"
                />
            </div>
            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
