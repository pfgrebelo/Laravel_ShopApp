<script setup>
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import GrayButton from '@/Components/Buttons/GrayButton.vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
    featured: Object,
    categories: Object,
});
</script>

<template>
    <app-layout title="Welcome">
        <div class="relative">
            <img :src="'/storage/images/site_images/hand_craft.jpg'" alt="LaraShop"
                class="w-full h-96 opacity-75 object-cover">
            <div class="flex flex-col justify-around items-center absolute inset-0">
                <span class="text-white text-xl">Lorem ipsum dolor sit amet.</span>
                <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                    <GrayButton v-for="(category, index) in categories" :key="index" as="href" 
                    :href="route('shop.index', { category: category.slug })" class="text-md">
                        {{ category.name }}
                    </GrayButton>
                </div>
            </div>
        </div>
        <div class="text-center border-t border-b py-4">
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="flex flex-col max-w-7xl mx-auto px-4 sm:container sm:flex-row sm:space-x-4 sm:my-4 sm:px-6 lg:px-8">
            <Link v-for="(feat, index) in featured" :key="index" href="#" class="flex flex-col w-full h-full mb-4">
            <div class="text-center text-white bg-gray-700 py-2">
                <span>
                    {{ feat.name }}
                </span>
            </div>
            <img :src="'/storage/images/' + feat.image" :alt="feat.name" class="h-72 object-cover md:w-72 lg:w-96">
            </Link>
        </div>
        <div class="text-center text-white bg-black px-4 py-4">
            <p class="container">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto fuga neque culpa illum sit exercitationem
                enim dolores dolor quaerat quos, ex ipsa, recusandae in ad voluptates officia voluptatem, nobis animi!
                Magni harum quos voluptas ex eveniet inventore rerum ducimus repellendus! Saepe, nam. Tempora optio ratione
                ipsa. Commodi est voluptatem excepturi dignissimos voluptas nostrum ut atque, repellendus quidem nesciunt,
                maiores fugiat?
                Esse eligendi amet quo error, nostrum necessitatibus laudantium nulla rem quidem accusantium tenetur,
                aperiam qui excepturi! Natus, praesentium repellat esse optio fugiat id vel voluptatum deserunt minus,
                provident cum doloribus.
            </p>
        </div>
    </app-layout>
</template>

