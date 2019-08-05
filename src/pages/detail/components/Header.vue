<template>
  <div class="header_who">
    <div class="detail_header" v-if=!show :style="opacityhandle">
      <img class="toback_top" src="../../../assets/images/back.png" alt="" @click="toHome">
      故宫
    </div>
    <div class="back_wrap" @click="toHome" v-if=show>
        <img class="toback" src="@/assets/images/back.png" alt="">
    </div>
  </div>
</template>

<script>
export default {
  name:'detail_header',
  data () {
    return {
      show:true,
      opacityhandle:{
        opacity:0
      }
    }
  },
  mounted () {
    window.addEventListener('scroll',this.handleScroll)
  },
  beforeDestroy () {
    window.removeEventListener('scroll',this.handleScroll)  //清除window上绑定的事件
  },
  methods:{
    toHome () {
      this.$router.push("/");
    },
    handleScroll () {
      console.log('scroll');
      let scrollTop = document.documentElement.scrollTop;  //滚动条到浏览器顶部的距离
      if(scrollTop > 60){
        let opacity = scrollTop / 140;
        opacity = opacity < 1 ? opacity : 1;
        this.opacityhandle.opacity = opacity;
        this.show = false
      }else{
        this.show = true
      }
    }
  }
}
</script>

<style scoped>
.header_who{
  z-index: 2;
  position: fixed;
  top:0;
  left: 0;
  width: 100%;
}
.detail_header{
  background: #00bcd4;
  text-align: center;
  line-height: .88rem;
  font-size: .32rem;
  color:#fff;
}
.toback_top{
  position: absolute;
  left: .2rem;
  top:.2rem;
  width: .48rem;
  height: .48rem;
}
.back_wrap {
  width: 0.6rem;
  height: 0.6rem;
  border-radius: 0.3rem;
  background: #000;
  opacity: 0.5;
  position: absolute;
  top: 0.1rem;
  left: 0.1rem;
  text-align: center;
  line-height: 0.6rem;
}
.toback {
  width: 0.4rem;
  height: 0.4rem;
}
</style>
