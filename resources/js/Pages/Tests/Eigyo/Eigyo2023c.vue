<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";
import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険商品と営業";
const subject = "2023年度 フォームC";
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
                    questionTitle="公的介護保険制度の概要-①"
                    :contents="[
                        '40歳以上',
                        '65歳以上',
                        '医療費抑制',
                        '所得段階別',
                        '18万円', // 問１〜５
                    ]"
                    :labels="[
                        'ウ', //1
                        'カ', //2
                        'キ', //3
                        'コ', //4
                        'ア', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的介護保険制度の概要-②"
                    :contents="[
                        '厚生労働省',
                        '介護認定審査会',
                        '予防給付',
                        '地域密着サービス',
                        '居住費', //問６〜10
                    ]"
                    :labels="[
                        'オ', //6
                        'ア', //7
                        'ケ', //8
                        'ク', //9
                        'エ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="顧客サービスの向上と多様化-①"
                    :contents="[
                        '継続的',
                        'マーケティング',
                        '転換制度',
                        'エージェント',
                        '不可分化', //問11〜15
                    ]"
                    :labels="[
                        'ウ', //11
                        'コ', //12
                        'キ', //13
                        'イ', //14
                        'ケ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="顧客サービスの向上と多様化-②"
                    :contents="[
                        'face to face',
                        '情報通信機器',
                        '囲い込み',
                        'CS（customer Satisfaciton）',
                        '選択', //問16〜20
                    ]"
                    :labels="[
                        'ケ', //16
                        'エ', //17
                        'ア', //18
                        'ク', //19
                        'オ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人保険商品の構造"
                    :contents="[
                        '主契約より長い場合はない', //p49
                        '短縮払 → 短期払', //p49
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額保険"
                    :contents="[
                        '正しい',
                        'いずれも毎日変動する → 変動保険金は毎月変動、満期保険金は満期時に確定する', //p64
                        '基本保険金額、特約保険金額は変動する → 変動しない', //p64
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="団体保険"
                    :contents="[
                        '正しい',
                        '1年以上 → 2年以上<br>前後6か月以内 → 前後1年以内', //p97
                        '健康保険組合連合会 → 地方公共団体', //p97
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="通信販売とインターネット通販"
                    :contents="[
                        'モラルリスク等が問題となりにくい → 問題となりやすい<br>制限しているケースは少ない → 多い', //p104
                        '契約の成立まで完了できる生保会社はない → 契約の成立まで完了できる生保会社もある', //p104
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="営業職員の募集人登録"
                    :contents="[
                        '生命保険協会 → 内閣総理大臣（金融庁長官に委任）', //p118
                        '正しい',
                        '一般課程試験合格後に生命保険募集人として登録される。', //p118
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="金融サービス提供法"
                    :contents="[
                        '正しい',
                        '正しい',
                        '消費者はその契約を取り消すことができる → 業者は元本欠損額の賠償責任を負う', //p38
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="公的年金の保険料"
                    :contents="[
                        '正しい',
                        '第3号被保険者 → 第1号被保険者', //p25
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="特化型営業職員制度・法人営業機構（直販）"
                    :contents="[
                        '正しい',
                        'ホールセラー → 法人営業第⚪︎部', //p145
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="情報活用型マーケティング"
                    :contents="[
                        '再販売等に活用することは行われていない → 活用することが一般的', //p110
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="支社機構・機関機構"
                    :contents="[
                        'これまで〜の説明 ↔ 近年では〜の説明', //p140
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
                        { questionTitle: '企業福祉制度', content: '自己責任原則の下、従業員の自助努力・自立を側面から支援する ↔︎ 総合的・恩恵的福祉' }, //31 p33
                        { questionTitle: '第三分野市場', content: '損害保険 ↔︎ 生命保険' }, //32 p34
                        { questionTitle: '生命年金', content: '被保険者の生死を問わず → 被保険者の生存中に限り' }, //33 p47
                        { questionTitle: '危険選択の方法', content: '生命保険支払専門士 → 生命保険面接士' }, //34 p52
                        { questionTitle: '消費者契約法', content: '正しい' }, //35
                        { questionTitle: '特別勘定', content: '正しい' }, //36
                        { questionTitle: '医療保険', content: '所得税の課税対象 → 非課税' }, //37 p59-61
                        { questionTitle: '財形貯蓄制度と税制', content: '保険料控除の対象 → 対象とならない' }, //38 p96
                        { questionTitle: '営業職員の給与体系', content: '正しい' }, //39
                        { questionTitle: '代理店', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '代理・代行', label: 'ア', content: '保険業法' }, //41
                        { questionTitle: '遺族年金', label: 'ア', content: '３分の１' }, //42
                        { questionTitle: '近年の商品対応（保険料率）', label: 'オ', content: '' }, //43
                        { questionTitle: '団体信用生命保険', label: 'イ', content: '賦払償還債務' }, //44
                        { questionTitle: '月払保険の普及', label: 'オ', content: '' }, //45
                        { questionTitle: '総合福祉団体定期保険', label: 'イ', content: '企業等' }, //46
                        { questionTitle: '団体年金保険', label: 'ウ', content: '個人' }, //47
                        { questionTitle: '医療保障保険（団体型）', label: 'エ', content: '代表者' }, //48
                        { questionTitle: '保険仲立人', label: 'ウ', content: '媒介' }, //49
                        { questionTitle: '変額保険販売資格要件', label: 'オ', content: '' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="eigyo2023b" next-route="eigyo2022a" />
        </section>
    </SeihoTestLayout>
</template>
