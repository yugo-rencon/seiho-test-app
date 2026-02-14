<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { reactive, onMounted, ref, computed } from 'vue'
import { Inertia } from '@inertiajs/inertia';
import BreezeValidationErrors from '@/Components/ValidationEroors.vue'
import { getToday } from '@/common';
import MicroModal from '@/Components/MicroModal.vue';

const inputs = ref([]);

const addChoice = () => {
    inputs.value.push('');
}

const deleteChoice = (index) => {
    inputs.value.splice(index, 1);
}


const props =  defineProps({
    errors: Object,
    'items': Array
})

const form = reactive({
    date: null,
    customer_id: null,
    status: true,
    items: []
})

const storePurchase = () => {
    itemList.value.forEach( item => {
        if( item.quantity > 0) {
            form.items.push({
                id: item.id,
                quantity: item.quantity
            })
        }
    })
    Inertia.post(route('purchases.store'), form)
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
                        <section class="text-gray-600 body-font relative">
                            <form @submit.prevent="storePurchase">
                                <div class="container px-5 py-8 mx-auto">
                                    <div class="lg:w-1/2 md:w-2/3 mx-auto">
                                    <div class="flex flex-wrap -m-2">

                                        <!-- 科目名 -->
                                        <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="date" class="leading-7 text-sm text-gray-600">科目名</label>
                                            <select type="date" id="date" name="date" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
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
                                        </div>

                                        <!-- 年度 -->
                                        <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="" class="leading-7 text-sm text-gray-600">年度</label>
                                            <select class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                <option>2022年度</option>
                                                <option>2021年度</option>
                                                <option>2020年度</option>
                                            </select>
                                        </div>
                                        </div>

                                        <!-- フォーム -->
                                        <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="" class="leading-7 text-sm text-gray-600">フォーム</label>
                                            <select class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                <option>フォームA</option>
                                                <option>フォームB</option>
                                                <option>フォームC</option>
                                            </select>
                                        </div>
                                        </div>

                                        <!-- 問題番号 -->
                                        <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="question_number" class="leading-7 text-sm text-gray-600">問題番号</label>
                                            <input type="integer"  name="question_number" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                        </div>

                                        <!-- 解答 -->
                                        <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="question_number" class="leading-7 text-sm text-gray-600">解答</label>
                                            <input type="string" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                        </div>

                                        <!-- 解説 -->
                                        <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="question_number" class="leading-7 text-sm text-gray-600">解説</label>
                                            <input type="text" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                        </div>

                                        <!-- 購入ボタン -->
                                        <div class="p-2 w-full items-center">
                                            <button class="flex mx-auto my-2 text-white bg-indigo-500 border-0 py-3 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">問題を追加する</button>
                                        </div>

                                    </div>
                                    </div>
                                </div>
                            </form>
                        </section>
                        <!-- ここまで貼り付け -->
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
