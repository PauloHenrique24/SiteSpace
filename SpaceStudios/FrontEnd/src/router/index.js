import { createRouter, createWebHistory } from 'vue-router'
import Home from '@/components/pages/HomeComponent.vue'
import Jogos from '@/components/pages/JogosComponent.vue'
import News from '@/components/pages/NewsComponent.vue'
import Login from '@/components/pages/LoginComponent.vue'
import Register from '@/components/pages/RegisterComponent.vue'
import Dashboard from '@/components/pages/DashBoardView.vue'

import routesJs from '@/router/routes.js';



const routes = [
  { path: '/', name:'home', component: Home },
  { path: '/jogos', name: 'jogos', component: Jogos},
  { path: '/news', name: 'news', component: News},
  { path: '/login', name: 'login', component: Login},
  { path: '/register', name: 'register', component: Register},
  { path: '/dashboard',
    component: Dashboard,
    name: 'Dashboard',
    meta: {
      auth: true
    }
  },
]

const router = createRouter({
  history: createWebHistory(),
  routes
})


router.beforeEach(routesJs)

export default router