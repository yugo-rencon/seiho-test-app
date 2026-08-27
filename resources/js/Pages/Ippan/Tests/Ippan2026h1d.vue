<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2026年1月〜6月実施 フォームD";
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
                    questionTitle="生命保険の募集等に関する法律-①"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '契約者',
                        '内閣総理大臣',
                        '告知義務違反', // 問6〜8
                    ]"
                    :labels="[
                        'ア', //6
                        'ウ', //7
                        'カ', //8
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="9〜10"
                    questionTitle="生命保険の募集等に関する法律-②"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '１年',
                        '５年', // 問9〜10
                    ]"
                    :labels="[
                        'ア', //9
                        'エ', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜13"
                    questionTitle="正しい告知の取り扱い-①"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '契約確認',
                        '保険証券',
                        '解約返戻金があれば', // 問11〜13
                    ]"
                    :labels="[
                        'イ', //11
                        'エ', //12
                        'イ', //13
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="14〜15"
                    questionTitle="正しい告知の取り扱い-②"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '１カ月',
                        '２年', // 問14〜15
                    ]"
                    :labels="[
                        'ウ', //14
                        'カ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜18"
                    questionTitle="保険金・給付金の請求と支払い-①"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '保険料',
                        '約款',
                        '故意に', // 問16〜18
                    ]"
                    :labels="[
                        'イ', //16
                        'エ', //17
                        'ウ', //18
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="19〜20"
                    questionTitle="保険金・給付金の請求と支払い-②"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '支払います',
                        '戦争その他の変乱', // 問19〜20
                    ]"
                    :labels="[
                        'ア', //19
                        'オ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜23"
                    questionTitle="相続の法律-①"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '１/２',
                        '２/３',
                        '相続の放棄', // 問21〜23
                    ]"
                    :labels="[
                        'ア', //21
                        'イ', //22
                        'オ', //23
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="24〜25"
                    questionTitle="相続の法律-②"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '限定',
                        'みなし', // 問24〜25
                    ]"
                    :labels="[
                        'イ', //24
                        'ウ', //25
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
                    questionTitle="剰余金と配当金"
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
                    questionTitle="生命保険会社の仕組み"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
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
                            questionTitle: '契約取り扱いの手続き',
                            content: '', //p
                        }, //48
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '', //p
                        }, //49
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                        }, //50
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                        }, //51
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '', //p
                        }, //52
                        {
                            questionTitle: '契約の選択',
                            content: '', //p
                        }, //53
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '契約の選択',
                            content: '正しい',
                        }, //54
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '契約の選択',
                            content: '正しい',
                        }, //55
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '契約の選択',
                            content: '正しい',
                        }, //56
                        {
                            questionTitle: '契約の選択',
                            content: '', //p
                        }, //57
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保障の見直し',
                            content: '正しい',
                        }, //58
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保障の見直し',
                            content: '正しい',
                        }, //59
                        {
                            questionTitle: '保障の見直し',
                            content: '', //p
                        }, //60
                        {
                            questionTitle: '保障の見直し',
                            content: '', //p
                        }, //61
                        {
                            questionTitle: '保障の見直し',
                            content: '', //p
                        }, //62
                        {
                            questionTitle: '社会保障制度',
                            content: '', //p
                        }, //63
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '社会保障制度',
                            content: '正しい',
                        }, //64
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '社会保障制度',
                            content: '正しい',
                        }, //65
                        {
                            questionTitle: '社会保障制度',
                            content: '', //p
                        }, //66
                        {
                            questionTitle: '社会保障制度',
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
                            questionTitle: '契約申込み時の実務',
                            label: 'イ',
                            content: '払い込み',
                        }, //73
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '契約申込み時の実務',
                            label: 'イ',
                            content: '払い込み',
                        }, //74
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '契約申込み時の実務',
                            label: 'ア',
                            content: '診査（告知）',
                        }, //75
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '契約申込み時の実務',
                            label: 'ア',
                            content: 'クーリング・オフ',
                        }, //76
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '契約申込み時の実務',
                            label: 'ア',
                            content: 'お返しします',
                        }, //77
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '隣接業界',
                            label: 'ア',
                            content: '終身共済',
                        }, //78
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '隣接業界',
                            label: 'イ',
                            content: '厚生労働省',
                        }, //79
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '隣接業界',
                            label: 'ア',
                            content: '１年',
                        }, //80
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '隣接業界',
                            label: 'ア',
                            content: '1,000万円以下',
                        }, //81
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '隣接業界',
                            label: 'ア',
                            content: '所得補償保険',
                        }, //82
                    ]"
                />
            </div>
            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
