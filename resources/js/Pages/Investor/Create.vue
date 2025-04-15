<script setup>
import { ref } from 'vue';
import { useForm,Link } from '@inertiajs/vue3';

const form = useForm({
    first_name: '',
    last_name: '',
    phone: '',
    address: '',
    investment_type: '',
});

const submitForm = () => {
    form.post('/investors');
};
</script>

<template>
    <PageLayout>
        <div class="max-w-lg mx-auto bg-white p-6 shadow rounded">
            <h1 class="text-2xl font-bold mb-4 text-center">Create Investor</h1>
            <form @submit.prevent="submitForm">

                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">First Name</label>
                    <input
                        v-model="form.first_name"
                        type="text"
                        class="w-full px-3 py-2 border rounded"
                    />
                    <p v-if="form.errors.first_name" class="text-red-500 text-sm">
                        {{ form.errors.first_name }}
                    </p>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">Last Name</label>
                    <input
                        v-model="form.last_name"
                        type="text"
                        class="w-full px-3 py-2 border rounded"
                    />
                    <p v-if="form.errors.last_name" class="text-red-500 text-sm">
                        {{ form.errors.last_name }}
                    </p>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">Phone</label>
                    <input
                        v-model="form.phone"
                        type="text"
                        class="w-full px-3 py-2 border rounded"
                    />
                    <p v-if="form.errors.phone" class="text-red-500 text-sm">
                        {{ form.errors.phone }}
                    </p>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">Address</label>
                    <input
                        v-model="form.address"
                        type="text"
                        class="w-full px-3 py-2 border rounded"
                    />
                    <p v-if="form.errors.address" class="text-red-500 text-sm">
                        {{ form.errors.address }}
                    </p>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">Investment Type</label>
                    <select
                        v-model="form.investment_type"
                        class="w-full px-3 py-2 border rounded"
                    >
                        <option value="">Select an investment type</option>
                        <option value="micro">Micro</option>
                        <option value="sponsor">Sponsor</option>
                        <option value="benefactor">Benefactor</option>
                    </select>
                    <p v-if="form.errors.investment_type" class="text-red-500 text-sm">
                        {{ form.errors.investment_type }}
                    </p>
                </div>

                <!-- Buttons -->
                <div class="flex justify-end space-x-4">
                    <Link
                        href="/investors"
                        class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 shadow"
                    >
                        Cancel
                    </Link>
                    <button
                        type="submit"
                        class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 shadow"
                    >
                        Create
                    </button>
                </div>
            </form>
        </div>
    </PageLayout>
</template>