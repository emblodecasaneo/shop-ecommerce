<template>
  <MainLayout></MainLayout>
</template>

<script setup>
import MainLayout from "./Layouts/MainLayout.vue";

defineProps({
  articles: Object,
});
</script>
