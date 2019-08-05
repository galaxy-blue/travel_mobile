<template>
  <div :class="{'hideDown':searchValue !== ''}">
    <div class="search">
      <div class="cont_wrap">
        <input type="text" class="cont" v-model="searchValue" @input="oninput" placeholder="请输入城市名称/拼音"/>
      </div>
   </div>
   <ul class="search_drap" v-if="searchValue !== ''">
      <li class="search_list" v-for="item in searchArr" :key="item.id" @click="handleCity(item.name)">
        {{item.name}}
      </li>
      <li class="search_list" :class="{'ishide':ishide}">没有找到匹配的数据</li>
   </ul>
  </div>
</template>

<script>
export default {
  name: "search",
  props: ["cities"],
  data() {
    return {
      searchValue: "",
      searchArr: [],
      ishide:true,
      timer: null
    };
  },
  /* watch: {
    //监听
    searchValue() {
      if (this.timer) {
        clearTimeout(this.timer);
      }
      if (!this.searchValue) {
        this.searchArr = [];
        return;
      }
      this.timer = setTimeout(() => {
        let arr = [];
        for (let i in this.cities) {
          //for-in循环主要是循环对象的
          //console.log(i);
          //console.log(this.cities[i]);  //因为i是变量所以是[i]
          this.cities[i].forEach(val => {
            if (
              val.name.indexOf(this.searchValue) != -1 ||
              val.spell.indexOf(this.searchValue) != -1
            ) {
              arr.push(val);
            }
          });
        }
        this.searchArr = arr;
      }, 200);
    }
  }, */
  methods: {
    handleCity(name) {
      //console.log(name);
      this.$store.dispatch("changeCity", name);
      this.$router.push("/");
    },
    oninput (e) {
      if(e.target.value == ''){
        this.ishide = true;
      }
      let arr = [];
      for (let i in this.cities) {
          //for-in循环主要是循环对象的
          //console.log(i);
          //console.log(this.cities[i]);  //因为i是变量所以是[i]
          this.cities[i].forEach(val => {
            if (
              val.name.indexOf(e.target.value) != -1 ||
              val.spell.indexOf(e.target.value) != -1
            ) {
              arr.push(val);
            }
          });
      }
      this.searchArr = arr;
      if(this.searchArr.length == 0){
        this.ishide = false;
      }else{
        this.ishide = true;
      }
    }
  }
}
</script>

<style scoped>
.ishide{
  display: none;
}
.hideDown {
  position: fixed;
  top: 0.88rem;
  bottom: 0;
  left: 0;
  right: 0;
}
.search {
  height: 1.02rem;
  background: #1ba9ba;
  display: flex;
  justify-content: center;
  align-items: center;
}
.cont_wrap {
  width: 90%;
  background: #fff;
  border-radius: 0.1rem;
  padding: 0 0.2rem;
  font-size: 0.28rem;
  color: #888;
}
.cont {
  line-height: 0.6rem;
}
.search_drap {
  background: #fff;
  width: 100%;
  height: 100%;
}
.search_list {
  line-height: 0.7rem;
  font-size: 0.28rem;
  border-bottom: 1px solid #cce;
  margin-left: 0.2rem;
}
</style>
