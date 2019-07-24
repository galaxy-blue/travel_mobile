// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
import fastClick from 'fastclick'    //解决移动端300ms点击延迟问题
import MintUI from 'mint-ui'
import bus from './plugin/bus'
import axios from 'axios'
import store from './store'          //./store会自动找下边的index.js
import 'mint-ui/lib/style.css'
import './assets/styles/reset.css'    //重置css
import './assets/styles/border.css'  //移动端1px边框问题




Vue.config.productionTip = false
fastClick.attach(document.body)
Vue.prototype.$axios = axios
Vue.use(MintUI)       //vue中使用插件都是通过Vue.use()的方式来使用
Vue.use(bus)

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  store,
  components: { App },
  template: '<App/>'
})
