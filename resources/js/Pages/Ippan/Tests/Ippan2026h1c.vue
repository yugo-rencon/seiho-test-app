<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2026年1月〜6月実施 フォームC";
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
                    questionTitle="生命保険会社の仕組み-①"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '保険業法',
                        '免許', // 問6〜7
                    ]"
                    :labels="[
                        'ア', //6
                        'エ', //7
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="8〜10"
                    questionTitle="生命保険会社の仕組み-②"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '基礎利益',
                        '生命保険契約者保護機構',
                        '禁止', // 問8〜10
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
                    questionRange="11〜13"
                    questionTitle="契約取り扱いの手続き-①"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '仕事の内容',
                        '被保険者',
                        '保険年齢', // 問11〜13
                    ]"
                    :labels="[
                        'イ', //11
                        'ウ', //12
                        'カ', //13
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="14〜15"
                    questionTitle="契約取り扱いの手続き-②"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '正確なものを新しく発行',
                        '50,000円', // 問14〜15
                    ]"
                    :labels="[
                        'ウ', //14
                        'イ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜17"
                    questionTitle="契約の選択-①"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '環境',
                        '契約内容登録制度', // 問16〜17
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
                    questionTitle="契約の選択-②"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '面接',
                        '割増保険料',
                        '特別条件', // 問18〜20
                    ]"
                    :labels="[
                        'ア', //18
                        'ウ', //19
                        'カ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜23"
                    questionTitle="隣接業界-①"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '終身共済',
                        '厚生労働省',
                        '小口', // 問21〜23
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
                    questionTitle="隣接業界-②"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '１年',
                        '1,000万円', // 問24〜25
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
                    questionTitle="生命保険の種類"
                    :contents="[
                        // rev: 2026-08-28 確認済み
                        '正しい',
                        '正しい',
                        '一般勘定 → 特別勘定', //p20
                        '契約時に定めた保険金額（基本保険金額）は[[保証されている]]。', //p20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="照会・苦情時の対応"
                    :contents="[
                        // rev: 2026-08-29 確認済み
                        '正しい',
                        '所属会社の専門の担当者を頼りにせず → 判断のつかない事項は専門の担当者に確認', //p106
                        '正しい',
                        '契約者に代わって行うことができる → 行うことができない（委任状があれば可能）', //p107
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
                    questionTitle="契約申込み時の実務"
                    :contents="[
                        // rev: 2026-08-27 確認済み
                        '正しい',
                        '正しい',
                        '生命保険会社の指定した医師の診査を受けたあとは、[[加入の意思が明確であるとみなされるため、契約申込みの撤回などの取り扱いはできない]]。', //p47
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="保障の見直し"
                    :contents="[
                        // rev: 2026-08-29 確認済み
                        '正しい',
                        '説明の際には、契約者に対し、転換前と転換後の契約に関する重要な事項を対比して記載した書面を[[交付する必要がある]]。', //p93
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会保障制度"
                    :contents="[
                        // rev: 2026-08-28 確認済み
                        '雇用保険法 → 生活保護法', //p112
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
                            // rev: 2026-08-25 確認済み
                            questionTitle: '私たちの役割と心がまえ',
                            content: '正しい',
                        }, //48
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '私たちの役割と心がまえ',
                            content: '正しい',
                        }, //49
                        {
                            // rev: 2026-08-29 確認済み
                            questionTitle: '私たちの役割と心がまえ',
                            content: '預金保険法等 → 保険業法等', //p11
                        }, //50
                        {
                            // rev: 2026-08-29 確認済み
                            questionTitle: '私たちの役割と心がまえ',
                            content: '保険事故の発生による保障の提供時期は、[[契約締結時とは時間的にずれることがほとんどである]]。', //p12
                        }, //51
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '私たちの役割と心がまえ',
                            content: '正しい',
                        }, //52
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //53
                        {
                            // rev: 2026-08-29 確認済み
                            questionTitle: '正しい告知の取り扱い',
                            content: '契約確認は、[[契約の成立前に行われる場合と成立後に行われる場合]]がある。', //p85
                        }, //54
                        {
                            // rev: 2026-08-28 確認済み
                            questionTitle: '正しい告知の取り扱い',
                            content: '１年 → ２年', //p86-87
                        }, //55
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //56
                        {
                            // rev: 2026-08-28 確認済み
                            questionTitle: '正しい告知の取り扱い',
                            content: 'この場合、すでに払い込んだ保険料は[[返還されない]]。', //p87
                        }, //57
                        {
                            // rev: 2026-08-29 確認済み
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '既払込保険料総額の範囲内 → 解約返戻金の一定範囲内',
                        }, //58
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '正しい',
                        }, //59
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '正しい',
                        }, //60
                        {
                            // rev: 2026-08-29 確認済み
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '各種特約が付いた契約の場合には、その特約部分は変更後、[[消滅する]]。', //p95
                        }, //61
                        {
                            // rev: 2026-08-29 確認済み
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '全くない場合はない → 全くない場合もある', //p99
                        }, //62
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
                        }, //63
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
                        }, //64
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
                        }, //65
                        {
                            // rev: 2026-08-29 確認済み
                            questionTitle: 'お客さまニーズへの対応',
                            content: '福祉販売 → 設計販売', //p136
                        }, //66
                        {
                            // rev: 2026-08-25 確認済み
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
                            questionTitle: '保険金・給付金の請求と支払い',
                            label: 'ア',
                            content: '注意喚起情報',
                        }, //73
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保険金・給付金の請求と支払い',
                            label: 'ア',
                            content: '連絡先',
                        }, //74
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保険金・給付金の請求と支払い',
                            label: 'イ',
                            content: '公序良俗',
                        }, //75
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保険金・給付金の請求と支払い',
                            label: 'イ',
                            content: '生命保険会社',
                        }, //76
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保険金・給付金の請求と支払い',
                            label: 'ア',
                            content: '故意に',
                        }, //77
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '相続の法律',
                            label: 'イ',
                            content: '３/４',
                        }, //78
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '相続の法律',
                            label: 'ア',
                            content: '放棄',
                        }, //79
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '相続の法律',
                            label: 'イ',
                            content: '単純承認',
                        }, //80
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '相続の法律',
                            label: 'イ',
                            content: '限定承認',
                        }, //81
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '相続の法律',
                            label: 'ア',
                            content: 'みなし相続財産',
                        }, //82
                    ]"
                />
            </div>
            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
