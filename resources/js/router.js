import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from "./pages/Home.vue"
import About from "./pages/About.vue"
import Blog from "./pages/Blog.vue"
import SinglePost from "./pages/SinglePost.vue"
import NotFound from "./pages/NotFound.vue"

const router = new VueRouter({
  mode: "history",
  routes: [
    {
      path: "/",
      name: "home",
      component: Home
    },
    {
      path: "/about",
      name: "about",
      component: About
    },
    {
      path: "/blog",
      name: "blog",
      component: Blog
    },
    {
      path: "/blog/:slug",
      name: "single-post",
      component: SinglePost
    },
    {
      path: "/*",
      name: "not_found",
      component: NotFound
    }
  ]
});

export default router;