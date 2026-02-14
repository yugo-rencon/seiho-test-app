<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { reactive, onMounted, ref, computed } from 'vue'
import { Inertia } from '@inertiajs/inertia';
import BreezeValidationErrors from '@/Components/ValidationEroors.vue'
import FlashMessage from '@/Components/FlashMessage.vue';

const props =  defineProps({
    errors: Object,
    image1: String,
    image2: String,
    image3: String,
    image4: String
})

const form = reactive({
    subject: null,
    year: null,
    form: null,
    question_number: null,
    answer: null,
    explanation: null
})

const storeQuestion = () => {
    Inertia.post(route('seihokozas.store'), form)
}

</script>

<template>
    <Head title="問題追加" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                問題追加
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <BreezeValidationErrors :errors="errors" />
                        <FlashMessage />
                        <div class="flex">
                            <!-- <img :src="image1" class="h-20 w-20"> -->
                            <img :src="image2" class="h-20 w-20">
                            <!-- <img :src="image3" class="h-20 w-20"> -->
                            <!-- <img :src="image4" class="h-20 w-20"> -->
                        </div>

                            <div class="mx-auto max-w-xl">
                            <form @submit.prevent="storeQuestion" class="space-y-5">
                                <div class="grid grid-cols-12 gap-5">
                                <div class="col-span-6">
                                    <label for="subject" class="mb-1 block text-sm font-medium text-gray-700">科目名</label>
                                    <select v-model="form.subject" id="subject" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        <option>生命保険総論</option>
                                        <option>生命保険計理</option>
                                        <option>危険選択</option>
                                        <option>約款と法律</option>
                                        <option>生命保険会計</option>
                                        <option>生命保険と営業</option>
                                        <option>生命保険と税法</option>
                                        <option>資産運用</option>
                                    </select>
                                </div>
                                <div class="col-span-3">
                                    <label for="year" class="mb-1 block text-sm font-medium text-gray-700">年度</label>
                                    <select v-model="form.year" id="year" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        <option>2022</option>
                                        <option>2021</option>
                                        <option>2020</option>
                                        <option>2019</option>
                                        <option>2018</option>
                                    </select>
                                </div>
                                <div class="col-span-3">
                                    <label for="form" class="mb-1 block text-sm font-medium text-gray-700">フォーム</label>
                                    <select v-model="form.form" id="form" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                        <option>その他</option>
                                    </select>
                                </div>
                                <div class="col-span-4">
                                    <label for="question_number" class="mb-1 block text-sm font-medium text-gray-700">問題番号</label>
                                    <input v-model="form.question_number" type="number" id="question_number" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500"/>
                                </div>
                                <div class="col-span-8">
                                    <label for="answer" class="mb-1 block text-sm font-medium text-gray-700">解答</label>
                                    <input v-model="form.answer" type="text" id="answer" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500"/>
                                </div>
                                <div class="col-span-12">
                                    <label for="explanation" class="mb-1 block text-sm font-medium text-gray-700">解説</label>
                                    <textarea v-model="form.explanation" id="explanation" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50" rows="5"></textarea>
                                </div>
                                <div class="col-span-12">
                                    <button class="rounded-lg border border-sky-400 bg-sky-400 px-5 py-2.5 text-center text-sm font-bold text-white shadow-sm transition-all hover:border-sky-600 hover:bg-sky-600 focus:ring focus:ring-sky-200 disabled:cursor-not-allowed disabled:border-primary-300 disabled:bg-primary-300">問題を追加</button>
                                </div>
                                </div>
                            </form>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
