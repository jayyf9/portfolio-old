<template src="./portfolio.html"></template>
<script>
  export default {
    data(){
      return {
        websites: [
          {
            id: 0,
            img: "./src/images/portfolio-items/cafe-ella/cafe-ella-logo.jpg",
            title: 'Cafe Ella',
            content: 'This is a website for a local Cafe trying to get there business online for the first time and wanted a site that simply advertises there services in a classy and modern way.'
          },
          {
            id: 1,
            img: "./src/images/portfolio-items/food-bible/food-bible.jpg",
            title: 'Food Bible',
            content: 'This is a website that allows users to look through other recipies uploaded by users and rate/give feedback allow for a communtiy of food lovers to come together.'
          },
          {
            id: 2,
            img: "./src/images/portfolio-items/factory-of-the-future/fotf6.png",
            title: 'Factory of the future',
            content: 'This is a website that allows users to look through other recipies uploaded by users and rate/give feedback allow for a communtiy of food lovers to come together.'
          }
        ]
    }

  }
  }
</script>
<style>
  .portfolioContainer {
    margin-top: 50px;
  }

  .site-cover {
    max-height: 300px;
  }
  
  .portfolioRow {
    height: 450px;
  }
  
  .portfolioItem {
    max-height: 500px;
  }
  .card:hover{ 
    background-color: lightgray;
    }
</style>
