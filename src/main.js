// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
import fastClick from 'fastclick'    //解决移动端300ms点击延迟问题
import MintUI from 'mint-ui'
import 'mint-ui/lib/style.css'
import './assets/styles/reset.css'    //重置css
import './assets/styles/border.css'  //移动端1px边框问题


Vue.config.productionTip = false
fastClick.attach(document.body)
Vue.use(MintUI)

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  components: { App },
  template: '<App/>'
})
