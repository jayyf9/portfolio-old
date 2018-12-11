<template>
  <div id="app">
    <div class="contact-buttons">
      <a href="mailto:jayyf9@gmail.com?Subject=Website%20query"><div class="center-align button-effect contact-me"> <i class="fas fa-envelope"></i></div></a>&nbsp;
      <a href="https://twitter.com/Jayyf9"><div class="center-align button-effect contact-me"> <i class="fab fa-twitter"></i></div></a>&nbsp;
      <a href="https://www.linkedin.com/in/jake-french-200a0462/"><div class="center-align button-effect contact-me"><i class="fab fa-linkedin"></i></div></a>&nbsp;
    </div>
    <div class="center">
        <h3 class="main-header"><router-link to="/home">Jake French</router-link></h3>
        <span class="sub-header">Web designer - Front End Developer - UX Designer</span>
    </div>
    <div class="center nav-items">
        <b>
        <router-link to="/home" active-class="active">Home -</router-link>
        <router-link to="/portfolio" active-class="active">Portfolio -</router-link>
        <router-link to="/blog" active-class="active">Blog</router-link>
        </b>
    </div>
      <transition
        :name="transitionName"
        mode="out-in">
  <router-view></router-view>
      </transition>
  </div>
</template>

<script>
import home from "./components/home/home";
import portfolio from "./components/portfolio/portfolio";
import portfolioItem from "./components/portfolio/portfolio-item/portfolio-item";
import blog from "./components/blog/blog";
import postCms from "./components/blog/posts/post-cms/post-cms";

const DEFAULT_TRANSITION = 'fade';

export default {
  name: "app",
  data() {
    return {
      transitionName: DEFAULT_TRANSITION
    };
  },
  components: {
    home,
    portfolio,
    portfolioItem,
    blog,
    postCms
  },
  "/": "home",
  "/portfolio": "portfolio",
  "/portfolioItem": "portfolioItem",
  "/blog": "blog",
  "/blog/post/cms": "postCms",



created() {
    this.$router.beforeEach((to, from, next) => {
      let transitionName = to.meta.transitionName || from.meta.transitionName;

      if (transitionName === 'slide') {
        const toDepth = to.path.split('/').length;
        const fromDepth = from.path.split('/').length;
        transitionName = toDepth < fromDepth ? 'slide-right' : 'slide-left';
      }

      this.transitionName = transitionName || DEFAULT_TRANSITION;

      next();
    });
  },

};
</script>

<style>
.main-header {
  font-size: 50px;
  text-decoration: none;
}

.sub-header {
  font-size: 18px;

}


.sub-header:hover {
  border-radius: 10px;
  padding: 2px;
}

.main-header :hover {
   font-weight: bold;
   color: rgba(255, 217, 0, 0.8);
}

.contact-buttons {
  display: flex;
  margin-top: -25px;
}

.contact-me {
  flex: 1;
  width: 70px;
  height: 30px;
  color: rgb(0, 0, 185);
  border-radius: 5px;
  margin-top: -4px;
  padding: 5px;
  background-color: #cbf2ff;
}

.contact-me i {
  top: 2px;
  position: relative;
  font-size: 20px;
}

.button-effect {
  background-color: rgb(66, 140, 238);
  color: white;
  -webkit-border-radius: 8px;
  -moz-border-radius: 8px;
  border-radius: 8px;
  -webkit-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  cursor: pointer;
}

.button-effect:hover {
  background-color: gold;
  color: #039be5;
  -webkit-box-shadow: 0px 3px 0px 0px rgba(200, 200, 200, 1);
  -moz-box-shadow: 0px 3px 0px 0px rgba(200, 200, 200, 1);
  box-shadow: 0px 3px 0px 0px rgba(200, 200, 200, 1);
}

.button-effect:active {
  background-color: #f2f2f2;
  color: #039be5;
  -webkit-box-shadow: 0px 3px 0px 0px rgba(255, 255, 255, 1);
  -moz-box-shadow: 0px 3px 0px 0px rgba(255, 255, 255, 1);
  box-shadow: 0px 3px 0px 0px rgba(255, 255, 255, 1);
}

.slide-left-enter-active,
.slide-left-leave-active,
.slide-right-enter-active,
.slide-right-leave-active {
  transition-duration: 0.5s;
  transition-property: height, opacity, transform;
  transition-timing-function: cubic-bezier(0.55, 0, 0.1, 1);
  overflow: hidden;
}

.slide-left-enter,
.slide-right-leave-active {
  opacity: 0;
  transform: translate(2em, 0);
}

.slide-left-leave-active,
.slide-right-enter {
  opacity: 0;
  transform: translate(-2em, 0);
}

</style>
