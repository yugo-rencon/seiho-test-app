<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "ファイナンシャルプランニングとコンプライアンス";
const subject = "2021年度 フォームC";
const isDraft = true;
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
                    questionTitle="生命保険FPの役割"
                    :relatedProblems="[]"
                    :contents="[
                        '弁護士、税理士、不動産の専門家などとは全く異なる視点で → 弁護士、税理士、不動産の専門家などの協力を得ながら', //p1
                        '②規制金利市場の拡大 → ②金融の自由化', //p2
                        '正しい',
                        '標準的・一般的な設計 → オーダーメイド設計', //p2
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="キャッシュフロー表の収支項目の定義"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="ローン金利の種類"
                    :relatedProblems="[]"
                    :contents="[
                        'カードローンやキャッシングは変動金利型ローン → 固定金利型ローン', //p36
                        '固定金利期間の長いもの → 短いもの', //p
                        '低金利時：変動金利型ローンが有利 → 固定金利型ローンが有利<br>高金利時：固定金利型ローンが有利 → 変動金利型ローンが有利', //p38
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="資金運用の3要素による金融商品の分類"
                    :relatedProblems="[]"
                    :contents="[
                        'スーパー定期預金は、安全性の高い商品の据置型', //p63
                        '国債は、安全性の高い商品の据置型', //p63
                        '正しい',
                        'MRFは、流動性の高い商品', //p63
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="住宅ローンの知識"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '5年以上継続して加入 → 1年以上継続して加入<br>残高が30万円以上 → 残高が50万円以上', //p41
                        '3通り → 2通り（保険型は含まれない）', //p44
                        '利息軽減型は、返済額軽減型の方が大きい → 期間短縮型（中抜き方式）の方が大きい', //p46
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融商品のリスク"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '常にひとつの商品の長所と短所で考えることが重要 → ポートフォリオの視点で考えることが重要', //p67
                        '潜在化 → 顕在化', //p66
                        '資産運用における集中投資 → 資産運用における分散投資', //p68
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後の保障"
                    :relatedProblems="[]"
                    :contents="[
                        'リスクに備えた死亡保障を必ず確保する必要がある → リスクに備えて死亡保障を確保する必要性は薄い', //p79
                        '保険料の自己負担額を減らすことが必要 → 医療保障の充実が必要', //p80
                        '家族特約で確保するしかない → 単体で準備するのが望ましい（夫死亡時に保障が消失）', //p80
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続対策"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続時精算課税制度"
                    :relatedProblems="[]"
                    :contents="[
                        '55歳以上の父母または祖父母 → 60歳以上の父母または祖父母', //p90
                        '正しい',
                        '限度額1500万円 → 限度額2500万円', //p90
                        '受贈者は本制度の適用を贈与者である父母や祖父母ごとに選択することはできない → 父母や祖父母ごとに選択可能', //p90
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="生前贈与を利用して生命保険を活用する場合の留意点"
                    :relatedProblems="[]"
                    :contents="[
                        '契約初年度のみ → 毎年', //p103
                        '正しい',
                        '贈与者が管理する → 受贈者が管理する', //p103
                        '生命保険料控除を使う → 生命保険料控除を使わない', //p103
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険募集におけるコンプライアンス"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '', //p
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人情報の保護に関する法律（個人情報保護法）"
                    :relatedProblems="[]"
                    :contents="[
                        '生存する個人に関する情報とはならない → 生存する個人に関する情報となる', //p164
                        'お客さまの管理のために利用することが認められている → 法令で限定的に定められている利用範囲を超えたマイナンバーの収集・利用はしてはいけない', //p169
                        '正しい',
                        'どのような場合であっても本人に通知または公表しなければならない → 利用目的を公表することで本人等の権利を害する場合などは通知や公表は不要', //p168
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="ライフプランニングの基礎"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '額面給与から税金や社会保険料を差し引く前の額 → 差し引いた後の額<br>給与天引きの社内積立や生命保険料を等を差し引いた後の額 → 差し引く前の手取額', //p8
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="ライフステージ別の必要資金"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '', //p
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="ローンの種類"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '信販会社などが一番厳しく、銀行は緩やか → 銀行が一番厳しく、信販会社などは緩やか', //p34
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="必要資金の性格と運用の整合性"
                    :relatedProblems="[]"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="ポートフォリオ運用（分散投資）"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '円を除いた → 円を含む', //p68
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="ポートフォリオ"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="死亡保険金の活用方法等"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '子どもの病気やケガに備えることが第一に必要 → 妻が家計の大黒柱となるため妻の保障も必要', //p84
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="老後の資金運用"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '収益性が原則 → 安全性が原則<br>若い間の資金運用は流動性 → 若い間の資金運用は収益性<br>リスクマネジメントを考慮するよりも収益性・安全性に流動性も加えたマネージメントを考慮 → 収益性・安全性に流動性も加えたマネージメントだけでなくリスクマネジメントも考慮', //p79
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険を活用した相続対策"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '課税対象に加えられることを考慮する必要はない → 考慮が必要（生命保険金もみなし相続財産として課税対象）', //p100
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="健全性の基準（ソルベンシー・マージン比率）"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '正しい',
                        '100% → 200%', //記載なし
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険募集と禁止行為（保険業法300条）"
                    :relatedProblems="[]"
                    :contents="[
                        '禁止行為に該当しない → 該当する', //p135
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険法における保険募集に関連する規定"
                    :relatedProblems="[]"
                    :contents="[
                        '正しい',
                        '告知義務違反を理由に契約を解除することができない', //p160
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="教育資金設計"
                    :relatedProblems="[]"
                    :contents="[
                        '元利均等',
                        '育英年金',
                        '5000円〜10000円',
                        '給付型',
                        '経済的', // 問25〜29
                    ]"
                    :labels="[
                        'ア', //25
                        'カ', //26
                        'ケ', //27
                        'キ', //28
                        'オ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="老後生活設計の医療費等"
                    :relatedProblems="[]"
                    :contents="[
                        '14',
                        '20',
                        '2',
                        '全額',
                        '低い', // 問30〜34
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
                    questionTitle="保険業法"
                    :relatedProblems="[]"
                    :contents="[
                        '民法',
                        '公正',
                        '会社法',
                        '保険約款',
                        '事業年度', // 問35〜39
                    ]"
                    :labels="[
                        'カ', //35
                        'ア', //36
                        'エ', //37
                        'キ', //38
                        'コ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問40〜49
                        {
                            questionTitle: '外貨建金融商品の利用',
                            relatedProblems: [],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: 'リスクマネジメント',
                            relatedProblems: [],
                            content: 'リスクマネジメントと切り離す → ライフプランニングとリスクマネジメントは表裏一体', //p14
                        }, //41
                        {
                            questionTitle: '団体信用生命保険',
                            relatedProblems: [],
                            content: '',
                        }, //42
                        {
                            questionTitle: '金融商品のリスク',
                            relatedProblems: [],
                            content: '正しい', //p
                        }, //43
                        {
                            questionTitle: '有担保ローンと無担保ローン',
                            relatedProblems: [],
                            content: '', //p
                        }, //44
                        {
                            questionTitle: '住宅ローンの借換え',
                            relatedProblems: [],
                            content: '正しい', //p
                        }, //45
                        {
                            questionTitle: '後期高齢者医療制度',
                            relatedProblems: [],
                            content: '全額公費負担 → 費用の1割、所定水準以上の所得者の場合2割（現役並の所得者は3割）', //p77
                        }, //46
                        {
                            questionTitle: '経営破綻時の取引制限',
                            relatedProblems: [],
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '犯罪による収益の移転防止に関する法律（犯罪収益移転防止法）',
                            relatedProblems: [],
                            content: '正しい', //p
                        }, //48
                        {
                            questionTitle: '生命保険相談所',
                            relatedProblems: [],
                            content: '', //p
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.fp2021b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
