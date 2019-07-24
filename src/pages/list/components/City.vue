<template>
  <div class="city_wrap">
    <div class="city">
      <div class="current_city city_bot">
        <h3 class="title">当前城市</h3>
        <div class="city_cho_wrap">
          <div class="city_choice">{{this.$store.state.city}}</div>
        </div>
      </div>
      <div class="popular_city city_bot">
        <h3 class="title">热门城市</h3>
        <div class="city_cho_wrap">
          <div class="city_choice" v-for="item in hotCities" :key="item.id" @click="handleCity(item.name)">{{item.name}}</div>
        </div>
      </div>
    </div>
    <div class="city_table">
      <mt-index-list>
        <mt-index-section :index="index" v-for="(item,index) in cities" :key="index">
          <mt-cell :title="list.name" v-for="list in item" :key="list.id"  @click.native="handleCity(list.name)"></mt-cell>
        </mt-index-section>
      </mt-index-list>
    </div>
  </div>
</template>

<script>
  export default {
    name: "city",
    props:["hotCities","cities"],
    data () {
      return {
        isPosit: false,
      };
    },
    mounted() {
      window.addEventListener("scroll", this.handleScroll, true);
    },
    methods: {
      handleScroll() {
        if (document.documentElement.scrollTop >= 380) {
          this.isPosit = true;
        } else {
          this.isPosit = false;
        }
      },
      handleCity (name) {
        //console.log(name);
        this.$store.dispatch('changeCity',name);
        this.$router.push('/');
      }
    },
    destroyed() {
      //  离开页面清除（移除）滚轮滚动事件
      window.removeEventListener("scroll", this.handleScroll);
    }
  };
</script>

<style scoped>
  .city_wrap>>>.mint-indexlist{
    position: static;
  }
  .city_wrap {
    position: relative;
    top: 1.9rem;
  }
  .city {
    background: #eef;
    height: 3.5rem;
  }
  .city_bot {
    padding: 0 4% 0 3%;
  }
  .current_city {
    border-bottom: 1px solid #dde;
  }
  .title {
    font-size: 0.3rem;
    padding: 4.5% 0 3.5%;
  }
  .city_cho_wrap {
    display: flex;
    flex-wrap: wrap;
  }
  .city_choice {
    width: 30%;
    height: 0.6rem;
    text-align: center;
    line-height: 0.6rem;
    font-size: 0.28rem;
    margin-right: 1%;
    background: #fff;
    border: 1px solid #dbe1e4;
    border-radius: 3px;
    margin-bottom: 2%;
  }
  .sort {
    background: #fafafa;
    width: 100%;
    height: 25px;
    line-height: 25px;
    border-bottom: 1px solid #eee;
    color: #666;
    padding-left: 3%;
  }
  .city_list_wrap {
    padding-left: 3%;
  }
  .city_list {
    border-bottom: 1px solid #e0e0e0;
    line-height: 38px;
    color: #888;
  }
  .letter {
    position: fixed;
    top: 36%;
    right: 0;
  }
  .let_list {
    width: 28px;
    text-align: center;
    color: #555;
    font-size: 0.15rem;
  }
  .posit_a {
    position: fixed;
    top: 1.9rem;
  }


</style>
