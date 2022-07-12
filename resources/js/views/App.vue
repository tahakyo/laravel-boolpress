<template>
  <div class="container text-center mt-5">
    <Posts />
  </div>
</template>

<script>
import Posts from "../components/posts.vue";

export default {
  name: "App",
  components: {
    Posts,
  },
  mounted() {
    // console.log("ciao"); 
  },
};
</script>

<style>
</style>