<template>
  <div class="container">
    <h2>Error 404! Page not found</h2>
    <router-link :to="{ name: 'home' }">Go back to home page</router-link>
  </div>
</template>

<script>
export default {
  name: "NotFound"
}
</script>

<style>

</style>