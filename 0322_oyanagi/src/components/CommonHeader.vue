<template>
  <header class="header">
    <div class="header-wrap">
      <h1 class="header-logo">estra inc.</h1>
      <nav class="header-nav">
        <ul>
          <li><a href="#">home</a></li>
          <li><a href="#">about</a></li>
          <li><a href="#">service</a></li>
          <li><a href="#">contact</a></li>
        </ul>
      </nav>
   </div>
   <div id="hamburger" @click="hamburger()" :class="{active:isClass}">
     <span></span>
     <span></span>
     <span></span>
   </div>
   <nav class="menu-content" :class="{'open':isClass}">
     <p class="menu-title">estra inc.</p>
     <ul class="menu-content_inner">
       <li>
         <a href="#">home</a>
       </li>
       <li>
         <a href="#">about</a>
       </li>
       <li>
         <a href="#">service</a>
       </li>
       <li>
         <a href="#">contact</a>
       </li>
     </ul>
   </nav>
  </header>
</template>

<script>
export default {
  data(){
    return{
      isClass:false
    };
  },
  methods:{
    hamburger(){
      this.isClass = !this.isClass;
    }
  }
};
</script>

<style scoped>
.header {
  height: 70px;
  background: white;
}

.header-wrap {
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.header-logo {
  font-size: 35px;
  font-weight: bold;
  margin-left: 35px;
  color: rgb(0, 39, 126);
  line-height: 70px;
}

.header-nav ul {
  display: flex;
}

.header-nav li {
  margin-right: 35px;
  font-size: 20px;
  font-weight: bold;
}

.header-nav a {
  color: rgb(0, 39, 126);
  text-decoration: none;
}
.menu-content{
  display: none;
}
.catch-copy {
  position: absolute;
  bottom: 100px;
  font-size: 70px;
  color: #00277e;
}

@media screen and (max-width: 768px) {
  #hamburger {
    width: 40px;
    height: 40px;
    position: absolute;
    cursor: pointer;
    z-index: 100;
    top: 15px;
    right: 20px;
    transition: 0.4s;
  }
  #hamburger span {
    position: absolute;
    left: 2px;
    display: block;
    width: 35px;
    height: 2px;
    background-color:black;
    transition: 0.8s;
  }
  #hamburger span:nth-of-type(1) {
    top: 10px;
  }
  #hamburger span:nth-of-type(2) {
    top: 20px;
  }
  #hamburger span:nth-of-type(3) {
    top: 30px;
  }
  .header-nav {
    display: none;
  }


  #hamburger.active span:nth-of-type(1) {
    top: 20px;
    transform: rotate(45deg);
  }

  #hamburger.active span:nth-of-type(2) {
    opacity: 0;
  }
  #hamburger.active span:nth-of-type(3) {
    top: 20px;
    transform: rotate(-45deg);
  }
  .menu-content {
    display: block;
    width: calc(100% - 80px);
    height: 100%;
    text-align: center;
    transition: 0.2s;
    position: fixed;
    top: 0;
    left: calc(-100% - 80px);
    background: #fff;
    color: #333333;
    box-shadow: 80px 0 rgba(38, 98, 213, 0.3);
    z-index: 999;
  }
  .menu-content .menu-title {
    margin: 40px 20px;
    font-size: 2.2rem;
    color: #333333;
    text-align: left;
    font-weight: bold;
  }
  .menu-content li a {
    color: #333333;
    margin: 15px;
    padding: 5px;
    border-bottom: 0.5px solid #2662d5;
    text-decoration: none;
    display: block;
  }
  .menu-content li {
    width: 100%;
    text-align: left;
  }
  .menu-content.open {
    left: 0;
  }
  
}
</style>