import { createRouter, createWebHistory } from 'vue-router'
import Home from '@/components/pages/HomeComponent.vue'
import Jogos from '@/components/pages/JogosComponent.vue'
import News from '@/components/pages/NewsComponent.vue'

const routes = [
  { path: '/', component: Home },
  { path: '/jogos', component: Jogos},
  { path: '/news', component: News},
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router