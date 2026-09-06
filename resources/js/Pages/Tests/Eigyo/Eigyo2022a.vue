<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";
import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険商品と営業";
const subject = "2022年度 フォームA";
</script>

<template>
    <SeihoTestLayout :title="title">
        <section class="bg-gray-100 text-gray-800 py-10">
            <!-- ページタイトル -->
            <Pagetitle :title="title" :description="subject" />
            <!-- 問題リスト -->
            <div class="max-w-4xl mx-auto mt-4 space-y-2">
                <QuestionTemp3
                    :questionNumber="1"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度の動向-①"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '60歳',
                        '報酬比例',
                        '定額保険料',
                        '標準賞与額',
                        '18.30%', // 問１〜５
                    ]"
                    :labels="[
                        'ケ', //1
                        'ク', //2
                        'エ', //3
                        'カ', //4
                        'イ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金制度の動向-②"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '10年',
                        '1ヶ月',
                        '1級〜3級',
                        '子の数',
                        '4分の3', //問６〜10
                    ]"
                    :labels="[
                        'カ', //6
                        'ア', //7
                        'イ', //8
                        'コ', //9
                        'ク', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体年金保険-①"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '規約型',
                        'GIC（guaranteed interest contract：利率保証契約）',
                        '拠出型企業年金',
                        'B（型）年金',
                        '国民年金基金', //問11〜15
                    ]"
                    :labels="[
                        'キ', //11
                        'オ', //12
                        'ケ', //13
                        'イ', //14
                        'ク', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体年金保険-②"
                    :contents="[
                        // rev: 2026-08-23 確認済み
                        '団体生存保険',
                        '公務員',
                        '新企業年金保険',
                        'A（型）年金',
                        '合同', //問16〜20
                    ]"
                    :labels="[
                        'カ', //16
                        'オ', //17
                        'キ', //18
                        'ケ', //19
                        'ク', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="マイナンバー法"
                    :contents="[
                        // rev: 2026-09-03 確認済み
                        '未成年者を除くすべての人 → 住民票を有するすべての人', //p41
                        '正しい',
                        '重大個人情報 → 特定個人情報', //p41
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人保険商品"
                    :contents="[
                        // rev: 2026-09-06 確認済み
                        '被保険者が受取人となる場合、[[非課税扱い]]になる。', //p62
                        '[[契約自体はあくまでも当初の契約が継続する点]]と、変更は保険料払込期間満了時以降に限られる点が、[[転換制度とは異なる]]。', //p74
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料率に関する対応"
                    :contents="[
                        // rev: 2026-09-05 確認済み
                        '死差配当 → 利差配当。', //p78
                        '正しい',
                        '完全生命表 → 標準生命表。', //p79
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険代理店"
                    :contents="[
                        // rev: 2026-09-05 確認済み
                        '正しい',
                        '一定の条件を満たす保険代理店においては、[[一社専属制の例外が認められ、複数の生命保険会社の商品を取り扱うことができる]]。', //p101
                        '2016年（平成28年）の改正保険業法において、生命保険募集人に対し募集の実態に応じた体制整備を義務付ける規制が導入され、[[保険代理店についても、複数の生命保険会社の商品の取扱いの有無など、業務の特性や規模に応じて、体制整備が求められることとなった]]。', //p101
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人営業機構（直販）"
                    :contents="[
                        // rev: 2026-09-04 確認済み
                        '正しい',
                        '規模の大きい企業や団体向けの法人営業組織は、専門的かつ広範なスキルが要求されるため、[[内務職員で構成]]され、[[「法人営業第○部」といった名称]]とし、企業グループや業種、官公庁等のマーケットごとに設置されていることが一般的である。', //p145
                        '企業保険の販売を中心とした活動を行いつつ、[[個人保険販売の支援のため担当企業やその関連企業の基盤化を推進している法人営業組織もある]]。', //p145
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者契約法"
                    :contents="[
                        // rev: 2026-09-06 確認済み
                        '「消費者契約法」のポイントは、勧誘時に事業者が不適切な勧誘方法により消費者を「誤認」させたり、「困惑」させたりした場合、[[消費者は契約を取り消すことができる]]とした点である。', //p37
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人保険商品の基本型"
                    :contents="[
                        // rev: 2026-09-06 確認済み
                        '責任準備金は[[生存した他の被保険者の保険金の支払に充当する]]。', //p47
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="財形貯蓄制度"
                    :contents="[
                        // rev: 2026-09-03 確認済み
                        '正しい',
                        '一般財形は目的を問わない使途自由な貯蓄であり、[[一般の預貯金と同じく利子（生命保険の場合は差益）に対して20％課税]]（源泉徴収の際には復興特別所得税も加算）される。', //p95
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険マーケティング"
                    :contents="[
                        // rev: 2026-09-06 確認済み
                        '正しい',
                        '正しい',
                        '金融商品取引法 → 個人情報保護法', //p112
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="営業職員の成績計上"
                    :contents="[
                        // rev: 2026-09-04 確認済み
                        'これは、保険商品により[[予定事業費、とくに予定新契約費]]および販売難易度が異なるからである。', //p132
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-09-05 確認済み
                            questionTitle: '公的介護保険制度の運営主体',
                            content: '公的介護保険制度の運営主体（保険者）は、各市区町村となっているが、介護保険事業が健全かつ円滑に行われるよう、[[国、都道府県、被保険者]]が重層的に支えあう制度となっている。', //p30
                        }, //31
                        {
                            // rev: 2026-09-05 確認済み
                            questionTitle: '代理・代行',
                            content: '「業務の代理」に「保険募集の代理」が[[含まれる]]ことを明確化したことから、保険会社が他保険会社と業務の代理・事務の代行に関する契約を結んで、他保険会社商品を販売することが[[可能となった]]。', //p35
                        }, //32
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '継続教育制度',
                            content: '正しい',
                        }, //33
                        {
                            // rev: 2026-09-04 確認済み
                            questionTitle: '外貨建保険',
                            content: '商品のメリットとしては[[海外の比較的高い金利]]を反映することで、[[予定利率を高く]]設定していることが挙げられる。', //p65
                        }, //34
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '特別勘定',
                            content: '正しい',
                        }, //35
                        {
                            // rev: 2026-09-06 確認済み
                            questionTitle: '医療保障保険（団体型）',
                            content: '給付内容は入院時の公的医療保険制度における自己負担の一部を補填する治療給付金、定額の入院給付金、[[死亡時の死亡保険金]]から構成される。', //p96
                        }, //36
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '心身障害者扶養者生命保険',
                            content: '正しい',
                        }, //37
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '通信販売',
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '機関の機能',
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-09-06 確認済み
                            questionTitle: '代理店',
                            content: '乗合型 → 兼業型', //p145
                        }, //40
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '価値観の変化',
                            label: 'ア',
                            content: '年齢',
                        }, //41
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '年金改革・分割',
                            label: 'イ',
                            content: '第3号',
                        }, //42
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '金融サービス提供法',
                            label: 'オ',
                            content: '',
                        }, //43
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '危険選択の方法',
                            label: 'エ',
                            content: '面接',
                        }, //44
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '商品政策の変遷（1980年代）',
                            label: 'イ',
                            content: '新種個人年金保険',
                        }, //45
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '国民年金基金制度',
                            label: 'ア',
                            content: '第1号被保険者',
                        }, //46
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '生保財形の特徴',
                            label: 'イ',
                            content: '5倍',
                        }, //47
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '保険仲立人',
                            label: 'エ',
                            content: '媒介',
                        }, //48
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '変額保険販売資格要件',
                            label: 'ア',
                            content: '専門課程',
                        }, //49
                        {
                            // rev: 2026-08-23 確認済み
                            questionTitle: '営業職員の給与体系',
                            label: 'イ',
                            content: '地域',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="eigyo2023c" next-route="eigyo2022b" />
        </section>
    </SeihoTestLayout>
</template>
