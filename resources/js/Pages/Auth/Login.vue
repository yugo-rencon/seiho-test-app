<script setup>
import Checkbox from "@/Components/Checkbox.vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import { ref } from "vue";

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: "",
    password: "",
    remember: false,
});
const showPassword = ref(false);

const submit = () => {
    form.post(route("login"), {
        onFinish: () => form.reset("password"),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="ログイン" />

        <div class="w-full">
            <div class="mb-6">
                <h1 class="text-2xl font-semibold text-gray-900">ログイン</h1>
            </div>

            <!-- Status -->
            <div
                v-if="status"
                class="mb-4 rounded-xl border border-emerald-100 bg-emerald-50 px-4 py-3 text-sm text-emerald-700"
            >
                {{ status }}
            </div>

            <div>
                <form @submit.prevent="submit" class="space-y-4">
                    <div
                        v-if="Object.keys(form.errors).length"
                        class="rounded-xl border border-rose-100 bg-rose-50 px-4 py-3 text-sm text-rose-700"
                    >
                        {{ form.errors.email || form.errors.password }}
                    </div>
                    <!-- Email -->
                    <div>
                        <InputLabel for="email" value="メールアドレス" />
                        <TextInput
                            id="email"
                            type="email"
                            class="mt-1 block w-full"
                            v-model="form.email"
                            required
                            autofocus
                            autocomplete="username"
                        />
                    </div>

                    <!-- Password -->
                    <div>
                        <InputLabel for="password" value="パスワード" />

                        <div class="relative mt-1">
                            <TextInput
                                id="password"
                                :type="showPassword ? 'text' : 'password'"
                                class="block w-full pr-14 text-base"
                                v-model="form.password"
                                required
                                maxlength="255"
                                autocomplete="current-password"
                            />
                            <button
                                type="button"
                                class="absolute right-1 top-1/2 inline-flex h-11 w-11 -translate-y-1/2 items-center justify-center rounded-md text-gray-500 hover:text-purple-600 focus:outline-none focus:ring-2 focus:ring-purple-400"
                                @click="showPassword = !showPassword"
                                :aria-pressed="showPassword"
                                aria-label="パスワードを表示"
                            >
                                <svg
                                    v-if="showPassword"
                                    class="h-5 w-5"
                                    xmlns="http://www.w3.org/2000/svg"
                                    height="24px"
                                    viewBox="0 -960 960 960"
                                    width="24px"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M607.5-372.5Q660-425 660-500t-52.5-127.5Q555-680 480-680t-127.5 52.5Q300-575 300-500t52.5 127.5Q405-320 480-320t127.5-52.5Zm-204-51Q372-455 372-500t31.5-76.5Q435-608 480-608t76.5 31.5Q588-545 588-500t-31.5 76.5Q525-392 480-392t-76.5-31.5ZM214-281.5Q94-363 40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200q-146 0-266-81.5ZM480-500Zm207.5 160.5Q782-399 832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280q113 0 207.5-59.5Z"
                                    />
                                </svg>
                                <svg
                                    v-else
                                    class="h-5 w-5"
                                    xmlns="http://www.w3.org/2000/svg"
                                    height="24px"
                                    viewBox="0 -960 960 960"
                                    width="24px"
                                    fill="currentColor"
                                >
                                    <path
                                        d="m644-428-58-58q9-47-27-88t-93-32l-58-58q17-8 34.5-12t37.5-4q75 0 127.5 52.5T660-500q0 20-4 37.5T644-428Zm128 126-58-56q38-29 67.5-63.5T832-500q-50-101-143.5-160.5T480-720q-29 0-57 4t-55 12l-62-62q41-17 84-25.5t90-8.5q151 0 269 83.5T920-500q-23 59-60.5 109.5T772-302Zm20 246L624-222q-35 11-70.5 16.5T480-200q-151 0-269-83.5T40-500q21-53 53-98.5t73-81.5L56-792l56-56 736 736-56 56ZM222-624q-29 26-53 57t-41 67q50 101 143.5 160.5T480-280q20 0 39-2.5t39-5.5l-36-38q-11 3-21 4.5t-21 1.5q-75 0-127.5-52.5T300-500q0-11 1.5-21t4.5-21l-84-82Zm319 93Zm-151 75Z"
                                    />
                                </svg>

                            </button>
                        </div>

                        <Link
                            v-if="canResetPassword"
                            :href="route('password.request')"
                            class="mt-2 block text-center text-xs text-purple-700 hover:text-purple-800"
                        >
                            パスワードを忘れた方はこちら
                        </Link>
                    </div>

                    <!-- Submit -->
                    <div class="pt-2">
                        <PrimaryButton
                            class="w-full justify-center bg-purple-600 hover:bg-purple-700 focus:ring-purple-500"
                            :class="{ 'opacity-60': form.processing }"
                            :disabled="form.processing"
                        >
                            ログイン
                        </PrimaryButton>
                    </div>

                    <!-- Remember -->
                    <div class="flex items-center">
                        <label class="flex items-center">
                            <Checkbox
                                name="remember"
                                v-model:checked="form.remember"
                            />
                            <span class="ml-2 text-sm text-gray-600"
                                >ログイン状態を保持</span
                            >
                        </label>
                    </div>

                    <div
                        class="my-2 flex items-center gap-3 text-xs text-gray-400"
                    >
                        <div class="h-px flex-1 bg-gray-200"></div>
                        <span>または</span>
                        <div class="h-px flex-1 bg-gray-200"></div>
                    </div>

                    <a
                        :href="route('google.redirect')"
                        class="w-full inline-flex items-center justify-center gap-2 rounded-md border border-gray-200 bg-white px-4 py-2.5 text-sm font-semibold text-gray-700 hover:bg-gray-50 transition"
                    >
                        <svg
                            class="h-4 w-4"
                            viewBox="0 0 48 48"
                            aria-hidden="true"
                        >
                            <path
                                fill="#FFC107"
                                d="M43.6 20.5H42V20H24v8h11.3C33.7 32.7 29.3 36 24 36c-6.6 0-12-5.4-12-12s5.4-12 12-12c3.1 0 5.9 1.2 8.1 3.1l5.7-5.7C34.2 6 29.4 4 24 4 12.9 4 4 12.9 4 24s8.9 20 20 20c11 0 20-9 20-20 0-1.3-.1-2.7-.4-3.5z"
                            />
                            <path
                                fill="#FF3D00"
                                d="M6.3 14.7l6.6 4.8C14.7 16 19 12 24 12c3.1 0 5.9 1.2 8.1 3.1l5.7-5.7C34.2 6 29.4 4 24 4 16.3 4 9.7 8.3 6.3 14.7z"
                            />
                            <path
                                fill="#4CAF50"
                                d="M24 44c5.3 0 10.1-2 13.8-5.2l-6.4-5.4C29.1 35 26.7 36 24 36c-5.3 0-9.8-3.4-11.4-8.1l-6.5 5C9.4 39.8 16.2 44 24 44z"
                            />
                            <path
                                fill="#1976D2"
                                d="M43.6 20.5H42V20H24v8h11.3c-1.3 3.4-4.1 6.2-7.9 7.4l6.4 5.4C37.9 38 44 32.9 44 24c0-1.3-.1-2.7-.4-3.5z"
                            />
                        </svg>
                        Googleでログイン
                    </a>

                    <Link
                        :href="route('register')"
                        class="w-full inline-flex items-center justify-center rounded-md border border-purple-100 px-4 py-2.5 text-sm font-semibold text-purple-500 hover:bg-purple-50 transition"
                    >
                        新規登録はこちら
                    </Link>
                </form>
            </div>
        </div>
    </GuestLayout>
</template>
