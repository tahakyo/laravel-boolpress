<template>
  <div class="container text-center mt-5">
    <h1>Posts list</h1>
    <p>Total posts found: {{ totalPosts }}</p>
    <div class="row row-cols-3">
      <!-- single-post -->
      <div v-for="post in posts" :key="post.id" class="col">
        <PostCard :post="post" />
      </div>
    </div>
    <nav aria-label="...">
      <ul class="pagination">
        <!-- previous page -->
        <li class="page-item" :class="{ disabled: currentPage === 1 }">
          <a @click="getPosts(currentPage - 1)" class="page-link">Previous</a>
        </li>
        <!-- page number -->
        <li
          @click="getPosts(n)"
          v-for="n in lastPage"
          :key="n"
          class="page-item"
          :class="{ active: currentPage === n }"
        >
          <a class="page-link" href="#">{{ n }}</a>
        </li>
        <!-- next page -->
        <li class="page-item" :class="{ disabled: currentPage === lastPage }">
          <a @click="getPosts(currentPage + 1)" class="page-link" href="#"
            >Next</a
          >
        </li>
      </ul>
    </nav>
  </div>
</template>

<script>
import PostCard from "./PostCard.vue";

export default {
  name: "Posts",
  components: {
    PostCard,
  },

  data() {
    return {
      posts: [],
      currentPage: 1,
      lastPage: 0,
      totalPosts: 0,
    };
  },
  mounted() {
    this.getPosts(1);
  },
  methods: {
    getPosts(pageNumber) {
      axios
        .get("/api/posts", {
          params: {
            page: pageNumber,
          },
        })
        .then((resp) => {
          this.posts = resp.data.results.data;
          this.currentPage = resp.data.results.current_page;
          this.lastPage = resp.data.results.last_page;
          this.totalPosts = resp.data.results.total;
        });
    },
  },
};
</script>

<style>
</style>