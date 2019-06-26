<template>
  <div class="list">
    <div class="list_wrap">
      <list-header></list-header>
      <list-search></list-search>
    </div>

    <list-city></list-city>
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
