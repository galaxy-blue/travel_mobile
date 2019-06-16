<template>
  <div class="home_recommend">
    <div class="title">
      <i class="love"></i>
      <span class="guess">猜你喜欢</span>
    </div>
    <ul class="rec_con">
      <li class="list_con" v-for="item in recom_data" :key="item.id">
        <div class="content_mas">
          <div class="img_wrap">
            <img class="img_rec" :src="item.urlImg" alt="">
          </div>
          <div class="content">
            <div class="site">
              <span class="site_detail">{{item.site_detail}}</span>
              <div class="eva_box">
                <i class="start_icon"></i>
                <span class="evaluate">{{item.evaluate}}条评论</span>
              </div>
            </div>
            <div class="price_box">
              <span class="price">
                <em class="price_det">￥<i class="num">{{item.num}}</i></em>起
              </span>
              <span class="pri_site">{{item.pri_site}}</span>
            </div>
          </div>
        </div>
        <div class="comment">{{item.comment}}</div>
      </li>
    </ul>
  </div>
</template>

<script>
import recommend from '@/assets/images/recommend01.png'
export default {
  name:'recommend',
  data(){
    return{
      recom_data:[
        {
          id:'01',
          urlImg:recommend,
          site_detail:'故宫',
          evaluate:'411817',
          num:'60',
          pri_site:'东城区',
          comment:'世界五大宫之首，穿越与您近在咫尺'
        },
        {
          id:'02',
          urlImg:recommend,
          site_detail:'北京欢乐谷',
          evaluate:'70933',
          num:'195',
          pri_site:'朝阳区',
          comment:'亚洲唯一飞行式过山车等你来挑战'
        },
        {
          id:'03',
          urlImg:recommend,
          site_detail:'八达岭长城',
          evaluate:'51360',
          num:'40',
          pri_site:'延庆区',
          comment:''
        },
        {
          id:'04',
          urlImg:recommend,
          site_detail:'北京欢乐谷',
          evaluate:'70933',
          num:'195',
          pri_site:'朝阳区',
          comment:'亚洲唯一飞行式过山车等你来挑战'
        },
        {
          id:'05',
          urlImg:recommend,
          site_detail:'八达岭长城',
          evaluate:'51360',
          num:'40',
          pri_site:'延庆区',
          comment:''
        }
      ]
    }
  }
}
</script>

<style scoped>
.home_recommend{
  margin-top: .2rem;
  background: #fff;
}
.title{
  width: 100%;
  line-height: .5rem;
  padding:.24rem .2rem .26rem;
}
.love{
  display: inline-block;
  width: .3rem;
  height: .3rem;
  background: #ccc;
}
.guess{
  color:#212121;
  font-size: .32rem;
  margin-left: .1rem;
}
.rec_con{
  width: 100%;
  padding:0 .2rem;
}
.list_con{
 border-bottom: 1px solid #f5f5f5;
 padding:.2rem 0;
}
.content_mas{
  display: flex;
}
.img_wrap{
  width: 2rem;
  height: 2rem;
}
.img_rec{
  width: 100%;
  height: 100%;
}
.content{
  flex:1;
  padding:0 .3rem;
  box-sizing: border-box;
}
.site_detail{
  padding:.26rem 0 .2rem;
  display: block;
  font-size: .32rem;
  color:#212121;
}
.start_icon{
  display: inline-block;
  width: 1.5rem;
  height: .28rem;
  margin-right:.22rem;
  background: #ccc;
}
.evaluate{
  color: #616161;
  font-size: .24rem;
}
.price_box{
  margin-top: .22rem;
  color:#616161;
  display: flex;
  justify-content: space-between;
}
.price_det{
  color:#ff8300;
}
.num{
  font-size: .4rem;
}
.comment{
  margin-top: .5rem;
  margin-left: 2.3rem;
  font-size: .24rem;
  color:#f55;
}
</style>
