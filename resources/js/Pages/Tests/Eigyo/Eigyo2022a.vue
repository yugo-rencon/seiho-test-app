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
                        '未成年者を除くすべての人 → 住民票を有するすべての人', //p40
                        '正しい',
                        '重大個人情報 → 特定個人情報', //p40
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人保険商品"
                    :contents="[
                        '雑所得として課税 → 非課税', //p62
                        '当初の契約が継続する点は転換制度と同じ → 転換制度と異なる', //p74
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料率に関する対応"
                    :contents="[
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
                        '正しい',
                        '一社専属制が認められ、複数の生命保険会社の商品を取り扱いが可能', //p101
                        '保険代理店を除く → 含む', //p101
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人営業機構（直販）"
                    :contents="[
                        '正しい',
                        '営業職員のみで構成され、ホールセラーと呼称 → 内務職員で構成され、法人営業第⚪︎部等と呼称<br>※「商品の研修・販売支援に加え〜」はホールセラーの説明', //p145
                        '支援していない → 支援している法人営業組織もある', //p145
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費者契約法"
                    :contents="[
                        '損害額の賠償を請求 → 契約を取り消す', //p37
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
                        '責任準備金は死亡した被保険者の遺族に支払う → 生存した他の被保険者の保険金の支払に充当', //p47
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
                        '正しい',
                        '元利合計100万円まで非課税 → 一般預貯金と同じく利子に対して20%課税', //p95
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険マーケティング"
                    :contents="[
                        '正しい',
                        '正しい',
                        '金融商品取引法 → 個人情報保護', //p112
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="営業職員の成績計上"
                    :contents="[
                        'ソルベンシー・マージン比率 → 予定事業費', //p132
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '公的介護保険制度の運営主体', content: '国、都道府県、医療保険者、年金保険者 → 国、都道府県、被保険者' }, //31 p29
                        { questionTitle: '代理・代行', content: '保険募集の代理を含まないこと → 含むこと<br>販売することはできなくなった → 販売可能になった' }, //32 p35
                        { questionTitle: '継続教育制度', content: '正しい' }, //33
                        { questionTitle: '外貨建保険', content: '安い為替手数料 → 高い金利<br>予定事業費率を低く → 予定利率を高く' }, //34 p65
                        { questionTitle: '特別勘定', content: '正しい' }, //35
                        { questionTitle: '医療保障保険（団体型）', content: '2つから構成 → 3つから構成（死亡保険金を含む）' }, //36 p96
                        { questionTitle: '心身障害者扶養者生命保険', content: '正しい' }, //37
                        { questionTitle: '通信販売', content: '正しい' }, //38
                        { questionTitle: '機関の機能', content: '正しい' }, //39
                        { questionTitle: '代理店', content: '乗合型 → 兼業型' }, //40 p145
                        // 問41〜50
                        { questionTitle: '価値観の変化', label: 'ア', content: '年齢' }, //41
                        { questionTitle: '年金改革・分割', label: 'イ', content: '第3号' }, //42
                        { questionTitle: '金融サービス提供法', label: 'オ', content: '' }, //43
                        { questionTitle: '危険選択の方法', label: 'エ', content: '面接' }, //44
                        { questionTitle: '商品政策の変遷（1980年代）', label: 'イ', content: '新種個人年金保険' }, //45
                        { questionTitle: '国民年金基金制度', label: 'ア', content: '第1号被保険者' }, //46
                        { questionTitle: '生保財形の特徴', label: 'イ', content: '5倍' }, //47
                        { questionTitle: '保険仲立人', label: 'エ', content: '媒介' }, //48
                        { questionTitle: '変額保険販売資格要件', label: 'ア', content: '専門課程' }, //49
                        { questionTitle: '営業職員の給与体系', label: 'イ', content: '地域' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="eigyo2023c" next-route="eigyo2022b" />
        </section>
    </SeihoTestLayout>
</template>
