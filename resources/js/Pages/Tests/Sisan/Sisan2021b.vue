<script setup>
import QuestionTemp1 from '@/Components/QuestionTemp1.vue'
import QuestionTemp2 from '@/Components/QuestionTemp2.vue'
import QuestionTemp3 from '@/Components/QuestionTemp3.vue'
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';
import Pagetitle from '@/Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';

const title = "資産の運用"
const subject = '2021年度 フォームB'

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
                '単独制','委員会制','安全','ポートフォリオ','貸付', // 問１〜５
                ]"
                :labels="[
                'カ','ク','ア','コ','キ',  //問１〜５
                ]"
            />
            <QuestionTemp3
                :questionNumber="2"
                :title="title"
                :subject="subject"
                :contents="[
                'ファンド・マネージャー','アナリスト','ストラテジスト','人事ローテーション','アウトソーシング', //問６〜10
                ]"
                :labels="[
                'ケ','エ','ア','コ','ウ',  //問６〜10
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
                '厳しい制限ではなく緩和。',
                '正しい',
                '株式投資の尺度として、個々の銘柄ごとの財務分析による収益性・安全性の評価を前提にして、株式の利潤証券たる価値に注目した「利回り」，「株価収益率(PER)」および株式の物的証券たる価値に注目した「株価純資産倍率(PBR)」が代表的である。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="22"
                :title="title"
                :subject="subject"
                :contents="[
                '共同ビル方式ではなく借地方式の説明',
                '正しい',
                '借地期間が終了したときには新たな契約更新を行わずに、 土地所有者は必ず土地の返還を受けることができる。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                '継続ではなく撤廃。',
                '正しい',
                '外貨建て資産の増加に伴う将来の不確実性を除去するためには、外貨建債務をつくって外貨建債権 ・債務を組み合わせて相殺することが求められる。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '固有業務ではなく付随業務。',
                '廃止ではなく法定化。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '売買目的有価証券は時価評価を行う。',
                '責任準備金対応債券は取得価額で評価を行う。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="26"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                '公平性ではなく公共性'
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
                'RBC 比率を高めるため、比較的リスクの高い不動産関連投資を減らし、代わりに公社債の比重を高めるようになってきている。',
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
                '裁定取引ではなくヘッジ取引の説明。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="30"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '株式投資が活発化 ，株式の資産構成比は上昇した。',
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
                '保険金信託業務は、付随業務ではなく法定他業に規定されている。',
                '正しい',
                '金利スワップではなく通貨スワップ。',
                '本社ではなく現地法人を通じて行われるケースがほとんどである。',
                // 問36〜40
                '正しい',
                '正しい',
                'その後の景気回復により、生命保険業界も再び順調な伸びを回復。',
                '正しい',
                '「日本版スチュワードシップ・コード」ではなくIFRSへの対応の在り方に関する当面の方針」を公表した。',
                 //問41〜50
                'A-独占禁止法','C（A・Bともに正しい）','B-流動','B-歳入債','C（A・Bともに正しい）',
                'A-収益性','B-直接金融','A-社債','A-ヘッジファンド','B-保護機構',
                ]"
                :labels="[
                '解','解','解','解','解',  //問31〜35
                '解','解','解','解','解',  //問36〜40
                'イ','オ','ウ','エ','オ',  //問41〜45
                'ア','エ','ア','イ','ウ',  //問46〜50
                ]"
            />
        </div>

        <!-- ボタングループ -->
        <TestNavigationButtons />

    </section>

    </SeihoTestLayout>


</template>
