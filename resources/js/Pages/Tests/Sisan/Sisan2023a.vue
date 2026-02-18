<script setup>
import QuestionTemp1 from '@/Components/QuestionTemp1.vue'
import QuestionTemp2 from '@/Components/QuestionTemp2.vue'
import QuestionTemp3 from '@/Components/QuestionTemp3.vue'
import TestNavigationButtons from '@/Components/TestNavigationButtons.vue';
import Pagetitle from '@/Components/Pagetitle.vue'
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';

const title = "資産の運用"
const subject = '2023年度 フォームA'


const SAME = "※2023年度フォームA/B/Cで同一問題";</script>

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
                    'オ', //1
                    'エ', //2
                    'イ', //3
                    'ク', //4
                    'キ', //5
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
                    'イ', //6
                    'エ', //7
                    'ア', //8
                    'ケ', //9
                    'オ', //10
                ]"
            />
            <QuestionTemp3
                :questionNumber="3"
                :title="title"
                :subject="subject"
                :contents="[
                '保険業法施行規則','物価','流動性','オフィスビル','REIT（不動産投資信託）', //問11〜15
                ]"
                :labels="[
                    'ク', //11
                    'オ', //12
                    'ア', //13
                    'ウ', //14
                    'エ', //15
                ]"
            />
            <QuestionTemp3
                :questionNumber="4"
                :title="title"
                :subject="subject"
                :contents="[
                '借地','借地人','新借地','所轄税務署','時価', //問16〜20
                ]"
                :labels="[
                    'イ', //16
                    'キ', //17
                    'エ', //18
                    'ア', //19
                    'ケ', //20
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
                '単独制ではなく、委員会制。',
                '専門担当部門の責任者が事実上の意思決定者となり、資産運用全般を担当する役員が最終決定者となる単独制を採用する生命保険会社が大半となっている。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="23"
                :title="title"
                :subject="subject"
                :contents="[
                'ニューヨーク州法の持株会社規定では保険持株会社の業務を制限していない。',
                '現行の銀行法では、銀行が支店内で販売することができる保険商品は、規制上、貸付業務に密接に絡む保険や旅行保険に限られている。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="24"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '保険金額1万円以上の契約についても全部打ち切らざるを得ない情勢になった。',
                '昭和40年代前半には、生命保険の保有契約高において、西欧諸国やカナダ等を凌駕し、米国に次ぐ第2位の保険大国となった。'
                ]"
            />
            <QuestionTemp1
                :questionNumber="25"
                :title="title"
                :subject="subject"
                :contents="[
                '改正前から認められていた。',
                '正しい',
                '生命保険会社の健全性・公正性の確保と利用者保護の視点から、大口信用供与規制、保険会社または当該保険会社の子会社による株式の取得の制限（親子合算で10%まで）が法定化された。'
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
                '手形額面の金額から差し引いて貸付を行うもの。',
                '正しい'
                ]"
            />
            <QuestionTemp1
                :questionNumber="28"
                :title="title"
                :subject="subject"
                :contents="[
                '正しい',
                '正しい',
                'フランス、イタリア、ベルギーなどのラテン諸国に見られるラテン型と称されるべきものである。'
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
                '時価ではなく、取得価額。',
                '正しい',
                '正しい'
                ]"
            />
            <QuestionTemp2
                :questionNumber="31"
                :title="title"
                :subject="subject"
                                :items="[
                    // 問31〜40
                    { label: '解', content: '正しい' }, //31
                    { label: '解', content: '他人資本の大部分は保険契約準備金であり、これには、責任準備金、契約者配当準備金、支払備金などが含まれる。' }, //32
                    { label: '解', content: '正しい' }, //33
                    { label: '解', content: '公社債は、有価証券の中の資本証券のうち、確定利付で発行される証券の通称である。' }, //34
                    { label: '解', content: '正しい' }, //35
                    { label: '解', content: '正しい' }, //36
                    { label: '解', content: '高度成長期を通じて間接金融方式が定着する中で、産業界からの資金需要が著しく高まり、また貸付の利回りが相対的に高かったこともあって、生命保険会社は産業界からの借入需要に積極的に応じることとなった。' }, //37
                    { label: '解', content: '正しい' }, //38
                    { label: '解', content: '取引所集中義務の撤廃、店頭登録市場の機能強化、私設取引システムの導入などの改革が進められた。' }, //39
                    { label: '解', content: '「日本版コーポレートガバナンス・コード」ではなく、「日本版スチュワードシップ・コード」' }, //40
                    // 問41〜50
                    { label: 'ア', content: 'BIS（国際決済銀行）' }, //41
                    { label: 'エ', content: 'アナリスト' }, //42
                    { label: 'オ', content: '' }, //43
                    { label: 'ウ', content: '買い付ける' }, //44
                    { label: 'イ', content: '円建' }, //45
                    { label: 'エ', content: '毎日' }, //46
                    { label: 'オ', content: '' }, //47
                    { label: 'ア', content: '国債' }, //48
                    { label: 'イ', content: 'ヘッジファンド' }, //49
                    { label: 'ウ', content: 'リスク係数' }, //50
                ]"
                
            />
        </div>

        <!-- ボタングループ -->
        <TestNavigationButtons previous-route="sisan2024c" next-route="sisan2023b" />

    </section>

    </SeihoTestLayout>


</template>
