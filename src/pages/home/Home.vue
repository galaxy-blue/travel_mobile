<template>
<div class="home">
  <home-header></home-header>
  <home-swiper></home-swiper>
  <home-icons></home-icons>
  <home-hotlist></home-hotlist>
  <home-recommend></home-recommend>
</div>
</template>

<script>
import HomeHeader from './components/Header'
import HomeSwiper from './components/Swiper'
import HomeIcons from './components/Icons'
import HomeRecommend from './components/Recommend'
import HomeHotlist from './components/Hotlist'
export default {
 name:'Home',
 components:{
  HomeHeader,
  HomeSwiper,
  HomeIcons,
  HomeHotlist,
  HomeRecommend
 }
}
</script>

<style scoped>
.home{
  width: 100%;
  background: #f5f5f5;
}
</style>
