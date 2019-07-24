<template>
  <div class="lists">
    <ul class="naviga">
      <li :class="{'on':isActive}" @click="handleStyle">门票</li>
      <li :class="{'on':isActOther}" @click="handleStyleOther">一日游</li>
    </ul>
    <div class="tempWrap">
      <div class="tabOne" :class="{'active':isActOther}" v-for="item in list" :key="item.id">
        <div class="headWrap">
          <div class="head_box">
            <img class="imgCont" src="@/assets/images/menpiao.png" alt="">
            <span>{{item.title}}</span>
          </div>
          <div class="content" v-for="conte in item.content" :key="conte.id">
            <div class="content_box" @click="handleDown(conte.id)">
              <span>{{conte.item}}</span>
              <div class="rightWrap">
                <span class="price">
                  <em class="strong"><i class="importent">￥</i>{{conte.price}}</em>起
                </span>
                <div class="buttom" v-if="conte.secondContent">
                  <img :class="{'buttomDown': conte.showFlog}" src="@/assets/images/down.png" alt="">
                </div>
              </div>
            </div>
             <div class="secondContent" :class="{'showD':!conte.showFlog}" v-for="attachment in conte.secondContent" :key="attachment.id">
                <div class="attach">
                  <div class="leftContent">
                    <div class="title_second tl">{{attachment.title_second}}</div>
                    <div class="time tl">{{attachment.time}}</div>
                  </div>
                  <div class="rightContent">
                    <div class="second_price tl">￥{{attachment.price}}</div>
                    <div class="reserve tl">预定</div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="tabTwo" :class="{'active':isActive}" v-for="item in listSec" :key="item.id">
        <div class="headWrap">
          <div class="head_box">
            <img class="imgCont" src="@/assets/images/menpiao.png" alt="">
            <span>{{item.title}}</span>
          </div>
          <div class="content" v-for="content in item.content" :key="content.id">
            <div class="content_box">
              <span>{{content.item}}</span>
              <div class="rightWrap">
                <span class="price">
                  <em class="strong"><i class="importent">￥</i>{{content.price}}</em>起
                </span>
                <div class="buttom">
                  <img src="@/assets/images/down.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "detailLists",
  props: ['list','listSec'],
  data() {
    return {
      isActive: true,
      isActOther: false,
      changeShow: true,
      changeDeg: false
    };
  },
  methods: {
    handleStyle() {
      if (this.isActive) {
        this.isActOther = false;
      } else {
        this.isActive = true;
        this.isActOther = false;
      }
    },
    handleStyleOther() {
      if (this.isActOther) {
        this.isActive = false;
      } else {
        this.isActOther = true;
        this.isActive = false;
      }
    },
    handleDown (id) {
      this.list.map(i => {
        i.content.map(v => {
          if (id == v.id) {
            v.showFlog = !v.showFlog;
          }
        });
      });
    }
  }
};
</script>

<style scoped>
.lists {
  margin-top: 0.25rem;
  background: #fff;
}
.naviga {
  display: flex;
  justify-content: space-around;
  line-height: 0.92rem;
  font-size: 0.32rem;
  border-bottom: 1px solid #ddd;
  box-sizing: border-box;
}
.titl {
  display: inline-block;
  width: 20%;
  text-align: center;
}
.on {
  border-bottom: 0.03rem solid #00bcd4;
}
.active {
  display: none;
}
.headWrap {
  line-height: 0.98rem;
  font-size: 0.32rem;
}
.head_box {
  border-bottom: 1px solid #ddd;
  margin-left: 0.2rem;
}
.imgCont {
  width: 0.36rem;
  height: 0.36rem;
}
.content_box {
  border-bottom: 1px solid #ddd;
  padding: 0 0.2rem;
  font-size: 0.3rem;
  display: flex;
  justify-content: space-between;
}
.strong {
  color: #ff9800;
  font-size: 0.4rem;
}
.importent {
  font-size: 0.2rem;
}
.price {
  font-size: 0.2rem;
}
.buttom {
  display: inline;
}
.secondContent {
  background: #f5f5f5;
  padding: 0.2rem;
}
.attach {
  display: flex;
}
.tl {
  line-height: 0.8rem;
}
.second_price {
  color: #ff9800;
}
.reserve {
  color: #fff;
  background: #ff9800;
  width: 1.5rem;
  text-align: center;
  border-radius: 5px;
}
.rightContent {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}
.showD {
  display: none;
}
.buttomDown {
  transform: rotate(180deg);
}
</style>
