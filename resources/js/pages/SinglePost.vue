<template>
  <div class="container">
    <section v-if="post">
      <h1>{{ post.title }}</h1>
      <p>Category: {{ categoryName }}</p>
      <p>{{ post.content }}</p>

    </section>
    <section v-else>
      <h2>Loading...</h2>
    </section>
  </div>
</template>

<script>

export default {
  name: "SinglePost",
  data() {
    return {
      post: null,
    };
  },
  created() {
    this.getPostDetails();
  },
  computed: {
    categoryName() {
      if (this.post.category != null) {
        return this.post.category.name;
      }
    },
  },
  methods: {
    getPostDetails() {
      //prelevare lo slug dalla route di vue
      const slug = this.$route.params.slug;
      //fare la chiamata axios aggiungendo lo slug all'url
       axios.get(`/api/posts/${slug}`).then((resp) => {
        if (resp.data.success) {
          this.post = resp.data.results;
        } else {
          this.$router.push({ name: "not_found" });
        }
      });
    },
  },
};
</script>

<style>
</style>