<script setup>
import Pagetitle from "@/Components/Pagetitle.vue";
import DraftNotice from "@/Components/DraftNotice.vue";
import QuestionTemp1 from "@/Components/QuestionTemp1.vue";
import QuestionTemp2 from "@/Components/QuestionTemp2.vue";
import QuestionTemp3 from "@/Components/QuestionTemp3.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";

const title = "生命保険一般課程試験";
const subject = "2026年1月〜6月実施 フォームA";
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
                    questionRange="1〜2"
                    questionTitle="募集時の正しい説明-①"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '約款',
                        '内閣総理大臣', // 問1〜2
                    ]"
                    :labels="[
                        'ア', //1
                        'エ', //2
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="3〜5"
                    questionTitle="募集時の正しい説明-②"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '契約概要',
                        'いただく前に',
                        '適合性の原則', // 問3〜5
                    ]"
                    :labels="[
                        'ア', //3
                        'エ', //4
                        'オ', //5
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="6〜7"
                    questionTitle="剰余金と配当金-①"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '利差益',
                        '予定利率', // 問6〜7
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
                    questionTitle="剰余金と配当金-②"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '契約者',
                        '支払時期',
                        '生命保険会社', // 問8〜10
                    ]"
                    :labels="[
                        'ア', //8
                        'ウ', //9
                        'オ', //10
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="11〜12"
                    questionTitle="保全・アフターサービス手続きと留意点-①"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '契約者貸付',
                        '（自動）振替貸付', // 問11〜12
                    ]"
                    :labels="[
                        'ア', //11
                        'ウ', //12
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="13〜15"
                    questionTitle="保全・アフターサービス手続きと留意点-②"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '養老保険',
                        '減額',
                        '復活', // 問13〜15
                    ]"
                    :labels="[
                        'イ', //13
                        'エ', //14
                        'カ', //15
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="16〜18"
                    questionTitle="社会保障制度-①"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '生活保護法',
                        '国民',
                        '遺族', // 問16〜18
                    ]"
                    :labels="[
                        'ア', //16
                        'ウ', //17
                        'オ', //18
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="19〜20"
                    questionTitle="社会保障制度-②"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '３割',
                        '75歳', // 問19〜20
                    ]"
                    :labels="[
                        'イ', //19
                        'エ', //20
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="21〜23"
                    questionTitle="保険金・給付金の税法上の取り扱い（一時金で受け取った場合）-①"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '保険金受取人',
                        '一時所得',
                        '500万円', // 問21〜23
                    ]"
                    :labels="[
                        'ア', //21
                        'エ', //22
                        'オ', //23
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="24〜25"
                    questionTitle="保険金・給付金の税法上の取り扱い（一時金で受け取った場合）-②"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '被保険者',
                        '非課税', // 問24〜25
                    ]"
                    :labels="[
                        'イ', //24
                        'ウ', //25
                    ]"
                />
                <QuestionTemp3
                    :title="title"
                    :subject="subject"
                    questionRange="26〜30"
                    questionTitle="設計販売の基礎"
                    :contents="[
                        // rev: 2026-08-25 確認済み
                        '７',
                        '38',
                        '53',
                        '35',
                        '家族の生活資金＋妻の生活資金', // 問26〜30
                    ]"
                    :labels="[
                        'ア', //26
                        'カ', //27
                        'キ', //28
                        'ウ', //29
                        'ケ', //30
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の役割"
                    :contents="[
                        // rev: 2026-08-27 確認済み
                        '大正時代 → 明治時代', //p1
                        '正しい',
                        '男性の平均寿命は[[約81歳]]、女性は[[約87]]歳となっている。', //p3
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="32"
                    :title="title"
                    :subject="subject"
                    questionTitle="私たちの役割と心がまえ"
                    :contents="[
                        // rev: 2026-08-27 確認済み
                        '正しい',
                        '正しい',
                        '預金保険法等 → 保険業法等', //p11
                        '保険事故の発生による保障の提供時期は、[[契約締結時とは時間的にずれることがほとんどである]]。', //p12
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="33"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の募集等に関する法律"
                    :contents="[
                        // rev: 2026-08-27 確認済み
                        '厚生労働大臣 → 内閣総理大臣', //p63
                        '正しい',
                        '正しい',
                        '告知する事項を契約者等が判断して告知する義務（[[自発的申告義務]]）から、保険会社が質問したことだけに答えればよいという義務（[[質問応答義務]]）に変更された。', //p76
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="34"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険の仕組み"
                    :contents="[
                        // rev: 2026-08-27 確認済み
                        '正しい',
                        '公平性の法則 → 大数の法則', //p14
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="35"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約取り扱いの手続き"
                    :contents="[
                        // rev: 2026-08-27 確認済み
                        '平均年齢 → 保険年齢', //p41
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="36"
                    :title="title"
                    :subject="subject"
                    questionTitle="契約申込み時の実務"
                    :contents="[
                        // rev: 2026-08-27 確認済み
                        '正しい',
                        '第1回保険料充当金払い込みのあった日 → 診査（告知）のあった日', //p46
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="37"
                    :title="title"
                    :subject="subject"
                    questionTitle="相続の法律"
                    :contents="[
                        // rev: 2026-08-27 確認済み
                        '正しい',
                        '正しい',
                        '相続税の課税対象となる財産には、相続により取得した現金・土地などの本来の相続財産の他に、みなし相続財産として、[[死亡保険金や死亡退職金なども含まれる]]。', //p132
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="38"
                    :title="title"
                    :subject="subject"
                    :useAnswerLabelForAll="true"
                    :items="[
                        {
                            questionTitle: '保険料の払い込み',
                            content: '', //p
                        }, //38
                        {
                            questionTitle: '保険料の払い込み',
                            content: '', //p
                        }, //39
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                        }, //40
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保険料の払い込み',
                            content: '正しい',
                        }, //41
                        {
                            questionTitle: '保険料の払い込み',
                            content: '', //p
                        }, //42
                        {
                            questionTitle: '企業向け商品',
                            content: '', //p
                        }, //43
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '企業向け商品',
                            content: '正しい',
                        }, //44
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '企業向け商品',
                            content: '正しい',
                        }, //45
                        {
                            questionTitle: '企業向け商品',
                            content: '', //p
                        }, //46
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '企業向け商品',
                            content: '正しい',
                        }, //47
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '生命保険の種類',
                            content: '正しい',
                        }, //48
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '生命保険の種類',
                            content: '正しい',
                        }, //49
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '生命保険の種類',
                            content: '正しい',
                        }, //50
                        {
                            questionTitle: '生命保険の種類',
                            content: '', //p
                        }, //51
                        {
                            questionTitle: '生命保険の種類',
                            content: '', //p
                        }, //52
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '生命保険会社の仕組み',
                            content: '正しい',
                        }, //53
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '生命保険会社の仕組み',
                            content: '正しい',
                        }, //54
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '生命保険会社の仕組み',
                            content: '正しい',
                        }, //55
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '', //p
                        }, //56
                        {
                            questionTitle: '生命保険会社の仕組み',
                            content: '', //p
                        }, //57
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //58
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '', //p
                        }, //59
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //60
                        {
                            questionTitle: '正しい告知の取り扱い',
                            content: '', //p
                        }, //61
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '正しい告知の取り扱い',
                            content: '正しい',
                        }, //62
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '隣接業界',
                            content: '正しい',
                        }, //63
                        {
                            questionTitle: '隣接業界',
                            content: '', //p
                        }, //64
                        {
                            questionTitle: '隣接業界',
                            content: '', //p
                        }, //65
                        {
                            questionTitle: '隣接業界',
                            content: '', //p
                        }, //66
                        {
                            questionTitle: '隣接業界',
                            content: '', //p
                        }, //67
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="68"
                    :title="title"
                    :subject="subject"
                    :applyChoicePrefix="false"
                    :items="[
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '資産の運用',
                            label: 'イ',
                            content: '安全',
                        }, //68
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '資産の運用',
                            label: 'イ',
                            content: '緩和',
                        }, //69
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '資産の運用',
                            label: 'ア',
                            content: '長期',
                        }, //70
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '資産の運用',
                            label: 'イ',
                            content: '公社債',
                        }, //71
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '資産の運用',
                            label: 'ア',
                            content: '換金性（流動性）',
                        }, //72
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '契約の選択',
                            label: 'イ',
                            content: '経済上',
                        }, //73
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '契約の選択',
                            label: 'ア',
                            content: '特別条件付契約',
                        }, //74
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '契約の選択',
                            label: 'イ',
                            content: '入院給付金日額',
                        }, //75
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '契約の選択',
                            label: 'ア',
                            content: '契約内容登録制度',
                        }, //76
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '契約の選択',
                            label: 'イ',
                            content: '面接',
                        }, //77
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保障の見直し',
                            label: 'イ',
                            content: '責任準備金',
                        }, //78
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保障の見直し',
                            label: 'ア',
                            content: '死亡保障額',
                        }, //79
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保障の見直し',
                            label: 'ア',
                            content: '追加契約',
                        }, //80
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保障の見直し',
                            label: 'ア',
                            content: '転換時',
                        }, //81
                        {
                            // rev: 2026-08-25 確認済み
                            questionTitle: '保障の見直し',
                            label: 'イ',
                            content: '意向確認書面',
                        }, //82
                    ]"
                />
            </div>
            <TestNavigationButtons home-route="ippan.index" />
        </section>
    </SeihoTestLayout>
</template>
