<script setup>
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '../Layouts/AppLayout.vue'
import GrayButton from '../Components/Buttons/GrayButton.vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
    products:Object,
});
</script>

<template>
    <app-layout title="Welcome">
        <div class="relative">
            <img :src="'/storage/images/site_images/hand_craft.jpg'" alt="LaraShop" class="w-full h-96 opacity-75 object-cover">
            <div class="flex flex-col justify-around items-center absolute inset-0">
                <span class="text-white text-xl">Lorem ipsum dolor sit amet.</span>
                <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                    <GrayButton as="href" href="#" class="text-md">
                        Women
                    </GrayButton>
                    <GrayButton as="href" href="#" class="text-md">
                        Men
                    </GrayButton>
                    <GrayButton as="href" href="#" class="text-md">
                        Kids
                    </GrayButton>
                    <GrayButton as="href" href="#" class="text-md">
                        Home Goods
                    </GrayButton>
                </div>
            </div>
        </div>
        <div class="text-center border-t border-b py-4">
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="flex flex-col max-w-7xl mx-auto px-4 sm:container sm:flex-row sm:space-x-4 sm:my-4 sm:px-6 lg:px-8">
            <Link href="#" class="flex flex-col w-full h-full mb-4">
                <div class="text-center text-white bg-gray-700 py-2">
                    <span>
                        Category
                    </span>
                </div>
                <img :src="'/storage/images/default/no_image.png'" alt="#" class="h-72 object-cover md:w-72 lg:w-96">
            </Link>
            <Link href="#" class="flex flex-col w-full h-full mb-4">
                <div class="text-center text-white bg-gray-700 py-2">
                    <span>
                        Category
                    </span>
                </div>
                <img :src="'/storage/images/default/no_image.png'" alt="#" class="h-72 object-cover md:w-72 lg:w-96">
            </Link>
            <Link href="#" class="flex flex-col w-full h-full mb-4">
                <div class="text-center text-white bg-gray-700 py-2">
                    <span>
                        Category
                    </span>
                </div>
                <img :src="'/storage/images/default/no_image.png'" alt="#" class="h-72 object-cover md:w-72 lg:w-96">
            </Link>
            <Link href="#" class="flex flex-col w-full h-full mb-4">
                <div class="text-center text-white bg-gray-700 py-2">
                    <span>
                        Category
                    </span>
                </div>
                <img :src="'/storage/images/default/no_image.png'" alt="#" class="h-72 object-cover md:w-72 lg:w-96">
            </Link>
        </div>
        <div class="text-center text-white bg-black px-4 py-4">
            <p class="container">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto fuga neque culpa illum sit exercitationem enim dolores dolor quaerat quos, ex ipsa, recusandae in ad voluptates officia voluptatem, nobis animi!
                Magni harum quos voluptas ex eveniet inventore rerum ducimus repellendus! Saepe, nam. Tempora optio ratione ipsa. Commodi est voluptatem excepturi dignissimos voluptas nostrum ut atque, repellendus quidem nesciunt, maiores fugiat?
                Esse eligendi amet quo error, nostrum necessitatibus laudantium nulla rem quidem accusantium tenetur, aperiam qui excepturi! Natus, praesentium repellat esse optio fugiat id vel voluptatum deserunt minus, provident cum doloribus.
            </p>
        </div>
    </app-layout>
</template>

