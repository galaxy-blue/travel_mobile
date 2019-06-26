<template>
  <div class="list_header">
    <i class="back" @click="back"></i>
    <h3 class="title">城市选择</h3>
  </div>
</template>

<script>
export default {
  name:'list_header',
  methods:{
    back(){
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
.back{
  display:inline-block;
  width: .4rem;
  height:.4rem;
  background:#ccc;
  position: absolute;
  left: .3rem;
  top:.24rem;
}
.title{
  color:#fff;
  display:inline-block;
  font-weight: bold;
  font-size: .35rem;
}
</style>
