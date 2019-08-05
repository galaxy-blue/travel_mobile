<template>
  <div class="index_icons">
    <mt-swipe :auto="0">
      <mt-swipe-item v-for="(page,index) in pages" :key="index">
        <div class="icon_wrap" v-for="item in page" :key="item.id">
          <div class="img_wrap">
            <img :src="item.img" alt="" class="spot_img">
          </div>
          <div class="info_mark">{{item.name}}</div>
        </div>
      </mt-swipe-item>
    </mt-swipe>
  </div>
</template>

<script>

export default {
  name:"Icons",
  props:['iconList'],
  computed:{
    pages(){
      let pages=[];
      this.iconList.forEach((val,index)=>{
        let page=Math.floor(index/8);
        if(!pages[page]){    //[[{},{}],[]]
          pages[page]=[];
        }
        pages[page].push(val);
      });
      //console.log(pages);
      return pages
    }
  }
}
</script>

<style scoped>
.index_icons >>> .mint-swipe-indicators{
  bottom: -2px;
}
.index_icons >>> .mint-swipe-indicator{
  background: rgba(144,144,144,0.8);
  opacity: .9;
}
.index_icons >>> .mint-swipe-indicator.is-active{
  background: rgba(0,175,190,.8);
}
.index_icons{
  background: #fff;
  width: 100%;
  height: 3.8rem;
}
.mint-swipe{
  width: 100%;
  height: 3.7rem;
}
.icon_wrap{
  float: left;
  width: 25%;
  height:1.5rem;
}
.img_wrap{
  width:1.1rem;
  height:1.1rem;
  margin:0.05rem auto 0;
}
.spot_img{
  width: 100%;
  height: 100%;
}
.info_mark{
  font-size: .28rem;
  text-align: center;
}
</style>
