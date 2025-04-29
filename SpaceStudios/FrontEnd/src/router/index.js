import { createRouter, createWebHistory } from 'vue-router'
import Home from '../pages/HomeComponent.vue'
import Login from '../pages/LoginComponent.vue'
import Register from '../pages/RegisterComponent.vue'
import Jogos from '../pages/JogosComponent.vue'
import News from '../pages/NewsComponent.vue'
import Cursos from '../pages/CursosComponent.vue'

const routes = [
  { path: '/', name: 'Home', component: Home },
  { path: '/login', name: 'Login', component: Login},
  { path: '/register', name: 'Registrar', component: Register},
  { path: '/jogos', name: 'Jogos', component: Jogos},
  { path: '/news', name: 'Noticias', component: News},
  { path: '/cursos', name: 'Cursos', component: Cursos},
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router