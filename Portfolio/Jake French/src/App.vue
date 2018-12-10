<template>
  <div id="app">
    <div class="contactButtons">
      <a href="mailto:jayyf9@gmail.com?Subject=Website%20query"><div class="center-align button-effect contactMe"> <i class="tiny material-icons">mail_outline</i></div></a>&nbsp;
      <a href="https://twitter.com/Jayyf9" class="button-effect btn-sn"><div class="center-align button-effect contactMe"> <i class="fab fa-twitter"></i></div></a>&nbsp;
      <a href="https://www.linkedin.com/in/jake-french-200a0462/" class="center-align button-effect btn-sn"><div class="button-effect contactMe"><i class="fab fa-linkedin"></i></div></a>&nbsp;
    </div>
    <div class="center header">
        <h3 class="mainHeader"><router-link to="/home">Jake French</router-link></h3>
        <span>Web designer - Front End Developer - UX Designer</span>
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
.mainHeader {
  text-decoration: none;
  margin-top: -10px;
}

.mainHeader :hover {
   font-weight: bold;
   color: gold
}

.contactButtons {
  display: flex;
}

.contactMe {
  flex: 1;
  width: 50px;
  color: rgb(0, 0, 185);
  border-radius: 5px;
  margin-top: -6px;
  padding: 5px;
  background-color: #cbf2ff;
}

.contactMe i {
  top: 2px;
  position: relative;
}

.button-effect {
  background-color: rgb(66, 140, 238);
  color: white;
  border-top: 2px solid rgb(35, 35, 199);
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
  background-color: #f2f2f2;
  color: #3db9fb;
  border-top: 2px solid white;
  -webkit-box-shadow: 0px 3px 0px 0px rgba(200, 200, 200, 1);
  -moz-box-shadow: 0px 3px 0px 0px rgba(200, 200, 200, 1);
  box-shadow: 0px 3px 0px 0px rgba(200, 200, 200, 1);
}

.button-effect:active {
  background-color: #f2f2f2;
  color: #3db9fb;
  border-top: 2px solid rgba(200, 200, 200, 1);
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
