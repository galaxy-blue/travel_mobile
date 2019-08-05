<template>
  <div class="list_header">
    <img src="@/assets/images/back.png" alt="" class="back_arrow" @click="toback">
    <h3 class="title">城市选择</h3>
  </div>
</template>

<script>
export default {
  name:'listHeader',
  methods:{
    toback(){
      this.$router.push({
        path:'/'
      });
    }
  }
}
</script>

<style scoped>
.list_header{
  width: 100%;
  height:.88rem;
  background: #1ba9ba;
  line-height:.88rem;
  text-align: center;
}
.title{
  color:#fff;
  display:inline-block;
  font-weight: bold;
  font-size: .35rem;
}
.back_arrow{
 width: .4rem;
 position: absolute;
 left: .3rem;
 top:.24rem;
}
</style>
