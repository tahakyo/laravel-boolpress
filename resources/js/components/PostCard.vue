<template>
  <div class="card mb-4">
    <!-- <img src="..." class="card-img-top" alt="..." /> -->
    <div class="card-body">
      <p>Category: {{ categoryName }}</p>
      <h5 class="card-title">{{ post.title }}</h5>
      <p class="card-text">
        {{ troncateText(150) }}
      </p>
      <router-link
        :to="{ name: 'single-post', params: { slug: post.slug } }"
        class="card-link"
        >Leggi post</router-link
      >
    </div>
  </div>
</template>

<script>
export default {
  name: "PostCard",
  props: {
    post: Object,
  },
  computed: {
    categoryName() {
      if (this.post.category != null) {
        return this.post.category.name;
      }
    },
  },
  methods: {
    troncateText(maxCharNumber) {
      //se il testo è più lungo di maxCharNumber
      //tronca il testo e aggiunge ...
      //altrimenti ritorna il testo intero
      if (this.post.content.length > maxCharNumber) {
        return this.post.content.substr(0, maxCharNumber) + "...";
      }
      return this.post.content;
    },
  },
};
</script>

<style>
</style>