<template>
  <div class="container text-center mt-5">
    <h1>Posts list</h1>
  </div>
</template>

<script>
export default {
  name: "Posts",

  data() {
    return {
      posts: [],
    };
  },
  created() {
    this.getPosts();
  },
  methods: {
    getPosts() {
      axios.get("http://127.0.0.1:8000/api/posts").then((resp) => {
        console.log(resp);
      });
    },
  },
};
</script>

<style>
</style>