<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険と税・相続";
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
                    questionTitle="所得の種類"
                    :relatedProblems="['2021a1', '2021b1', '2021c1']"
                    :contents="[
                        // rev: 2026-06-09 確認済み
                        '金銭で受領せずに商品等の現物を支給される、いわゆる現物給与も給与所得として[[課税対象となる]]。', //p10
                        '正しい',
                        '[[総合課税の対象となる譲渡所得と分離課税の対象となる譲渡所得があり]]、また、資産の譲渡でも譲渡所得に該当しない所得がある。', //p20
                        '配当所得 → 一時所得', //p12
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の申告と納税"
                    :relatedProblems="['2021c2']"
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
                    questionTitle="個人住民税の知識"
                    :relatedProblems="['2021c3']"
                    :contents="[
                        '', //p
                        '正しい',
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="所得税の配偶者控除と配偶者特別控除、扶養控除"
                    :relatedProblems="['2021c4']"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="遺贈・遺言と遺留分"
                    :relatedProblems="['2021a5', '2021b5', '2021c5']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '正しい',
                        '普通の方式としては、自筆証書遺言、[[公正証書遺言]]、秘密証書遺言が認められている。', //p104
                        '遺産の分割 → 遺言の執行', //p106
                        '遺留分の放棄を行うためには被相続人の[[生存中]]に家庭裁判所の許可が必要である。', //p107
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="みなし相続財産"
                    :relatedProblems="['2021a19', '2021c6']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '[[被相続人が負担した保険料に応じた一部の額]]が相続財産とみなされる。', //p116
                        '被相続人の死亡により、相続人、その他の人の受け取る弔慰金等については、[[実質的に退職手当金等と認められるものを除き、原則として課税されない]]。', //p117
                        'その契約に関する権利を相続または遺贈により取得したものとみなして[[相続税の課税対象となる]]。', //p117
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税の税額計算・申告・納付等"
                    :relatedProblems="['2021c7']"
                    :contents="[
                        // rev: 2026-06-14 確認済み
                        '贈与税は、その年の[[1月1日から12月31日まで]]の間に贈与を受けた財産の価額の合計額に対して課税される。', //p147
                        '正しい',
                        '贈与税の申告書の提出期限は、贈与を受けた年の[[翌年2月1日から3月15日まで]]である。', //p149
                        '3年 → 5年', //p150
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続時精算課税制度"
                    :relatedProblems="['2021a8', '2021b8', '2021c8']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '相続時精算課税制度の適用対象者は、60歳以上の贈与者の推定相続人である子または孫で、[[子の代襲相続人も含む]]。', //p156
                        '相続時精算課税制度の適用対象となる贈与財産の種類、金額、[[贈与回数に制限はない]]。', //p155
                        '1月25日から3月15日 → 2月1日から3月15日', //p155
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="入院給付金等に関する税務"
                    :relatedProblems="['2021a9', '2021b9', '2021c9']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '入院給付金や高度障害保険金等は被保険者本人が受け取るが、[[被保険者の配偶者もしくは直系血族または生計を一にするその他の親族が受け取った場合も、被保険者と同様に非課税となる]]。', //p176-177
                        '正しい',
                        '年をまたぐ入院の場合、たとえば12月末に本年分の入院費を支払い、翌年退院時に残額を支払ったときには、[[入院給付金も本年対応分と翌年対応分とに分けて差し引く]]。', //p177
                        '医療費控除の確定申告により還付申告をする際には、交通事故等により、医療費控除の対象となる被害者（生計を一にする家族を含む）が受け取った治療費の金額（損害賠償金）も、支払った医療費から[[差し引いて申告しなければならない]]。', //p177
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険を活用した相続対策"
                    :relatedProblems="['2021a10', '2021b22', '2021c10']"
                    :contents="[
                        // rev: 2026-06-18 確認済み
                        '死亡保険金額の設定は、[[生命保険の加入による相続税の増加分を見込んで]]、死亡保険金の加算によって相続財産がそのまま残るように保険金額を計算する。', //p185
                        '3割 → 2割', //p189
                        '正しい',
                        '個人が生命保険契約の保険契約者および保険金受取人を変更しても、[[変更時点では課税されず]]、「解約」「満期」「死亡」により契約が終了し、保険金等が支払われる時点で、課税関係が発生する。', //p195
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="同族会社"
                    :relatedProblems="['2021c11']"
                    :contents="[
                        '正しい',
                        '', //p
                        '', //p
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税の申告・納付・処分"
                    :relatedProblems="['2021c12']"
                    :contents="[
                        '', //p
                        '', //p
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="住宅借入金等特別控除（住宅ローン控除）"
                    :relatedProblems="['2021a13', '2021b13', '2021c13']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="青色申告制度"
                    :relatedProblems="['2021a14', '2021c14']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '正しい',
                        '青色申告者が備え付けるべき帳簿書類は、年末に「貸借対照表」と「損益計算書」を作成することができるような正規の複式簿記に基づく帳簿でなければならない。ただし、[[簡易帳簿によって記録することもできる]]。', //p40
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険料控除"
                    :relatedProblems="['2021b3', '2021c15']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '正しい',
                        '', //p
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金等についての税金の知識"
                    :relatedProblems="['2021a4', '2021b16', '2021c16']"
                    :contents="[
                        // rev: 2026-06-13 確認済み
                        '正しい',
                        '公的年金等の受給者全員が[[源泉徴収の対象となるわけではない]]。', //p86
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続人"
                    :relatedProblems="['2021a17', '2021b17', '2021c17']"
                    :contents="[
                        // rev: 2026-06-14 確認済み
                        '正しい',
                        '[[他へ養子に行った子]]、嫁に行った娘も[[相続人となる]]（特別養子を除く）。', //p93
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続分"
                    :relatedProblems="['2021c18']"
                    :contents="[
                        '', //p
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続財産の評価"
                    :relatedProblems="['2021b18', '2021c19']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="贈与税"
                    :relatedProblems="['2021a7', '2021c20']"
                    :contents="[
                        // rev: 2026-06-14 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '5年 → 2年', //p145
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="こども保険に関する税務"
                    :relatedProblems="['2021a21', '2021b21', '2021c21']"
                    :contents="[
                        // rev: 2026-06-18 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '一時所得 → 雑所得', //p166
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約内容等の変更に関する税務（個人契約）"
                    :relatedProblems="['2021c22']"
                    :contents="[
                        '正しい',
                        '正しい',
                        '', //p
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人税"
                    :relatedProblems="['2021a22', '2021b11', '2021c23']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '棚卸資産の評価方法には、[[原価法と低価法がある]]。', //p203
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人向け保険商品の課税関係"
                    :relatedProblems="['2021a24', '2021b24', '2021c24']"
                    :contents="[
                        // rev: 2026-06-18 確認済み
                        '正しい',
                        '加入者が役員または部課長、その他特定の使用人のみの場合、保険料が[[給与課税される]]。', //p236
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="予定納税"
                    :relatedProblems="['2021a25', '2021b25', '2021c25']"
                    :contents="[
                        // rev: 2026-06-20 確認済み
                        '申告納税',
                        '15',
                        '3分の1',
                        '11月1日から11月30日',
                        '5月15日', // 問25〜29
                    ]"
                    :labels="[
                        'ケ', //25
                        'イ', //26
                        'エ', //27
                        'オ', //28
                        'ク', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="所得税の特徴"
                    :relatedProblems="['2021c30']"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問30〜34
                    ]"
                    :labels="[
                        'コ', //30
                        'ケ', //31
                        'イ', //32
                        'キ', //33
                        'ウ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="相続税の申告と納付"
                    :relatedProblems="['2021c35']"
                    :contents="[
                        '',
                        '',
                        '',
                        '',
                        '', // 問35〜39
                    ]"
                    :labels="[
                        'キ', //35
                        'カ', //36
                        'エ', //37
                        'ア', //38
                        'オ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-06-20 確認済み
                            questionTitle: '各種所得と損益通算',
                            relatedProblems: ['2021a40', '2021b40', '2021c40'],
                            content: '正しい',
                        }, //40
                        {
                            questionTitle: '所得税の計算',
                            relatedProblems: ['2021c41'],
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '賦課課税',
                            relatedProblems: ['2021c42'],
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '遺言の効力',
                            relatedProblems: ['2021c43'],
                            content: '',
                        }, //43
                        {
                            questionTitle: '相続税の物納',
                            relatedProblems: ['2021a44', '2021b44', '2021c44'],
                            content: '',
                        }, //44
                        {
                            // rev: 2026-06-15 確認済み
                            questionTitle: '贈与税の課税制度',
                            relatedProblems: ['2021b45', '2021c45'],
                            content: '贈与税の課税制度には、原則的な課税方式である「[[暦年課税]]」と、一定の要件に当てはまる場合に選択することができる「[[相続時精算課税]]」の２つがあり、受贈者は贈与者ごとに異なる課税方法を選択することができる。', //p146
                        }, //45
                        {
                            questionTitle: '保証期間付終身年金の課税',
                            relatedProblems: ['2021a46', '2021c46'],
                            content: '正しい',
                        }, //46
                        {
                            questionTitle: 'リビング・ニーズ特約',
                            relatedProblems: ['2021a47', '2021b47', '2021c47'],
                            content: '',
                        }, //47
                        {
                            questionTitle: '法人税の受取配当等の益金不算入',
                            relatedProblems: ['2021a48', '2021c48'],
                            content: '',
                        }, //48
                        {
                            questionTitle: '法人契約の個人年金の配当金の税務',
                            relatedProblems: ['2021b49', '2021c49'],
                            content: '',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.zei2021b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
