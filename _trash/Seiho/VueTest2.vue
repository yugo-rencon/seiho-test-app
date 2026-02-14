<script setup>
import { ref, computed } from 'vue';

const currentScreen = ref('start');
const currentQuestionIndex = ref(0);
const selectedAnswer = ref(null);

const quiz = {
  questions: [
  {
    text: 'アインシュタインの相対性理論で有名な方程式は？',
    options: ['E=mc^2', 'F=ma', 'PV=nRT', 'a^2+b^2=c^2'],
    answer: 0,
    explanation: '正解はE=mc^2です。この方程式はエネルギーと質量の関係を示しています。'
  },
  {
    text: '化学元素「Au」は何を表しますか？',
    options: ['プラチナ', '銅', '金', '銀'],
    answer: 2,
    explanation: '正解は金です。周期表上でAuは金を表します。'
  },
  {
    text: 'モーツァルトのオペラ「魔笛」の主人公は誰でしょう？',
    options: ['フィガロ', 'タミーノ', 'パパゲーノ', 'ドン・ジョヴァンニ'],
    answer: 2,
    explanation: '正解はパパゲーノです。彼は鳥使いで物語においてコミカルな役どころとして知られています。'
  },
  {
    text: '世界で最も高い山は？',
    options: ['エベレスト', 'キリマンジャロ', 'コジオスコ', 'デナリ'],
    answer: 0,
    explanation: '正解はエベレストです。エベレストはヒマラヤ山脈に位置しています。'
  },
  {
    text: '哲学者ソクラテスの教えを受けた弟子は誰でしょう？',
    options: ['プラトン', 'アリストテレス', 'エピクテトス', 'ヘラクレイトス'],
    answer: 0,
    explanation: '正解はプラトンです。プラトンはソクラテスの教えを受け、後に自身も哲学を発展させました。'
  }
],
  userAnswers: ref([]),
};

const startQuiz = () => {
  currentScreen.value = 'quiz';
};

const submitAnswer = (answer) => {
  quiz.userAnswers.value.push(answer);
  currentScreen.value = 'result';
};

const nextQuestion = () => {
  if (currentQuestionIndex.value < quiz.questions.length - 1) {
    currentQuestionIndex.value++;
    selectedAnswer.value = null;
    currentScreen.value = 'quiz';
  } else {
    currentScreen.value = 'results';
  }
};

const getResultIcon = (index) => {
    return quiz.userAnswers.value[index] === quiz.questions[index].answer ? '正解' : '不正解';
};

const correctAnswers = computed(() => {
    const userAnswersArray = quiz.userAnswers.value;
    return userAnswersArray.reduce((sum, userAnswer, index) => {
        return sum + (userAnswer === quiz.questions[index].answer ? 1 : 0);
  }, 0);
});

const resetQuiz = () => {
  currentScreen.value = 'start';
  currentQuestionIndex.value = 0;
  quiz.userAnswers.value = [];
};
</script>


<template>
    <body>
    <div id="app" class="flex flex-col items-center justify-center min-h-screen">
      <div v-if="currentScreen === 'start'">
        <h1>4択クイズへようこそ!</h1>
        <button class="button" @click="startQuiz">スタート！</button>
      </div>

      <div v-if="currentScreen === 'quiz'">
        <div class="w-full">
          <div class="bg-white p-6 rounded shadow-md">
            <p class="bg-gray-800 text-white py-1 px-2 rounded">
              {{ `第${currentQuestionIndex + 1}問` }}
            </p>
            <h4 class="text-2xl font-bold">
              {{ quiz.questions[currentQuestionIndex].text  }}
            </h4>
            <hr class="my-4">
            <button class="bg-blue-500 text-white text-lg py-2 px-4 block w-full mb-4 rounded"
                v-for="(option, index) in quiz.questions[currentQuestionIndex].options"
                :key="index"
                @click="submitAnswer(index)">
                {{ option }}
            </button>
          </div>
        </div>
      </div>

      <div v-if="currentScreen === 'result'">
        <div class="text-2xl font-bold">{{ `第${currentQuestionIndex + 1}問` }}</div>
        <div v-for="(question, index) in quiz.questions" :key="index">
          <div v-if="index === currentQuestionIndex">
            <p>結果：{{ getResultIcon(index) }}</p>
            <!-- <p>問題：{{ question.text }}</p>
            <p>正解：{{ question.options[question.answer] }}</p> -->
            <p>解説：{{ question.explanation }}</p>
          </div>
        </div>
      <button class="button" @click="nextQuestion">次の問題へ</button>
    </div>

      <div v-if="currentScreen === 'results'">
        <h1 class="text-xl font-bold">最終結果</h1>
        <table class="border-collapse w-100 mx-auto my-4">
          <thead>
            <tr>
              <th>問題</th>
              <th>正解</th>
              <th>結果</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(question, index) in quiz.questions" :key="index">
              <td>{{ question.text }}</td>
              <td>{{ question.options[question.answer] }}</td>
              <td>{{ getResultIcon(index) }}</td>
            </tr>
          </tbody>
        </table>
        <p>正答率：{{ correctAnswers }}問正解/5問中</p>
        <p class="result" :class="{ pass: correctAnswers >= 3, fail: correctAnswers <= 2 }">
          {{ correctAnswers >= 3 ? '合格！' : 'もっとがんばろう' }}
        </p>
        <button class="button" @click="resetQuiz">スタート画面へもどる</button>
      </div>
    </div>
    </body>
  </template>

<style>

.button {
  background-color: #4285f4;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 4px;
  transition: background-color 0.3s ease;
}

.button:hover {
  background-color: #357ae8;
}

th,
td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: left;
}

th {
  background-color: #f2f2f2;
  color: black;
}

.result {
  font-size: 24px;
  font-weight: bold;
}

.pass {
  color: blue;
}

.fail {
  color: red;
}
</style>

