<template>
<div class="home-header">
  <div class="header">
    <img src="@/assets/images/back.png" alt="" class="back_arrow">
    <div class="input_con">
      <i class="search"></i>
      <span class="title">输入城市/景点/游玩主题</span>
    </div>
    <div class="city_now_box">
      <span class="city_now" @click="list">石家庄</span>
      <i class="drop_arrow"></i>
    </div>
  </div>
</div>
</template>

<script>
export default {
name:'HomeHeader',
methods:{
  list(){
    this.$router.push({
      path:'./list'
    })
  }
}
}
</script>

<style scoped>
.header{
  width: 100%;
  height: .88rem;
  background:#00bcd4;
  display: flex;
  align-items: center;
  padding:0 .2rem;
  box-sizing: border-box;
}
.back_arrow{
 width: .4rem;  /* 图片的宽度 */
}
.input_con{
  height: 0.6rem;
  flex:1;
  border-radius: 5px;
  background: #fff;
  line-height: .6rem;
  padding:0 8px;
  margin:0 .2rem;
}
.search{
  display: inline-block;
  width: 0.289rem;
  height: 0.28rem;
  background:#ccc;
}
.title{
  color:#e4e7ea;
}
.city_now{
  color:#fff;
}
.drop_arrow{
  display: inline-block;
  width: 0.24rem;
  height: 0.32rem;
  background:#ccc;
}
</style>
