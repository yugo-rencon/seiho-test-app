<script setup>
import { Head, useForm, usePage } from '@inertiajs/vue3';
import { computed } from 'vue';
import SeihoTestLayout from '@/Layouts/SeihoTestLayout.vue';

const page = usePage();
const defaultEmail = page.props?.auth?.user?.email ?? '';
const currentPath = computed(() => String(page.url ?? ''));
const scope = computed(() => {
    if (currentPath.value.startsWith('/daigaku')) return 'daigaku';
    if (currentPath.value.startsWith('/senmon')) return 'senmon';
    if (currentPath.value.startsWith('/ouyou')) return 'ouyou';
    if (currentPath.value.startsWith('/ippan')) return 'ippan';
    return 'seiho';
});
const contactStoreRouteName = computed(() => {
    if (scope.value === 'daigaku') return 'daigaku.contact.store';
    if (scope.value === 'senmon') return 'senmon.contact.store';
    if (scope.value === 'ouyou') return 'ouyou.contact.store';
    if (scope.value === 'ippan') return 'ippan.contact.store';
    return 'contact.store';
});
const focusClass = computed(() => {
    if (scope.value === 'daigaku') return 'focus:border-blue-400 focus:ring-blue-400';
    if (scope.value === 'senmon') return 'focus:border-emerald-400 focus:ring-emerald-400';
    if (scope.value === 'ouyou') return 'focus:border-amber-400 focus:ring-amber-400';
    if (scope.value === 'ippan') return 'focus:border-red-400 focus:ring-red-400';
    return 'focus:border-purple-400 focus:ring-purple-400';
});
const checkboxClass = computed(() => {
    if (scope.value === 'daigaku') return 'text-blue-600 focus:ring-blue-400';
    if (scope.value === 'senmon') return 'text-emerald-600 focus:ring-emerald-400';
    if (scope.value === 'ouyou') return 'text-amber-600 focus:ring-amber-400';
    if (scope.value === 'ippan') return 'text-red-600 focus:ring-red-400';
    return 'text-purple-600 focus:ring-purple-400';
});
const submitClass = computed(() => {
    if (scope.value === 'daigaku') return 'from-blue-500 to-cyan-500';
    if (scope.value === 'senmon') return 'from-emerald-500 to-lime-500';
    if (scope.value === 'ouyou') return 'from-amber-500 to-orange-500';
    if (scope.value === 'ippan') return 'from-rose-500 to-red-500';
    return 'from-indigo-500 to-purple-500';
});

const form = useForm({
    category: '',
    name: '',
    email: defaultEmail,
    message: '',
    page_url: '',
    device: '',
    occurred_at: '',
    privacy_agreed: false,
});

const submit = () => {
    form.post(route(contactStoreRouteName.value), {
        preserveScroll: true,
        onSuccess: () => {
            form.reset('name', 'message', 'page_url', 'device', 'occurred_at', 'privacy_agreed');
            if (!defaultEmail) {
                form.email = '';
            }
        },
    });
};
</script>

<template>
    <SeihoTestLayout title="お問い合わせ">
        <Head title="お問い合わせ" />

        <div class="container mx-auto max-w-3xl px-5 sm:px-6 py-12">
            <section class="rounded-2xl border border-gray-100 bg-white p-6 sm:p-8 shadow-sm">
                <h1 class="text-2xl sm:text-3xl font-bold text-gray-900">お問い合わせ</h1>
                <p class="mt-3 text-sm sm:text-base text-gray-600 leading-relaxed">
                    不具合の報告、改善要望、ご意見・感想を受け付けています。内容確認のため、メールアドレスの入力をお願いします。
                </p>

                <form class="mt-8 space-y-5" @submit.prevent="submit">
                    <div>
                        <label class="block text-sm font-semibold text-gray-800 mb-2">
                            種別 <span class="text-red-500">*</span>
                        </label>
                        <select
                            v-model="form.category"
                            class="w-full rounded-lg border border-gray-200 px-3 py-2.5 text-sm"
                            :class="focusClass"
                        >
                            <option value="" disabled>選択してください</option>
                            <option value="bug">不具合の報告</option>
                            <option value="request">改善要望</option>
                            <option value="feedback">ご意見・感想</option>
                            <option value="other">その他</option>
                        </select>
                        <p v-if="form.errors.category" class="mt-1 text-sm text-red-600">{{ form.errors.category }}</p>
                    </div>

                    <div class="grid gap-4 sm:grid-cols-2">
                        <div>
                            <label class="block text-sm font-semibold text-gray-800 mb-2">お名前（任意）</label>
                            <input
                                v-model="form.name"
                                type="text"
                                class="w-full rounded-lg border border-gray-200 px-3 py-2.5 text-sm"
                                :class="focusClass"
                            />
                            <p v-if="form.errors.name" class="mt-1 text-sm text-red-600">{{ form.errors.name }}</p>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-800 mb-2">
                                メールアドレス <span class="text-red-500">*</span>
                            </label>
                            <input
                                v-model="form.email"
                                type="email"
                                class="w-full rounded-lg border border-gray-200 px-3 py-2.5 text-sm"
                                :class="focusClass"
                            />
                            <p v-if="form.errors.email" class="mt-1 text-sm text-red-600">{{ form.errors.email }}</p>
                        </div>
                    </div>

                    <div class="grid gap-4 sm:grid-cols-2">
                        <div>
                            <label class="block text-sm font-semibold text-gray-800 mb-2">利用端末（任意）</label>
                            <select
                                v-model="form.device"
                                class="w-full rounded-lg border border-gray-200 px-3 py-2.5 text-sm"
                                :class="focusClass"
                            >
                                <option value="">選択しない</option>
                                <option value="pc">PC</option>
                                <option value="smartphone">スマートフォン</option>
                                <option value="tablet">タブレット</option>
                                <option value="other">その他</option>
                            </select>
                            <p v-if="form.errors.device" class="mt-1 text-sm text-red-600">{{ form.errors.device }}</p>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-800 mb-2">発生日時（任意）</label>
                            <input
                                v-model="form.occurred_at"
                                type="date"
                                class="w-full rounded-lg border border-gray-200 px-3 py-2.5 text-sm"
                                :class="focusClass"
                            />
                            <p v-if="form.errors.occurred_at" class="mt-1 text-sm text-red-600">{{ form.errors.occurred_at }}</p>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-800 mb-2">対象ページURL（任意）</label>
                        <input
                            v-model="form.page_url"
                            type="url"
                            placeholder="https://..."
                            class="w-full rounded-lg border border-gray-200 px-3 py-2.5 text-sm"
                            :class="focusClass"
                        />
                        <p v-if="form.errors.page_url" class="mt-1 text-sm text-red-600">{{ form.errors.page_url }}</p>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-800 mb-2">
                            お問い合わせ内容 <span class="text-red-500">*</span>
                        </label>
                        <textarea
                            v-model="form.message"
                            rows="7"
                            class="w-full rounded-lg border border-gray-200 px-3 py-2.5 text-sm"
                            :class="focusClass"
                            placeholder="状況やご要望を具体的にご記入ください。"
                        />
                        <p class="mt-1 text-xs text-gray-500">10文字以上で入力してください。</p>
                        <p v-if="form.errors.message" class="mt-1 text-sm text-red-600">{{ form.errors.message }}</p>
                    </div>

                    <label class="flex items-start gap-2 text-sm text-gray-700">
                        <input
                            v-model="form.privacy_agreed"
                            type="checkbox"
                            class="mt-0.5 rounded border-gray-300"
                            :class="checkboxClass"
                        />
                        <span>
                            プライバシーポリシーに同意のうえ送信します
                            <span class="text-red-500">*</span>
                        </span>
                    </label>
                    <p v-if="form.errors.privacy_agreed" class="mt-1 text-sm text-red-600">
                        {{ form.errors.privacy_agreed }}
                    </p>

                    <div class="pt-2">
                        <button
                            type="submit"
                            :disabled="form.processing"
                            class="inline-flex items-center justify-center rounded-full bg-gradient-to-r px-7 py-3 text-sm font-semibold text-white shadow-sm hover:opacity-90 disabled:cursor-not-allowed disabled:opacity-60"
                            :class="submitClass"
                        >
                            お問い合わせを送信
                        </button>
                    </div>
                </form>
            </section>
        </div>
    </SeihoTestLayout>
</template>
