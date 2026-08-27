<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2026年1月〜6月実施 フォームE";
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
                    questionRange="1〜3"
                    questionTitle="募集時の正しい説明-①"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '約款',
                        '内閣総理大臣',
                        '契約概要', // 問1〜3
                    ]"
                    :labels="[
                        'ア', //1
                        'エ', //2
                        'ア', //3
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="4〜5"
                    questionTitle="募集時の正しい説明-②"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        'いただく前に',
                        '適合性の原則', // 問4〜5
                    ]"
                    :labels="[
                        'エ', //4
                        'オ', //5
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="6〜8"
                    questionTitle="剰余金と配当金-①"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '死差益',
                        '予定事業費率',
                        '契約者', // 問6〜8
                    ]"
                    :labels="[
                        'イ', //6
                        'ウ', //7
                        'イ', //8
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="9〜10"
                    questionTitle="剰余金と配当金-②"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '保険業法',
                        '単利', // 問9〜10
                    ]"
                    :labels="[
                        'ウ', //9
                        'オ', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜13"
                    questionTitle="契約取り扱いの手続き-①"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '被保険者',
                        '満年齢',
                        '正確なものを新しく発行', // 問11〜13
                    ]"
                    :labels="[
                        'イ', //11
                        'エ', //12
                        'ア', //13
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="14〜15"
                    questionTitle="契約取り扱いの手続き-②"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '50,000円',
                        '生命保険面接士', // 問14〜15
                    ]"
                    :labels="[
                        'エ', //14
                        'オ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜18"
                    questionTitle="契約申込み時の実務-①"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '承諾',
                        '責任開始期',
                        '８日', // 問16〜18
                    ]"
                    :labels="[
                        'エ', //16
                        'ア', //17
                        'ウ', //18
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="19〜20"
                    questionTitle="契約申込み時の実務-②"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        'クーリング・オフ',
                        '既払込金額', // 問19〜20
                    ]"
                    :labels="[
                        'オ', //19
                        'ア', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜23"
                    questionTitle="社会保障制度-①"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '生活保護法',
                        '社会扶助制度',
                        '20', // 問21〜23
                    ]"
                    :labels="[
                        'イ', //21
                        'ウ', //22
                        'イ', //23
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="24〜25"
                    questionTitle="社会保障制度-②"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '遺族',
                        '国民皆保険', // 問24〜25
                    ]"
                    :labels="[
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
                        // rev: 2026-08-25 確認済み
                        '７',
                        '38',
                        '53',
                        '35',
                        '家族の生活資金＋妻の生活資金', // 問26〜30
                    ]"
                    :labels="[
                        'ア', //26
                        'カ', //27
                        'キ', //28
                        'ウ', //29
                        'ケ', //30
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の役割"
                    :contents="[
                        // rev: 2026-08-27 確認済み
                        '大正時代 → 明治時代', //p1
                        '正しい',
                        '男性の平均寿命は[[約81歳]]、女性は[[約87]]歳となっている。', //p3
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="私たちの役割と心がまえ"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約の選択"
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
                    questionTitle="生命保険の仕組み"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="35"
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
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="隣接業界"
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
                        {
                            questionTitle: '保険料の払い込み',
                            content: '', //p
                        }, //38
                        {
                            questionTitle: '保険料の払い込み',
                            content: '', //p
                        }, //39
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '保険料の払い込み',
                            content: '', //p
                        }, //42
                        {
                            questionTitle: '企業向け商品',
                            content: '', //p
                        }, //43
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '企業向け商品',
                            content: '正しい',
                        }, //44
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '企業向け商品',
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '企業向け商品',
                            content: '', //p
                        }, //46
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '企業向け商品',
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '生命保険の種類',
                            content: '', //p
                        }, //48
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '生命保険の種類',
                            content: '正しい',
                        }, //49
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '生命保険の種類',
                            content: '正しい',
                        }, //50
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '生命保険の種類',
                            content: '正しい',
                        }, //51
                        {
                            questionTitle: '生命保険の種類',
                            content: '', //p
                        }, //52
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //53
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //54
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //55
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '', //p
                        }, //56
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '', //p
                        }, //57
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '', //p
                        }, //58
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //59
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //60
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '', //p
                        }, //61
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //62
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保険金・給付金の請求と支払い（保険金・給付金を支払わない場合）',
                            content: '正しい',
                        }, //63
                        {
                            questionTitle: '保険金・給付金の請求と支払い（保険金・給付金を支払わない場合）',
                            content: '', //p
                        }, //64
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保険金・給付金の請求と支払い（保険金・給付金を支払わない場合）',
                            content: '正しい',
                        }, //65
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保険金・給付金の請求と支払い（保険金・給付金を支払わない場合）',
                            content: '正しい',
                        }, //66
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保険金・給付金の請求と支払い（保険金・給付金を支払わない場合）',
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
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '資産の運用',
                            label: 'イ',
                            content: '安全',
                        }, //68
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '資産の運用',
                            label: 'イ',
                            content: '緩和',
                        }, //69
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '資産の運用',
                            label: 'ア',
                            content: '長期',
                        }, //70
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '資産の運用',
                            label: 'イ',
                            content: '公社債',
                        }, //71
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '資産の運用',
                            label: 'ア',
                            content: '換金性（流動性）',
                        }, //72
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '生命保険会社の仕組み',
                            label: 'イ',
                            content: '責任準備金',
                        }, //73
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '生命保険会社の仕組み',
                            label: 'イ',
                            content: '契約者',
                        }, //74
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '生命保険会社の仕組み',
                            label: 'ア',
                            content: '保険事業だけ',
                        }, //75
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '生命保険会社の仕組み',
                            label: 'ア',
                            content: '契約者本位',
                        }, //76
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '生命保険会社の仕組み',
                            label: 'イ',
                            content: '内閣総理大臣',
                        }, //77
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保障の見直し',
                            label: 'ア',
                            content: '責任準備金',
                        }, //78
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保障の見直し',
                            label: 'ア',
                            content: '死亡保障額',
                        }, //79
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保障の見直し',
                            label: 'ア',
                            content: '追加契約',
                        }, //80
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保障の見直し',
                            label: 'イ',
                            content: '保険料',
                        }, //81
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保障の見直し',
                            label: 'ア',
                            content: '健康状態',
                        }, //82
                    ]"
                />
            </div>
            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
