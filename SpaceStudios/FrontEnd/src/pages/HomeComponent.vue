<script setup>

  import Menu from '@/components/Menu.vue'
  import Home from '@/components/HomePage/Home.vue'
  import Sobre from '@/components/HomePage/SobreNos.vue'
  import FooterBar from '@/components/FooterBar.vue'
  import OEstudio from '@/components/HomePage/OEstudio.vue'
  import Contato from '@/components/HomePage/Contato.vue'

</script>

<template>
  <main>
    <Menu/>

      <Home id="home"/>
      <Sobre id="sobre"/>
      <OEstudio id="estudio"/>
      <Contato id="contato"/>
    
    <FooterBar/>
  </main>
</template>
