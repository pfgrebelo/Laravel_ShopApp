<script setup>
import { ref } from 'vue';
import { Link, router } from '@inertiajs/vue3';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import Icon from './Icons.vue';

const showingNavigationDropdown = ref(false);

const logout = () => {
    router.post(route('logout'));
};
</script>

<template>
    <nav class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <Link :href="route('welcome')">
                                <ApplicationMark class="block h-9 w-auto" />
                                </Link>
                            </div>

                        </div>

                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <!-- Settings Dropdown -->
                            <div class="ml-3 relative">
                                <div class="flex items-center space-x-3 relative">
                                    <Link :href="route('dashboard')" class="hover:text-yellow-500 transition"
                                        v-if="$page.props.user">Dashboard</Link>
                                    <template v-else>
                                        <Link :href="route('register')" class="hover:text-yellow-500 transition">
                                        Register
                                        </Link>
                                        <Link :href="route('login')" class="hover:text-yellow-500 transition">
                                        Login
                                        </Link>
                                    </template>
                                    <Link href="#" class="hover:text-yellow-500 transition">
                                    Shop
                                    </Link>
                                    <form method="post" @submit.prevent="logout" v-if="$page.props.user">
                                        <button type="submit" class="hover:text-yellow-500 transition">
                                            Logout
                                        </button>
                                    </form>
                                    <Link href="#" class="hover:text-red-700 transition">
                                    <span class="bg-red-600 text-white text-xs rounded-md p-1 absolute"
                                        style="top: -10px; right: -8px;">
                                        3
                                    </span>
                                    <Icon name="cart" class="w-4 h-4 fill-current "></Icon>
                                    </Link>
                                </div>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out"
                                @click="showingNavigationDropdown = !showingNavigationDropdown">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path
                                        :class="{ 'hidden': showingNavigationDropdown, 'inline-flex': !showingNavigationDropdown }"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                    <path
                                        :class="{ 'hidden': !showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div :class="{ 'block': showingNavigationDropdown, 'hidden': !showingNavigationDropdown }"
                    class="sm:hidden">
                    <template v-if="$page.props.user">
                        <div class="pt-2 pb-3 space-y-1">
                            <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                                Dashboard
                            </ResponsiveNavLink>
                        </div>
                    </template>
                    <template v-else>
                        <div class="pt-2 pb-3 space-y-1">
                            <ResponsiveNavLink :href="route('register')">
                                Register
                            </ResponsiveNavLink>
                        </div>
                        <div class="pt-2 pb-3 space-y-1">
                            <ResponsiveNavLink :href="route('login')">
                                Login
                            </ResponsiveNavLink>
                        </div>
                    </template>
                    <div class="pt-2 pb-3 space-y-1">
                        <ResponsiveNavLink href="#">
                            Shop
                        </ResponsiveNavLink>
                    </div>
                    <div class="pt-2 pb-3 space-y-1">
                        <Link href="#"
                            class="flex items-center pl-3 pr-4 py-2 border-1-4 border-transparent text-base font-medium text-gray-600 hover:text-red-700 hover:border-red-700 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition">
                            <Icon name="cart" class="w-4 h-4 text-red-700 fill-current "></Icon>
                        <span class="ml-2">
                            3 item(s) in cart
                        </span>
                        </Link>

                    </div>

                    <!-- Responsive Settings Options -->
                    <div v-if="$page.props.user" class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
                        

                        <div class="mt-3 space-y-1">
                           

                            <!-- Authentication -->
                            <form method="POST" @submit.prevent="logout">
                                <ResponsiveNavLink as="button">
                                    Log Out
                                </ResponsiveNavLink>
                            </form>

                        </div>
                    </div>
                </div>
            </nav>
</template>