<script setup>
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "社会保障制度";
const subject = "2021年度 フォームC";
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
                    questionTitle="厚生年金保険の仕組み"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '厚生年金保険の給付には、年金給付としての老齢・障害・遺族の各年金給付、[[一時金給付としての障害手当金等がある]]。', //p19
                        '75歳未満 → 70歳未満', //p20
                        '正しい',
                        '厚生年金保険に加入すると自動的に[[第２号被保険者]]として国民年金にも加入することになるため、[[第２号被保険者]]が扶養している配偶者（[[第３号被保険者]]）の国民年金保険料も厚生年金保険の保険料から一定額が拠出される。', //p21
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="国民年金の老齢給付（受給資格期間）"
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
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '厚生年金保険に加入しない嘱託やパートタイマーのような働き方をする場合は[[在職老齢年金の制限による年金額調整の対象とはならない]]。', //p40
                        '60歳台前半の在職老齢年金では、老齢基礎年金は原則として65歳から支給されるため、対象とならない。また、支給停止額の計算対象となる基本月額は、特別支給の老齢厚生年金の月額（加給年金額を除く）であり、[[報酬比例部分だけに限定されない]]。', //独自
                        '正しい',
                        '賞与を除く → 賞与を含めた', //p41
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="6"
                    :title="title"
                    :subject="subject"
                    questionTitle="国民年金の遺族基礎年金"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '子のない夫婦の夫が死亡したときでも、妻が妊娠中の場合は、[[その子が誕生した月の翌月]]から妻に遺族基礎年金が支給される。', //p54
                        '遺族基礎年金の受給額は、[[国民年金に加入していた期間にかかわらず定額である]]。', //p56
                        '２年に１回 → 毎年度', //p56
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionTitle="医療保険制度の概要"
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
                    questionTitle="介護保険制度"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '都道府県 → 市区町村', //p101
                        '正しい',
                        '介護保険制度においては、給付に必要な費用の[[半分を保険料]]、[[残り半分を公費]]で賄うこととしている。', //p102
                        '第２号被保険者 → 第１号被保険者', //p102
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="10"
                    :title="title"
                    :subject="subject"
                    questionTitle="労災保険（労働者災害補償保険）"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '正しい',
                        '労災保険は、[[被保険者単位で適用されず事業所ぐるみの適用]]となるため、労働者個々人について被保険者資格の取得・喪失などは[[生じない]]。', //p120
                        '通勤災害に関する保険給付として、療養給付、休業給付、障害給付、介護給付、[[遺族給付]]、[[葬祭給付]]および傷病年金がある。', //p120
                        '労災保険料については[[その全額を事業主が負担する]]が、費用負担の一部である国庫補助の金額は極めて少なく、保険料がその大部分を占めている。', //p10
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="11"
                    :title="title"
                    :subject="subject"
                    questionTitle="健康保険の任意継続被保険者と一般被保険者との違い・特徴（協会けんぽの場合）"
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
                    questionTitle="国民年金（基礎年金）の付加保険料"
                    :contents="[
                        // rev: 2026-10-11 確認済み
                        '月額600円 → 月額400円', //p18
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="15"
                    :title="title"
                    :subject="subject"
                    questionTitle="標準報酬（月）額と厚生年金保険料"
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
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '遺族厚生年金を受給していた配偶者や子が死亡しても、その代わりに[[父母、孫、祖父母が受給することはできない]]。', //p59
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="17"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金等の課税関係"
                    :contents="[
                        // rev: 2026-10-09 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '公的年金等の雑所得金額 ＝ [[公的年金等の額（税込み） − 公的年金等控除額]]', //p68
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="18"
                    :title="title"
                    :subject="subject"
                    questionTitle="健康保険"
                    :contents="[
                        // rev: 2026-10-09 確認済み
                        '健康保険は、一定の事業所に使用される者（被用者）を被保険者とし、被保険者の[[業務災害・通勤災害等以外の事由]]による疾病、負傷もしくは死亡または出産に関し保険給付を行い、被保険者の生活の安定に寄与することを目的としている。', //p88
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="19"
                    :title="title"
                    :subject="subject"
                    questionTitle="国民健康保険"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '国民健康保険組合は、同種の事業または業務に従事する[[300人]]以上で組織された保険者で、現在建設業など[[160]]近い国民健康保険組合がある。', //p92
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="20"
                    :title="title"
                    :subject="subject"
                    questionTitle="介護保険制度の要介護（要支援）の認定"
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
                    questionTitle="健康保険・厚生年金保険の被保険者資格喪失日"
                    :contents="[
                        // rev: 2026-10-09 確認済み
                        '適用事業所の業務に使用されなくなった日の[[翌日]]', //p138
                        '正しい',
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金の受給手続き"
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
                    questionTitle="離婚時の厚生年金保険の分割制度"
                    :contents="[
                        // rev: 2026-10-10 確認済み
                        '正しい',
                        '正しい',
                        '正しい',
                        '２：１に分割 → ２分の１（50％）に分割', //p153
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="5"
                    :title="title"
                    :subject="subject"
                    questionRange="25〜29"
                    questionTitle="国民年金の給付に要する費用および国民年金保険料"
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
                    questionTitle="雇用保険制度の内容"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '求職者給付',
                        '教育訓練給付',
                        '公共職業安定所',
                        '離職票',
                        '4',
                    ]"
                    :labels="['オ', 'エ', 'コ', 'ク', 'ア']"
                />
                <QuestionTemp3
                    :questionNumber="7"
                    :title="title"
                    :subject="subject"
                    questionRange="35〜39"
                    questionTitle="公的年金の支給日と源泉徴収"
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
                            // rev: 2026-08-23 確認済み
                            questionTitle: '公的年金制度',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '厚生年金保険の適用事業所',
                            content: '正しい',
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '国民年金の繰上げ、繰下げ',
                            content: '正しい',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '後期高齢者医療制度',
                            content: '正しい',
                        }, //43
                        {
                            // rev: 2026-10-10 確認済み
                            questionTitle: '高額療養費',
                            content: '疾病･ケガのランク → 収入･所得のランク', //p94
                        }, //44
                        {
                            // rev: 2026-10-10 確認済み
                            questionTitle: '要介護の身体状況',
                            content: '要介護１ → 要介護５', //p105
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '労災保険の休業補償給付（休業給付）',
                            content: '正しい',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '国民年金の被保険者資格種別変更',
                            content: '正しい',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '受給年金の確認（ねんきん定期便）',
                            content: '正しい',
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: 'マイナンバー',
                            content: '正しい',
                        }, //49
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="daigaku.syakai2021b" home-route="daigaku.index" />
        </section>
    </SeihoTestLayout>
</template>
