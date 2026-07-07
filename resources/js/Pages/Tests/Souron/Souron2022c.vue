<script setup>
import QuestionTemp1 from "../../../Components/QuestionTemp1.vue";
import QuestionTemp2 from "../../../Components/QuestionTemp2.vue";
import QuestionTemp3 from "../../../Components/QuestionTemp3.vue";

import Pagetitle from "../../../Components/Pagetitle.vue";
import SeihoTestLayout from "@/Layouts/SeihoTestLayout.vue";
import TestNavigationButtons from "@/Components/TestNavigationButtons.vue";

const title = "生命保険総論";
const subject = "2022年度 フォームC";
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
                    questionTitle="狭義の社会保障制度-①"
                    :relatedProblems="['2022c1']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '保険料の拠出',
                        '全国健康保険協会管掌保険',
                        '国家公務員',
                        '国民健康保険',
                        '後期高齢者', // 問１〜５
                    ]"
                    :labels="[
                        'イ', //1
                        'オ', //2
                        'ケ', //3
                        'キ', //4
                        'エ', //5
                    ]"
                />
                <QuestionTemp3
                    :questionNumber="2"
                    :title="title"
                    :subject="subject"
                    questionTitle="狭義の社会保障制度-②"
                    :relatedProblems="['2022c6']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '共済年金',
                        '国民年金',
                        '労働者災害補償保険',
                        '生活保護',
                        '資力調査（ミーンズ・テスト）', //問６〜10
                    ]"
                    :labels="[
                        'ケ', //6
                        'イ', //7
                        'カ', //8
                        'オ', //9
                        'エ', //10
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
                    questionTitle="危険と保険"
                    :relatedProblems="['2022c22']"
                    :contents="[
                        // rev: 2026-07-06 確認済み
                        '正しい',
                        '確率論における大数の法則に基づき、危険を被る対象物（母数）が多いほど危険の発生頻度の変動幅は[[小さく]]なる。', //p4
                        '商法 → 保険法', //p5
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
                    questionTitle="1970〜80年代のアメリカのニューウェーブ商品の開発"
                    :relatedProblems="['2022a34', '2022c24']"
                    :contents="[
                        '長期 → 短期', //p69
                        '決済機能を持つ → 決済機能を持たない', //p69
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="25"
                    :title="title"
                    :subject="subject"
                    questionTitle="消費構造の変化"
                    :relatedProblems="['2022c25']"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '正しい',
                        '商品の選択に当たっても、従来であれば、[[「周りの人が持っているから」とか「テレビのコマーシャルで見たから」といった外的要素に左右される面が多かった]]のであるが、今日では、[[自分の好みに合っているか、本当に必要か、価格は適切かなどを判断し、自分で納得のいく商品を購入する方向]]に変わってきている。', //p185
                        '消費者の購入態度が変化する中で，企業としても[[従来の画一的商品を大量生産、低価格で販売するという戦略だけでは対応し切れなくなってきた面もあり、いかにニーズを先取りし、他に先駆けて新製品を市場に提供できるかが、重要な課題となっている]]。', //p184-185
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="26"
                    :title="title"
                    :subject="subject"
                    questionTitle="都市経済と相互扶助組織"
                    :relatedProblems="['2022c26']"
                    :contents="[
                        '正しい',
                        '正しい',
                        'ギルドは保障制度ではない', //p53
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="27"
                    :title="title"
                    :subject="subject"
                    questionTitle="変額保険（変額個人年金保険を含む）の特別勘定資産運用における留意点"
                    :relatedProblems="['2022c27']"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '[[特別勘定資産]]の運用実績が直接保険金額や年金額に反映されるため留意が必要がある。', //p110
                        '正しい',
                        '正しい',
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
                        '賦課式の生命保険では、年を経るにつれ死亡率が高くなるので、給付金を一定にすれば、[[分担金が年々増加]]し、一方、分担金を一定にすれば、[[給付金が減少]]せざるを得ないことになる。',//p56
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="29"
                    :title="title"
                    :subject="subject"
                    questionTitle="共済と保険"
                    :relatedProblems="['2022c29']"
                    :contents="[
                        // rev: 2026-07-08 確認済み
                        '正しい',
                        '適合性の原則 → 給付・反対給付均等の原則', //p165
                        '正しい',
                    ]"
                />
                <QuestionTemp1
                    :questionNumber="30"
                    :title="title"
                    :subject="subject"
                    questionTitle="生命保険商品の充実等"
                    :relatedProblems="['2022c30']"
                    :contents="[
                        // rev: 2026-07-07 確認済み
                        '5000万円 → 1000万円', //p191
                        '生命保険の取り扱う個人年金保険は、他の金融機関の年金型商品と比べて[[優れた特色がある]]。', //p190
                        '正しい',
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
                            // rev: 2026-07-07 確認済み
                            questionTitle: '生命保険契約の特殊性',
                            relatedProblems: ['2022b22', '2022c32'],
                            content: '任意規定 → 強行規定',
                        }, //32
                        {
                            questionTitle: '科学的な生命保険会社',
                            relatedProblems: ['2022a33', '2022b33', '2022c33'],
                            content: 'ロイヤル・エクスチェンジ → エクイタブル',
                        }, //33
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '保険の始期',
                            relatedProblems: ['2022c34'],
                            content: '正しい',
                        }, //34
                        {
                            // rev: 2026-07-07 確認済み
                            questionTitle: '日本における生命保険の発展',
                            relatedProblems: ['2022a29', '2022c35'],
                            content: '日本の保険は[[これらの類似制度から発展したものではない]]。', //p72
                        }, //35
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '生活設計',
                            relatedProblems: ['2022c36'],
                            content: '正しい',
                        }, //36
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '組織変更',
                            relatedProblems: ['2022a37', '2022b37', '2022c37'],
                            content: '正しい',
                        }, //37
                        {
                            questionTitle: '消費者契約法',
                            relatedProblems: ['2022c38'],
                            content: '消費者契約法 → 金融商品の販売等に関する法律（現在、金融サービス提供法に改称）',
                        }, //38
                        {
                            // rev: 2026-07-05 確認済み
                            questionTitle: '各都道府県民共済',
                            relatedProblems: ['2022c39'],
                            content: '正しい',
                        }, //39
                        {
                            // rev: 2026-07-07 確認済み
                            questionTitle: '簡易保険の歴史',
                            relatedProblems: ['2022c40'],
                            content: '簡易保険の既契約に対しては[[政府による保証が継続された]]。' //p173
                        }, //40
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '契約の法的性質',
                            relatedProblems: ['2022c41'],
                            label: 'ウ',
                            content: '不要式契約',
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
                            questionTitle: '保険者',
                            relatedProblems: ['2022c43'],
                            label: 'ア',
                            content: '10',
                        }, //43
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '財形保険',
                            relatedProblems: ['2022c44'],
                            label: 'イ',
                            content: '財形住宅貯蓄積立保険',
                        }, //44
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: 'エリザ・ライト',
                            relatedProblems: ['2022c45'],
                            label: 'オ',
                            content: '',
                        }, //45
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '生命保険契約者保護機構',
                            relatedProblems: ['2022c46'],
                            label: 'エ',
                            content: '生命保険会社各社の拠出',
                        }, //46
                        {
                            // rev: 2026-07-06 確認済み
                            questionTitle: '早期是正措置制度',
                            relatedProblems: ['2022c47'],
                            label: 'イ',
                            content: '200%',
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
                            questionTitle: '損害保険',
                            relatedProblems: ['2022a39', '2022b25', '2022c49'],
                            label: 'ウ',
                            content: '保険金額',
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

            <TestNavigationButtons previous-route="souron2022b" next-route="souron2021a" />
        </section>
    </SeihoTestLayout>
</template>
