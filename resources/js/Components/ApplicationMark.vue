<script setup>
import { ref } from 'vue';
import imageLogin from '../Assets/Login.png';
const imageSrc = ref(imageLogin);
</script>
<template>
    <img :src="imageSrc" class="w-56">
</template>
