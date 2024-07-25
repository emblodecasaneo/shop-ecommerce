<template>
  <main-layout>
    <h1>Product List</h1>
    <ul>
      <li v-for="article in articles" :key="article.id">
        {{ article.nom }}
      </li>
    </ul>
  </main-layout>
</template>

<script setup>
import MainLayout from '../Layouts/MainLayout.vue'

defineProps({
  articles: Object,
})
</script>

<style scoped>
/* Votre style ici */
</style>
