<template>
    <Navbar/>
    <main>
       <slot/> 
    </main>
    <footer>
        
    </footer>
</template>

<script setup>
    import Navbar from '../../Components/Navbar.vue'
</script>