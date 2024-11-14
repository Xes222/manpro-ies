import { createRouter, createWebHistory } from 'vue-router';

import HomeView from '../views/HomeView.vue'
import AboutView from '../views/AboutView.vue'
import MenuView from '../views/MenuView.vue'
import FormPesan from '../views/FormPesan.vue'
import LoginView from '../views/LoginView.vue'
import SignUpView from '../views/SignUpView.vue'
import ContactView from '../views/ContactView.vue'
import FormMenu from '../views/FormMenuView.vue'
import ListMenu from '../views/ListMenuView.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView,
  },
  {
    path: '/about',
    name: 'about',
    component: AboutView,
  },
  {
    path: '/menu',
    name: 'menu',
    component: MenuView,
  },
  {
    path: '/formpsn',
    name: 'formpsn',
    component: FormPesan,
  },
  {
    path: '/login',
    name: 'login',
    component: LoginView,
  },
  {
    path: '/signup',
    name: 'signup',
    component: SignUpView,
  },
  {
    path: '/contact',
    name: 'contact',
    component: ContactView,
  },
  {
    path: '/addMenu',
    name: 'addMenu',
    component: FormMenu,
    beforeEnter: (to, from, next) => {
      const userStore = useUserStore() // Mengambil data user dari store Pinia
      if (userStore.role === 'admin') {
        next() // Lanjutkan ke route jika pengguna adalah admin
      } else {
        next('/') // Redirect ke halaman lain jika bukan admin
      }
    },
  },
  {
    path: '/listMenu',
    name: 'listMenu',
    component: ListMenu,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
