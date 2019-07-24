import Vue from 'vue'
import Router from 'vue-router'
import home from '@/pages/home/Home'
import list from '@/pages/list/List'
import detail from '@/pages/detail/Detail'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'home',
      component: home
    },
    {
      path: '/list',
      name: 'list',
      component: list
    },
    {
      path: '/detail/:id',  //动态路由
      name: 'detail',
      component: detail
    }
  ],
  scrollBehavior(to, from, savedPosition) {     //路由的滚动行为
    return {
      x: 0,
      y: 0
    }
  }
})
