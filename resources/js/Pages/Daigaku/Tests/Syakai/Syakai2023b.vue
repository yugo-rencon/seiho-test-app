<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "社会保障制度";
const subject = "2023年度 フォームB";
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
                    questionTitle="社会保険制度"
                    :relatedProblems="['2023a1', '2023b1', '2023c1']"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '公的保険は無選択で加入できる。', //p5
                        '正しい',
                        '公務員が対象となるのは、[[国家公務員共済組合制度や地方公務員等共済組合制度]]である。', //p9
                        '実際に介護サービスや支援にあたるのは、[[介護サービスを提供できる事業者]]となっている。', //p9
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="国民年金（基礎年金）の付加保険料"
                    :relatedProblems="['2023a14', '2023b2']"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '付加保険料とは、第１号被保険者および[[65歳未満の任意加入被保険者]]が、受給する年金額を増やすために付加して支払う保険料である。', //p18
                        '付加保険料は、保険料の免除を受けている者には[[支払えない]]。', //p18
                        '付加保険料は、国民年金基金の加入者には[[支払えない]]。', //p18
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="国民年金の老齢給付（受給資格期間）"
                    :relatedProblems="['2023a3', '2023b3', '2023c3']"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '[[第２号被保険者]]については、20歳未満および60歳以降の期間は合算対象期間とされる。', //p24
                        '全額免除期間中は３分の２ → 全額免除期間中は２分の１', //p24
                        '合算対象期間（カラ期間）とは、[[年金額には反映されないが]]、老齢基礎年金を受けるための受給資格期間には合算される期間をいう。', //p24
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="老齢厚生年金の加給年金"
                    :relatedProblems="['2023b4']"
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
                    questionTitle="年金の課税関係"
                    :relatedProblems="['2023b5']"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '過去の勤務に基づき使用者であった者から支給される年金は[[課税される]]。', //p68
                        '正しい',
                        '年金額に応じて[[控除額も変動する]]（年金額が1000万円以上の場合、控除額は195.5万円）。', //p68
                        '公的年金等控除や基礎控除により所得税等が課税されない場合は、[[「扶養親族等申告書」の提出は不要]]で、源泉徴収もされない。', //p69
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度の遺族給付"
                    :relatedProblems="['2023a6', '2023b6']"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '配偶者とは、法律上の配偶者のみではなく、[[事実婚（内縁関係）を含む]]。', //p54
                        '遺族基礎年金の受給額は、国民年金に加入していた期間にかかわらず定額であり、新規裁定者の場合、[[子の人数に応じて加算額が上乗せされる]]。', //p56
                        '寡婦年金は60歳から65歳になるまでの最長５年間支給される有期年金。', //p57
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="医療保険制度の概要"
                    :relatedProblems="['2023b7']"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '正しい',
                        '国民健康保険制度では、世帯構成員のそれぞれが被保険者となり、[[被扶養者という区別はない]]。', //p85
                        '被用者保険諸制度の保険料は、各被保険者の標準報酬月額および[[標準賞与額]]に保険料率を乗じて算出される', //p86
                        '負担割合は[[制度ごとまたは保険者ごとに異なっている]]。', //p86
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="8"
                    :title="title"
                    :subject="subject"
                    questionTitle="介護保険制度の費用負担"
                    :relatedProblems="['2023a8', '2023b8', '2023c8']"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '第１号被保険者の保険料は、[[居住する市区町村と本人および世帯の所得状況により異なる]]。', //p111
                        '正しい',
                        '一律３割相当額 → １割から３割相当額', //p112
                        '同じ月に利用したサービスの、[[１割から３割の利用者負担の合計額]]（同じ世帯に複数の利用者がいる場合には、世帯合計額）が高額になると、一定額を超えた部分が高額介護サービス費として[[申請により後日支給される]]。', //p113
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="9"
                    :title="title"
                    :subject="subject"
                    questionTitle="雇用保険制度"
                    :relatedProblems="['2023b9', '2023c22']"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '労働基準監督署 → 公共職業安定所', //p122
                        '雇用保険の保険者は国（政府）であり、[[労働者を雇用するすべての事業所が適用事業所となる]]。', //p122
                        '正しい',
                        '事業主支援事業 → 雇用安定事業', //p128
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="労働保険制度の現状と課題"
                    :relatedProblems="['2023b10']"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '増加傾向 → 減少傾向', //p129
                        '年齢層の低い労働者 → 年齢層の高い労働者', //p129
                        '官民あげての子育て支援の成果からか、育児休業給付の支払実績は[[増えつつある]]。', //p130
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="健康保険の任意継続被保険者と一般被保険者との違い・特徴（協会けんぽの場合）"
                    :relatedProblems="['2023b11']"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '３年間 → ２年間', //p140
                        'いずれか高い方 → いずれか低い方', //p140
                        '正しい',
                        '３年間分 → 半年または１年間分', //p141
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="12"
                    :title="title"
                    :subject="subject"
                    questionTitle="受給する老齢年金の選択"
                    :relatedProblems="['2023a12', '2023b12', '2023c12']"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '80歳 → 70歳', //p142
                        '正しい',
                        '６ヵ月 → １年', //p143
                        '６ヵ月 → １年', //p143
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="13"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会保障制度"
                    :relatedProblems="['2023a13', '2023b13', '2023c13']"
                    :contents="[
                        // rev: 2026-10-08 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '保健医療制度 → 社会福祉制度', //p4
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="14"
                    :title="title"
                    :subject="subject"
                    questionTitle="厚生年金保険の適用事業所"
                    :relatedProblems="['2023a4', '2023b14']"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '個人事業主自身は厚生年金保険には[[加入できない]]。', //p20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="標準報酬（月）額と厚生年金保険料"
                    :relatedProblems="['2023a15', '2023b15', '2023c15']"
                    :contents="[
                        // rev: 2026-10-09 確認済み
                        '正しい',
                        '昇給等により、給与の３カ月平均額に、[[２等級以上]]の変動が生じた場合は随時改定が行われる。', //p21
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="16"
                    :title="title"
                    :subject="subject"
                    questionTitle="厚生年金保険の遺族給付"
                    :relatedProblems="['2023a17', '2023b16', '2023c16']"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '再婚したとき（事実婚も含む）、[[遺族厚生年金を受給できなくなる]]。', //p60
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="年金受給者の確定申告"
                    :relatedProblems="['2023b17', '2023c17']"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '確定申告をすると[[住民税の申告は不要になる]]。', //p71
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的医療保険制度の概要"
                    :relatedProblems="['2023b18']"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '厚生労働省 → 医療機関等', //p82
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="後期高齢者医療制度（長寿医療制度）"
                    :relatedProblems="['2023b19', '2023c7']"
                    :contents="[
                        // rev: 2026-10-09 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '雇用保険と同様 → 介護保険と同様', //p93
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的介護保険制度の要介護（要支援）の認定"
                    :relatedProblems="['2023b20']"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '正しい',
                        '正しい',
                        '60日以内 → 30日以内', //p104
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="介護保険で受けられるサービスの内容"
                    :relatedProblems="['2023a21', '2023b21', '2023c21']"
                    :contents="[
                        // rev: 2026-10-09 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '地域密着型サービスは施設サービスではない。', //p107
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="介護保険の適用除外者"
                    :relatedProblems="['2023b22']"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '正しい',
                        '６カ月以下 → ３カ月以下', //p135
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金の受給手続き"
                    :relatedProblems="['2023a23', '2023b23', '2023c23']"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '64歳になったとき → 65歳に到達する３カ月前', //p149
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="雇用保険や在職老齢年金の併給調整等"
                    :relatedProblems="['2023a24', '2023b24']"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '一定の要件を満たす配偶者や子がいる場合、加給年金が加算されるが、老齢厚生年金（報酬比例部分）全額が支給停止となる場合は[[加給年金も加算されない]]。', //p147
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="国民年金の給付に要する費用および国民年金保険料"
                    :relatedProblems="['2023b25']"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '必要',
                        '受給資格期間',
                        '7月から翌年6月',
                        '10',
                        '2分の1',
                    ]"
                    :labels="['キ', 'ケ', 'カ', 'エ', 'ア']"
                />
                <QuestionTemp3
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionRange="30〜34"
                    questionTitle="労災保険（労働者災害補償保険）制度"
                    :relatedProblems="['2023b30']"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '全額を事業主が',
                        '労働基準監督署',
                        '国家・地方公務員',
                        '業務災害',
                        '減額率',
                    ]"
                    :labels="['オ', 'イ', 'ウ', 'カ', 'コ']"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="公的年金の支給日と源泉徴収"
                    :relatedProblems="['2023a35', '2023b35', '2023c35']"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '翌月',
                        '属する月',
                        '15日',
                        '雑所得',
                        '18万円',
                    ]"
                    :labels="['カ', 'ク', 'ア', 'ケ', 'ウ']"
                />
                <QuestionTemp2
                    :questionNumber="40"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-10-11 確認済み
                            questionTitle: '公的年金制度の特徴',
                            relatedProblems: ['2023b40'],
                            content: '社会保険方式 → 賦課方式', //p7
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '国民年金の任意加入',
                            relatedProblems: ['2023b41', '2023c41'],
                            content: '正しい',
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '遺族厚生年金の年金額',
                            relatedProblems: ['2023a48', '2023b42'],
                            content: '正しい',
                        }, //42
                        {
                            // rev: 2026-10-11 確認済み
                            questionTitle: '健康保険の給付',
                            relatedProblems: ['2023b43'],
                            content: '育児休業療養費、介護一時金は含まれない。', //p
                        }, //43
                        {
                            // rev: 2026-10-10 確認済み
                            questionTitle: '高額療養費',
                            relatedProblems: ['2023a44', '2023b44', '2023c44'],
                            content: '疾病･ケガのランク → 収入･所得のランク', //p94
                        }, //44
                        {
                            // rev: 2026-10-10 確認済み
                            questionTitle: '要介護の身体状況',
                            relatedProblems: ['2023a45', '2023b45', '2023c45'],
                            content: '要介護１ → 要介護５', //p105
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '労災保険の休業補償等給付（休業給付）',
                            relatedProblems: ['2023a46', '2023b46', '2023c46'],
                            content: '正しい',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '国民年金の被保険者資格種別変更',
                            relatedProblems: ['2023a47', '2023b47', '2023c47'],
                            content: '正しい',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '受給年金の確認（ねんきん定期便）',
                            relatedProblems: ['2023b48', '2023c48'],
                            content: '正しい',
                        }, //48
                        {
                            // rev: 2026-10-11 確認済み
                            questionTitle: '年金請求書の受付',
                            relatedProblems: ['2023a49', '2023b49'],
                            content: '公的年金の年金請求書の受付は[[支給開始年齢になってから]]となる。', //2024a48参照
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.syakai2023a" next-route="daigaku.syakai2023c" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
