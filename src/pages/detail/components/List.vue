<template>
  <div class="banner_list">
    <div class="list" v-for="(item,index) in list" :key="index">
      <div class="listCon">
        <i class="img"></i>
        <div class="title">{{item.title}}</div>
      </div>
      <div v-if="item.arrs">                     <!-- 递归组件 -->
        <banner-list :list="item.arrs"></banner-list>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name:'bannerList',
  props:{
    list:Array
  }
}
</script>

<style scoped>
.list{
  line-height: .88rem;

  margin-left:.2rem;
}
.listCon{
  border-bottom:1px solid #ccc;
}
.img{
  display: inline-block;
  width: .22rem;
  height: .22rem;
  background:#ccc;
}
.title{
  display: inline-block;
  font-size: .32rem;
  padding-left: .1rem;
}
</style>
