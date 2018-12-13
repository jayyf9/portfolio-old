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
  .post-title {
    color: #039be5 !important;
  }
  .button{
    margin-bottom: 15px;
  }
  .post {
    margin-bottom: 50px;
  }
</style>
