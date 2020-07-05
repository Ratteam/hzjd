import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'
import index from '@/components/index'
import success from '@/components/success'
import category from '@/components/category'
import news from '@/components/news'
import about from '@/components/about'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'HelloWorld',
      component: HelloWorld
    },
    {
      path: '/index',
      name: 'index',
      component: index
    },
    {
      path: '/success',
      name: 'success',
      component: success
    },
    {
      path: '/category',
      name: 'category',
      component: category
    },
    {
      path: '/news',
      name: 'news',
      component: news
    },
    {
      path: '/about',
      name: 'about',
      component: about
    }
  ]
})
