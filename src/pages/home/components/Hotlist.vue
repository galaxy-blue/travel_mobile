<template>
<div class="hotList">
  <div class="title_wrap">
    <i class="hot"></i>
    <span class="title">本周热门榜单</span>
  </div>
  <div class="ulWrap">
    <ul class="hot_con_wrap" >
      <li class="hot_con" v-for="item in hotList" :key="item.id">
        <div class="img_wrap">
          <img :src="item.img" alt="" class="img_inner">
        </div>
        <div class="text">
          <span class="spot del">{{item.name}}</span>
          <span class="price del">
            <em class="stress">￥{{item.price}}</em>起
          </span>
        </div>
      </li>
    </ul>
  </div>

</div>
</template>

<script>
export default {
  name:'hotList',
  props:['hotList']
}
</script>

<style scoped>
.hotList{
  margin-top:.2rem;
  background: #fff;
  padding:0 .2rem;
}
.title_wrap{
  padding:.24rem 0 .26rem;
}
.hot{
  display: inline-block;
  width: .32rem;
  height: .32rem;
  background: url('../../../assets/images/hot.png');
}
.title{
  font-size: .32rem;
  color:#212121;
  height: .44rem;
  line-height: .44rem;
  margin-left: .1rem;
}
.ulWrap{
  width: 100%;
  overflow: hidden;
}
.hot_con_wrap{
  overflow-x: scroll;
  white-space: nowrap;
}
.hot_con{
  display: inline-block;
}
.img_wrap{
  width: 2rem;
  height: 2rem;
}
.img_inner{
  width: 100%;
  height: 100%;
}
.text{
  display: flex;
  flex-direction: column;
  text-align: center;
  padding: .1rem 0;
  margin-bottom: .2rem;
}
.spot{
  font-size: .24rem;
  color: #212121;
}
.price{
  font-size: .2rem;
}
.stress{
  color:#ff8300;
}
.del{
  line-height: .35rem;
}
</style>
