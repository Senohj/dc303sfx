<script setup>
import { Head, Link } from '@inertiajs/vue3';
import PageLayout from '../PageLayout.vue';
import { defineProps } from 'vue';

defineProps({
    investors: Object
});
</script>


<template>
    <PageLayout>
        <div class="flex justify-end mb-4">
            <Link
                href="/investors/create"
                class="px-4 py-2 bg-blue-500 text-white rounded shadow hover:bg-blue-600"
            >
                Add Investor
            </Link>
        </div>
        <!-- Grid for Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <div
                v-for="investor in investors.data"
                :key="investor.id"
                class="p-4 border rounded shadow bg-green-100 m-4">
                <h2 class="text-lg font-bold"> {{ investor.last_name }} {{ investor.first_name }}</h2>
                <p><strong>Phone:</strong> {{ investor.phone }}</p>
                <p><strong>Address:</strong> {{ investor.address }}</p>
                <p><strong>Investment Type:</strong> {{ investor.investment_type }}</p>
            </div>
        </div>

        <!-- Pagination Links -->
        <div class="mt-10 flex justify-center space-x-2">
            <Link v-if="investors.first_page_url" :href="investors.first_page_url" class="px-2 py-1 bg-gray-300 rounded shadow">
                First
            </Link>
            <Link v-if="investors.prev_page_url" :href="investors.prev_page_url" class="px-2 py-1 bg-gray-300 rounded shadow">
                &lt;
            </Link>

            <!-- Page Numbers -->
            <span v-for="page in Array.from({ length: investors.last_page }, (_, i) => i + 1)" :key="page">
                <Link
                    :href="`${investors.path}?page=${page}`"
                    :class="{ 'active bg-gray-400': investors.current_page === page, 'bg-gray-300': investors.current_page !== page }"
                    class="px-2 py-1 rounded shadow"
                >
                    {{ page }}
                </Link>
            </span>

            <Link v-if="investors.next_page_url" :href="investors.next_page_url" class="px-2 py-1 bg-gray-300 rounded shadow">
                &gt;
            </Link>
            <Link v-if="investors.last_page_url" :href="investors.last_page_url" class="px-2 py-1 bg-gray-300 rounded shadow">
                Last
            </Link>
        </div>
    </PageLayout>
</template>

