<script setup>

  import Menu from '/src/components/Menu.vue'
  import Home from '/src/components/HomePage/Home.vue'
  import Sobre from '/src/components/HomePage/SobreNos.vue'
  import FooterBar from '/src/components/FooterBar.vue'
  import OEstudio from '/src/components/HomePage/OEstudio.vue'
  import Contato from './components/HomePage/Contato.vue'

</script>

<template>
  <header>

  </header>

  <main>
    <Menu/>

    <Home id="home"/>
    <Sobre id="sobre"/>
    <OEstudio id="estudio"/>
    <Contato id="contato"/>
    
    <FooterBar/>
  </main>
</template>

<style scoped>

</style>
