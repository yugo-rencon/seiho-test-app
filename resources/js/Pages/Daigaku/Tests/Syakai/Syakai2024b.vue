<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "社会保障制度";
const subject = "2024年度 フォームB";
const isDraft = true;
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 py-10 text-gray-800">
            <Pagetitle :title="title" :description="subject" />

            <div class="mx-auto mt-4 max-w-4xl space-y-2">
                <QuestionTemp1
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会保障制度"
                    :relatedProblems="['2024a1', '2024b1', '2024c1']"
                    :contents="[
                        // rev: 2026-10-08 確認済み
                        '正しい',
                        '公的扶助制度 → 社会扶助制度', //p4
                        '社会扶助制度 → 公的扶助制度', //p4
                        '保健医療制度 → 社会福祉制度', //p4
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="国民年金の被保険者"
                    :relatedProblems="['2024b2']"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '正しい',
                        '[[第２号被保険者の保険料]]は、標準報酬月額や標準賞与額に応じて決まり、保険料の半額を勤務先が負担し、残額を本人負担分として給与および賞与より徴収（給与天引き）されている。', //p14
                        '第３号被保険者 → 第２号被保険者', //p14
                        '65歳を過ぎて → 60歳を過ぎて<br>保険料免除等が適用される → 保険料免除等は適用されない', //p15
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="厚生年金保険の仕組み"
                    :relatedProblems="['2024a3', '2024b3', '2024c3']"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '厚生年金保険の給付には、年金給付としての老齢・障害・遺族の各年金給付、[[一時金給付としての障害手当金等がある]]。', //p19
                        '75歳未満 → 70歳未満', //p20
                        '正しい',
                        '賞与等が支給された場合は、標準賞与額（賞与等の[[1,000円未満]]は切捨て。１回の賞与等の額が[[150万円]]を超える場合は[[150万円]]とする）に所定の保険料率を乗じて計算する。', //p21
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="厚生年金保険の標準報酬（月）額と保険料"
                    :relatedProblems="['2024b4']"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '標準報酬月額は、毎年[[４・５・６月]]の間に実際に支給された給与をもとに決定され、[[９月から翌年８月まで]]の被保険者の保険料計算の基礎として使用する。', //p21
                        '正しい',
                        '厚生年金保険の保険料の計算には、[[年金額の計算と同様に月給にも賞与にも同一の保険料率を用いて計算が行われる「総報酬制」が導入されている]]。', //p21
                        '育児休業等期間中の厚生年金保険料は、[[本人負担分に加え、事業主負担分も免除される]]。', //p22
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度の遺族給付"
                    :relatedProblems="['2024b5', '2024c5']"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '配偶者とは、法律上の配偶者のみではなく、[[事実婚（内縁関係）を含む]]。', //p54
                        '遺族基礎年金の受給額は、国民年金に加入していた期間にかかわらず定額であり、新規裁定者の場合、[[子の人数に応じて加算額が上乗せされる]]。', //p56
                        '寡婦年金は60歳から65歳になるまでの最長５年間支給される有期年金。', //p57
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="医療保険制度の概要"
                    :relatedProblems="['2024a6', '2024b6', '2024c6']"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '介護保険制度の導入により、高齢者医療の一部が介護保険に移行したが、[[期待された程の財政面での改善効果は見られず、今後とも財政的に厳しいものにならざるを得ない]]。', //p81
                        '国民健康保険制度では、世帯構成員のそれぞれが被保険者となり、[[被扶養者という区別はない]]。', //p85
                        '正しい',
                        '被用者保険諸制度の保険料は、各被保険者の標準報酬月額および[[標準賞与額]]に保険料率を乗じて算出される', //p86
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="国民年金の遺族基礎年金"
                    :relatedProblems="['2024b7']"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '子のない夫婦の夫が死亡したときでも、妻が妊娠中の場合は、[[その子が誕生した月の翌月]]から妻に遺族基礎年金が支給される。', //p54
                        '子が[[18歳]]到達年度の末日（障害等級１級・２級の場合は[[20歳]]）に達するまでの有期年金である。', //p54
                        '２年に１回 → 毎年度', //p56
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="健康保険"
                    :relatedProblems="['2024b8']"
                    :contents="[
                        // rev: 2026-10-09 確認済み
                        '被保険者の業務災害・通勤災害等の事由による疾病等については[[保険給付は行われず]]、これについては労働者災害補償保険法または労働基準法に基づく療養補償等の対応がなされている。', //p88
                        '健康保険の加入や保険料の納付の手続きは、[[日本年金機構（年金事務所）]]で行っている。', //p88
                        '正しい',
                        '出産育児一時金や出産手当金など出産にかかる給付もある。', //p90
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="介護保険制度の費用負担"
                    :relatedProblems="['2024b9', '2024c9']"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '第２号被保険者の保険料は、[[被用者保険ではそれぞれの被保険者が所属する医療保険（健康保険、船員保険、各種共済組合）ごとに算出される]]。算出された介護保険料は、医療保険料に上乗せする形で給与から天引きされる。', //p111
                        '一律３割相当額 → １割から３割相当額', //p112
                        '同じ月に利用したサービスの、[[１割から３割の利用者負担の合計額]]（同じ世帯に複数の利用者がいる場合には、世帯合計額）が高額になると、一定額を超えた部分が高額介護サービス費として[[申請により後日支給される]]。', //p113
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="労働保険制度の現状と課題"
                    :relatedProblems="['2024b10']"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '正しい',
                        '[[精神障害に関する事案の労災請求件数が最も多く]]、次いで脳・心臓疾患に関する事案の順となっている。', //p129
                        '前年度に比べて増加 → 減少', //p
                        '官民あげての子育て支援の成果からか、育児休業給付の支払実績は[[増えつつある]]。', //p130
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="雇用保険の給付と公的年金との調整等"
                    :relatedProblems="['2024a11', '2024b11', '2024c11']"
                    :contents="[
                        // rev: 2026-10-09 確認済み
                        '原則８ヵ月 → 原則１年', //p127
                        '正しい',
                        '高年齢雇用継続給付を受けている者が、老齢厚生年金を受給できるときは、在職による年金の支給停止に加え、特別支給の老齢厚生年金の[[一部が支給停止]]される。', //p127
                        '賃金の60％以上 → 賃金の75％以上', //p128
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="健康保険の任意継続被保険者と一般被保険者との違い・特色（協会けんぽの場合）"
                    :relatedProblems="['2024a12', '2024b12']"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '正しい',
                        'いずれか高い方 → いずれか低い方', //p140
                        '保険料は[[全額自己負担]]となる。', //p140
                        '前納保険料は、[[前納期間に応じて割引がある]]。', //p141
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会保険制度"
                    :relatedProblems="['2024a13', '2024b13', '2024c13']"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '正しい',
                        '社会保険制度には、年金・医療・介護・[[労災]]・[[雇用]]の各制度がある。', //p5
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="国民年金（基礎年金）の付加保険料"
                    :relatedProblems="['2024b14']"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '付加年金額、付加保険料は物価や賃金等の変動の影響を受けず、[[定額となっている]]。', //p18
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="厚生年金保険の在職老齢年金"
                    :relatedProblems="['2024a5', '2024b15']"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '在職老齢年金は働きながら受け取ることができるが、[[収入に応じて減額または停止される]]。', //p40
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金等の課税関係"
                    :relatedProblems="['2024a16', '2024b16', '2024c16']"
                    :contents="[
                        // rev: 2026-10-09 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '公的年金等の雑所得金額 ＝ [[公的年金等の額（税込み） − 公的年金等控除額]]', //p68
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険診療の仕組み"
                    :relatedProblems="['2024b17']"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '保険者は、[[審査支払機関を通じて]]医療機関等に請求金額を支払う。', //p84
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="国民健康保険"
                    :relatedProblems="['2024a19', '2024b18', '2024c7']"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '従来[[市区町村]]により運営されていたが、2018年（平成30年）度より財政運営の責任主体が[[都道府県]]に移管されている。', //p91
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="高額療養費"
                    :relatedProblems="['2024a7', '2024b19', '2024c18']"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '自己負担限度額は[[被保険者の所得と年齢により異なる]]。', //p97
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="介護保険の適用除外者"
                    :relatedProblems="['2024a23', '2024b20', '2024c23']"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '６カ月以下 → ３カ月以下', //p135
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="介護保険制度の要介護（要支援）の認定"
                    :relatedProblems="['2024a21', '2024b21', '2024c21']"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '必ず被保険者本人 → 被保険者本人や家族', //p104
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="労災保険（労働者災害補償保険）制度"
                    :relatedProblems="['2024a22', '2024b22', '2024c22']"
                    :contents="[
                        // rev: 2026-10-09 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '療養補償等給付 → 傷病補償等年金', //p120
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="雇用保険制度"
                    :relatedProblems="['2024a10', '2024b23', '2024c10']"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '10時間以上 → 20時間以上', //p128
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="離婚時の厚生年金保険の分割制度"
                    :relatedProblems="['2024a24', '2024b24', '2024c47']"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '正しい',
                        '受給資格要件にも分割を受けた部分は[[算入されない]]。', //p152
                        '正しい',
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="公的年金制度"
                    :relatedProblems="['2024a25', '2024a40', '2024b25', '2024b40', '2024c25', '2024c40']"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '公平化',
                        '被保険者区分',
                        '厚生年金保険',
                        '賦課方式',
                        '半数近く',
                    ]"
                    :labels="[
                        'カ', //25
                        'ウ', //26
                        'ア', //27
                        'オ', //28
                        'ケ', //29
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="厚生年金保険の適用事業所"
                    :relatedProblems="['2024b30', '2024c2']"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '業態',
                        '5人',
                        '農林水産業',
                        '2分の1',
                        'できない',
                    ]"
                    :labels="[
                        'ク', //30
                        'エ', //31
                        'キ', //32
                        'オ', //33
                        'カ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="介護保険制度のおかれている状況"
                    :relatedProblems="['2024b35']"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '自立支援',
                        '75歳',
                        '介護サービス',
                        '公費',
                        '第1号被保険者',
                    ]"
                    :labels="[
                        'イ', //35
                        'オ', //36
                        'ク', //37
                        'カ', //38
                        'エ', //39
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-10-11 確認済み
                            questionTitle: '公的年金制度',
                            relatedProblems: ['2024a25', '2024a40', '2024b25', '2024b40', '2024c25', '2024c40'],
                            content: '公的年金制度は、[[日本国内に住所のある20歳以上60歳未満の者]]が加入する国民年金からの給付である基礎年金に厚生年金保険が乗る二階建ての構成となっている。なお、これまで公的年金制度のひとつに共済年金があったが、2015年（平成27年）10月に[[厚生年金保険]]との一元化が図られている。', //p12
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '労働保険料',
                            relatedProblems: ['2024b41', '2024c41'],
                            content: '正しい',
                        }, //41
                        {
                            // rev: 2026-10-09 確認済み
                            questionTitle: '標準報酬（月）額と厚生年金保険料',
                            relatedProblems: ['2024a42', '2024b42', '2024c42'],
                            content: '昇給等により、給与の３カ月平均額に、[[２等級以上]]の変動が生じた場合は随時改定が行われる。', //p21
                        }, //42
                        {
                            // rev: 2026-10-11 確認済み
                            questionTitle: '遺族厚生年金の年金額',
                            relatedProblems: ['2024a43', '2024b43', '2024c43'],
                            content: '長期・短期の両方に該当するときは、[[有利な方]]を選択することができる。', //p61
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '在職定時改定',
                            relatedProblems: ['2024b44'],
                            content: '正しい',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '自由診療',
                            relatedProblems: ['2024a45', '2024b45', '2024c45'],
                            content: '正しい',
                        }, //45
                        {
                            // rev: 2026-10-09 確認済み
                            questionTitle: '後期高齢者医療制度（長寿医療制度）',
                            relatedProblems: ['2024a20', '2024b46', '2024c20'],
                            content: '医療費の患者負担分を除いた保険給付総額について、１割を被保険者の保険料として課し、[[４割]]を現役世代の各医療制度、[[５割]]を公費（国・都道府県・市区町村）で負担している。', //p93
                        }, //46
                        {
                            // rev: 2026-10-11 確認済み
                            questionTitle: 'ケアマネジャー',
                            relatedProblems: ['2024a46', '2024b47'],
                            content: 'ケアプラン作成におけるケアマネジャーに対する報酬は[[介護保険から全額支払われ、利用者の負担はない]]。', //p106
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '年金請求書の受付',
                            relatedProblems: ['2024a48', '2024b48', '2024c48'],
                            content: '正しい',
                        }, //48
                        {
                            // rev: 2026-10-11 確認済み
                            questionTitle: '公的年金の支給',
                            relatedProblems: ['2024b49'],
                            content: '奇数月 → 偶数月', //p150
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.syakai2024a" next-route="daigaku.syakai2024c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
