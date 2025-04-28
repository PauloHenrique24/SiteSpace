import { createRouter, createWebHistory } from 'vue-router'
import Home from '../pages/HomeComponent.vue'
import Login from '../pages/LoginComponent.vue'
import Register from '../pages/RegisterComponent.vue'

const routes = [
  { path: '/', name: 'Home', component: Home },
  { path: '/login', name: 'Login', component: Login},
  { path: '/register', name: 'Registrar', component: Register}
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router