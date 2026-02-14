<script setup>
import { Head, Link} from '@inertiajs/vue3';
import { reactive, onMounted, ref, computed } from 'vue'
import { Inertia } from '@inertiajs/inertia';

const selectedQuestions = ref([])

const searchQuestion = () => {
    Inertia.post(route('seihoquiz.search'),  selectedQuestions)
}

</script>

<template>
<Head title="生命保険講座過去問解説サイト" />

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

    <!-- ヒーローセクション -->
    <div id="home" class="container mt-16 flex justify-between items-center mx-auto px-8 md:px-14 lg:px-24 w-full">
        <div class="flex flex-wrap md:flex-nowrap">
            <div class="md:my-36 lg:ml-20 flex flex-wrap justify-center md:justify-start  max-w-xl">
                <h1 class="font-bold text-3xl text-center md:text-left lg:text-7xl md:text-6xl sm:text-5xl mr-10">
                    生命保険講座 <br />
                    過去問解説 <br />
                    サイト
                </h1>
                <button class="px-6 py-4 bg-purple-400 font-bold rounded-lg hover:bg-purple-600 transition-all duration-300 mt-10">
                    <i class="fa-solid fa-rocket mr-1"></i>
                    <span>もっと見る</span>
                </button>
            </div>
        </div>
    </div>

    <form @submit.prevent="searchQuestion">
    <!-- 8月試験セクション -->
    <div id="exam8" class="container mt-48 flex justify-between items-center mx-auto px-8 md:px-14 lg:px-24 w-full">
        <section class="w-full">
            <h2 class="secondary-title">生命保険総論／生命保険計理</h2>
            <p class="secondary-paragraph">8月実施の試験</p>
            <div class="flex items-center justify-center mb-4">
                <button class="px-16 py-3 bg-purple-400 font-bold rounded-lg hover:bg-purple-600 transition-all duration-300 mt-10">
                        <!-- <Link :href="route('vueTest3')">出題開始</Link> -->
                        出題開始
                </button>
            </div>
            <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-4">
                <div class="bg-white px-3 py-6 rounded">
                    <h3 class="text-xl font-semibold mb-4">生命保険総論</h3>
                    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4 ">

                        <!-- ２０２２年度・生命保険総論 -->
                        <div class="w-full">
                            2022年度
                        <div class="divide-y divide-gray-200 border-y border-gray-200">
                            <div class="flex justify-between items-center space-x-2 py-3">
                                <label for="souron2022A">
                                    <div class="font-medium text-gray-700">フォームA</div>
                                </label>
                                <div class="flex h-10 items-center">
                                    <input v-model="selectedQuestions" value="souron2022A" type="checkbox" id="souron2022A" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                                </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                                <label for="souron2022B">
                                    <div class="font-medium text-gray-700">フォームB</div>
                                </label>
                                <div class="flex h-10 items-center">
                                    <input v-model="selectedQuestions" value="souron2022B" type="checkbox" id="souron2022B" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                                </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                                <label for="souron2022C">
                                    <div class="font-medium text-gray-700">フォームC</div>
                                </label>
                                <div class="flex h-10 items-center">
                                    <input v-model="selectedQuestions" value="souron2022C" type="checkbox" id="souron2022C" name="question[]" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                                </div>
                            </div>
                        </div>
                        </div>

                        <!-- ２０２１年度・生命保険総論 -->
                        <div class="w-full">
                            2021年度
                        <div class="divide-y divide-gray-200 border-y border-gray-200">
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="souron2021A">
                                <div class="font-medium text-gray-700">フォームA</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input v-model="selectedQuestions" value="souron2021A" type="checkbox" id="souron2021A" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="souron2021B">
                                <div class="font-medium text-gray-700">フォームB</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input v-model="selectedQuestions" value="souron2021B" type="checkbox" id="souron2021B" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="souron2021C">
                                <div class="font-medium text-gray-700">フォームC</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input v-model="selectedQuestions" value="souron2021C" type="checkbox" id="souron2021C" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                        </div>
                        </div>

                        <!-- ２０２０年度・生命保険総論 -->
                        <div class="w-full">
                            2020年度
                        <div class="divide-y divide-gray-200 border-y border-gray-200">
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="souron2020A">
                                <div class="font-medium text-gray-700">フォームA</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input v-model="selectedQuestions" value="souron2020A" type="checkbox" id="souron2020A" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="souron2020B">
                                <div class="font-medium text-gray-700">フォームB</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input v-model="selectedQuestions" value="souron2020B" type="checkbox" id="souron2020B" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="souron2020C">
                                <div class="font-medium text-gray-700">フォームC</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input v-model="selectedQuestions" value="souron2020C" type="checkbox" id="souron2020C" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white px-3 py-6 rounded">
                    <h3 class="text-xl font-semibold mb-4">生命保険計理</h3>
                    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4 ">

                        <!-- ２０２２年度・生命保険計理 -->
                        <div class="w-full">
                            2022年度
                        <div class="divide-y divide-gray-200 border-y border-gray-200">
                            <div class="flex justify-between items-center space-x-2 py-3">
                                <label for="keiri2022A">
                                    <div class="font-medium text-gray-700">フォームA</div>
                                </label>
                                <div class="flex h-10 items-center">
                                    <input type="checkbox" id="keiri2022A" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                                </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                                <label for="keiri2022B">
                                    <div class="font-medium text-gray-700">フォームB</div>
                                </label>
                                <div class="flex h-10 items-center">
                                    <input type="checkbox" id="keiri2022B" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                                </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                                <label for="keiri2022C">
                                    <div class="font-medium text-gray-700">フォームC</div>
                                </label>
                                <div class="flex h-10 items-center">
                                    <input type="checkbox" id="keiri2022C" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                                </div>
                            </div>
                        </div>
                        </div>

                        <!-- ２０２１年度・生命保険計理 -->
                        <div class="w-full">
                            2021年度
                        <div class="divide-y divide-gray-200 border-y border-gray-200">
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="keiri2021A">
                                <div class="font-medium text-gray-700">フォームA</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="keiri2021A" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="keiri2021B">
                                <div class="font-medium text-gray-700">フォームB</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="keiri2021B" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="keiri2021C">
                                <div class="font-medium text-gray-700">フォームC</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="keiri2021C" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                        </div>
                        </div>

                        <!-- ２０２０年度・生命保険計理 -->
                        <div class="w-full">
                            2020年度
                        <div class="divide-y divide-gray-200 border-y border-gray-200">
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="keiri2020A">
                                <div class="font-medium text-gray-700">フォームA</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="keiri2020A" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="keiri2020B">
                                <div class="font-medium text-gray-700">フォームB</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="keiri2020B" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="keiri2020C">
                                <div class="font-medium text-gray-700">フォームC</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="keiri2020C" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
    </div>

    <!-- 10月試験セクション -->
    <div id="exam10" class="container mt-32 flex justify-between items-center mx-auto px-8 md:px-14 lg:px-24 w-full">
        <section class="w-full">
            <h2 class="secondary-title">危険選択／約款と法律</h2>
            <p class="secondary-paragraph">10月実施の試験</p>
            <div class="flex items-center justify-center mb-4">
                <button class="px-16 py-3 bg-purple-400 font-bold rounded-lg hover:bg-purple-600 transition-all duration-300 mt-10">
                    <Link :href="route('vueTest3')">出題開始</Link>
                </button>
            </div>
            <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-4">

                <div class="bg-white px-3 py-6 rounded">
                    <h3 class="text-xl font-semibold mb-4">危険選択</h3>
                    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4 ">

                        <!-- ２０２２年度・危険選択 -->
                        <div class="w-full">
                            2022年度
                        <div class="divide-y divide-gray-200 border-y border-gray-200">
                            <div class="flex justify-between items-center space-x-2 py-3">
                                <label for="kiken2022A">
                                    <div class="font-medium text-gray-700">フォームA</div>
                                </label>
                                <div class="flex h-10 items-center">
                                    <input type="checkbox" id="kiken2022A" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                                </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                                <label for="kiken2022B">
                                    <div class="font-medium text-gray-700">フォームB</div>
                                </label>
                                <div class="flex h-10 items-center">
                                    <input type="checkbox" id="kiken2022B" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                                </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                                <label for="kiken2022C">
                                    <div class="font-medium text-gray-700">フォームC</div>
                                </label>
                                <div class="flex h-10 items-center">
                                    <input type="checkbox" id="kiken2022C" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                                </div>
                            </div>
                        </div>
                        </div>

                        <!-- ２０２１年度・危険選択 -->
                        <div class="w-full">
                            2021年度
                        <div class="divide-y divide-gray-200 border-y border-gray-200">
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="kiken2021A">
                                <div class="font-medium text-gray-700">フォームA</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="kiken2021A" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="kiken2021B">
                                <div class="font-medium text-gray-700">フォームB</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="kiken2021B" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="kiken2021C">
                                <div class="font-medium text-gray-700">フォームC</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="kiken2021C" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                        </div>
                        </div>

                        <!-- ２０２０年度・危険選択 -->
                        <div class="w-full">
                            2020年度
                        <div class="divide-y divide-gray-200 border-y border-gray-200">
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="kiken2020A">
                                <div class="font-medium text-gray-700">フォームA</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="kiken2020A" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="kiken2020B">
                                <div class="font-medium text-gray-700">フォームB</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="kiken2020B" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="kiken2020C">
                                <div class="font-medium text-gray-700">フォームC</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="kiken2020C" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white px-3 py-6 rounded">
                    <h3 class="text-xl font-semibold mb-4">約款と法律</h3>
                    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4 ">

                        <!-- ２０２２年度・約款と法律 -->
                        <div class="w-full">
                            2022年度
                        <div class="divide-y divide-gray-200 border-y border-gray-200">
                            <div class="flex justify-between items-center space-x-2 py-3">
                                <label for="yakkan2022A">
                                    <div class="font-medium text-gray-700">フォームA</div>
                                </label>
                                <div class="flex h-10 items-center">
                                    <input type="checkbox" id="yakkan2022A" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                                </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                                <label for="yakkan2022B">
                                    <div class="font-medium text-gray-700">フォームB</div>
                                </label>
                                <div class="flex h-10 items-center">
                                    <input type="checkbox" id="yakkan2022B" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                                </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                                <label for="yakkan2022C">
                                    <div class="font-medium text-gray-700">フォームC</div>
                                </label>
                                <div class="flex h-10 items-center">
                                    <input type="checkbox" id="yakkan2022C" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                                </div>
                            </div>
                        </div>
                        </div>

                        <!-- ２０２１年度・約款と法律 -->
                        <div class="w-full">
                            2021年度
                        <div class="divide-y divide-gray-200 border-y border-gray-200">
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="yakkan2021A">
                                <div class="font-medium text-gray-700">フォームA</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="yakkan2021A" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="yakkan2021B">
                                <div class="font-medium text-gray-700">フォームB</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="yakkan2021B" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="yakkan2021C">
                                <div class="font-medium text-gray-700">フォームC</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="yakkan2021C" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                        </div>
                        </div>

                        <!-- ２０２０年度・約款と法律 -->
                        <div class="w-full">
                            2020年度
                        <div class="divide-y divide-gray-200 border-y border-gray-200">
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="yakkan2020A">
                                <div class="font-medium text-gray-700">フォームA</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="yakkan2020A" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="yakkan2020B">
                                <div class="font-medium text-gray-700">フォームB</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="yakkan2020B" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="yakkan2020C">
                                <div class="font-medium text-gray-700">フォームC</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="yakkan2020C" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <!-- 12月試験セクション -->
    <div id="exam12" class="container mt-32 flex justify-between items-center mx-auto px-8 md:px-14 lg:px-24 w-full">
        <section class="w-full">
            <h2 class="secondary-title">生命保険会計／生命保険と営業</h2>
            <p class="secondary-paragraph">12月実施の試験</p>
            <div class="flex items-center justify-center mb-4">
                <button class="px-16 py-3 bg-purple-400 font-bold rounded-lg hover:bg-purple-600 transition-all duration-300 mt-10">
                    <Link :href="route('vueTest3')">出題開始</Link>
                </button>
            </div>
            <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-4">
                <div class="bg-white px-3 py-6 rounded">
                    <h3 class="text-xl font-semibold mb-4">生命保険会計</h3>
                    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4 ">

                        <!-- ２０２２年度・生命保険会計 -->
                        <div class="w-full">
                            2022年度
                        <div class="divide-y divide-gray-200 border-y border-gray-200">
                            <div class="flex justify-between items-center space-x-2 py-3">
                                <label for="kaikei2022A">
                                    <div class="font-medium text-gray-700">フォームA</div>
                                </label>
                                <div class="flex h-10 items-center">
                                    <input type="checkbox" id="kaikei2022A" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                                </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                                <label for="kaikei2022B">
                                    <div class="font-medium text-gray-700">フォームB</div>
                                </label>
                                <div class="flex h-10 items-center">
                                    <input type="checkbox" id="kaikei2022B" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                                </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                                <label for="kaikei2022C">
                                    <div class="font-medium text-gray-700">フォームC</div>
                                </label>
                                <div class="flex h-10 items-center">
                                    <input type="checkbox" id="kaikei2022C" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                                </div>
                            </div>
                        </div>
                        </div>

                        <!-- ２０２１年度・生命保険会計 -->
                        <div class="w-full">
                            2021年度
                        <div class="divide-y divide-gray-200 border-y border-gray-200">
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="kaikei2021A">
                                <div class="font-medium text-gray-700">フォームA</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="kaikei2021A" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="kaikei2021B">
                                <div class="font-medium text-gray-700">フォームB</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="kaikei2021B" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="kaikei2021C">
                                <div class="font-medium text-gray-700">フォームC</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="kaikei2021C" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                        </div>
                        </div>

                        <!-- ２０２０年度・生命保険会計 -->
                        <div class="w-full">
                            2020年度
                        <div class="divide-y divide-gray-200 border-y border-gray-200">
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="kaikei2020A">
                                <div class="font-medium text-gray-700">フォームA</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="kaikei2020A" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="kaikei2020B">
                                <div class="font-medium text-gray-700">フォームB</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="kaikei2020B" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="kaikei2020C">
                                <div class="font-medium text-gray-700">フォームC</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="kaikei2020C" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white px-3 py-6 rounded">
                    <h3 class="text-xl font-semibold mb-4">生命保険と営業</h3>
                    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4 ">

                        <!-- ２０２２年度・生命保険と営業 -->
                        <div class="w-full">
                            2022年度
                        <div class="divide-y divide-gray-200 border-y border-gray-200">
                            <div class="flex justify-between items-center space-x-2 py-3">
                                <label for="eigyo2022A">
                                    <div class="font-medium text-gray-700">フォームA</div>
                                </label>
                                <div class="flex h-10 items-center">
                                    <input type="checkbox" id="eigyo2022A" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                                </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                                <label for="eigyo2022B">
                                    <div class="font-medium text-gray-700">フォームB</div>
                                </label>
                                <div class="flex h-10 items-center">
                                    <input type="checkbox" id="eigyo2022B" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                                </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                                <label for="eigyo2022C">
                                    <div class="font-medium text-gray-700">フォームC</div>
                                </label>
                                <div class="flex h-10 items-center">
                                    <input type="checkbox" id="eigyo2022C" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                                </div>
                            </div>
                        </div>
                        </div>

                        <!-- ２０２１年度・生命保険と営業 -->
                        <div class="w-full">
                            2021年度
                        <div class="divide-y divide-gray-200 border-y border-gray-200">
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="eigyo2021A">
                                <div class="font-medium text-gray-700">フォームA</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="eigyo2021A" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="eigyo2021B">
                                <div class="font-medium text-gray-700">フォームB</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="eigyo2021B" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="eigyo2021C">
                                <div class="font-medium text-gray-700">フォームC</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="eigyo2021C" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                        </div>
                        </div>

                        <!-- ２０２０年度・生命保険と営業 -->
                        <div class="w-full">
                            2020年度
                        <div class="divide-y divide-gray-200 border-y border-gray-200">
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="eigyo2020A">
                                <div class="font-medium text-gray-700">フォームA</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="eigyo2020A" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="eigyo2020B">
                                <div class="font-medium text-gray-700">フォームB</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="eigyo2020B" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="eigyo2020C">
                                <div class="font-medium text-gray-700">フォームC</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="eigyo2020C" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <!--2月試験セクション -->
    <div id="exam2" class="container mt-32 flex justify-between items-center mx-auto px-8 md:px-14 lg:px-24 w-full mb-64">
        <section class="w-full">
            <h2 class="secondary-title">生命保険と税法／資産運用</h2>
            <p class="secondary-paragraph">2月実施の試験</p>
            <div class="flex items-center justify-center mb-4">
                <button class="px-16 py-3 bg-purple-400 font-bold rounded-lg hover:bg-purple-600 transition-all duration-300 mt-10">
                    <Link :href="route('vueTest3')">出題開始</Link>
                </button>
            </div>
            <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-4">
                <div class="bg-white px-3 py-6 rounded">
                    <h3 class="text-xl font-semibold mb-4">生命保険と税法</h3>
                    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4 ">

                        <!-- ２０２２年度・生命保険と税法 -->
                        <div class="w-full">
                            2022年度
                        <div class="divide-y divide-gray-200 border-y border-gray-200">
                            <div class="flex justify-between items-center space-x-2 py-3">
                                <label for="zeihou2022A">
                                    <div class="font-medium text-gray-700">フォームA</div>
                                </label>
                                <div class="flex h-10 items-center">
                                    <input type="checkbox" id="zeihou2022A" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                                </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                                <label for="zeihou2022B">
                                    <div class="font-medium text-gray-700">フォームB</div>
                                </label>
                                <div class="flex h-10 items-center">
                                    <input type="checkbox" id="zeihou2022B" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                                </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                                <label for="zeihou2022C">
                                    <div class="font-medium text-gray-700">フォームC</div>
                                </label>
                                <div class="flex h-10 items-center">
                                    <input type="checkbox" id="zeihou2022C" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                                </div>
                            </div>
                        </div>
                        </div>

                        <!-- ２０２１年度・生命保険と税法 -->
                        <div class="w-full">
                            2021年度
                        <div class="divide-y divide-gray-200 border-y border-gray-200">
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="zeihou2021A">
                                <div class="font-medium text-gray-700">フォームA</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="zeihou2021A" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="zeihou2021B">
                                <div class="font-medium text-gray-700">フォームB</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="zeihou2021B" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="zeihou2021C">
                                <div class="font-medium text-gray-700">フォームC</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="zeihou2021C" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                        </div>
                        </div>

                        <!-- ２０２０年度・生命保険と税法 -->
                        <div class="w-full">
                            2020年度
                        <div class="divide-y divide-gray-200 border-y border-gray-200">
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="zeihou2020A">
                                <div class="font-medium text-gray-700">フォームA</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="zeihou2020A" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="zeihou2020B">
                                <div class="font-medium text-gray-700">フォームB</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="zeihou2020B" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="zeihou2020C">
                                <div class="font-medium text-gray-700">フォームC</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="zeihou2020C" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white px-3 py-6 rounded">
                    <h3 class="text-xl font-semibold mb-4">資産運用</h3>
                    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4 ">

                        <!-- ２０２２年度・資産運用 -->
                        <div class="w-full">
                            2022年度
                        <div class="divide-y divide-gray-200 border-y border-gray-200">
                            <div class="flex justify-between items-center space-x-2 py-3">
                                <label for="sisan2022A">
                                    <div class="font-medium text-gray-700">フォームA</div>
                                </label>
                                <div class="flex h-10 items-center">
                                    <input type="checkbox" id="sisan2022A" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                                </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                                <label for="sisan2022B">
                                    <div class="font-medium text-gray-700">フォームB</div>
                                </label>
                                <div class="flex h-10 items-center">
                                    <input type="checkbox" id="sisan2022B" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                                </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                                <label for="sisan2022C">
                                    <div class="font-medium text-gray-700">フォームC</div>
                                </label>
                                <div class="flex h-10 items-center">
                                    <input type="checkbox" id="sisan2022C" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                                </div>
                            </div>
                        </div>
                        </div>

                        <!-- ２０２１年度・資産運用 -->
                        <div class="w-full">
                            2021年度
                        <div class="divide-y divide-gray-200 border-y border-gray-200">
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="sisan2021A">
                                <div class="font-medium text-gray-700">フォームA</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="sisan2021A" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="sisan2021B">
                                <div class="font-medium text-gray-700">フォームB</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="sisan2021B" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="sisan2021C">
                                <div class="font-medium text-gray-700">フォームC</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="sisan2021C" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                        </div>
                        </div>

                        <!-- ２０２０年度・資産運用 -->
                        <div class="w-full">
                            2020年度
                        <div class="divide-y divide-gray-200 border-y border-gray-200">
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="sisan2020A">
                                <div class="font-medium text-gray-700">フォームA</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="sisan2020A" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="sisan2020B">
                                <div class="font-medium text-gray-700">フォームB</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="sisan2020B" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                            <div class="flex justify-between items-center space-x-2 py-3">
                            <label for="sisan2020C">
                                <div class="font-medium text-gray-700">フォームC</div>
                            </label>
                            <div class="flex h-10 items-center">
                                <input type="checkbox" id="sisan2020C" name="checkGroup1" class="h-4 w-4 rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 focus:ring-offset-0 disabled:cursor-not-allowed disabled:text-gray-400" />
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    </form>


</template>
