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
                    questionRange="1〜2"
                    questionTitle="募集時の正しい説明-①"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '約款',
                        '内閣総理大臣', // 問1〜2
                    ]"
                    :labels="[
                        'ア', //1
                        'エ', //2
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="3〜5"
                    questionTitle="募集時の正しい説明-②"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '契約概要',
                        'いただく前に',
                        '適合性の原則', // 問3〜5
                    ]"
                    :labels="[
                        'ア', //3
                        'エ', //4
                        'オ', //5
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="6〜7"
                    questionTitle="剰余金と配当金-①"
                    :contents="[
                        // rev: 2026-08-25 確認済み
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
                        // rev: 2026-08-25 確認済み
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
                    questionTitle="契約取り扱いの手続き-①"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '被保険者',
                        '満年齢', // 問11〜12
                    ]"
                    :labels="[
                        'イ', //11
                        'エ', //12
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="13〜15"
                    questionTitle="契約取り扱いの手続き-②"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '正確なものを新しく発行',
                        '50,000円',
                        '生命保険面接士', // 問13〜15
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
                    questionTitle="契約申込み時の実務-①"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '承諾',
                        '責任開始期', // 問16〜17
                    ]"
                    :labels="[
                        'エ', //16
                        'ア', //17
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="18〜20"
                    questionTitle="契約申込み時の実務-②"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '８日',
                        'クーリング・オフ',
                        '既払込金額', // 問18〜20
                    ]"
                    :labels="[
                        'ウ', //18
                        'オ', //19
                        'ア', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜22"
                    questionTitle="社会保障制度-①"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '生活保護法',
                        '社会扶助制度', // 問21〜22
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
                    questionTitle="社会保障制度-②"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '20',
                        '遺族',
                        '国民皆保険', // 問23〜25
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
                        // rev: 2026-08-27 確認済み
                        '正しい',
                        '預金保険法等 → 保険業法等', //p11
                        '潜在ニーズを引き出す必要はない → 潜在ニーズを引き出してアプローチする必要がある', //p12
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約の選択"
                    :contents="[
                        // rev: 2026-08-28 確認済み
                        '職業上の危険、行動上の危険、道徳上の危険 → 身体上の危険、環境上の危険、道徳上の危険', //p53
                        '正しい',
                        '正しい',
                        '医師の診査による契約の場合は告知は不要 → 告知は必要', //p56
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="34"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の仕組み"
                    :contents="[
                        // rev: 2026-08-27 確認済み
                        '正しい',
                        '公平性の法則 → 大数の法則', //p14
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
                            // rev: 2026-08-27 確認済み
                            questionTitle: '保険料の払い込み',
                            content: 'この場合、保険料は[[生命保険会社の定める利率で割り引かれる]]。', //p50
                        }, //38
                        {
                            // rev: 2026-08-27 確認済み
                            questionTitle: '保険料の払い込み',
                            content: '保険金受取人 → 契約者', //p50
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
                            // rev: 2026-08-27 確認済み
                            questionTitle: '保険料の払い込み',
                            content: '払込方法（回数・経路）については、それぞれ[[途中で変更することができる]]。', //p51
                        }, //42
                        {
                            // rev: 2026-08-27 確認済み
                            questionTitle: '企業向け商品',
                            content: '５年更新 → １年更新', //p116
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
                            // rev: 2026-08-27 確認済み
                            questionTitle: '企業向け商品',
                            content: '財形制度にもとづく保険には、財形貯蓄積立保険・[[財形住宅貯蓄積立保険]]・[[財形年金積立保険]]などがある。', //p119
                        }, //46
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '企業向け商品',
                            content: '正しい',
                        }, //47
                        {
                            // rev: 2026-08-28 確認済み
                            questionTitle: '生命保険の種類',
                            content: '定期保険 → 終身保険', //p17
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
                            // rev: 2026-08-28 確認済み
                            questionTitle: '生命保険の種類',
                            content: '契約時に定めた保険金額（基本保険金額）は[[保証されている]]。', //p20
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
                            // rev: 2026-08-28 確認済み
                            questionTitle: '正しい告知の取り扱い',
                            content: '契約確認は、[[契約の成立前に行われる場合と成立後に行われる場合]]がある。', //p85
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
                            // rev: 2026-08-28 確認済み
                            questionTitle: '正しい告知の取り扱い',
                            content: 'この場合、すでに払い込んだ保険料は[[返還されない]]。', //p87
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
