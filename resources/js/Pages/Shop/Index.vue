<script setup>
import { Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';

defineProps({
    products: Object,
    categories: Object,
});
</script>

<template>
    <AppLayout>
        <header class="text-gray-700 bg-gray-300 shadow">
            <div class="flex justify-between items-center max-w-7x1 mx-auto py-2 px-4 sm:px-6 lg:px-8">
                <div class="flex items-center leading-tight">
                    <Link :href="route('welcome')" class="text-gray-700 transition hover:text-yellow-500">Home</Link>
                </div>
                <div class="w-1/2">

                </div>
            </div>
        </header>
        <div class="flex">
            <div class="border-r w-1/5">
                <div class="text-white text-center bg-gray-700 py-4">
                    <p>Shop By Category</p>
                </div>
                <div class="flex flex-col divide-y">
                    <Link v-for="(category, index) in categories" :key="index" :href="route('shop.index', { category: category.slug })"
                        class="text-left px-4 py-4 transition hover:text-white hover:bg-gray-700 sm:px-6 lg:px-8" 
                        :class="route().current('shop.index', {category: category.slug}) ? 'bg-gray-700 text-white' : ''">
                    {{ category.name }}
                    </Link>
                </div>
            </div>
            <div class="border-1 w-4/5">
                <div class="container flex flex-wrap mx-auto">
                    <Link v-for="(product,index) in products" :key="index" href="#" class="flex flex-col w-full p-4 rounded sm:w-1/2 md:w-1/3">
                        <img :src="'/storage/images/' + product.image" :alt="product.name" class="h-72 object-cover md:w-72 lg:w-96">
                        <div class="flex justify-around bg-gray-700 py-2">
                            <span class="text-yellow-500">
                                {{ product.price }}
                            </span>
                            <span class="text-white">
                                {{ product.name }}
                            </span>
                        </div>
                    </Link>
                </div>
            </div>
        </div>
    </AppLayout>
</template>