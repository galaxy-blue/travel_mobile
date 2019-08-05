<template>
<div class="home">
  <home-header></home-header>
  <home-swiper></home-swiper>
  <home-icons :iconList="this.iconList"></home-icons>
  <home-hotlist :hotList="this.hotList"></home-hotlist>
  <home-recommend :recommendList="this.recommendList"></home-recommend>
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
 data () {
   return {
     iconList:[],
     hotList:[],
     recommendList:[]
   }
 },
 components:{
  HomeHeader,
  HomeSwiper,
  HomeIcons,
  HomeHotlist,
  HomeRecommend
 },
 activated () {
   console.log('1111');
    let formData = new FormData();
    formData.append('city', this.$store.state.city)
    this.$axios.post('api/data_index.php',formData).then((res)=>{
    console.log(res);
    this.iconList = res.data.nav;  //在这里如果后给你的数据和你要的数据格式不一致，要进行转换？
    this.hotList = res.data.hot;
    this.recommendList = res.data.love;
   })
 }
}
</script>

<style scoped>
.home{
  width: 100%;
  background: #f5f5f5;
}
</style>
