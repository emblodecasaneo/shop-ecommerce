<template>
<Layout>
    
    <section>
        <h2>Read our latest articles</h2>
            <article v-for="article in articles" :key="article.id">
                <h3>Titre for the blog</h3>
                <h3>{{article.nom}}</h3>
                <a href="#">Read more</a>
            </article>
        </section>
</Layout>
</template>

<script setup>
 import Layout from './Layouts/Layout.vue';

 defineProps({
    articles : Object,
 })

</script>