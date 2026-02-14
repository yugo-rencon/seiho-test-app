<script setup>
import QuestionTemp1 from '@/Components/QuestionTemp1.vue'
import QuestionTemp2 from '@/Components/QuestionTemp2.vue'
import QuestionTemp3 from '@/Components/QuestionTemp3.vue'
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';
import Pagetitle from '@/Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';

const title = "資産の運用"
const subject = '2023年度 フォームB'

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
                '財団抵当','時価','瑕疵（かし）','不動産鑑定士','控除', //問11〜15
                ]"
                :labels="[
                'エ','ク','カ','イ','オ',  //問11〜15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '一括返済','収益性','プライム・レート','低く','金銭消費貸借契約証書', //問16〜20
                ]"
                :labels="[
                'オ','ア','コ','ク','ケ',  //問16〜20
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
                'ファンド・マネージャーではなく、エコノミスト。',
                '正しい',
                'エコノミストではなく、ストラテジスト'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                'ドイツ、オランダ、スイスなどがこの類型に属する。',
                'フランス、イタリア、ベルギーなどがこの類型に属する。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '流動性預金金利ではなく、定期性預金金利。',
                '定期性預金金利ではなく、流動性預金金利。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                'ディスクロージャー・一般勘定ではなく、区分経理・特別勘定。',
                '正しい',
                '長期係数ではなく、リスク係数。'
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
                '生命保険会社の貸付は、長期の事業資金が中心となっている。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                '比較的リスクの高い不動産関連投資やジャンク債を減らし、代わりに公社債の比重を高めるようになってきている。',
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
                '正しい',
                '取引所集中義務の撤廃、店頭登録市場の機能強化、私設取引システムの導入などの改革が進められた。'
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
                '投資手法の多様化としては、共同ビル方式，借地方式，新借地方式、定期借地方式等の手法がある。',
                '毎日評価を行い、運用の成果を日々反映させている。',
                // 問36〜40
                '正しい',
                '正しい',
                '海外融資ではなく、外国債券等を中心に総資産に占める海外投融資の割合は再び漸増傾向にある。',
                '責任準備金対応債権、満期保有目的債権どちらも取得価額で評価を行う。',
                '「日本版コーポレートガバナンス・コード」ではなく、「日本版スチュワードシップ・コード」',
                 //問41〜50
                'A-BIS（国際決済銀行）','A-単独制','B-公募債','B-買い付ける','C（A・Bともに正しい）',
                'A-出し手','B-銀行','C（A・Bともに正しい）','A-ヘッジファンド','B-付随業務',
                ]"
                :labels="[
                '解','解','解','解','解',  //問31〜35
                '解','解','解','解','解',  //問36〜40
                'ア','ア','エ','ウ','オ',  //問41〜45
                'イ','エ','オ','イ','ウ',  //問46〜50
                ]"
            />
        </div>

        <!-- ボタングループ -->
        <TestNavigationButtons />

    </section>

    </SeihoTestLayout>


</template>
