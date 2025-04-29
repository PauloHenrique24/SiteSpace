<script setup>
    import Menu from '@/components/Menu.vue';
    import FooterBar from '@/components/FooterBar.vue';
    import Cursos from '@/components/Cursos/CursosContainer.vue'
</script>

<template>
    <div>
        <Menu/>
            <Cursos/>
        <FooterBar/>
    </div>
</template>