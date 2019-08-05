import Vue from 'vue'
import Router from 'vue-router'
import home from '@/pages/home/Home'
import list from '@/pages/list/List'
import detail from '@/pages/detail/Detail'

Vue.use(Router)

export default new Router({
  mode:'history',       //去掉地址上的#
  routes: [
    {
      path: '/',
      name: 'home',    //name的作用主要是为了跳转页面的时候用的，push和replace以对象的形式写的时候会使用
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
/*   scrollBehavior(to, from, savedPosition) {     //路由的滚动行为
    return {
      x: 0,
      y: 0
    }
  } */
})
