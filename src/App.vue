<template>
  <div id="app">
    <keep-alive exclude="detail">
      <router-view/>
    </keep-alive>
  </div>
</template>

<script>
export default {
  name: 'App',
  // 使用watch 监听$route的变化,
  watch: {
    '$route': function(to,from){
　    document.body.scrollTop = 0
      document.documentElement.scrollTop = 0
    }
  }
}
</script>

<style>
#app{
  touch-action: pan-y;
}
</style>
