<template>
  <div class="index_icons">
    <mt-swipe :auto="0">
      <mt-swipe-item v-for="(page,index) in pages" :key="index">
        <div class="icon_wrap" v-for="item in page" :key="item.id">
          <div class="img_wrap">
            <img :src="item.imgUrl" alt="" class="spot_img">
          </div>
          <div class="info_mark">{{item.decs}}</div>
        </div>
      </mt-swipe-item>
    </mt-swipe>
  </div>
</template>

<script>
import icons01 from '@/assets/images/icons01.png'
import icons02 from '@/assets/images/icons2.png'
import icons03 from '@/assets/images/icons3.png'
import icons04 from '@/assets/images/icons4.png'
import icons05 from '@/assets/images/icons5.png'
import icons06 from '@/assets/images/icons06.png'
import icons07 from '@/assets/images/icons07.png'
import icons08 from '@/assets/images/icons08.png'
import icons09 from '@/assets/images/icons09.png'
import icons10 from '@/assets/images/icons10.png'

export default {
  name:"Icons",
  data(){
    return{
      iconList:[
        {
          id:'01',
          imgUrl:icons01,
          decs:'景点门票'
        },
        {
          id:'02',
          imgUrl:icons02,
          decs:'自然风光'
        },
        {
          id:'03',
          imgUrl:icons03,
          decs:'北京必游'
        },
        {
          id:'04',
          imgUrl:icons04,
          decs:'北京世园会'
        },
        {
          id:'05',
          imgUrl:icons05,
          decs:'一日游'
        },
        {
          id:'06',
          imgUrl:icons06,
          decs:'荣国府'
        },
        {
          id:'07',
          imgUrl:icons07,
          decs:'北京野生动物园'
        },
        {
          id:'08',
          imgUrl:icons08,
          decs:'北京欢乐谷'
        },
        {
          id:'09',
          imgUrl:icons06,
          decs:'天津海昌'
        },
        {
          id:'10',
          imgUrl:icons10,
          decs:'全部玩乐'
        },
      ]
    }
  },
  computed:{
    pages(){
      let pages=[];
      this.iconList.forEach((val,index)=>{
        let page=Math.floor(index/8);
        if(!pages[page]){
          pages[page]=[];
        }
        pages[page].push(val);
      });
      console.log(pages);
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
