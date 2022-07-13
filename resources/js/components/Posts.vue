<template>
  <div class="container text-center mt-5">
    <h1>Posts list</h1>
    <p>Total posts found: {{ totalPosts }}</p>
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
    <nav aria-label="...">
      <ul class="pagination">
        <!-- previous page -->
        <li class="page-item" :class="{ disabled: currentPage === 1 }">
          <a @click="getPosts(currentPage - 1)" class="page-link">Previous</a>
        </li>
        <!-- page number -->
        <li @click="getPosts(n)" v-for="n in lastPage" :key="n" class="page-item" :class="{ active: currentPage === n }"><a class="page-link" href="#">{{n}}</a></li>
        <!-- next page -->
        <li class="page-item" :class="{ disabled: currentPage === lastPage }">
          <a @click="getPosts(currentPage + 1)" class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
  </div>
</template>

<script>
export default {
  name: "Posts",

  data() {
    return {
      posts: [],
      currentPage: 1,
      lastPage: 0,
      total: 0
    };
  },
  mounted() {
    this.getPosts(1);
  },
  methods: {
    getPosts(pageNumber) {
      axios.get("/api/posts", {
        params : {
          page: pageNumber
        }
      }).then((resp) => {
        this.posts = resp.data.results.data;
        this.currentPage = resp.data.results.current_page;
        this.lastPage = resp.data.results.last_page;
        this.totalPosts = resp.data.results.total;
      });
    },
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