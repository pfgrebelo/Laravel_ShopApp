
<script>
import { defineComponent } from 'vue'
import { Link, useForm } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import Icon from '@/Components/Icons.vue';
import SecondaryHeader from '@/Components/SecondaryHeader.vue';
import GrayButton from '@/Components/Buttons/GrayButton.vue';
export default defineComponent({
    props: ['product'],
    components: {
        Link,
        AppLayout,
        GrayButton,
        SecondaryHeader,
        Icon,
    },
    data() {
        return {
            quantity: 1,
            form: this.$inertia.form({
                id: this.product.id,
                name: this.product.name,
                price: this.product.price,
                product_code: this.product.product_code,
                details: this.product.details,
                image: this.product.image,
                slug: this.product.slug,
                quantity: 1,
            })
        }
    }
})
</script>

<template>
    <AppLayout :title="product.name">
        <SecondaryHeader>
            <template #breadcrumbs>
                <Icon name="angle-right" class="w-4 h-4 fill-current"></Icon>
                <Link :href="route('shop.index')" class="text-gray-700 transition hover:text-yellow-500">Shop</Link>
                <Icon name="angle-right" class="w-4 h-4 fill-current"></Icon>
                <span>{{ product.name }}</span>
            </template>
            <template #search>
                search
            </template>
        </SecondaryHeader>
        <div class="max-w-7xl mx-auto px-4 py-4 sm:flex sm:space-x-4 sm:px-6 lg:px-8">
            <div class="flex-1 sm:border-r">
                <div class="border-2 p-2">
                    <img :src="'/storage/images/' + product.image" :alt="product.name" class="w-full object-cover">
                </div>
                <div class="flex space-x-4 mt-4">
                    <button type="button">
                        <icon name="angle-left" class="w-4 h-4 fill-current"></icon>
                    </button>
                    <div class="w-1/4">
                        <img :src="'/storage/images/' + product.image" :alt="product.name" class="object-cover">
                    </div>
                    <div class="w-1/4">
                        <img :src="'/storage/images/' + product.image" :alt="product.name" class="object-cover">
                    </div>
                    <div class="w-1/4">
                        <img :src="'/storage/images/' + product.image" :alt="product.name" class="object-cover">
                    </div>
                    <div class="w-1/4">
                        <img :src="'/storage/images/' + product.image" :alt="product.name" class="object-cover">
                    </div>
                    <button type="button">
                        <icon name="angle-right" class="w-4 h-4 fill-current"></icon>
                    </button>
                </div>
            </div>
            <div class="flex-1 space-y-6 my-4 sm:mt-0 sm:border-l sm:pl-4">
                <form>
                    <div class="flex justify-between items-center">
                        <h2 class="text-2xl font-semibold capitalize italic">{{ product.name }}</h2>
                        <div class="text-xl capitalize italic">
                            <span>
                                Price:
                            </span>
                            <span>
                                {{ $filters.formatCurrency(product.price) }}
                            </span>
                        </div>
                    </div>

                    <div class="flex space-x-4 mt-4">
                        <p class="text-xl capitalize">
                            {{ product.details }}
                        </p>
                    </div>
                    <div class="flex space-x-4 mt-4">
                        <span class="text-xl capitalize">
                            Sku:
                        </span>
                        <p class="text-xl capitalize">
                            {{ product.product_code }}
                        </p>
                    </div>

                    <div class="mt-4">
                        <div class="flex items-center">
                            <label for="quantity" class="flex-1 text-xl capitalize">Qty:</label>
                            <select class="flex-1 w-full border bg-white rounded px-3 py-1 outline-none" tabindex="1" v-model="form.quantity">
                                <option :value="qty" :selected="qty === quantity" v-for="(qty, index) in product.quantity" :key="index">{{ qty }}</option>
                            </select>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <gray-button as="submit" class="text-sm">
                            <span>Add to Cart</span>
                        </gray-button>
                    </div>
                </form>
                <div class="flex flex-col divide-y">
                    <div>
                        <button type="button"
                            class="flex justify-between items-center bg-gray-300 rounded-t px-4 py-4 w-full transition hover:text-white hover:bg-gray-700 sm:px-6 lg:px-8">
                            <span>Product Description</span>
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="flex justify-between items-center bg-gray-300 rounded-t px-4 py-4 w-full transition hover:text-white hover:bg-gray-700 sm:px-6 lg:px-8">
                            <span>Product Features</span>
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="flex justify-between items-center bg-gray-300 rounded-t px-4 py-4 w-full transition hover:text-white hover:bg-gray-700 sm:px-6 lg:px-8">
                            <span>Return Policy</span>
                        </button>
                    </div>
                    <div>
                        <button type="button"
                            class="flex justify-between items-center bg-gray-300 rounded-t px-4 py-4 w-full transition hover:text-white hover:bg-gray-700 sm:px-6 lg:px-8">
                            <span>Reviews</span>
                        </button>
                    </div>
                </div>
                <div class="text-center">
                    <p>Suggested based on your search</p>
                </div>
                <div class="flex space-x-4">
                    <Link href="#" class="flex border border-black w-1/4 h-24">
                    <img :src="'/storage/images/' + product.image" :alt="product.name" class="w-full object-cover">
                    </Link>
                    <Link href="#" class="flex border border-black w-1/4 h-24">
                    <img :src="'/storage/images/' + product.image" :alt="product.name" class="w-full object-cover">
                    </Link>
                    <Link href="#" class="flex border border-black w-1/4 h-24">
                    <img :src="'/storage/images/' + product.image" :alt="product.name" class="w-full object-cover">
                    </Link>
                    <Link href="#" class="flex border border-black w-1/4 h-24">
                    <img :src="'/storage/images/' + product.image" :alt="product.name" class="w-full object-cover">
                    </Link>
                </div>
            </div>
    </div>
</AppLayout></template>