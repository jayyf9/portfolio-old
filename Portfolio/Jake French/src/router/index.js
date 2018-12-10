import Vue from 'vue'
import Router from 'vue-router'
import home from '../components/home/home'
import blog from '../components/blog/blog'
import postCms from '../components/blog/posts/post-cms/post-cms'
import portfolio from '../components/portfolio/portfolio'
import portfolioItem from '../components/portfolio/portfolio-item/portfolio-item'

Vue.use(Router)

export default new Router({
    routes: [
        {
            path: '/',
            name: 'home',
            component: home
        },
        {
            path: '/home',
            name: 'home',
            component: home,
            meta: { transitionName: 'slide' }
        },
        {
            path: '/portfolio',
            name: 'portfolio',
            component: portfolio,
            meta: { transitionName: 'slide' }
        },
        {
            path: '/portfolioItem/:id',
            name: 'portfolioItem',
            component: portfolioItem,
            meta: { transitionName: 'slide' }
        },
        {
            path: '/blog',
            name: 'blog',
            component: blog,
            meta: { transitionName: 'slide' }
        },
        {
            path: '/blog/post/cms',
            name: 'postCms',
            component: postCms,
            meta: { transitionName: 'slide' }
        },
        {
            path: '/*',
            name: 'home',
            component: home
        }
    ]
})