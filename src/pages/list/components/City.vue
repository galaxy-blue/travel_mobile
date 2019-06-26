<template>
  <div class="city_wrap">
    <div class="city">
      <div class="current_city city_bot">
        <h3 class="title">当前城市</h3>
        <div class="city_cho_wrap">
          <div class="city_choice">北京</div>
        </div>
      </div>
      <div class="lately_city city_bot">
        <h3 class="title">您最近访问的城市</h3>
        <div class="city_cho_wrap">
          <div class="city_choice">北京</div>
          <div class="city_choice">石家庄</div>
          <div class="city_choice">邯郸</div>
        </div>
      </div>
      <div class="popular_city city_bot">
        <h3 class="title">热门城市</h3>
        <div class="city_cho_wrap">
          <div class="city_choice">北京</div>
          <div class="city_choice">成都</div>
          <div class="city_choice">上海</div>
          <div class="city_choice">重庆</div>
          <div class="city_choice">天津</div>
          <div class="city_choice">广州</div>
          <div class="city_choice">厦门</div>
          <div class="city_choice">杭州</div>
          <div class="city_choice">三亚</div>
          <div class="city_choice">苏州</div>
          <div class="city_choice">香港</div>
          <div class="city_choice">武汉</div>
          <div class="city_choice">深圳</div>
          <div class="city_choice">厦门</div>
          <div class="city_choice">澳门</div>
        </div>
      </div>


    </div>
    <div class="city_table">
      <!-- <h3 ref="sortA" class="sort" :class="isPosit ? 'posit_a' : 'posit_none'">A</h3>
      <ul class="city_list_wrap">
        <li class="city_list">安达市</li>
        <li class="city_list">阿尔拉</li>
        <li class="city_list">拉来特</li>
        <li class="city_list">阿里</li>
        <li class="city_list">阿呗</li>
        <li class="city_list">安顺</li>
        <li class="city_list">安庆</li>
      </ul> -->
      <mt-index-list>
        <mt-index-section :index="item.id" v-for="(item,index) in cityArr" :key="index">
          <mt-cell :title="arr" v-for="(arr,inde) in item.cont" :key="inde"></mt-cell>
        </mt-index-section>
      </mt-index-list>

    </div>
  </div>
</template>

<script>
  export default {
    name: "city",
    data() {
      return {
        isPosit: false,
        cityArr:[
          {
            id:'A',
            cont:['安达市','阿尔拉','拉来特','阿里','阿呗','安顺','安庆']
          },{
            id:'B',
            cont:['白安市','包头','宝鸡','北票市','霸州市','保定','北京']
          },{
            id:'C',
            cont:['白安市','包头','宝鸡','北票市','霸州市','保定','北京']
          },{
            id:'A',
            cont:['安达市','阿尔拉','拉来特','阿里','阿呗','安顺','安庆']
          },{
            id:'B',
            cont:['白安市','包头','宝鸡','北票市','霸州市','保定','北京']
          },{
            id:'C',
            cont:['白安市','包头','宝鸡','北票市','霸州市','保定','北京']
          },{
            id:'A',
            cont:['安达市','阿尔拉','拉来特','阿里','阿呗','安顺','安庆']
          },{
            id:'B',
            cont:['白安市','包头','宝鸡','北票市','霸州市','保定','北京']
          },{
            id:'C',
            cont:['白安市','包头','宝鸡','北票市','霸州市','保定','北京']
          },
        ]
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
  /* .city_wrap>>>.mint-indexlist-content{
    overflow: visible;
  } */
/*   .city_wrap>>>.mint-indexlist-nav{
    position: fixed;
    top:25%;
    right:0;
    background: none;
    border-left:none;
  } */
  .city_wrap {
    position: relative;
    top: 1.9rem;
  }

  .city {
    background: #eef;
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
