<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<template>
  <MainLayout>
    <article>
      <div class="flex-row">
        <div>
          <p>{{ product.description }}</p>
        </div>
        <img :src="product.image" alt="" />
      </div>
    </article>
  </MainLayout>
</template>

<script setup>
import MainLayout from "../Layouts/MainLayout.vue";

defineProps({
  product: Object,
});
</script>
