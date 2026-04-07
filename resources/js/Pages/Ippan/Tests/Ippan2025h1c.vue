<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2025年1月〜6月実施 フォームC";
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
                    :relatedProblems="[]"
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
                    :relatedProblems="[]"
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
                    questionTitle="保険料の仕組み-①"
                    :relatedProblems="[]"
                    :contents="[
                        '純保険料',
                        '付加保険料', // 問6〜7
                    ]"
                    :labels="[
                        'ウ', //6
                        'エ', //7
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="8〜10"
                    questionTitle="保険料の仕組み-②"
                    :relatedProblems="[]"
                    :contents="[
                        '死亡保険料',
                        '生存保険料',
                        '利率', // 問8〜10
                    ]"
                    :labels="[
                        'エ', //8
                        'ア', //9
                        'オ', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜13"
                    questionTitle="生命保険会社の仕組み-①"
                    :relatedProblems="[]"
                    :contents="[
                        '保険業法',
                        '免許',
                        '基礎利益', // 問11〜13
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
                    :relatedProblems="[]"
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
                    questionRange="16〜18"
                    questionTitle="契約取り扱いの手続き-①"
                    :relatedProblems="[]"
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
                    :relatedProblems="[]"
                    :contents="[
                        '正確なものを新しく発行',
                        '50,000円', // 問19〜20
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
                    questionTitle="相続の法律-①"
                    :relatedProblems="[]"
                    :contents="[
                        '３/４',
                        '２/３',
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
                    :relatedProblems="[]"
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
                    :relatedProblems="[]"
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
                    :relatedProblems="[]"
                    :contents="[
                        '正しい', //ア
                        '', //イ
                        '', //ウ
                        '正しい', //エ
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約の選択"
                    :relatedProblems="[]"
                    :contents="[
                        '', //ア
                        '正しい', //イ
                        '正しい', //ウ
                        '', //エ
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="隣接業界"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい', //ア
                        '', //イ
                        '', //ウ
                        '正しい', //エ
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="34"
                    :title="title"
                    :subject="subject"
                    questionTitle="保全・アフターサービス手続きと留意点"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい', //ア
                        '正しい', //イ
                        '', //ウ
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="35"
                    :title="title"
                    :subject="subject"
                    questionTitle="コンプライアンスの重要性"
                    :relatedProblems="[]"
                    :contents="[
                        '', //ア
                        '正しい', //イ
                        '正しい', //ウ
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="募集時の正しい説明"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい', //ア
                        '正しい', //イ
                        '', //ウ
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会保障制度"
                    :relatedProblems="[]"
                    :contents="[
                        '', //ア
                        '正しい', //イ
                        '正しい', //ウ
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
                            relatedProblems: [''],
                        }, //38 正
                        {
                            questionTitle: '生命保険の役割',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //39 正
                        {
                            questionTitle: '生命保険の役割',
                            content: '',
                            relatedProblems: [''],
                        }, //40 誤
                        {
                            questionTitle: '生命保険の役割',
                            content: '',
                            relatedProblems: [''],
                        }, //41 誤
                        {
                            questionTitle: '生命保険の役割',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //42 正
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //43 正
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //44 正
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //45 正
                        {
                            questionTitle: '保険料の払い込み',
                            content: '',
                            relatedProblems: [''],
                        }, //46 誤
                        {
                            questionTitle: '保険料の払い込み',
                            content: '',
                            relatedProblems: [''],
                        }, //47 誤
                        {
                            questionTitle: '資産の運用',
                            content: '',
                            relatedProblems: [''],
                        }, //48 誤
                        {
                            questionTitle: '資産の運用',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //49 正
                        {
                            questionTitle: '資産の運用',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //50 正
                        {
                            questionTitle: '資産の運用',
                            content: '',
                            relatedProblems: [''],
                        }, //51 誤
                        {
                            questionTitle: '資産の運用',
                            content: '',
                            relatedProblems: [''],
                        }, //52 誤
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '',
                            relatedProblems: [''],
                        }, //53 誤
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //54 正
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //55 正
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '',
                            relatedProblems: [''],
                        }, //56 誤
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //57 正
                        {
                            questionTitle: '照会・苦情時の対応',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //58 正
                        {
                            questionTitle: '照会・苦情時の対応',
                            content: '',
                            relatedProblems: [''],
                        }, //59 誤
                        {
                            questionTitle: '照会・苦情時の対応',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //60 正
                        {
                            questionTitle: '照会・苦情時の対応',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //61 正
                        {
                            questionTitle: '照会・苦情時の対応',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //62 正
                        {
                            questionTitle: '企業向け商品',
                            content: '',
                            relatedProblems: [''],
                        }, //63 誤
                        {
                            questionTitle: '企業向け商品',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //64 正
                        {
                            questionTitle: '企業向け商品',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //65 正
                        {
                            questionTitle: '企業向け商品',
                            content: '',
                            relatedProblems: [''],
                        }, //66 誤
                        {
                            questionTitle: '企業向け商品',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //67 正
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
                        { questionTitle: '生命保険の種類', label: 'ア', content: '定期保険' }, //73
                        { questionTitle: '生命保険の種類', label: 'イ', content: '生存保険' }, //74
                        { questionTitle: '生命保険の種類', label: 'イ', content: '大きくする' }, //75
                        { questionTitle: '生命保険の種類', label: 'ア', content: '特別勘定' }, //76
                        { questionTitle: '生命保険の種類', label: 'ア', content: '保障されています' }, //77
                        { questionTitle: '剰余金と配当金', label: 'ア', content: '費差益' }, //78
                        { questionTitle: '剰余金と配当金', label: 'イ', content: '割安' }, //79
                        { questionTitle: '剰余金と配当金', label: 'イ', content: '支払時期' }, //80
                        { questionTitle: '剰余金と配当金', label: 'ア', content: '積立（据置）方法' }, //81
                        { questionTitle: '剰余金と配当金', label: 'ア', content: '生命保険会社' }, //82
                    ]"
                />
            </div>
            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
