<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2025年7月〜12月実施 フォームA";
</script>

<template>
    <SeihoTestLayout :title="title" brand-name="生命保険一般課程 過去問解説">
        <section class="bg-gray-100 py-10 text-gray-800">
            <Pagetitle :title="title" :description="subject" />

            <div class="mx-auto mt-4 max-w-4xl space-y-2">
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="1〜3"
                    questionTitle="保障の見直し-①"
                    :relatedProblems="[]"
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
                    :relatedProblems="[]"
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
                    questionRange="6〜8"
                    questionTitle="生命保険の役割-①"
                    :relatedProblems="[]"
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
                    :relatedProblems="[]"
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
                    questionTitle="生命保険の募集等に関する法律-①"
                    :relatedProblems="[]"
                    :contents="[
                        '契約者',
                        '内閣総理大臣',
                        '告知義務違反', // 問11〜13
                    ]"
                    :labels="[
                        'ア', //11
                        'ウ', //12
                        'カ', //13
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="14〜15"
                    questionTitle="生命保険の募集等に関する法律-②"
                    :relatedProblems="[]"
                    :contents="[
                        '1年',
                        '5年', // 問14〜15
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
                    questionTitle="社会保障制度-①"
                    :relatedProblems="[]"
                    :contents="[
                        '生活保護法',
                        '国民',
                        '遺族', // 問16〜18
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
                    questionTitle="社会保障制度-②"
                    :relatedProblems="[]"
                    :contents="[
                        '3割',
                        '75歳', // 問19〜20
                    ]"
                    :labels="[
                        'イ', //19
                        'エ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜23"
                    questionTitle="相続の法律-①"
                    :relatedProblems="[]"
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
                        '5',
                        '35',
                        '52',
                        '36',
                        '家族の生活資金 + 妻の生活資金', // 問26〜30
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
                    :relatedProblems="[]"
                    :contents="[
                        '積極的で投機的な資産運用 → 効率的で安定した資産運用', //p34
                        '正しい',
                        '貸付金は含まれない → 含まれる', //p35
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約の選択"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="募集時の正しい説明"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="34"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の種類"
                    :relatedProblems="[]"
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
                    questionTitle="剰余金と配当金"
                    :relatedProblems="[]"
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
                    questionTitle="保全・アフターサービスの重要性"
                    :relatedProblems="[]"
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
                    questionTitle="照会・苦情時の対応"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
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
                            questionTitle: '契約取り扱いの手続き',
                            content: '',
                            relatedProblems: [''],
                        }, //38
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '',
                            relatedProblems: [''],
                        }, //39
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //40
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //41
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '',
                            relatedProblems: [''],
                        }, //42
                        {
                            questionTitle: '保険料の払い込み',
                            content: '',
                            relatedProblems: [''],
                        }, //43
                        {
                            questionTitle: '保険料の払い込み',
                            content: '',
                            relatedProblems: [''],
                        }, //44
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //45
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //46
                        {
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //47
                        {
                            questionTitle: '正しい告知の取扱い',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //48
                        {
                            questionTitle: '正しい告知の取扱い',
                            content: '',
                            relatedProblems: [''],
                        }, //49
                        {
                            questionTitle: '正しい告知の取扱い',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //50
                        {
                            questionTitle: '正しい告知の取扱い',
                            content: '',
                            relatedProblems: [''],
                        }, //51
                        {
                            questionTitle: '正しい告知の取扱い',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //52
                        {
                            questionTitle: '保険金・給付金の請求と支払い（保険金・給付金を支払わない場合）',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //53
                        {
                            questionTitle: '保険金・給付金の請求と支払い（保険金・給付金を支払わない場合）',
                            content: '',
                            relatedProblems: [''],
                        }, //54
                        {
                            questionTitle: '保険金・給付金の請求と支払い（保険金・給付金を支払わない場合）',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //55
                        {
                            questionTitle: '保険金・給付金の請求と支払い（保険金・給付金を支払わない場合）',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //56
                        {
                            questionTitle: '保険金・給付金の請求と支払い（保険金・給付金を支払わない場合）',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //57
                        {
                            questionTitle: '企業向け商品',
                            content: '',
                            relatedProblems: [''],
                        }, //58
                        {
                            questionTitle: '企業向け商品',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //59
                        {
                            questionTitle: '企業向け商品',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //60
                        {
                            questionTitle: '企業向け商品',
                            content: '',
                            relatedProblems: [''],
                        }, //61
                        {
                            questionTitle: '企業向け商品',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //62
                        {
                            questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）',
                            content: '',
                            relatedProblems: [''],
                        }, //63
                        {
                            questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //64
                        {
                            questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）',
                            content: '',
                            relatedProblems: [''],
                        }, //65
                        {
                            questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）',
                            content: '正しい',
                            relatedProblems: [''],
                        }, //66
                        {
                            questionTitle: '保険金・給付金の税法上の取り扱い（一時金で受け取った場合）',
                            content: '',
                            relatedProblems: [''],
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
                        { questionTitle: '生命保険会社の仕組み', label: 'ア', content: '予測を超えて' }, //73
                        { questionTitle: '生命保険会社の仕組み', label: 'イ', content: '責任準備金' }, //74
                        { questionTitle: '生命保険会社の仕組み', label: 'イ', content: '契約者' }, //75
                        { questionTitle: '生命保険会社の仕組み', label: 'ア', content: '契約者本位' }, //76
                        { questionTitle: '生命保険会社の仕組み', label: 'イ', content: '内閣総理大臣' }, //77
                        { questionTitle: '保全・アフターサービス手続きと留意点', label: 'イ', content: '解約返戻金' }, //78
                        { questionTitle: '保全・アフターサービス手続きと留意点', label: 'ア', content: '同様の' }, //79
                        { questionTitle: '保全・アフターサービス手続きと留意点', label: 'イ', content: '生命保険会社' }, //80
                        { questionTitle: '保全・アフターサービス手続きと留意点', label: 'ア', content: '消滅' }, //81
                        { questionTitle: '保全・アフターサービス手続きと留意点', label: 'ア', content: 'あれば払い戻します' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="" next-route="ippan.2025h2b" home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
