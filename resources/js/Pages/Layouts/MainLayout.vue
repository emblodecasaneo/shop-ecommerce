<template>
    <Navbar/>
    <main>
       <slot/> 
    </main>
    <footer>
        © 2024 Mon Site
    </footer>
</template>

<script setup>
    import Navbar from '../../Components/Navbar.vue'
</script>