<script setup>
import { ref } from 'vue';
import { Link, usePage } from '@inertiajs/vue3';

const isOpen = ref(false);
const page = usePage();
</script>

<template>
    <nav class="bg-black p-5 shadow-lg">
        <div class="flex flex-row justify-between items-center">
            <Link href="/">
                <div class="text-white text-2xl font-bold tracking-wide hover:text-gray-300 transition duration-300">
                    <h1>
                        Sy<span class="text-red-600">[n]</span>ex
                    </h1>
                </div>
            </Link>

            <!-- Mobile Menu Button -->
            <button @click="isOpen = !isOpen" class="md:hidden text-white text-2xl focus:outline-none">
                ☰
            </button>

            <div class="hidden md:flex md:flex-row md:uppercase md:gap-6">
                <Link
                    href="/home"
                    class="transition duration-300 hover:text-gray-300 hover:underline"
                    :class="{ 'text-red-500 font-bold underline': page.url.startsWith('/home'), 'text-white': !page.url.startsWith('/home') }">
                    Home
                </Link>
                <Link
                    href="/about"
                    class="transition duration-300 hover:text-gray-300 hover:underline"
                    :class="{ 'text-red-500 font-bold underline': page.url.startsWith('/about'), 'text-white': !page.url.startsWith('/about') }">
                    About
                </Link>
                <Link
                    href="/products"
                    class="transition duration-300 hover:text-gray-300 hover:underline"
                    :class="{ 'text-red-500 font-bold underline': page.url.startsWith('/products'), 'text-white': !page.url.startsWith('/products') }">
                    Products
                </Link>
                <Link
                    href="/categories"
                    class="transition duration-300 hover:text-gray-300 hover:underline"
                    :class="{ 'text-red-500 font-bold underline': page.url.startsWith('/categories'), 'text-white': !page.url.startsWith('/categories') }">
                    Categories
                </Link>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div v-if="isOpen" class="md:hidden flex flex-col items-center space-y-4 mt-4 bg-gray-900 p-4 rounded-lg shadow-md">
            <Link
                href="/home"
                class="text-lg transition duration-300 hover:text-gray-300 hover:underline"
                :class="{ 'text-red-500 font-bold underline': page.url.startsWith('/home') }">
                Home
            </Link>
            <Link
                href="/about"
                class="text-lg transition duration-300 hover:text-gray-300 hover:underline"
                :class="{ 'text-red-500 font-bold underline': page.url.startsWith('/about') }">
                About
            </Link>
            <Link
                href="/products"
                class="text-lg transition duration-300 hover:text-gray-300 hover:underline"
                :class="{ 'text-red-500 font-bold underline': page.url.startsWith('/products') }">
                Products
            </Link>
            <Link
                href="/categories"
                class="text-lg transition duration-300 hover:text-gray-300 hover:underline"
                :class="{ 'text-red-500 font-bold underline': page.url.startsWith('/categories') }">
                Categories
            </Link>
        </div>
    </nav>
    <slot/>
</template>
