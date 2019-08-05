<template>
<div class="home-header">
  <div class="header">
    <img src="@/assets/images/back.png" alt="" class="back_arrow">
  <div class="input_con">
      <i class="search"></i>
      <span class="title">输入城市/景点/游玩主题</span>
  </div>
  <div class="city_now_box">
      <span class="city_now" @click="list">{{this.$store.state.city}}</span>
      <span class="drap_warp">
        <i class="drop_arrow"></i>
      </span>
  </div>
</div>
</div>
</template>

<script>
export default {
  name: "HomeHeader",
  methods: {
    list() {
      this.$router.push({
        path: "./list"
      });
    }
  }
};
</script>

<style scoped>
.header {
  width: 100%;
  height: 0.88rem;
  background: #00bcd4;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 0.2rem;
  box-sizing: border-box;
}
.back_arrow {
  width: 0.4rem; /* 图片的宽度 */
}
.input_con {
  height: 0.6rem;
  border-radius: 5px;
  background: #fff;
  line-height: 0.6rem;
  padding: 0 8px;
  margin: 0 0.2rem;
  width: 5rem;
}
.searchWrap {
  width: 0.1rem;
  height: 0.32rem;
  border: 1px solid red;
}
.search {
  display: inline-block;
  width: 0.289rem;
  height: 0.28rem;
  background: url("../../../assets/images/searchhome.png");
}
.title {
  color: #e4e7ea;
}
.city_now_box {
  display: flex;
}
.city_now {
  color: #fff;
  width: 0.9rem;
  text-align: right;
}
.drap_warp {
  width: 0.32rem;
  height: 0.32rem;
}
.drop_arrow {
  display: inline-block;
  width: 100%;
  height: 100%;
  background: url("../../../assets/images/downhome.png");
}
</style>
