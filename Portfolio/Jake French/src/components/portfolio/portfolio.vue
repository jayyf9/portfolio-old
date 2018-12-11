<template src="./portfolio.html"></template>
<script>
  export default {
    data(){
      return {
        websites: [
          {
            id: 0,
            img: "./src/images/portfolio-items/multione-web/multione-web-thumbnail.png",
            client: "./src/images/clients/philips.jpg",
            title: 'MultiOne Web',
            content: 'This is a website for a local Cafe trying to get there business online for the first time and wanted a site that simply advertises there services in a classy and modern way.'
          },
          {
            id: 1,
            img: "./src/images/portfolio-items/altran-academy/altran-academy-thumbnail.png",
            client: "./src/images/clients/altran.png",
            title: 'Altran Academy',
            content: 'A company training website that allows users to search filter and enroll on courses easily.'
          },
          {
            id: 2,
            img: "./src/images/portfolio-items/factory-of-the-future/fotf-thumbnail.png",
            client: "./src/images/clients/brainport.jpg",
            title: 'Factory of the future',
            content: 'This is a website that allows users to look through other recipies uploaded by users and rate/give feedback allow for a communtiy of food lovers to come together.'
          }
        ]
    }

  }
  }
</script>
<style>
  .card-content {
    height: 80px;
  }

  .portfolio-container {
    display: flex;
    margin-top: 40px;
  }

  .site-cover {
    max-height: 300px;
  }
  
  .portfolio-row {
    height: 410px;
  }
  
  .portfolio-item {
    max-height: 500px;
  }
  .card:hover{ 
    color: white;
    background-color: rgba(66, 140, 238, 0.7);
    }

</style>
