<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "社会保障制度";
const subject = "2024年度 フォームA";
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
                    :relatedProblems="[]"
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
                    questionTitle="国民年金保険料納付の免除制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-08 確認済み
                        '扶養親族等の有無・数に応じて異なる。', //p16
                        '正しい',
                        '申請免除は[[７月から翌年６月分]]までを１つの単位として免除が決定される。', //p17
                        '保険料納付の特例（猶予）制度 → 追納', //p17
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="厚生年金保険の仕組み"
                    :relatedProblems="[]"
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
                    questionTitle="老齢厚生年金の加給年金"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '正しい',
                        '10年以上 → 20年以上', //p35
                        '特別加算 → 振替加算', //p35
                        '年収700万円以上 → 年収850万円以上', //p36
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionTitle="厚生年金保険の在職老齢年金"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '55歳以降 → 60歳以降', //p40
                        '厚生年金保険に加入しない嘱託やパートタイマーのような働き方をする場合は[[在職老齢年金の制限による年金額調整の対象とはならない]]。', //p40
                        '正しい',
                        '70歳以降は原則、被保険者とはならないが、[[在職老齢年金の仕組みは適用される]]。', //p40
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="医療保険制度の概要"
                    :relatedProblems="[]"
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
                    questionTitle="高額療養費"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '医療費の自己負担が高額になった場合に給付されるもので、収入･所得のランクにより定められている自己負担限度額を超えた部分が[[全額]]給付される。', //p94
                        '多数回該当 → 世帯合算', //p94
                        '給付については１カ月の自己負担額が１つの病院・診療所ごとに自己負担限度額を超えたときに、[[公的医療保険の保険者から超えた分が支給される]]。', //p94
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="介護保険制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '都道府県 → 市区町村', //p101
                        '介護保険の第１号被保険者は[[65歳以上の者]]、第２号被保険者は[[40歳以上65歳未満]]の公的医療保険加入者である。', //p101
                        '介護保険制度においては、給付に必要な費用の[[半分を保険料]]、[[残り半分を公費]]で賄うこととしている。', //p102
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="女性の公的年金（国民年金）に係る種別変更等"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '結婚して夫に扶養されるようになった場合、[[結婚前の職業]]や夫の職業によって手続きが異なる。', //p136
                        'それまで加入していた厚生年金保険の資格喪失の手続きは[[勤務先が行う]]。', //p137
                        '夫の職業が変わるたびに[[自分の年金の手続きが必要になる]]。', //p137
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="雇用保険制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '労働基準監督署 → 公共職業安定所', //p122
                        '雇用保険の保険者は国（政府）であり、[[労働者を雇用するすべての事業所が適用事業所となる]]。', //p122
                        '事業主支援事業 → 雇用安定事業', //p128
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="雇用保険の給付と公的年金との調整等"
                    :relatedProblems="[]"
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
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '４年間 → ２年間', //p140
                        '正しい',
                        '介護保険の第２号被保険者は、[[介護保険料との合算額を納めることとなり、健康保険料だけの一部納付は認められない]]。', //p140
                        '翌月に資格を失う → 翌日に資格を失う', //p141
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会保険制度"
                    :relatedProblems="[]"
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
                    questionTitle="国民年金の給付に要する費用等"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '法定免除に該当した場合、その期間については申請免除の全額免除と同じく、保険料を納付したときの年金額と比べてその[[２分の１]]の額を受給する（平成21年３月までの期間は[[３分の１]]）。', //p16
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="産前産後休業期間および育児休業期間中の厚生年金保険料"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '育児休業等期間中の厚生年金保険料が免除（[[本人負担分に加え、事業主負担分も免除]]）される。', //p22
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
                    :relatedProblems="[]"
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
                    questionTitle="年金受給者の確定申告"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '正しい',
                        '正しい',
                        '本来の税額が源泉徴収税額より少なくなる場合は、[[還付申告ができる]]。', //p71
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度の障害給付"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-09 確認済み
                        '正しい',
                        '正しい',
                        '障害等級１級･２級の場合は、障害基礎年金が支給され、[[厚生年金保険の被保険者であれば、障害厚生年金が二階部分として上乗せされる]]。', //p45
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="国民健康保険"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '国民健康保険は、[[都道府県および市区町村]]が運営する国民健康保険と、[[業界団体等]]が運営する国民健康保険組合に分けられる。', //p91
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="後期高齢者医療制度（長寿医療制度）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-09 確認済み
                        '[[75歳]]（寝たきりなどの障害の状態にある者は[[65歳]]）以上になると、被用者保険や国民健康保険などを[[脱退]]し、すべての者は、都道府県ごとに設置された広域連合による後期高齢者医療制度（長寿医療制度）の被保険者となる。', //p93
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="介護保険制度の要介護（要支援）の認定"
                    :relatedProblems="[]"
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
                    :relatedProblems="[]"
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
                    questionTitle="介護保険の適用除外者"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '40歳以上65歳未満の公的医療保険加入者は、[[介護保険の第2号被保険者となり、特定疾病によって要介護・要支援状態となった場合は、介護保険の給付対象となる]]。', //p135（独自）
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="離婚時の厚生年金保険の分割制度"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '４分の１（25％）に分割 → ２分の１（50％）に分割', //p153
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="公的年金制度"
                    :relatedProblems="[]"
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
                    questionTitle="老齢基礎年金の受給年金額"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '40年',
                        '保険料納付済期間',
                        '保険料免除期間',
                        '生涯',
                        '75歳まで',
                    ]"
                    :labels="[
                        'オ', //30
                        'イ', //31
                        'カ', //32
                        'ウ', //33
                        'キ', //34
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="受給年金の確認（ねんきん定期便）"
                    :relatedProblems="[]"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '誕生月',
                        '35、45、59歳',
                        'も含む',
                        '月ごと',
                        '13カ月',
                    ]"
                    :labels="[
                        'ウ', //35
                        'オ', //36
                        'カ', //37
                        'コ', //38
                        'ク', //39
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
                            relatedProblems: [],
                            content: '公的年金制度は、[[日本国内に住所のある20歳以上60歳未満の者]]が加入する国民年金からの給付である基礎年金に厚生年金保険が乗る二階建ての構成となっている。なお、これまで公的年金制度のひとつに共済年金があったが、2015年（平成27年）10月に[[厚生年金保険]]との一元化が図られている。', //p12
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '厚生年金保険の任意加入',
                            relatedProblems: [],
                            content: '正しい',
                        }, //41
                        {
                            // rev: 2026-10-09 確認済み
                            questionTitle: '標準報酬（月）額と厚生年金保険料',
                            relatedProblems: [],
                            content: '昇給等により、給与の３カ月平均額に、[[２等級以上]]の変動が生じた場合は随時改定が行われる。', //p21
                        }, //42
                        {
                            // rev: 2026-10-11 確認済み
                            questionTitle: '遺族厚生年金の年金額',
                            relatedProblems: [],
                            content: '長期・短期の両方に該当するときは、[[有利な方]]を選択することができる。', //p61
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '公的年金等の源泉徴収',
                            relatedProblems: [],
                            content: '正しい',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '自由診療',
                            relatedProblems: [],
                            content: '正しい',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'ケアマネジャー',
                            relatedProblems: [],
                            content: '正しい',
                        }, //46
                        {
                            // rev: 2026-10-11 確認済み
                            questionTitle: '短時間労働者等の取扱い',
                            relatedProblems: [],
                            content: 'パートタイマーなどの短時間労働者や派遣労働者については、「①週所定労働時間が[[20時間]]以上で、②雇用期間の見込みが[[31日]]以上」の者は、雇用保険の適用を受けられる。', //p128
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '年金請求書の受付',
                            relatedProblems: [],
                            content: '正しい',
                        }, //48
                        {
                            // rev: 2026-10-10 確認済み
                            questionTitle: 'マイナンバー',
                            relatedProblems: [],
                            content: '[[健康保険証利用の「初回登録」が必要ではあるが]]、最新の公的医療保険の資格状況等がオンラインで確認できるようになった', //p151
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.syakai2025c" next-route="daigaku.syakai2024b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
