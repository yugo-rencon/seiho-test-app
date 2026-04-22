<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "ファイナンシャルプランニングとコンプライアンス";
const subject = "2022年度 フォームB";
const isDraft = false;
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 py-10 text-gray-800">
            <Pagetitle :title="title" :description="subject" />

            <DraftNotice v-if="isDraft" />

            <div class="mx-auto mt-4 max-w-4xl space-y-2">
                <QuestionTemp1
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="生保FPの必要性と役割"
                    :relatedProblems="[]"
                    :contents="[
                        '弁護士、税理士、不動産の専門家などとは全く別の視点で → 弁護士、税理士、不動産の専門家などの協力を得ながら', //p1
                        '①法人の金融資産の増大 → 個人の金融資産の増大<br>②規制金利市場の拡大 → 金融の自由化', //p2
                        '標準的・定型的な設計 → オーダーメイド設計', //p2
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="ライフプランニングの基礎"
                    :relatedProblems="[]"
                    :contents="[
                        '生保FPが決めていく姿勢 → 生保FPがお客さまの希望を聞き出す姿勢', //p6
                        '正しい',
                        'キャッシュフロー表 ↔︎ ライフサイクル表', //p6
                        'ストックは含まない → 含む', //p7
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="キャッシュフロー表の作成"
                    :relatedProblems="[]"
                    :contents="[
                        '額面給与から税金や社会保険料を差し引く前の額 → 差し引いた後の額<br>給与天引きの社内積立や生命保険料を等を差し引いた後の額 → 差し引く前の手取額', //p8
                        '住宅ローンの返済額は含めない → 住宅ローンの返済額を含む', //p8
                        '正しい',
                        '今後も上昇しないと予測し、見直しは行わない → 5年後、10年後の金利は上昇するものと予測して、将来の運用利率も予測しキャッシュフロー表に反映', //p9
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="ローンの種類"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '金利が高くなっている → 低くなっている', //p34
                        '有担保では審査がない → 無担保・有担保問わず審査がある', //p34
                        '銀行は緩やかで、信販会社などは厳しい → 銀行が一番厳しく、信販会社などは緩やか', //p34
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="住宅取得資金計画"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '各金融機関でほとんど差がない → ライフプランの多様化に伴い、そのニーズに対応した特徴ある独自のローンが開発されている', //p42
                        '購入金額の5割以上 → 購入金額の2割以上', //p49
                        '明確にすることは必要はない → 明確にする必要がある（時代によって価値観は変わるから）', //p40
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="資金運用の3要素による金融商品の分類"
                    :relatedProblems="[]"
                    :contents="[
                        '国債は、安全性の高い商品の据置型', //p63
                        '一時払養老保険は、安全性の高い商品の据置型', //p63
                        '財形貯蓄は、安全性の高い商品の積立型', //p63
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融商品のリスク"
                    :relatedProblems="[]"
                    :contents="[
                        '資産運用における集中投資 → 資産運用における分散投資', //p68
                        '一部ではあるが存在している → 存在しない', //p67
                        '常にひとつの商品の長所と短所で考えることが重要 → ポートフォリオの視点で考えることが重要', //p67
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後の資金運用"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '生活資金 → 予備資金', //p79
                        '予備資金 → 生活資金', //p79
                        '基本的に収益性が原則 → 基本的に安全性が原則<br>収益性に特化した → 収益性・安全性・流動性のバランスが取れた', //p79
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後の保障"
                    :relatedProblems="[]"
                    :contents="[
                        '保険料の自己負担額を減らすことが必要 → 医療保障の充実が必要', //p80
                        '家族特約で確保するしかない → 単体で準備するのが望ましい（夫死亡時に保障が消失）', //p80
                        '正しい',
                        '4割の自己負担 → 1割（一定以上所得のある人は2割または3割）', //p80
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡保険金の活用方法等"
                    :relatedProblems="[]"
                    :contents="[
                        'アドバイスすることまでは求められていない → アドバイスをするのが重要な役割', //p84
                        '子どもの病気やケガに備えることが第一に必要 → 妻が家計の大黒柱となるため妻の保障も必要', //p84
                        '正しい',
                        '障害者等の特別マル優は利用できない → 資産運用に利用可能', //p86
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業法"
                    :relatedProblems="[]"
                    :contents="[
                        '保険監督法：民法と保険法 → 保険業法<br>保険取引法：保険業法 → 民法と保険法', //p114
                        '正しい',
                        '保険業法と保険法が中心 → 民法と保険法が中心', //p114
                        '保険事業および銀行業 → 保険事業のみ', //p114
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者契約法に定める不適切な説明と不適切な行為"
                    :relatedProblems="[]"
                    :contents="[
                        '故意に不実のことを告げることが必要要件であり、誤った説明をしたとしても不実告知に該当しない → 故意に不実のことを告げることは必要要件ではなく、誤った説明をしていれば不実告知に該当する', //p141
                        '正しい',
                        '不利益事実の不告知に該当しない → 該当する', //p142
                        '間接的な表現や身振り手振りも退去すべき旨の意思表示に含まれる', //p142
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融ビッグバンによる金融システムの規制緩和後の資産運用"
                    :relatedProblems="[]"
                    :contents="[
                        '外為の規制強化 → 規制緩和<br>金融機関の垣根の拡大 → 垣根の撤廃<br>外国資本の参入制限 → 参入', //p4
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="リスクマネジメント"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '生命保険だけ → 生命保険と損害保険', //p16
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="ローンの返済方法"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        'アドオン方式 → リボルビング（回転信用）方式', //p36
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="ローン金利の種類"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        'カードローンやキャッシングは変動金利型ローン → 固定金利型ローン', //p36
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="教育資金設計"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '必要保障額に子どもの教育資金は含めない → 教育資金を含めることになる', //p56
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="分散投資"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '円を除いた → 円を含む', //p68
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後生活設計の考え方"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '雇用確保措置で定められた60歳定年を前提としたコンサルティング → 雇用確保措置で60歳定年という概念がなくなり、個々の老後生活設計に応じたコンサルティング', //p70
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険を活用した相続対策"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '法定相続分相当額以上 → 遺留分相当額以上', //p99
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="2016年（平成28年）5月施行の保険業法の主な改正内容"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '契約締結後に意向確認 → 契約締結前に意向確認', //p117
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険募集と禁止行為"
                    :relatedProblems="[]"
                    :contents="[
                        '禁止行為に該当しない → 該当する', //p132
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険法における保険募集に関連する規定"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '遅滞の責任を負わない → 遅滞に責任を負う（遅延利息の支払いなど）', //p160
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人情報の保護に関する法律（個人情報保護法）"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        'アフターサビスのために利用することが認められている → 法令で限定的に定められている利用範囲を超えたマイナンバーの収集・利用はしてはいけない', //p169
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="住宅借入金等特別控除（住宅ローン控除）"
                    :relatedProblems="[]"
                    :contents="[
                        '税額控除',
                        '確定申告',
                        '年末調整',
                        '6',
                        '適用となる', // 問25〜29
                    ]"
                    :labels="[
                        'イ', //25
                        'コ', //26
                        'ケ', //27
                        'ウ', //28
                        'オ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="保険業法の主要内容"
                    :relatedProblems="[]"
                    :contents="[
                        '損害保険業',
                        '公正',
                        '公衆の縦覧',
                        'ソルベンシー・マージン比率',
                        '支払余力', // 問30〜34
                    ]"
                    :labels="[
                        'エ', //30
                        'オ', //31
                        'ア', //32
                        'ク', //33
                        'コ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="生命保険相談所・裁定審査会"
                    :relatedProblems="[]"
                    :contents="[
                        '生命保険協会',
                        '連絡所',
                        '1ヶ月',
                        '金融ADR',
                        '業務規程', // 問35〜39
                    ]"
                    :labels="[
                        'ア', //35
                        'ク', //36
                        'ウ', //37
                        'カ', //38
                        'オ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問40〜49
                        {
                            questionTitle: 'FP（ファイナンシャル・プランナー）',
                            relatedProblems: [],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: 'ローンの種類',
                            relatedProblems: [],
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '財形住宅融資',
                            relatedProblems: [],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '住宅ローンの繰上げ返済',
                            relatedProblems: [],
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '健康保険の任意継続被保険者',
                            relatedProblems: [],
                            content: '全被保険者の平均のいずれか高い方の額 → 全被保険者の平均のいずれか低い方の額', //p76
                        }, //44
                        {
                            questionTitle: '相続対策のポイント',
                            relatedProblems: [],
                            content: '相続人の年齢 → 相続人の数', //p89
                        }, //45
                        {
                            questionTitle: '経営破綻した場合の契約条件の変更',
                            relatedProblems: [],
                            content: '原則70% → 原則90%', //p123
                        }, //46
                        {
                            questionTitle: 'コンプライアンスの重要性',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '保険募集における違法行為',
                            relatedProblems: [],
                            content: '行政処分の対象とならない → 行政処分の対象となることがある', //p138
                        }, //48
                        {
                            questionTitle: '犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）',
                            relatedProblems: [],
                            content: '拒むことはできない → 拒むことができる免責規定を設けている', //p162
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.fp2022a" next-route="daigaku.fp2022c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
