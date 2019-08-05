<template>
  <div class="gallery" @click="no_show">
    <mt-swipe :auto="0">
      <mt-swipe-item v-for="(item,index) in imgCont" :key="index">
        <img class="gallery_img" :src="item" alt="">
      </mt-swipe-item>
    </mt-swipe>
  </div>
</template>

<script>
export default {
  name:'gallery',
  methods:{
    no_show () {
      this.show = false;
      console.log(this.show);
      this.bus.$emit('close',this.show);
    }
  },
  props:['imgCont','show']
  /* props:{
    imgCont:{
      type:Array,
      default(){
        return[
          '@/assets/images/gallery02.png',
          '@/assets/images/gallery01.png'
        ]
      }
    }
  } */
}
</script>

<style scoped>
.gallery >>> .mint-swipe-items-wrap{
  display:flex;
  align-items: center;
}
.gallery >>> .mint-swipe-indicator{
  background: #555;
  opacity: .8;
}
.gallery >>> .mint-swipe-indicator.is-active{
  background: #fff;
}
.gallery{
  z-index: 9;
  position: fixed;
  top:0;
  bottom: 0;
  left: 0;
  right:0;           /* 撑开全屏 */
  background:#000;
}
.mint-swipe-item{
  overflow: hidden;
  width: 100%;
  height: 0;
  padding-bottom: 70.75%;
}
.gallery_img{
  width: 100%;
}
</style>
