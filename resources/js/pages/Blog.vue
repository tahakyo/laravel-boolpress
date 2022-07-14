<template>
  <div class="container">
    <posts />
  </div>
</template>

<script>
import Posts from '../components/Posts.vue';

export default {
  components: { Posts },
  name: "Blog",
  comments: {
    Posts
  }
};
</script>

<style>
</style>