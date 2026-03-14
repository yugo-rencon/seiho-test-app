<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";
import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険商品と営業";
const subject = "2023年度 フォームB";
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
                    questionTitle="年金改革-①"
                    :contents="[
                        '世代間扶養',
                        '18.30%',
                        '16,900円',
                        'マクロ経済スライド',
                        '2割', // 問１〜５
                    ]"
                    :labels="[
                        'ウ', //1
                        'オ', //2
                        'キ', //3
                        'ケ', //4
                        'ア', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="年金改革-②"
                    :contents="[
                        '2分の1',
                        '5年',
                        '10年',
                        '短時間労働者',
                        '産休期間中', //問６〜10
                    ]"
                    :labels="[
                        'ケ', //6
                        'ア', //7
                        'ウ', //8
                        'ク', //9
                        'キ', //10
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
                    :questionNumber="1"
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
                    questionTitle="消費者保護とコンプライアンス"
                    :contents="[
                        '契約を解約 → 契約を取り消し', //pp37
                        '正しい',
                        '運用方針 → 勧誘方針', //p38
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
                    questionTitle="団体年金保険"
                    :contents="[
                        '正しい',
                        '「従業員や団体の〜」は、拠出型企業年金保険の説明', //p90-91
                        '「元本確保商品としての要件〜」は、確定拠出年金保険の説明', //p90-91
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険仲立人"
                    :contents="[
                        '契約者の立場で → 中立の立場で<br>締結の代理または媒介 → 締結の媒介', //p103
                        '日本固有の制度 → 諸外国で一般的', //p103
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="貯蓄の動向"
                    :contents="[
                        '正しい',
                        '正しい',
                        '株式・株式投資信託等の有価証券 → 定期性預貯金', //p16
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
                    questionTitle="公的介護保険制度の概要"
                    :contents="[
                        '正しい',
                        '年齢階級別 → 所得段階別', //p30
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="個人保険商品の特約"
                    :contents="[
                        '正しい',
                        '正しい',
                        '個人年金保険や個人型確定拠出年金（iDeCo） → 個人年金保険（個人型確定拠出年金（iDeCo）は含まない）', //p49
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="法人営業機構（直販）"
                    :contents="[
                        '正しい',
                        '正しい',
                        '一切行っていない → 推進している法人営業組織もある', //p145
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        // 問31〜40
                        { questionTitle: '代理・代行', content: '正しい' }, //31
                        { questionTitle: 'マイナンバー法', content: '未成年者を除くすべての人 → 住民票を有するすべての人' }, //32 p40
                        { questionTitle: '生命年金', content: '被保険者の生死を問わず → 被保険者の生存中に限り' }, //33 p47
                        { questionTitle: '危険選択の方法', content: '生命保険支払専門士 → 生命保険面接士' }, //34 p52
                        { questionTitle: '医療保障保険（団体型）', content: '正しい' }, //35
                        { questionTitle: '特別勘定', content: '正しい' }, //36
                        { questionTitle: '適格性要素', content: '正しい' }, //37
                        { questionTitle: '変額保険販売資格制度', content: '日本証券業協会 → 生命保険協会' }, //38 p126
                        { questionTitle: '支社の配置', content: 'これまで〜の説明 ↔ 近年では〜の説明' }, //39 p140
                        { questionTitle: '機関組織構成', content: '正しい' }, //40
                        // 問41〜50
                        { questionTitle: '人の一生', label: 'エ', content: 'ライフサイクル' }, //41
                        { questionTitle: '遺族年金', label: 'ア', content: '３分の１' }, //42
                        { questionTitle: '金融商品取引法', label: 'エ', content: '適合性の原則' }, //43
                        { questionTitle: 'リビング・ニーズ特約', label: 'イ', content: '6ヶ月' }, //44
                        { questionTitle: '月払保険の普及', label: 'オ', content: '' }, //45
                        { questionTitle: '総合福祉団体定期保険', label: 'イ', content: '企業等' }, //46
                        { questionTitle: '加入後の自在性', label: 'イ', content: '移行' }, //47
                        { questionTitle: '生命表', label: 'ア', content: '経験死亡率' }, //48
                        { questionTitle: '生保財形の特徴', label: 'ウ', content: '5倍' }, //49
                        { questionTitle: '営業職員の教育', label: 'オ', content: '' }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="eigyo2023a" next-route="eigyo2023c" />
        </section>
    </SeihoTestLayout>
</template>
