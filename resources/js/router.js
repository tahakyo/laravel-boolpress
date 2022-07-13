import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter)

const router = new VueRouter({
  mode: 'history',
  route: [
    {
      path: '/',
      name: 'home',
      component: Home
    }
  ]
});

export default router;

