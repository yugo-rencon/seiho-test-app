<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2026年1月〜6月実施 フォームB";
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
                    questionRange="6〜8"
                    questionTitle="私たちの役割と心がまえ-①"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '継続',
                        '保険業法',
                        '所属生命保険会社', // 問6〜8
                    ]"
                    :labels="[
                        'オ', //6
                        'ア', //7
                        'エ', //8
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="9〜10"
                    questionTitle="私たちの役割と心がまえ-②"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '適切な情報提供',
                        '社会的', // 問9〜10
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
                        // rev: 2026-08-25 確認済み
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
                        // rev: 2026-08-25 確認済み
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
                    questionRange="16〜18"
                    questionTitle="正しい告知の取り扱い-①"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '契約確認',
                        '保険証券',
                        '２年', // 問16〜18
                    ]"
                    :labels="[
                        'ア', //16
                        'ウ', //17
                        'イ', //18
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="19〜20"
                    questionTitle="正しい告知の取り扱い-②"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '１カ月',
                        '取消し', // 問19〜20
                    ]"
                    :labels="[
                        'ウ', //19
                        'オ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜23"
                    questionTitle="保全・アフターサービス手続きと留意点-①"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '契約者貸付',
                        '（自動）振替貸付',
                        '消滅します', // 問21〜23
                    ]"
                    :labels="[
                        'イ', //21
                        'ウ', //22
                        'ア', //23
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="24〜25"
                    questionTitle="保全・アフターサービス手続きと留意点-②"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '短く',
                        '減額', // 問24〜25
                    ]"
                    :labels="[
                        'ウ', //24
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
                    questionTitle="生命保険会社の仕組み"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
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
                    questionTitle="契約の選択"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の税法上の取り扱い"
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
                    questionTitle="お客さまニーズへの対応"
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
                            // rev: 2026-08-25 確認済み
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //48
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //49
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //50
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '剰余金と配当金',
                            content: '正しい',
                        }, //51
                        {
                            questionTitle: '剰余金と配当金',
                            content: '', //p
                        }, //52
                        {
                            questionTitle: '保障の見直し',
                            content: '', //p
                        }, //53
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保障の見直し',
                            content: '正しい',
                        }, //54
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保障の見直し',
                            content: '正しい',
                        }, //55
                        {
                            questionTitle: '保障の見直し',
                            content: '', //p
                        }, //56
                        {
                            questionTitle: '保障の見直し',
                            content: '', //p
                        }, //57
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保険金・給付金の請求と支払い',
                            content: '正しい',
                        }, //58
                        {
                            questionTitle: '保険金・給付金の請求と支払い',
                            content: '', //p
                        }, //59
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保険金・給付金の請求と支払い',
                            content: '正しい',
                        }, //60
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保険金・給付金の請求と支払い',
                            content: '正しい',
                        }, //61
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保険金・給付金の請求と支払い',
                            content: '正しい',
                        }, //62
                        {
                            questionTitle: '相続の法律',
                            content: '', //p
                        }, //63
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '相続の法律',
                            content: '正しい',
                        }, //64
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '相続の法律',
                            content: '正しい',
                        }, //65
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '相続の法律',
                            content: '正しい',
                        }, //66
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '相続の法律',
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
                            questionTitle: '生命保険の種類',
                            label: 'イ',
                            content: '生存保険',
                        }, //73
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '生命保険の種類',
                            label: 'イ',
                            content: 'と同額',
                        }, //74
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '生命保険の種類',
                            label: 'ア',
                            content: '定期保険',
                        }, //75
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '生命保険の種類',
                            label: 'イ',
                            content: '保険金額',
                        }, //76
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '生命保険の種類',
                            label: 'ア',
                            content: '特別勘定',
                        }, //77
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '契約取り扱いの手続き',
                            label: 'イ',
                            content: 'が必要',
                        }, //78
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '契約取り扱いの手続き',
                            label: 'イ',
                            content: '被保険者',
                        }, //79
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '契約取り扱いの手続き',
                            label: 'ア',
                            content: '満年齢',
                        }, //80
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '契約取り扱いの手続き',
                            label: 'ア',
                            content: '正確なものを新しく発行',
                        }, //81
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '契約取り扱いの手続き',
                            label: 'イ',
                            content: '50,000円',
                        }, //82
                    ]"
                />
            </div>
            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
