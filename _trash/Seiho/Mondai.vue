<script setup>
import { Head, Link} from '@inertiajs/vue3';
import { ref, computed } from 'vue';

const props =  defineProps({
    errors: Object,
    'questions': Array
})


const currentScreen = ref('quiz');
const currentSubjectIndex = ref(0);
const currentQuestionIndex = ref(0);
const selectedAnswer = ref(null);

const choices1 = ['ア','イ','ウ','エ','オ','カ','キ','ク','ケ','コ'];
const choices2 = ['ア','イ','ウ'];
const choices3 = ['正','誤'];
const choices4 = ['ア','イ','ウ','エ','オ'];


const userAnswers = ref(['']);

const startQuiz = () => {
  currentScreen.value = 'quiz';
};

const submitAnswer = (answer) => {
  userAnswers.value.push(answer);
  currentScreen.value = 'answer';
};

const nextQuestion = () => {
  if (currentQuestionIndex.value < props.questions[0].length - 1) {
    currentQuestionIndex.value++;
    selectedAnswer.value = null;
    currentScreen.value = 'quiz';
  } else {
    currentScreen.value = 'result';
  }
};

const getResultIcon = (index) => {
    return quiz.userAnswers.value[index] === quiz.questions[index].answer_number ? '正解' : '不正解';
};

// const correctAnswers = computed(() => {
//     const userAnswersArray = userAnswers.value;
//     return userAnswersArray.reduce((sum, userAnswer, index) => {
//         return sum + (userAnswer === quiz.questions[index].answer_number ? 1 : 0);
//   }, 0);
// });

const resetQuiz = () => {
  currentScreen.value = 'start';
  currentQuestionIndex.value = 0;
  quiz.userAnswers.value = [];
};

const toFullWidth = (number) => {
    // 半角から全角に変換する関数
    return String(number).replace(/[0-9]/g, function(s) {
        return String.fromCharCode(s.charCodeAt(0) + 0xFEE0);
        });
};

</script>

<template>
<Head title="生命保険講座｜問題" />

    <!-- ナビゲーションバー -->
    <header class="py-6">
        <div class="container mx-auto flex justify-between items-center px-8 md:px-14 lg:px-24 w-full">
            <div class="text-xl font-bold">
                <Link :href="route('seihoquiz.index')">生命保険講座.com</Link>
            </div>
            <div class="space-x-12 hidden md:flex items-center">
                <a href="#exam8" class="hover:text-selected-text transition-all duration-300">8月試験</a>
                <a href="#exam10" class="hover:text-selected-text transition-all duration-300">10月試験</a>
                <a href="#exam12" class="hover:text-selected-text transition-all duration-300">12月試験</a>
                <a href="#exam2" class="hover:text-selected-text transition-all duration-300">2月試験</a>
                <button class="px-6 py-2 bg-purple-400 font-bold rounded-lg hover:bg-purple-600 transition-all duration-300">
                    <Link :href="route('seihokozas.index')">一覧画面</Link>
                </button>
            </div>
            <div class="md:hidden">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
    </header>

    <div id="" class="container mt-24 flex justify-between items-center mx-auto px-8 md:px-14 lg:px-24 w-full">
        <section class="w-full">
            <h2 class="secondary-title">
                {{ questions[0][currentQuestionIndex].subject }}
            </h2>
            <h3 class="text-2xl font-bold pt-4 relative">
                {{ `第${toFullWidth(currentQuestionIndex + 1)}問` }}     <!-- toFullWidthで半角から全角へ変換 -->
            </h3>
            <p class="secondary-paragraph">
                {{ questions[0][currentQuestionIndex].year}}年度／フォーム{{  questions[0][currentQuestionIndex].form }}
            </p>

            <!-- 選択肢 -->
                <div v-if="currentScreen === 'quiz' || 'answer'" class="grid lg:grid-cols-5 md:grid-cols-2 grid-cols-1 gap-4">
                <button class="px-16 py-3 bg-purple-400 font-bold rounded-lg hover:bg-purple-600 transition-all duration-300 mt-2"
                    v-for="(choice1, index) in choices1"
                    :key="index"
                    @click="submitAnswer(index)">
                {{ choice1 }}
                </button>
                </div>
        </section>
    </div>

    <div id="" class="container mt-24 flex justify-center items-center mx-auto px-8 md:px-14 lg:px-24 w-full">
        <section v-if="currentScreen === 'answer'" >
                <h3 class="text-xl font-bold pt-4 relative">
                    正解：　{{ questions[0][currentQuestionIndex].answer}}
                </h3>
                <h3 class="text-xl font-bold pt-4 relative">
                    解説：　{{ questions[0][currentQuestionIndex].explanation}}
                </h3>
                <div class="flex items-center justify-center mb-4">
                <button @click="nextQuestion" class="px-16 py-3 bg-purple-400 font-bold rounded-lg hover:bg-purple-600 transition-all duration-300 mt-10">
                        <span>次の問題</span>
                </button>
                </div>
        </section>
    </div>


    <div id="" class="container mt-24 flex justify-between items-center mx-auto px-8 md:px-14 lg:px-24 w-full">
    <section class="w-full">
        <h2 class="secondary-title">
            {{ questions[0][currentQuestionIndex].subject}}
        </h2>
        <h3 class="text-2xl font-bold pt-4 relative">
            最終結果
        </h3>
        <p class="secondary-paragraph">
            {{ questions[0][currentQuestionIndex].year}}年度／フォーム{{ questions[0][currentQuestionIndex].form }}
        </p>
        <table class="border-collapse w-full mx-auto mb-4">
            <thead>
                <tr>
                    <th class="border p-2">問題番号</th>
                    <th class="border p-2">あなたの解答</th>
                    <th class="border p-2">正解</th>
                    <th class="border p-2">結果</th>
                    <th class="border p-2">解説</th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr v-for="(question, index) in questions[0][currentQuestionIndex]" :key="index" class="text-center">
                    <td class="border p-2">{{ question.answer }}</td>
                    <td class="border p-2">{{ question.answer }}</td>
                    <td class="border p-2">{{ question.answer }}</td>
                    <td class="border p-2">{{ question.answer }}</td>
                    <td class="border p-2">{{ getResultIcon(index) }}</td>
                </tr> -->
            </tbody>
        </table>
        <p class="text-lg mb-2 text-center">正答率：{{ correctAnswers }}問正解 / {{ questions[0].length }}問中</p>
        <p class="text-center result text-lg font-bold mb-4">
            {{ correctAnswers >= 3 ? '合格！' : 'もっとがんばろう' }}
        </p>

        <div class="flex items-center justify-center mb-4">
        <button @click="resetQuiz" class="px-16 py-3 bg-purple-400 font-bold rounded-lg hover:bg-purple-600 transition-all duration-300 mt-10">
            <span>スタート画面へ戻る</span>
        </button>
        </div>
        </section>
    </div>


</template>
