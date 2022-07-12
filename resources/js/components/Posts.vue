<template>
  <div class="container text-center mt-5">
    <h1>Posts list</h1>
    <div class="row row-cols-3">

      <!-- single-post -->
      <div v-for="post in posts" :key="post.id" class="col">
        <div class="card mb-4">
          <!-- <img src="..." class="card-img-top" alt="..." /> -->
          <div class="card-body">
            <h5 class="card-title">{{ post.title }}</h5>
            <p class="card-text">
              {{ troncateText(post.content, 150) }}
            </p>
          </div>
          <!-- <ul class="list-group list-group-flush">
            <li class="list-group-item">An item</li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
          </ul>
          <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
          </div> -->
        </div>
      </div>
    </div>
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
  mounted() {
    this.getPosts();
  },
  methods: {
    getPosts() {
      axios.get("/api/posts").then((resp) => {
        this.posts = resp.data.results;
      });
    },
    troncateText(text, maxCharNumber) {
      //se il testo è più lungo di maxCharNumber
        //tronca il testo e aggiunge ...
      //altrimenti ritorna il testo intero
      if (text.length > maxCharNumber) {
        return text.substr(0, maxCharNumber) + '...';
      }
      return text;
    }
  },
};
</script>

<style>
</style>