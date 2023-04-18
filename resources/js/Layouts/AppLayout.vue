<script setup>
import { ref } from 'vue';
import { Head, router } from '@inertiajs/vue3';
import Nav from '../Components/Nav.vue';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

defineProps({
    title: String,
});

const showingNavigationDropdown = ref(false);

const switchToTeam = (team) => {
    router.put(route('current-team.update'), {
        team_id: team.id,
    }, {
        preserveState: false,
    });
};

const logout = () => {
    router.post(route('logout'));
};
</script>

<template>
    <div>

        <Head :title="title" />

        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            <Nav />

            

            <!-- Page Heading -->
            <header class="bg-gray-700 dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-2 px-4 sm:px-6 lg:px-8">
                    <h2 class="text-white text-center leading-tight">
                        Lorem ipsum dolor, sit amet.
                    </h2>
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot />
            </main>
            <footer class="text-center text-white bg-gray-700 px-4 py-4">
                <div>
                    <p>
                        Lorem ipsum dolor, sit amet.
                    </p>
                </div>
            </footer>
        </div>
    </div>
</template>
