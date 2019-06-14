<template>
  <div class="home_swiper">
    <mt-swipe :auto="4000">
      <mt-swipe-item v-for="list in swiperList" :key="list.id">
        <img :src="list.item" alt="">
      </mt-swipe-item>
    </mt-swipe>
  </div>
</template>

<script>
import swiper01 from "@/assets/images/swiper01.png";
import swiper02 from "@/assets/images/swiper02.png";
import swiper03 from "@/assets/images/swiper03.png";
export default {
  name: "swiper",
  data() {
    return {
      swiperList: [
        {
          id: "01",
          item: swiper01
        },
        {
          id: "02",
          item: swiper02
        },
        {
          id: "03",
          item: swiper03
        }
      ]
    };
  }
};
</script>

<style scoped>
.home_swiper {
  width: 100%;
  height: 2rem;
}
.home_swiper img {
  height: 100%;
  width: 100%;
}
</style>
