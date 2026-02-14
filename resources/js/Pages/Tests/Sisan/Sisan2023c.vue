<script setup>
import QuestionTemp1 from '@/Components/QuestionTemp1.vue'
import QuestionTemp2 from '@/Components/QuestionTemp2.vue'
import QuestionTemp3 from '@/Components/QuestionTemp3.vue'
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';
import Pagetitle from '@/Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';

const title = "資産の運用"
const subject = '2023年度 フォームC'

</script>

<template>

<SeihoTestLayout :title="title">
    <section class="bg-gray-100 text-gray-800 py-10">

        <!-- ページタイトル -->
        <Pagetitle
            :title="title"
            :description="subject"
        />

        <!-- 問題リスト -->
        <div class="max-w-4xl mx-auto mt-4 space-y-2">
            <QuestionTemp3
                :questionNumber="1"
                :title="title"
                :subject="subject"
                :contents="[
                '平準保険料','予定利率','配当','区分経理','ALM（Asset Liability Management）', // 問１〜５
                ]"
                :labels="[
                'オ','エ','イ','ク','キ',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                '保険料','長期の貸付','国債','直接金融','損害保険業務', //問６〜10
                ]"
                :labels="[
                'イ','エ','ア','ケ','オ',  //問６〜10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '単独制','委員会制','安全','ポートフォリオ','貸付', //問11〜15
                ]"
                :labels="[
                'カ','ク','ア','コ','キ',  //問11〜15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                'ファンド・マネージャー','アナリスト','ストラテジスト','人事ローテーション','アウトソーシング', //問16〜20
                ]"
                :labels="[
                'ケ','エ','ア','コ','ウ',  //問16〜20
                ]"
            />
<QuestionTemp1
                :questionNumber="21"
                :title="title"
                :subject="subject"
                :contents="[
                '信用リスクではなく、市場リスク。',
                '正しい',
                '分散投資政策ではなく、緩和政策。'
                ]"
                />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '流動比率は、流動資産の流動負債に対する比率をあらわしている。',
                '正しい',
                '負債比率は、他人資本の自己資本に対する比率をあらわしている。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                'どちらのモデル投資法に従うかは、各州の判断に任されることになった。',
                '正しい',
                '比較的リスクの高い不動産関連投資やジャンク債を減らし、代わりに公社債の比重を高めるようになってきている。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '株式投資が活性化した。',
                '①キャピタル・ゲインのインカム化、②薄価分離といったメリットがある。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '取得価額ではなく、時価。',
                '時価ではなく、取得価額。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '財産利用方法書は廃止された。',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="27"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '2023年（和5年）2月末現在で銘柄数は60、時価総額は約15.4兆円の規模になっている。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                '子会社形態により互いに他業態の業務を行うことが可能である。',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="29"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '昭和40年代後半以降、住宅金融制度が徐々に整備されるに伴い、個人への直接的な資金供給である住宅ローンへも進出している。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '固有業務ではなく、付随業務。',
                '正しい'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                :contents="[
                // 問31〜35
                '正しい',
                '正しい',
                '正しい',
                '貸付金の投資対象としての特質は、まず第一に、有価証券投資のような価格変動リスクは、極めて限定的である反面、貸付金が期日どおりに返済されるか否かという信用リスクがあること。第二に、一定の返済期限に拘束されるので、有価証券のような即時の流動化が困難なことなどである。',
                '生保の海外投融資は、生保本体で直接行う場合のほか、生保本体と独立した海外現地法人を通じて行う場合がある。',
                // 問36〜40
                '①運用対象が社債あるいは産業界に対する貸付、場合によっては株式などが中心となっている産業金融機関・機関投資家型、②抵当貸付を標準的投資対象とする住宅金融型、③国債などの有価証券、場合によっては勤労者向け住宅投資の比重の高い公共金融機関型の3つの分類が存在する',
                '生命保険会社が銀行預金に相当額の資金を向けていたのは当然のことである。',
                '正しい',
                '正しい',
                '「日本版コーポレートガバナンス・コード」ではなく、「日本版スチュワードシップ・コード」',
                 //問41〜50
                'A-BIS（国際決済銀行）','A-金融商品取引法','B-当期純利益','B-買い付ける ','C（A・Bともに正しい）',
                'A-収益性','C（A・Bともに正しい）','B-安全性','A-ヘッジファンド','B-保護機構',
                ]"
                :labels="[
                '解','解','解','解','解',  //問31〜35
                '解','解','解','解','解',  //問36〜40
                'ア','ア','エ','ウ','オ',  //問41〜45
                'イ','オ','ウ','イ','エ',  //問46〜50
                ]"
            />
        </div>

        <!-- ボタングループ -->
        <TestNavigationButtons />

    </section>

    </SeihoTestLayout>


</template>
