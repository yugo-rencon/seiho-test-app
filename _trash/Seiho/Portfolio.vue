<script setup>
import { Head} from '@inertiajs/vue3';

</script>

<template>
<Head title="ポートフォリオサイト" />

    <!-- ナビゲーションバー -->
    <header class="py-6">
        <div class="container mx-auto flex justify-between items-center px-8 md:px-14 lg:px-24 w-full">
            <div class="text-lg font-bold">rencon.com</div>
            <div class="space-x-12 hidden md:flex items-center">
                <a href="#home" class="hover:text-selected-text transition-all duration-300">ホーム</a>
                <a href="#portfolio" class="hover:text-selected-text transition-all duration-300">ポートフォリオ</a>
                <a href="#skills" class="hover:text-selected-text transition-all duration-300">スキル一覧</a>
                <a href="#contact">
                    <button class="px-6 py-2 bg-theme font-bold rounded-lg hover:bg-purple-600 transition-all duration-300">お問い合わせ</button>
                </a>
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
                    TailwindCSSで <br />
                    美しいサイトを <br />
                    作ります。
                </h1>
                <button class="px-6 py-4 bg-theme font-bold rounded-lg hover:bg-purple-600 transition-all duration-300 mt-10">
                    <i class="fa-solid fa-rocket mr-1"></i>
                    <span>もっと見る</span>
                </button>
            </div>
            <img src="/images/human.jpg" alt="image" class="md:absolute lg:top-2 lg:right-52 md:w-3/5 lg:w-3/6 w-10/12 mt-12 md:mt-0 right-6 mx-auto -z-10">
        </div>
    </div>

    <!-- ポートフォリオセクション -->
    <div id="portfolio" class="container mt-64 flex justify-between items-center mx-auto px-8 md:px-14 lg:px-24 w-full">
        <section class="w-full">
            <h2 class="secondary-title">私のポートフォリオ</h2>
            <p class="secondary-paragraph">私が作ってきたWebアプリケーションがこちら</p>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
                <img src="/images/portfolio1.jpg" alt="" class="w-full h-36 lg:h-72 object-cover rounded-md cursor-pointer">
                <img src="/images/portfolio2.jpg" alt="" class="w-full h-36 lg:h-72 object-cover rounded-md cursor-pointer">
                <img src="/images/portfolio3.jpg" alt="" class="w-full h-36 lg:h-72 object-cover rounded-md cursor-pointer">
                <img src="/images/portfolio4.jpg" alt="" class="w-full h-36 lg:h-72 object-cover rounded-md cursor-pointer">
                <img src="/images/portfolio5.jpg" alt="" class="w-full h-36 lg:h-72 object-cover rounded-md cursor-pointer">
                <img src="/images/portfolio6.jpg" alt="" class="w-full h-36 lg:h-72 object-cover rounded-md cursor-pointer">
            </div>
        </section>
    </div>

    <!-- スキルスタック -->
    <div id="skills" class="container mt-64 flex justify-between items-center mx-auto px-8 md:px-14 lg:px-24 w-full">
        <section class="w-full">
            <h2 class="secondary-title">スキルスタック</h2>
            <p class="secondary-paragraph">私は以下のプログラミング言語を1年以上取り扱ってきました。</p>
            <div class="my-16">
                <div class="w-full border border-purple-300 p-16 lg:px-32 lg:py-20 flex justify-center lg:justify-start flex-wrap lg:space-x-32 hover:border-yellow-300 transition-all duration-300 cursor-pointer">
                    <!-- 言語のロゴ -->
                    <div class="mb-6 lg:mb-0 self-center">
                        <i class="fa-brands fa-js text-9xl text-yellow-300"></i>
                    </div>

                    <!-- スキルの説明 -->
                    <div class="text-center flex flex-wrap justify-center lg:text-left lg:block">
                        <h3 class="text-3xl font-semibold">Javascript</h3>
                        <div class="flex flex-wrap w-full justify-center gap-3 lg:w-auto lg:justify-start mt-6 mb-8">
                            <div class="badge">ウェブサイト制作</div>
                            <div class="badge">フロントエンド開発</div>
                        </div>
                        <p class="text-secondary">Javascriptエンジニア。普段はVue.jsを使用して開発現場で働いています。</p>
                    </div>

                </div>
            </div>

            <div class="my-16">
                <div class="w-full border border-purple-300 p-16 lg:px-32 lg:py-20 flex justify-center lg:justify-start flex-wrap lg:space-x-32 hover:border-blue-500 transition-all duration-300 cursor-pointer">
                    <!-- 言語のロゴ -->
                    <div class="mb-6 lg:mb-0 self-center">
                        <i class="fa-brands fa-php text-8xl text-blue-500"></i>
                    </div>

                    <!-- スキルの説明 -->
                    <div class="text-center flex flex-wrap justify-center lg:text-left lg:block">
                        <h3 class="text-3xl font-semibold">PHP</h3>
                        <div class="flex flex-wrap w-full justify-center gap-3 lg:w-auto lg:justify-start mt-6 mb-8">
                            <div class="badge">ウェブサイト制作</div>
                            <div class="badge">バックエンド開発</div>
                        </div>
                        <p class="text-secondary">フレームワークのlaravelを使用してWebアプリを複数開発</p>
                    </div>

                </div>

            </div>
            <div class="my-16">
                <div class="w-full border border-purple-300 p-16 lg:px-32 lg:py-20 flex justify-center lg:justify-start flex-wrap lg:space-x-32 hover:border-orange-400 transition-all duration-300 cursor-pointer">
                    <!-- 言語のロゴ -->
                    <div class="mb-6 lg:mb-0 self-center">
                        <i class="fa-brands fa-html5 text-9xl text-orange-400"></i>
                    </div>

                    <!-- スキルの説明 -->
                    <div class="text-center flex flex-wrap justify-center lg:text-left lg:block">
                        <h3 class="text-3xl font-semibold">HTML/CSS</h3>
                        <div class="flex flex-wrap w-full justify-center gap-3 lg:w-auto lg:justify-start mt-6 mb-8">
                            <div class="badge">UI/UX</div>
                            <div class="badge">ホームページ制作</div>
                        </div>
                        <p class="text-secondary">10社以上のホームページ制作を手掛けてきました。</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- お問い合わせ -->
    <div id="contact" class="container mt-60 mb-20 flex justify-between items-center mx-auto px-8 md:px-14 lg:px-24 w-full">
        <section class="w-full">
            <h2 class="secondary-title">お問い合わせ</h2>
            <p class="secondary-paragraph">私の経歴が気になる方はご一報ください。即時対応します。</p>
            <div class="w-full grid lg:grid-cols-2 gap-8 lg:gap-32 mt-16">
                <div class="space-y-12">
                    <div>
                        <label class="text-white block mb-6 text-xl font-bold">お名前</label>
                        <input type="text" class="w-full border border-inputBorder bg-input px-4 py-4">
                    </div>
                    <div>
                        <label class="text-white block mb-6 text-xl font-bold">メールアドレス</label>
                        <input type="email" class="w-full border border-inputBorder bg-input px-4 py-4">
                    </div>
                    <div>
                        <label class="text-white block mb-6 text-xl font-bold">メッセージ</label>
                        <input type="text" class="w-full border border-inputBorder bg-input px-4 py-4">
                    </div>
                    <button class="px-8 py-3 bg-theme font-bold rounded-lg hover:bg-purple-600 transition-all duration-300">送信する</button>
                </div>
                <div>
                    <p class="text-secondary">080-9383-6550</p>
                    <a href="mailto:yugo04172930@icloud.com">yugo04172930@icloud.com</a>
                    <!-- SNS -->
                    <div class="mt-20 space-x-6">
                        <a href="#">
                            <i class="fa-brands fa-twitter text-3xl text-blue-400"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-facebook text-3xl text-blue-600"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-instagram text-3xl text-pink-400"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

</template>
