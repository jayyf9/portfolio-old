<template src="./portfolio.html"></template>
<script>
  import portfolioData from "./portfolio-data.json";

  export default {
    data(){
      return {
        websites: portfolioData
      }
    }
  }
</script>
<style>
  .portfolio-card-content {
    height: 80px;
  }

  .portfolio-container {
    display: flex;
    margin-top: 40px;
    min-width: 850px;
  }

  .site-cover {
    max-height: 300px;
  }
  
  .portfolio-item {
    max-height: 500px;
  }
  .card:hover{ 
    color: white;
    background-color: rgba(66, 140, 238, 0.7);
    }

</style>
