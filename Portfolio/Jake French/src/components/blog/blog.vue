<template src="./blog.html"></template>
<script>
  import blogData from "./blog-data.json";

  export default {
    data(){
      return {
        posts: blogData
      } 
    }
  }

</script>
<style>
  .blogContainer {
    margin-top: 40px;
  }
  .post-row{
    height: 430px;
  }
  .card:hover {
    color: white;
    background-color: rgba(66, 140, 238, 0.7)
  }
  .post-title {
    color: #039be5 !important;
  }
  .button {
    margin-bottom: 15px;
  }
  .read-more:hover {
    background-color: gold !important;
  }
  .post {
    margin-bottom: 50px;
  }
</style>
