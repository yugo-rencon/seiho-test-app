<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2024年1月〜6月実施 フォームC";
const isDraft = false;
</script>

<template>
    <SeihoTestLayout :title="title" brand-name="生命保険一般課程 過去問解説">
        <section class="bg-gray-100 py-10 text-gray-800">
            <Pagetitle :title="title" :description="subject" />
            <DraftNotice v-if="isDraft" />

            <div class="mx-auto mt-4 max-w-4xl space-y-2">
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="1〜3"
                    questionTitle="保全・アフターサービス手続きと留意点-①"
                    :contents="[
                        '解約返戻金',
                        '有効に',
                        '（自動）振替貸付', // 問1〜3
                    ]"
                    :labels="[
                        'イ', //1
                        'ウ', //2
                        'オ', //3
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="4〜5"
                    questionTitle="保全・アフターサービス手続きと留意点-②"
                    :contents="[
                        '3年',
                        '復活', // 問4〜5
                    ]"
                    :labels="[
                        'イ', //4
                        'ウ', //5
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="6〜8"
                    questionTitle="生命保険の種類-①"
                    :contents="[
                        '定期',
                        '同額',
                        '大きく', // 問6〜8
                    ]"
                    :labels="[
                        'ア', //6
                        'オ', //7
                        'エ', //8
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="9〜10"
                    questionTitle="生命保険の種類-②"
                    :contents="[
                        '特別',
                        'されています', // 問9〜10
                    ]"
                    :labels="[
                        'イ', //9
                        'エ', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜12"
                    questionTitle="生命保険会社の仕組み-①"
                    :contents="[
                        'ソルベンシー・マージン比率',
                        '生命保険契約者保護機構', // 問11〜12
                    ]"
                    :labels="[
                        'ア', //11
                        'エ', //12
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="13〜15"
                    questionTitle="生命保険会社の仕組み-②"
                    :contents="[
                        '「相互会社」',
                        '社員',
                        '定款', // 問13〜15
                    ]"
                    :labels="[
                        'イ', //13
                        'ウ', //14
                        'オ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜18"
                    questionTitle="契約取り扱いの手続き-①"
                    :contents="[
                        '戸籍等の公的書類記載の',
                        '被保険者',
                        '「保険年齢」', // 問16〜18
                    ]"
                    :labels="[
                        'ア', //16
                        'エ', //17
                        'カ', //18
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="19〜20"
                    questionTitle="契約取り扱いの手続き-②"
                    :contents="[
                        '正確なものを新しく発行',
                        '50000円', // 問19〜20
                    ]"
                    :labels="[
                        'ウ', //19
                        'イ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜22"
                    questionTitle="保険料の税法上の取り扱い-①"
                    :contents="[
                        '契約者（保険料負担者）',
                        '課税所得', // 問21〜22
                    ]"
                    :labels="[
                        'ア', //21
                        'エ', //22
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="23〜25"
                    questionTitle="保険料の税法上の取り扱い-②"
                    :contents="[
                        '35000円',
                        '「介護医療保険料」',
                        '28000円', // 問23〜25
                    ]"
                    :labels="[
                        'ア', //23
                        'エ', //24
                        'オ', //25
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="26〜30"
                    questionTitle="設計販売の基礎"
                    :contents="[
                        '5',
                        '37',
                        '54',
                        '35',
                        '家族の生活資金＋妻の生活資金', // 問26〜30
                    ]"
                    :labels="[
                        'イ', //26
                        'オ', //27
                        'キ', //28
                        'ウ', //29
                        'ケ', //30
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会保障制度"
                    :contents="[
                        '雇用保険法 → 生活保護法', //p112
                        '正しい',
                        '正しい',
                        '4割 → 1割で所定水準以上の所得者は2割（そのうち特に所得の高い者は3割）', //p115
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の役割"
                    :contents="[
                        '正しい',
                        '90歳を超えている → 超えていない（男性約81歳、女性約87歳）', //p3
                        '平均寿命 → 平均余命', //p4
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="剰余金と配当金"
                    :contents="[
                        '実際の死亡者数が多い → 少ない', //p26
                        '正しい',
                        '正しい',
                        '保険業法の定める利率 → 生命保険会社の定める利率', //p29
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="34"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険料の払い込み"
                    :contents="[
                        '正しい',
                        '途中で変更できない → 変更できる', //p51
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="35"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約申込み時の実務"
                    :contents="[
                        '正しい',
                        '第1回保険料充当金払い込みのあった日 → 診査（告知）のあった日', //p46
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="保障の見直し"
                    :contents="[
                        '正しい',
                        '正しい',
                        '転換前契約の加入時 → 転換時', //p92
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金・給付金の税法上の取り扱い（一時金で受け取った場合）"
                    :contents="[
                        '正しい',
                        '正しい',
                        '60万円 → 110万円', //p127
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="38"
                    :title="title"
                    :subject="subject"
                    :useAnswerLabelForAll="true"
                    :items="[
                        // 問38〜67
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '年末の生存者数 → 年始の生存者数', //p15
                        }, //40
                        {
                            questionTitle: '生命保険の仕組み',
                            content: 'それまでに積み立てられた元利合計額 → 契約した保障額の死亡保険金', //p15
                        }, //41
                        {
                            questionTitle: '生命保険の仕組み',
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: '企業向け商品',
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: '企業向け商品',
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: '企業向け商品',
                            content: '従業員の生活保障および従業員の退職金 → 遺族の生活保障および経営者の退職金', //p118
                        }, //45
                        {
                            questionTitle: '企業向け商品',
                            content: '財形医療積立保険・財形教育積立保険・財形福祉積立保険 → 財形貯蓄積立保険・財形住宅積立保険・財形年金積立保険', //p119
                        }, //46
                        {
                            questionTitle: '企業向け商品',
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '行政処分や司法処分を受けない → 受ける', //p68
                        }, //49
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //50
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '各種共済等は対象外 → 対象', //p76
                        }, //51
                        {
                            questionTitle: '生命保険の募集等に関する法律',
                            content: '正しい',
                        }, //52
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //53
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '契約成立前に行う → 契約成立前に行う場合と契約成立後に行う場合がある', //p85
                        }, //54
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '1年 → 2年', //p87
                        }, //55
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //56
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '保険料は返還される → 返還されない', //p87
                        }, //57
                        {
                            questionTitle: '隣接業界',
                            content: '正しい',
                        }, //58
                        {
                            questionTitle: '隣接業界',
                            content: '経済産業省 → 厚生労働省', //p108
                        }, //59
                        {
                            questionTitle: '隣接業界',
                            content: '正しい',
                        }, //60
                        {
                            questionTitle: '隣接業界',
                            content: '正しい',
                        }, //61
                        {
                            questionTitle: '隣接業界',
                            content: '正しい',
                        }, //62
                        {
                            questionTitle: '相続の法律',
                            content: '配偶者が2/3、兄弟姉妹が1/3 → 配偶者が3/4、兄弟姉妹が1/4', //p130
                        }, //63
                        {
                            questionTitle: '相続の法律',
                            content: '正しい',
                        }, //64
                        {
                            questionTitle: '相続の法律',
                            content: '自動承認 → 単純承認', //p130
                        }, //65
                        {
                            questionTitle: '相続の法律',
                            content: '正しい',
                        }, //66
                        {
                            questionTitle: '相続の法律',
                            content: '正しい',
                        }, //67
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="68"
                    :title="title"
                    :subject="subject"
                    :applyChoicePrefix="false"
                    :items="[
                        // 問68〜82
                        { questionTitle: '契約の選択', label: 'イ', content: '環境上' }, //68
                        { questionTitle: '契約の選択', label: 'ア', content: '保険金や特約' }, //69
                        { questionTitle: '契約の選択', label: 'イ', content: '入院給付金日額' }, //70
                        { questionTitle: '契約の選択', label: 'ア', content: '契約内容登録制度' }, //71
                        { questionTitle: '契約の選択', label: 'イ', content: '面接' }, //72
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'ア', content: '注意喚起情報' }, //73
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'ア', content: '連絡先' }, //74
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'イ', content: '生命保険会社' }, //75
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'ア', content: '診断書' }, //76
                        { questionTitle: '保険金・給付金の請求と支払い', label: 'イ', content: '個人情報' }, //77
                        { questionTitle: 'お客さまニーズへの対応', label: 'イ', content: 'ライフサイクル' }, //78
                        { questionTitle: 'お客さまニーズへの対応', label: 'ア', content: '生活' }, //79
                        { questionTitle: 'お客さまニーズへの対応', label: 'ア', content: '40歳' }, //80
                        { questionTitle: 'お客さまニーズへの対応', label: 'イ', content: '計画的' }, //81
                        { questionTitle: 'お客さまニーズへの対応', label: 'イ', content: '生活設計書' }, //82
                    ]"
                />
            </div>
            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
