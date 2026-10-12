<script setup>
import { Link, useForm } from "@inertiajs/vue3";
import { computed, ref, watch } from "vue";
import axios from "axios";
import EnglishBooksLayout from "@/Layouts/EnglishBooksLayout.vue";
const props = defineProps({ book: { type: Object, default: null } });
const editing = computed(() => !!props.book?.id);
const genreGroups = [
    { label: "小説", genres: ["ファンタジー", "SF", "ミステリー", "恋愛", "文学・一般小説"] },
    { label: "ノンフィクション", genres: ["ビジネス", "自己啓発", "心理", "科学", "歴史", "社会", "伝記"] },
];
const legacyGenre = computed(() => props.book?.genre && !genreGroups.some((group) => group.genres.includes(props.book.genre)) ? props.book.genre : null);
const form = useForm({ title: props.book?.title || '', author: props.book?.author || '', genre: props.book?.genre || '', is_japanese_author: props.book?.is_japanese_author ?? false, cover_url: props.book?.cover_url || '', amazon_url: props.book?.amazon_url || '', rakuten_url: props.book?.rakuten_url || '', cover_image: null, word_count: props.book?.word_count || null, page_count: props.book?.page_count || null, words_per_page: props.book?.words_per_page ?? null });
const updateWordCount = () => { form.word_count = form.page_count && form.words_per_page !== null && form.words_per_page !== '' ? Math.round(Number(form.page_count) * Number(form.words_per_page) * 0.95) : null; };
watch(() => form.page_count, updateWordCount);
watch(() => form.words_per_page, updateWordCount);
const preview = ref(props.book?.cover_image_url || '');
const isbn = ref('');
const lookupError = ref('');
const lookupMessage = ref('');
const lookingUp = ref(false);
const selectCover = (event) => { const [file] = event.target.files; form.cover_image = file || null; if (file) preview.value = URL.createObjectURL(file); };
const lookupIsbn = async () => {
    lookupError.value = ''; lookupMessage.value = '';
    if (!isbn.value.trim()) { lookupError.value = 'ISBNを入力してください。'; return; }
    lookingUp.value = true;
    try {
        const { data } = await axios.post(route('admin.englishBooks.catalog.lookupIsbn'), { isbn: isbn.value });
        const book = data.book;
        if (book.title) form.title = book.title;
        if (book.author) form.author = book.author;
        if (book.cover_url) { form.cover_url = book.cover_url; form.cover_image = null; preview.value = book.cover_url; }
        if (book.page_count) form.page_count = book.page_count;
        lookupMessage.value = '取得できた情報をフォームに入力しました。内容を確認して保存してください。';
    } catch (error) {
        lookupError.value = error.response?.data?.message || '書籍情報を取得できませんでした。';
    } finally { lookingUp.value = false; }
};
const save = () => form.post(editing.value ? route('admin.englishBooks.catalog.update', props.book.id) : route('admin.englishBooks.catalog.store'), { forceFormData: true });
</script>

<template>
    <EnglishBooksLayout :title="editing ? '本のデータベースを編集' : '本を追加'">
        <div class="mx-auto max-w-3xl px-4 py-8 pb-16 sm:px-8 sm:py-12 sm:pb-20">
            <Link :href="route('admin.englishBooks.catalog')" class="text-sm font-bold text-[#657069] hover:text-[#167a55]">← 本のデータベースに戻る</Link>
            <section class="catalog-form mt-7 border border-[#dfe4e0] bg-white p-5 sm:p-8">
                <p class="text-xs font-bold tracking-[0.14em] text-[#167a55]">BOOK CATALOG</p>
                <h1 class="mt-2 text-3xl font-extrabold tracking-tight text-[#202522]">{{ editing ? '本のデータベースを編集' : '本を追加' }}</h1>
                <p class="mt-2 text-sm text-[#657069]">タイトルや著者、表紙など本そのものの情報を登録します。</p>
                <section v-if="!editing" class="mt-6 border-l-4 border-[#167a55] bg-[#f4f7f5] p-4"><p class="text-sm font-bold text-[#202522]">ISBNから自動入力</p><p class="mt-1 text-xs leading-5 text-[#657069]">ISBN（10桁または13桁）を入力すると、タイトル・著者・表紙・ページ数を検索して入力します。</p><div class="mt-3 flex flex-col gap-2 sm:flex-row"><input v-model="isbn" inputmode="numeric" autocomplete="off" placeholder="例：9780140328721" class="block min-w-0 flex-1 rounded-md border-[#cbd5cf] bg-white text-sm" @keyup.enter.prevent="lookupIsbn" /><button type="button" :disabled="lookingUp" class="shrink-0 rounded-md bg-[#167a55] px-4 py-2 text-sm font-bold text-white transition hover:bg-[#106443] disabled:opacity-50" @click="lookupIsbn">{{ lookingUp ? '検索中…' : 'ISBNで検索' }}</button></div><p v-if="lookupError" class="mt-2 text-xs font-semibold text-rose-600">{{ lookupError }}</p><p v-if="lookupMessage" class="mt-2 text-xs font-semibold text-emerald-700">{{ lookupMessage }}</p></section>
                <form class="mt-8 grid gap-5 sm:grid-cols-2" @submit.prevent="save">
                    <label class="sm:col-span-2"><span class="text-sm font-bold text-[#3d4b52]">タイトル *</span><input v-model="form.title" class="mt-1.5 block w-full rounded-lg border-[#d6cec1] bg-white text-sm" /><p v-if="form.errors.title" class="mt-1 text-xs text-rose-600">{{ form.errors.title }}</p></label>
                    <label><span class="text-sm font-bold text-[#3d4b52]">著者</span><input v-model="form.author" class="mt-1.5 block w-full rounded-lg border-[#d6cec1] bg-white text-sm" /></label>
                    <label><span class="text-sm font-bold text-[#3d4b52]">ジャンル</span><select v-model="form.genre" class="mt-1.5 block w-full rounded-lg border-[#d6cec1] bg-white text-sm"><option value="">未設定</option><option v-if="legacyGenre" :value="legacyGenre">{{ legacyGenre }}（現在の登録値）</option><optgroup v-for="group in genreGroups" :key="group.label" :label="group.label"><option v-for="genre in group.genres" :key="genre" :value="genre">{{ genre }}</option></optgroup></select></label>
                    <div class="sm:col-span-2"><label class="inline-flex items-center gap-2 text-sm font-bold text-[#3d4b52]"><input v-model="form.is_japanese_author" type="checkbox" class="rounded border-[#d6cec1] text-[#c96b48] focus:ring-[#c96b48]" />日本人作家</label><p class="mt-1 text-xs text-[#74665e]">ジャンルとは別に、日本人作家の本として登録できます。</p><p v-if="form.errors.is_japanese_author" class="mt-1 text-xs text-rose-600">{{ form.errors.is_japanese_author }}</p></div>
                    <div><span class="text-sm font-bold text-[#3d4b52]">表紙画像</span><div class="mt-1.5 flex items-center gap-3"><div class="flex h-20 w-14 shrink-0 items-center justify-center overflow-hidden rounded bg-[#eee7db] text-[10px] font-bold text-[#8b7568]"><img v-if="preview" :src="preview" class="h-full w-full object-cover" /><span v-else>BOOK</span></div><label class="cursor-pointer rounded-lg border border-dashed border-[#c96b48] bg-[#f9ede7] px-3 py-2 text-sm font-bold text-[#a94d2e]">画像を選択<input type="file" accept="image/jpeg,image/png,image/webp" class="sr-only" @change="selectCover" /></label></div></div>
                    <label class="sm:col-span-2"><span class="text-sm font-bold text-[#3d4b52]">表紙画像URL（任意）</span><input v-model="form.cover_url" type="url" class="mt-1.5 block w-full rounded-lg border-[#d6cec1] bg-white text-sm" /></label>
                    <label class="sm:col-span-2"><span class="text-sm font-bold text-[#3d4b52]">Amazonリンク（任意）</span><input v-model="form.amazon_url" type="url" class="mt-1.5 block w-full rounded-lg border-[#d6cec1] bg-white text-sm" /><p v-if="form.errors.amazon_url" class="mt-1 text-xs text-rose-600">{{ form.errors.amazon_url }}</p></label>
                    <label class="sm:col-span-2"><span class="text-sm font-bold text-[#3d4b52]">楽天ブックスリンク（任意）</span><input v-model="form.rakuten_url" type="url" class="mt-1.5 block w-full rounded-lg border-[#d6cec1] bg-white text-sm" /><p v-if="form.errors.rakuten_url" class="mt-1 text-xs text-rose-600">{{ form.errors.rakuten_url }}</p></label>
                    <label><span class="text-sm font-bold text-[#3d4b52]">ページ数</span><input v-model.number="form.page_count" type="number" min="1" class="mt-1.5 block w-full rounded-lg border-[#d6cec1] bg-white text-sm" /><p v-if="form.errors.page_count" class="mt-1 text-xs text-rose-600">{{ form.errors.page_count }}</p></label>
                    <label><span class="text-sm font-bold text-[#3d4b52]">1ページあたりの平均語数</span><input v-model.number="form.words_per_page" type="number" min="0" max="10000" step="1" inputmode="numeric" class="mt-1.5 block w-full rounded-lg border-[#d6cec1] bg-white text-sm" /><p class="mt-1 text-xs text-[#74665e]">ページの写真から数えた平均語数を、整数で入力します。</p></label>
                    <div class="sm:col-span-2 border-l-4 border-[#167a55] bg-[#f4f7f5] px-4 py-3"><p class="text-xs font-bold tracking-wider text-[#657069]">総語数（自動計算）</p><p class="mt-1 text-2xl font-extrabold text-[#202522]">{{ form.word_count ? Number(form.word_count).toLocaleString() : '—' }}<span v-if="form.word_count" class="ml-1 text-sm">語</span></p><p class="mt-1 text-xs text-[#657069]">ページ数 × 1ページあたりの平均語数 × 0.95（四捨五入）</p></div>
                    <div class="sm:col-span-2"><button type="submit" :disabled="form.processing" class="w-full rounded-md bg-[#167a55] px-7 py-3 text-sm font-bold text-white transition hover:bg-[#106443] disabled:opacity-50 sm:w-auto">{{ editing ? 'データベースを更新' : '本を追加' }}</button></div>
                </form>
            </section>
        </div>
    </EnglishBooksLayout>
</template>

<style scoped>
.catalog-form :deep(label > span) {
    color: #313a35;
}

.catalog-form :deep(input:not([type="checkbox"])),
.catalog-form :deep(select),
.catalog-form :deep(textarea) {
    border-color: #cbd5cf;
    border-radius: 0.375rem;
    box-shadow: none;
}

.catalog-form :deep(input:not([type="checkbox"]):focus),
.catalog-form :deep(select:focus),
.catalog-form :deep(textarea:focus) {
    border-color: #167a55;
    --tw-ring-color: #167a55;
}
</style>
