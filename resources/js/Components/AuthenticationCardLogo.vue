<script setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import imageLogin from '../Assets/Login.png';
const imageSrc = ref(imageLogin);
</script>

<template>
    <Link :href="'/'">
        <div class="flex items-center justify-center">
            <img :src="imageSrc" class="w-56">
        </div>
    </Link>
</template>
