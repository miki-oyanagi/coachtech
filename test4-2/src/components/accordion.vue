<template>
  <div class="js-accordion" v-cloak>
    <button class="js-accordion--trigger" type="button" :class="{ '_state-open': isOpened }" @click="accordionToggle()">
      アコーディオン
    </button>
    <div class="js-accordion--target" :class="{ '_state-open': isOpened }" v-if="isOpened">
  <div class="js-accordion--body">
      アコーディオンの中身
  </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
      return {
        isOpened : false
      };
    },
    methods: {
      accordionToggle: function(){
        this.isOpened = !this.isOpened;
      },
    }
  };

</script>

<style>
.js-accordion{
  background-color: #fff;
  border-color:black;
  border-style: solid;
  border-width:1px;
  border-radius: 2px;
  }
.js-accordion:last-child{
    border-bottom-width:1px;
  }
.js-accordion--trigger{
    position: relative;
    display: block;
    width: 100%;
    transition: all 0.2s ease-in;
    color: #4d68b7;
    display: block;
    font-size:20px;
    font-weight: bold;
    text-align: left;
    padding: 20px;
    outline: none;
    border: none;
    cursor: pointer;
}
.js-accordion:after{
      display: inline-block;
      width: 0;
      height: 0;
      border: solid transparent;
      content: "";
      border-top-color: #5f6569;
      border-width: 7px;
      position: absolute;
      top: 50%;
      right: 1em;
      margin-top: -5px;
      transition: all 0.2s ease-in;
    }
.js-accordion._state-open{
      background-color: #f1f1f1;
      text-decoration: none;
}
.js-accordion:after{
        transform:rotateX(180deg);
        margin-top: -10px;
      }
.js-accordion:hover{
      background-color: #f1f1f1;
      text-decoration: none;
    }
.js-accordion--body{
    padding: 30px;
  }
.js-accordion-enter-active{
    animation-duration: 1s;
    animation-fill-mode: both;
    animation-name: js-accordion--anime__opend;
  }
.js-accordion-leave-active{
    animation-duration: 1s;
    animation-fill-mode: both;
    animation-name: js-accordion--anime__closed;
  }
</style>
