<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2022年7月〜12月実施 フォームA";
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
                    questionTitle="私たちの役割と心がまえ-①"
                    :contents="[
                        '税務',
                        'アフターサービス',
                        '継続', // 問1〜3
                    ]"
                    :labels="[
                        'ア', //1
                        'ウ', //2
                        'エ', //3
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="4〜5"
                    questionTitle="私たちの役割と心がまえ-②"
                    :contents="[
                        '保険業法',
                        '行動規範', // 問4〜5
                    ]"
                    :labels="[
                        'ア', //4
                        'エ', //5
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="6〜7"
                    questionTitle="契約申込み時の実務-①"
                    :contents="[
                        '承諾',
                        '責任開始期', // 問6〜7
                    ]"
                    :labels="[
                        'ア', //6
                        'ウ', //7
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="8〜10"
                    questionTitle="契約申込み時の実務-②"
                    :contents="[
                        '8日',
                        'クーリング・オフ',
                        '既払込金額', // 問8〜10
                    ]"
                    :labels="[
                        'ア', //8
                        'エ', //9
                        'オ', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜12"
                    questionTitle="保険料の払い込み-①"
                    :contents="[
                        '前納',
                        '生命保険会社', // 問11〜12
                    ]"
                    :labels="[
                        'ウ', //11
                        'イ', //12
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="13〜15"
                    questionTitle="保険料の払い込み-②"
                    :contents="[
                        '契約者',
                        '給与引去り',
                        '振替（振込）用紙', // 問13〜15
                    ]"
                    :labels="[
                        'ア', //13
                        'エ', //14
                        'カ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜17"
                    questionTitle="募集時の正しい説明-①"
                    :contents="[
                        '約款',
                        '内閣総理大臣', // 問16〜17
                    ]"
                    :labels="[
                        'ア', //16
                        'エ', //17
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="18〜20"
                    questionTitle="募集時の正しい説明-②"
                    :contents="[
                        '「契約概要」',
                        'いただく前に',
                        '自己責任', // 問18〜20
                    ]"
                    :labels="[
                        'ア', //18
                        'エ', //19
                        'カ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜22"
                    questionTitle="保険金・給付金の請求と支払い-①"
                    :contents="[
                        '公序良俗',
                        '約款', // 問21〜22
                    ]"
                    :labels="[
                        'イ', //21
                        'エ', //22
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="23〜25"
                    questionTitle="保険金・給付金の請求と支払い-②"
                    :contents="[
                        '復活日',
                        '故意',
                        '戦争その他の変乱', // 問23〜25
                    ]"
                    :labels="[
                        'エ', //23
                        'オ', //24
                        'ア', //25
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="26〜30"
                    questionTitle="設計販売の基礎"
                    :contents="[
                        '5',
                        '34',
                        '51',
                        '38',
                        '家族の生活資金 + 妻の生活資金', // 問26〜30
                    ]"
                    :labels="[
                        'ア', //26
                        'ウ', //27
                        'ク', //28
                        'カ', //29
                        'ケ', //30
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会保障制度"
                    :contents="[
                        '正しい',
                        '自営業者等、一般の勤労者等ともに → 自営業者等は個別に納める', //p113
                        '被保険者と事業主が1:2で負担 → 被保険者と事業主が折半で負担', //p113
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の種類"
                    :contents="[
                        '正しい',
                        '正しい',
                        '一般勘定 → 特別勘定', //p20
                        '契約時に定めた保険金額（基本保険金額）は保証されない → 保証される', //p20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険金・給付金の税法上の取り扱い（一時金で受け取った場合）"
                    :contents="[
                        '相続税 → 贈与税', //p126
                        '正しい',
                        '1000万円 → 500万円', //p127
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="34"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険会社の仕組み"
                    :contents="[
                        '正しい',
                        '正しい',
                        '生命保険以外の事業を自由に営むことができる → 他の事業を営むことが制限されている', //p33
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="35"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産の運用"
                    :contents="[
                        '正しい',
                        '資産運用の対象に貸付金も含まれる', //p35
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="コンプライアンスの重要性"
                    :contents="[
                        '正しい',
                        '金融サービス提供法 → 保険業法', //p60
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="正しい告知の取り扱い"
                    :contents="[
                        '正しい',
                        'すでに払い込んだ保険料を払い戻す → 解約返戻金があれば払い戻す', //p86
                        '正しい',
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
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
                        }, //38
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
                        }, //39
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: 'お客さまの生活環境、家族構成等に変化がないかどうか等の情報収集を行うことも大切', //p89
                        }, //40
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '保全・アフターサービスの重要性',
                            content: '正しい',
                        }, //42
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
                        }, //43
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
                        }, //44
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '福祉販売 → 設計販売', //p136
                        }, //46
                        {
                            questionTitle: 'お客さまニーズへの対応',
                            content: '正しい',
                        }, //47
                        {
                            questionTitle: '生命保険の役割',
                            content: '正しい',
                        }, //48
                        {
                            questionTitle: '生命保険の役割',
                            content: '正しい',
                        }, //49
                        {
                            questionTitle: '生命保険の役割',
                            content: '平均寿命 → 平均余命', //p4
                        }, //50
                        {
                            questionTitle: '生命保険の役割',
                            content: '正しい',
                        }, //51
                        {
                            questionTitle: '生命保険の役割',
                            content: '正しい',
                        }, //52
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                        }, //53
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '満年齢を使用するのではなく、保険年齢を使用する → 満年齢を使用する生命保険会社と保険年齢を使用する生命保険会社がある', //p41
                        }, //54
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                        }, //55
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '40000円以上 → 50000円以上<br>100円の収入印紙 → 200円の収入印紙', //p43
                        }, //56
                        {
                            questionTitle: '契約取り扱いの手続き',
                            content: '正しい',
                        }, //57
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '既払込保険料総額の一定範囲内 → 解約返戻金の一定範囲内', //p93
                        }, //58
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '正しい',
                        }, //59
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '既払込保険料の範囲内 → 解約返戻金の範囲内', //p93
                        }, //60
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '正しい',
                        }, //61
                        {
                            questionTitle: '保全・アフターサービス手続きと留意点',
                            content: '満了日に生存保険金は支払われない → 満了日に生存保険金が支払われる', //p95
                        }, //62
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '事業税 → 住民税', //p120
                        }, //63
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '正しい',
                        }, //64
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '正しい',
                        }, //65
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '正しい',
                        }, //66
                        {
                            questionTitle: '保険料の税法上の取り扱い',
                            content: '50000円 → 28000円', //p124
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
                        { questionTitle: '生命保険の仕組み', label: 'ア', content: '相互扶助' }, //68
                        { questionTitle: '生命保険の仕組み', label: 'イ', content: '性別' }, //69
                        { questionTitle: '生命保険の仕組み', label: 'イ', content: '大数の法則' }, //70
                        { questionTitle: '生命保険の仕組み', label: 'ア', content: '年始' }, //71
                        { questionTitle: '生命保険の仕組み', label: 'ア', content: '保険契約者' }, //72
                        { questionTitle: '契約の選択', label: 'ア', content: '環境上' }, //73
                        { questionTitle: '契約の選択', label: 'イ', content: '職務内容' }, //74
                        { questionTitle: '契約の選択', label: 'イ', content: '入院給付金日額' }, //75
                        { questionTitle: '契約の選択', label: 'ア', content: '支払査定時照会制度' }, //76
                        { questionTitle: '契約の選択', label: 'ア', content: '特別条件付契約' }, //77
                        { questionTitle: '隣接業界', label: 'ア', content: '終身共済' }, //78
                        { questionTitle: '隣接業界', label: 'イ', content: '厚生労働省' }, //79
                        { questionTitle: '隣接業界', label: 'ア', content: '1000万円以下' }, //80
                        { questionTitle: '隣接業界', label: 'ア', content: '所得補償保険' }, //81
                        { questionTitle: '隣接業界', label: 'ア', content: '積立年金' }, //82
                    ]"
                />
            </div>

            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
