<script setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue'
import MainLayout from './MainLayout.vue';

const message = ref("This is an Inertia App.")

</script>

<template>
    <MainLayout>
        <div class="flex h-screen bg-gray-800 text-white">
            <div class="w-full flex flex-col justify-center items-center">
                <h1 class="text-5xl uppercase">Wellcome to my Food App</h1>
                <div>{{ message }}</div>
            </div>
        </div>
    </MainLayout>

</template>
