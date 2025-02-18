<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

const isOpen = ref(false);
</script>

<template>
    <nav class="bg-black p-5 shadow-lg">
        <div class="flex flex-row justify-between items-center">
            <Link href="/">
                <div class="text-white text-2xl font-bold tracking-wide hover:text-gray-300 transition duration-300">
                    <h1>
                        Sy<span class="text-red-500">[n]</span>ex
                    </h1>
                </div>
            </Link>

            <!-- Mobile Menu Button -->
            <button @click="isOpen = !isOpen" class="md:hidden text-white text-2xl focus:outline-none">
                ☰
            </button>

            <div class="hidden md:flex md:flex-row md:uppercase md:gap-6">
                <Link href="/home" class="text-white transition duration-300 hover:text-gray-300 hover:underline">Home</Link>
                <Link href="/about" class="text-white transition duration-300 hover:text-gray-300 hover:underline">About</Link>
                <Link href="/products" class="text-white transition duration-300 hover:text-gray-300 hover:underline">Products</Link>
                <Link href="/categories" class="text-white transition duration-300 hover:text-gray-300 hover:underline">Categories</Link>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div v-if="isOpen" class="md:hidden flex flex-col items-center space-y-4 mt-4 bg-gray-900 p-4 rounded-lg shadow-md">
            <Link href="/home" class="text-white text-lg transition duration-300 hover:text-gray-300 hover:underline">Home</Link>
            <Link href="/about" class="text-white text-lg transition duration-300 hover:text-gray-300 hover:underline">About</Link>
            <Link href="/products" class="text-white text-lg transition duration-300 hover:text-gray-300 hover:underline">Products</Link>
            <Link href="/categories" class="text-white text-lg transition duration-300 hover:text-gray-300 hover:underline">Categories</Link>
        </div>
    </nav>
    <slot/>
</template>
