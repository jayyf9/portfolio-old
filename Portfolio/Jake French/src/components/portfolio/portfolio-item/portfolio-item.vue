<template src="./portfolio-item.html"></template>
<script>
import portfolioData from "./../portfolio-data.json";

  export default {
    data(){
      return {
        websites: portfolioData
      }
    }
  }
</script>

<style>
.v-carousel__prev {
  border-radius: 30px;
  background-color: #039be5;
}

.v-carousel__next {
  border-radius: 30px;
  background-color: #039be5;
}

.v-btn--active {
  background-color: #039be5;
}

.slider {
  margin-top: 30px;
}

.information {
  min-height: 100px;
}
.site-title {
    color: #039be5 !important;
}

.skills {
  font-size: 22px;
  margin-top: 10px;
}

.skills:hover {
  cursor: pointer;
  color: #039be5;
}

.skills-section {
  padding-bottom: 10px;
}

</style>

