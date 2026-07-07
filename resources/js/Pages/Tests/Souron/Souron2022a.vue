<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険総論";
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
                    questionTitle="生命保険契約の特殊性-①"
                    :relatedProblems="['2022a1']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '契約自由',
                        '債権債務',
                        '経済的',
                        '保険法',
                        '商法', // 問１〜５
                    ]"
                    :labels="[
                        'ケ', //1
                        'ウ', //2
                        'エ', //3
                        'イ', //4
                        'キ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約の特殊性-②"
                    :relatedProblems="['2022a6']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '拘束',
                        '法規範説',
                        '定型的取引',
                        '保険約款',
                        '強行', //問６〜10
                    ]"
                    :labels="[
                        'ウ', //6
                        'ア', //7
                        'キ', //8
                        'カ', //9
                        'イ', //10
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="3"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会構造の変化-①"
                    :relatedProblems="['2022a11', '2022b11', '2022c11']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '平均寿命',
                        '7',
                        '速い',
                        '扶養',
                        '15〜64', //問11〜15
                    ]"
                    :labels="[
                        'ク', //11
                        'ウ', //12
                        'キ', //13
                        'カ', //14
                        'コ', //15
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="4"
                    :title="title"
                    :subject="subject"
                    questionTitle="社会構造の変化-②"
                    :relatedProblems="['2022a16', '2022b16', '2022c16']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '年金',
                        '70',
                        '合計特殊出生率',
                        '下回って',
                        '労働力率', //問16〜20
                    ]"
                    :labels="[
                        'エ', //16
                        'ケ', //17
                        'イ', //18
                        'オ', //19
                        'コ', //20
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="21"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険契約の要素"
                    :relatedProblems="['2022a21', '2022b21', '2022c21']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '保険契約者の資格については別段の制限はなく、個人であると法人であるとを問わず、また[[行為能力者であると否とを問わない]]。', //p13
                        '正しい',
                        '保険金受取人の資格については何らの制限はなく、個人であると法人であると、また[[行為能力者であると否とを問わない]]。', //p14
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="22"
                    :title="title"
                    :subject="subject"
                    questionTitle="アメリカにおけるアームストロング調査"
                    :relatedProblems="['2022a22']"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '予定利率 → 新契約費', //p63
                        '会社の株主 → 会社の役員', //p64
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="23"
                    :title="title"
                    :subject="subject"
                    questionTitle="介護保険制度"
                    :relatedProblems="['2022a23', '2022b23', '2022c23']"
                    :contents="[
                        // rev: 2026-07-08 確認済み
                        '介護保険制度の被保険者は、[[65歳]]以上を第１号被保険者とし、[[40歳〜65歳]]未満の医療保険加入者を第２号被保険者とする。', //p140
                        '正しい',
                        '[[第1号被保険者の保険料]]は、各市町村ごとに基準保険料（所得段階別の定額保険料）が設定される。', //p141
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="24"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険業法の概要"
                    :relatedProblems="['2022a24']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '正しい',
                        '保険業法の目的は、保険業を行う者の業務の健全かつ適切な運営および保険募集の公正を確保することにより、[[保険契約者等]]の保護を図り、国民生活の安定・国民経済の健全な発展に資することにある', //p150
                        '保険会社の子会社の業務範囲については、[[他業の禁止の観点から制限がなされている]]。', //p152
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="少額短期保険業"
                    :relatedProblems="['2022a25']"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '少額短期保険業は、短期（生保・医療保険で1年以内、損害保険で2年以内）かつ少額保険金額（疾病による死亡保険金[[300万円]]以内、疾病・傷害による入院給付金等[[80万円]]以内、損害保険金1,000万円以内等で、かつ総額1,000万円以下（複数契約合算））の保険のみを引き受ける保険業である。', //p1776
                        '1500万円 → 1000万円', //p176
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="保険の対象となる危険の種類"
                    :relatedProblems="['2022a26']"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        'その発生を防止しようとしても、ある程度以上は不可能であるという意味で経済主体による制御を[[超えているもの]]。', //p4
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="危険選択の必要性と意義"
                    :relatedProblems="['2022a27']"
                    :contents="[
                        // rev: 2026-07-08 確認済み
                        '正しい',
                        '正しい',
                        '第１次選択 → 逆選択', //p17
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="28"
                    :title="title"
                    :subject="subject"
                    questionTitle="賦課式保険"
                    :relatedProblems="['2022a28', '2022b28', '2022c28']"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '正しい',
                        '賦課式の生命保険では、年を経るにつれ死亡率が高くなるので、給付金を一定にすれば、[[分担金が年々増加]]し、一方、分担金を一定にすれば、[[給付金が減少]]せざるを得ないことになる。', //p56
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="日本における生命保険の発展"
                    :relatedProblems="['2022a29', '2022c35']"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        'ドイツ → 英米', //p72
                        '正しい',
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="資産運用の原則"
                    :relatedProblems="['2022a30']"
                    :contents="[
                        // rev: 2026-07-08 確認済み
                        '正しい',
                        '正しい',
                        '変額保険（変額個人年金保険を含む）の特別勘定資産運用の基本原則も[[一般勘定資産運用の基本原則と大きく異なるものではない]]。', //p110
                    ]"
                />
                <QuestionTemp2
                    :questionNumber="31"
                    :title="title"
                    :subject="subject"
                    :items="[
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '責任準備金',
                            relatedProblems: ['2022a31', '2022b31', '2022c31'],
                            content: '正しい',
                        }, //31
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '生死混合保険',
                            relatedProblems: ['2022a32'],
                            content: '正しい',
                        }, //32
                        {
                            // rev: 2026-07-08 確認済み
                            questionTitle: '科学的な生命保険会社',
                            relatedProblems: ['2022a33', '2022b33', '2022c33'],
                            content: 'ロイヤル・エクスチェンジ → エクイタブル', //p57
                        }, //33
                        {
                            // rev: 2026-07-08 確認済み
                            questionTitle: '1970〜80年代のアメリカのニューウェーブ商品の開発',
                            relatedProblems: ['2022a34', '2022c24'],
                            content: 'ユニバーサル保険は、[[決済機能こそ持たないものの]]、死亡保障額に影響を与えることなくいつでもキャッシュ・バリューの引き出しが可能であり、また保険料の払込みが自由であるなど自在性があることなどから、有力商品となった。', //p69
                        }, //34
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '世帯加入状況',
                            relatedProblems: ['2022a35'],
                            content: '正しい',
                        }, //35
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '資産運用体制の構築',
                            relatedProblems: ['2022a36'],
                            content: '正しい',
                        }, //36
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '組織変更',
                            relatedProblems: ['2022a37', '2022b37', '2022c37'],
                            content: '正しい',
                        }, //37
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: 'JA共済（全国共済農業協同組合連合会）',
                            relatedProblems: ['2022a38'],
                            content: '正しい',
                        }, //38
                        {
                            // rev: 2026-07-07 確認済み
                            questionTitle: '損害保険',
                            relatedProblems: ['2022a39', '2022b25', '2022c49'],
                            content: '損害保険 → 生命保険', //p173
                        }, //39
                        {
                            // rev: 2026-07-08 確認済み
                            questionTitle: '消費者の購入態度の変化',
                            relatedProblems: ['2022a40'],
                            content: '商品の選択に当たっても、従来であれば、[[「周りの人が持っているから」とか「テレビのコマーシャルで見たから」といった外的要素に左右される面が多かった]]のであるが、今日では、[[自分の好みに合っているか、本当に必要か、価格は適切かなどを判断し、自分で納得のいく商品を購入する方向]]に変わってきている。', //p185
                        }, //40
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '保険契約の当事者',
                            relatedProblems: ['2022a41'],
                            label: 'ウ',
                            content: '保険料',
                        }, //41
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '死亡表',
                            relatedProblems: ['2022a42', '2022b42', '2022c42'],
                            label: 'オ',
                            content: '',
                        }, //42
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '利差配当',
                            relatedProblems: ['2022a43'],
                            label: 'イ',
                            content: '経過年数',
                        }, //43
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: 'イギリスの共済的な保険組合',
                            relatedProblems: ['2022a44'],
                            label: 'イ',
                            content: '友愛組合',
                        }, //44
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '生命表の改定',
                            relatedProblems: ['2022a45'],
                            label: 'エ',
                            content: '低く',
                        }, //45
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '生命保険会社の資金の性格',
                            relatedProblems: ['2022a46'],
                            label: 'ア',
                            content: '負債',
                        }, //46
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '社会保障制度',
                            relatedProblems: ['2022a47', '2022b36'],
                            label: 'ア',
                            content: '保険料の拠出',
                        }, //47
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '生命保険業の監督の方法',
                            relatedProblems: ['2022a48', '2022b48', '2022c48'],
                            label: 'エ',
                            content: '財務大臣',
                        }, //48
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '労働者共済',
                            relatedProblems: ['2022a49'],
                            label: 'オ',
                            content: '',
                        }, //49
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '生保業界共通のシステム',
                            relatedProblems: ['2022a50', '2022b50', '2022c50'],
                            label: 'ア',
                            content: '団体定期保険',
                        }, //50
                    ]"
                />
            </div>

            <TestNavigationButtons previous-route="souron2023c" next-route="souron2022b" />
        </section>
    </SeihoTestLayout>
</template>
