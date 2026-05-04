<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2022年7月〜12月実施 フォームE";
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
                        '福沢諭吉',
                        '明治',
                        '核家族', // 問6〜8
                    ]"
                    :labels="[
                        'イ', //6
                        'オ', //7
                        'ウ', //8
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="9〜10"
                    questionTitle="生命保険の役割-②"
                    :contents="[
                        '平均余命',
                        '412', // 問9〜10
                    ]"
                    :labels="[
                        'エ', //9
                        'イ', //10
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
                        'ア', //11
                        'ウ', //12
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="13〜15"
                    questionTitle="契約申込み時の実務-②"
                    :contents="[
                        '8日',
                        'クーリング・オフ',
                        '既払込金額', // 問13〜15
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
                    questionTitle="契約の選択-①"
                    :contents="[
                        '環境',
                        '契約内容登録制度', // 問16〜17
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
                    questionTitle="契約の選択-②"
                    :contents="[
                        '面接',
                        '保険金削減',
                        '特別条件', // 問18〜20
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
                    questionTitle="保障の見直し-①"
                    :contents="[
                        '責任準備金',
                        '保険期間',
                        '追加', // 問21〜23
                    ]"
                    :labels="[
                        'エ', //21
                        'オ', //22
                        'ア', //23
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="24〜25"
                    questionTitle="保障の見直し-②"
                    :contents="[
                        '契約者',
                        '転換時', // 問24〜25
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
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の種類"
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
                    questionTitle="隣接業界"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
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
                        '', //p
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
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="保全・アフターサービス手続きと留意点"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金・給付金の税法上の取り扱い（一時金で受け取った場合）"
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
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '', //p
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
                            content: '', //p
                        }, //46
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '', //p
                        }, //49
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //50
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //51
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '', //p
                        }, //52
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '', //p
                        }, //53
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //54
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //55
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '', //p
                        }, //56
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //57
                        {
                            questionTitle: '企業向け商品',
                            content: '正しい',
                        }, //58
                        {
                            questionTitle: '企業向け商品',
                            content: '正しい',
                        }, //59
                        {
                            questionTitle: '企業向け商品',
                            content: '正しい',
                        }, //60
                        {
                            questionTitle: '企業向け商品',
                            content: '', //p
                        }, //61
                        {
                            questionTitle: '企業向け商品',
                            content: '', //p
                        }, //62
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '', //p
                        }, //63
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '正しい',
                        }, //64
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '正しい',
                        }, //65
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '', //p
                        }, //66
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '', //p
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
                        { questionTitle: '契約取り扱いの手続き', label: 'イ', content: 'が必要' }, //73
                        { questionTitle: '契約取り扱いの手続き', label: 'イ', content: '被保険者' }, //74
                        { questionTitle: '契約取り扱いの手続き', label: 'ア', content: '満年齢' }, //75
                        { questionTitle: '契約取り扱いの手続き', label: 'ア', content: '正確なものを新しく発行' }, //76
                        { questionTitle: '契約取り扱いの手続き', label: 'イ', content: '50000円' }, //77
                        { questionTitle: '相続の法律', label: 'ア', content: '2/3' }, //78
                        { questionTitle: '相続の法律', label: 'ア', content: '放棄' }, //79
                        { questionTitle: '相続の法律', label: 'イ', content: '単純承認' }, //80
                        { questionTitle: '相続の法律', label: 'イ', content: '限定承認' }, //81
                        { questionTitle: '相続の法律', label: 'イ', content: 'みなし相続財産' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
