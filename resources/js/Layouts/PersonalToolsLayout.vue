<script setup>
import { Head, Link } from "@inertiajs/vue3";

defineProps({ title: { type: String, required: true } });

</script>

<template>
    <Head :title="title" />
    <div class="min-h-screen bg-[#fafafa] text-gray-900">
        <header class="border-b border-gray-200 bg-white">
            <div class="mx-auto flex max-w-7xl flex-wrap items-center gap-x-5 gap-y-2 px-4 py-3 sm:px-6">
                <Link :href="route('admin.personal.index')" class="mr-auto text-base font-bold tracking-tight text-gray-900">自分の記録</Link>
            </div>
        </header>
        <main><slot /></main>
    </div>
</template>
