import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {

      //Pagina de bienvenida
      path: '/',
      name: 'home',
      component: HomeView,
    },
    {
      path: '/about',
      name: 'about',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/AboutView.vue'),
    },
    {
      path: '/ProductList',
      name: 'productlist',
      component: () => import('../views/ProductListView.vue')
    },
    {
      path: '/ProductDetails',
      name: 'productdetails',
      component: () => import('../views/ProductDetails.vue')
    },
  ],
})

export default router
