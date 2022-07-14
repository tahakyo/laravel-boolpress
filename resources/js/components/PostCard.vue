<template>
   <div class="card mb-4">
          <!-- <img src="..." class="card-img-top" alt="..." /> -->
          <div class="card-body">
            <p>Category: {{ categoryName }}</p>
            <h5 class="card-title">{{ post.title }}</h5>
            <p class="card-text">
              {{ troncateText(post.content, 150) }}
            </p>
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
                return this.post.category.name
            }
    }
  },
  methods: {
    troncateText(text, maxCharNumber) {
      //se il testo è più lungo di maxCharNumber
      //tronca il testo e aggiunge ...
      //altrimenti ritorna il testo intero
      if (text.length > maxCharNumber) {
        return text.substr(0, maxCharNumber) + "...";
      }
      return text;
    },
  },
};
</script>

<style>
</style>