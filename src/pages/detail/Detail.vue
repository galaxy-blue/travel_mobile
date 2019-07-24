<template>
  <div class="detail">
    <detail-header></detail-header>
    <detail-banner></detail-banner>
    <detail-lists :list="this.list" :listSec="this.listSec"></detail-lists>
    <!-- <detail-list :list="this.list"></detail-list> -->
  </div>
</template>

<script>
import DetailBanner from "./components/Banner";
import DetailHeader from "./components/Header";
import DetailLists from "./components/Lists";
/* import DetailList from './components/List' */
export default {
  name: "detail",
  components: {
    DetailBanner,
    DetailHeader,
    DetailLists
    /* DetailList */
  },
  data() {
    return {
      list:'',
      listSec:''
    };
  },
  mounted () {
    this.handleDetail()
  },
  methods:{
    handleDetail () {
      //this.$axios.get('/api/detail.json?id='+this.$route.params.id)
      this.$axios.get('/api/detail.php',{
        params:{
          id:this.$route.params.id
        }
      }).then( res =>{
        console.log(res);
        this.list = res.data.list;
        this.listSec = res.data.listSec;
      })
    }
  }
  /* data () {  //递归组件使用的数据
    return {
      list:[
        {
          title:'活动票',
          arrs:[
            {
            title:'活动双馆售'
          }
          ]
          },
        {
          title:'门票',
          arrs:[
            {
            title:'[全天]成人票'
          },{
            title:'[夜场]成人票'
          },{
            title:'[全天]儿童票'
          }
          ]
          },
        {title:'蹦床馆',
        arrs:[
            {
            title:'[全天]成人票'
          },{
            title:'[夜场]成人票'
          },{
            title:'[全天]儿童票'
          }
          ]},
        {title:'年卡',
        arrs:[
            {
            title:'[全天]成人票'
          },{
            title:'[夜场]成人票'
          },{
            title:'[全天]儿童票'
          }
          ]},
      ]
    }
  } */
};
</script>

<style scoped>
.detail {
  width: 100%;
  background: #f5f5f5;
}
</style>
