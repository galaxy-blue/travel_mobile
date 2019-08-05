<template>
  <div class="home_recommend">
    <div class="title">
      <i class="love"></i>
      <span class="guess">猜你喜欢</span>
    </div>
    <ul class="rec_con">
      <router-link class="list_con" v-for="item in recommendList" :key="item.id" :to="'/detail/'+item.id" tag="li">
        <div class="content_mas">
          <div class="img_wrap">
            <img class="img_rec" :src="item.img" alt="">
          </div>
          <div class="content">
            <div class="site">
              <span class="site_detail">{{item.name}}</span>
              <div class="eva_box">
                <i class="start_icon"></i>
                <span class="evaluate">{{item.number}}条评论</span>
              </div>
            </div>
            <div class="price_box">
              <span class="price">
                <em class="price_det">￥<i class="num">{{item.price}}</i></em>起
              </span>
              <span class="pri_site">{{item.area}}</span>
            </div>
          </div>
        </div>
        <div class="comment">{{item.describe}}</div>
      </router-link>
    </ul>
  </div>
</template>

<script>
import recommend from "@/assets/images/recommend01.png";
export default {
  name: "recommend",
  props: ["recommendList"]
  /* data () {
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
  } */
};
</script>

<style scoped>
.home_recommend {
  margin-top: 0.2rem;
  background: #fff;
}
.title {
  width: 100%;
  line-height: 0.5rem;
  padding: 0.24rem 0.2rem 0.26rem;
}
.love {
  display: inline-block;
  width: 0.32rem;
  height: 0.32rem;
  background: url("../../../assets/images/love2.png");
}
.guess {
  color: #212121;
  font-size: 0.32rem;
  margin-left: 0.1rem;
}
.rec_con {
  width: 100%;
  padding: 0 0.2rem;
}
.list_con {
  border-bottom: 1px solid #f5f5f5;
  padding: 0.2rem 0;
}
.content_mas {
  display: flex;
}
.img_wrap {
  width: 2rem;
  height: 2rem;
}
.img_rec {
  width: 100%;
  height: 100%;
}
.content {
  flex: 1;
  padding: 0 0.3rem;
  box-sizing: border-box;
}
.site_detail {
  padding: 0.26rem 0 0.2rem;
  display: block;
  font-size: 0.32rem;
  color: #212121;
}
.start_icon {
  display: inline-block;
  width: 1.6rem;
  height: 0.28rem;
  margin-right: 0.22rem;
  background: url("../../../assets/images/start.png");
}
.evaluate {
  color: #616161;
  font-size: 0.24rem;
}
.price_box {
  margin-top: 0.22rem;
  color: #616161;
  display: flex;
  justify-content: space-between;
}
.price_det {
  color: #ff8300;
}
.num {
  font-size: 0.4rem;
}
.comment {
  margin-top: 0.5rem;
  margin-left: 2.3rem;
  font-size: 0.24rem;
  color: #f55;
}
</style>
