import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)    //vue通过use()的方法来使用插件

export default new Vuex.Store({
  state:{
    city:'北京'   //公用数据
  },
  actions:{
    changeCity (ctx,cname) {  //changeCity是派发的action
      ctx.commit('changeCitySec',cname)
    }
  },
  mutations:{
    changeCitySec (state,cname) {
      state.city = cname
    }
  }
})
