<script setup>
import { Head } from '@inertiajs/vue3';
import PageLayout from './PageLayout.vue';
</script>

<template>
    <Head title="About Page" />

    <PageLayout>
        <div class="max-w-lg mx-auto mt-10 bg-white p-6 rounded shadow">
            <h1 class="text-2xl font-bold mb-4 text-center">About Me</h1>
            <h3 class="text-lg mb-4">
                <p><strong>Name:</strong> Rassille Jhones Lofranco</p>
                <p><strong>Course & Year:</strong> BSIT, 3rd Year</p>
                <p><strong>Cell No.:</strong> 09123456789</p>
            </h3>
        </div>
    </PageLayout>
</template>
