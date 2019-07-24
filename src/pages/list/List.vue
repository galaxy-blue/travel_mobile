<template>
  <div class="list">
    <div class="list_wrap">
      <list-header></list-header>
      <list-search :cities="this.cities"></list-search>
    </div>
    <list-city :hotCities="this.hotCities" :cities="this.cities"></list-city>
  </div>
</template>

<script>
import ListHeader from "./components/Header";
import ListSearch from "./components/Search";
import ListCity from "./components/City";
export default {
  name: "list",
  components: {
    ListHeader,
    ListSearch,
    ListCity
  },
  data () {
    return {
      hotCities:{},
      cities:{}
    }
  },
  mounted () {
  this.handleCities()
  },
  methods: {
    handleCities () {
      this.$axios.get('/api/city.php').then((res)=>{
        console.log(res);
        this.hotCities = res.data.hotCitys;
        this.cities = res.data.cities;
      })
    }
  }
};

</script>

<style scoped>
.list_wrap{
  width: 100%;
  position: fixed;
  top:0;
  left: 0;
  z-index: 10;
}
</style>
