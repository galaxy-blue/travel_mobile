<template>
  <div class="search">
    <div class="cont_wrap">
      <span class="cont">请输入城市名称/拼音</span>
    </div>
  </div>
</template>

<script>
export default {
  name:'search'
}
</script>

<style scoped>
.search{
  height: 1.02rem;
  background:#1ba9ba;
  display: flex;
  justify-content: center;
  align-items: center;
}
.cont_wrap{
  width: 90%;
  background: #fff;
  border-radius: .1rem;
  padding:0 .2rem;
}
.cont{
  font-size: .28rem;
  color: #888;
  line-height:.6rem;
}
</style>
