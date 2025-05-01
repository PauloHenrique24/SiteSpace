<template>
  <div id="app">
    <transition name="zoom" mode="out-in">
      <router-view/>
    </transition>
  </div>
</template>

<style scoped>
.zoom-enter-active, .zoom-leave-active {
  transition: all 1.3s ease;
}
.zoom-enter-from {
  /* transform: scale(.7); */
  opacity: 0;
  filter: blur(20px);
}
.zoom-leave-to {
  /* transform: scale(1); */
  opacity: 0;
  filter: blur(20px);
}
</style>