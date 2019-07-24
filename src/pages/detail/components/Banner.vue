<template>
  <div class="whole">
    <div class="detail_banner" @click="change_display">
      <div class="img_wrap">
        <img class="banner_img" src="@/assets/images/detailbanner01.png" alt="">
      </div>
      <div class="describe">
        <span class="spot">故宫(AAAAA景区)</span>
        <span class="count">
          <i class="img_lit"></i>8
        </span>
      </div>
    </div>
    <banner-gallery v-show="isShow" @close="changeClose" :imgCont="imgs"></banner-gallery>  <!-- 一般会在这里传值 -->
  </div>

</template>

<script>
import BannerGallery from "../../../common/gallery/Gallery"
import DetailHeader from './Header'
import imgs1 from "@/assets/images/gallery02.png"
import imgs2 from "@/assets/images/gallery01.png"
export default {
  name: "detail_banner",
  data() {
    return {
      isShow: false,
      imgs:[
        imgs1,
        imgs2
      ]
    }
  },
  methods: {
    change_display() {
      this.isShow = true;
    },
    changeClose(){
      console.log(11);
      this.isShow = false;
    }
  },
  components: {
    BannerGallery,
  }
};
</script>

<style scoped>
.detail_banner {
  position: relative;
}
.img_wrap {
  height: 55%;
}
.img_wrap::after {
  content: "";
  display: block;
  width: 100%;
  height: 0.8rem;
  position: absolute;
  bottom: 0;
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8));
}
.banner_img {
  width: 100%;
  height: 100%;
}
.describe {
  position: absolute;
  width: 100%;
  bottom: 0.2rem;
  display: flex;
  justify-content: space-between;
  color: #fff;
  box-sizing: border-box;
  padding: 0 0.25rem;
}
.spot {
  font-size: 0.38rem;
}
.count {
  width: 1.3rem;
  height: 0.4rem;
  background: #000;
  opacity: 0.5;
  border-radius: 0.18rem;
  text-align: center;
  line-height: 0.4rem;
}
.img_lit {
  display: inline-block;
  width: 0.24rem;
  height: 0.32rem;
  background: #ccc;
  margin: 0.04rem 0.1rem 0 0;
}
</style>
