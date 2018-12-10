<template src="./blog.html"></template>
<script>
  export default {
    data(){
      return {
        posts: [
          {
            id: 0,
            url: "cms",
            img: "./src/images/blog-posts/cms/cms.jpg",
            title: 'Should a developer be using a CMS?',
            header: 'First of all, what is a CMS?',
            content: 'Content management system’s are software application that runs on the web-server and allows a user to easily manage the content of their website. This uses an interface and does not require any programming knowledge to do.',
            date: '11/11/11'
          }
        ]
      } 
    }
  }

</script>
<style>
  .blogContainer {
    margin-top: 50px;
  }
  .postRow{
    height: 430px;
  }
  
  .post {
    margin-bottom: 50px;
  }
</style>
