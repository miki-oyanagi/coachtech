<template>
<div id="app">
 <CommonHeader></CommonHeader>
 <main>
   <div class="eyecatch">
     <div class="eyecatch-img-container">
       <img class="eyecatch-img" src="../src/assets/firstview.jpeg" alt="eyecatch" />
     </div>
     <div class="bg-blue">
       <p class="catch-copy">毎日を笑顔に</p>
     </div>
   </div>
 </main>
</div>
</template>

<script>
import CommonHeader from "./components/CommonHeader" ;

// 読み込んだ Name コンポーネントを
// 使えるようにする設定
export default {
  components: { CommonHeader }
};



</script>


<style>
html, body, div, span, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
abbr, address, cite, code,
del, dfn, em, img, ins, kbd, q, samp,
small, strong, sub, sup, var,
b, i,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, figcaption, figure,
footer, header, hgroup, menu, nav, section, summary,
time, mark, audio, video {
  margin:0;
  padding:0;
  border:0;
  outline:0;
  font-size:100%;
  vertical-align:baseline;
  background:transparent;
}

body {
  line-height:1;
}

article,aside,details,figcaption,figure,
footer,header,hgroup,menu,nav,section {
  display:block;
}

nav ul {
  list-style:none;
}

blockquote, q {
  quotes:none;
}

blockquote:before, blockquote:after,
q:before, q:after {
  content:'';
  content:none;
}

a {
  margin:0;
  padding:0;
  font-size:100%;
  vertical-align:baseline;
  background:transparent;
}

/* change colours to suit your needs */
ins {
  background-color:#ff9;
  color:#000;
  text-decoration:none;
}

/* change colours to suit your needs */
mark {
  background-color:#ff9;
  color:#000;
  font-style:italic;
  font-weight:bold;
}

del {
  text-decoration: line-through;
}

abbr[title], dfn[title] {
  border-bottom:1px dotted;
  cursor:help;
}

table {
  border-collapse:collapse;
  border-spacing:0;
}

/* change border colour to suit your needs */
hr {
  display:block;
  height:1px;
  border:0;
  border-top:1px solid #cccccc;
  margin:1em 0;
  padding:0;
}

input, select {
  vertical-align:middle;
}

.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 70px;
  padding: 0 30px;
}

.header-ttl {
  font-size: 35px;
}

.header-ttl-link {
  text-decoration: none;
  color: #00277e;
}

.header-nav-list {
  display: flex;
  justify-content: space-between;
  font-weight: bold;
}

.header-nav-item {
  list-style: none;
  font-size: 20px;
}

.header-nav-item:not(:last-of-type){
  margin-right: 100px;
}

.header-nav-item-link {
  text-decoration: none;
  color: #00277e;
}

.eyecatch {
  position: relative;
}

.eyecatch-img-container {
  width: 50%;
  margin: 100px 0 0 auto;
}

.eyecatch-img {
  width: 100%;
  height: 100%;
  display: block;
}

.bg-blue {
  background: #00277e;
  width: 75%;
  height: 200px;
  position: absolute;
  bottom: -100px;
  z-index: -1;
}

.catch-copy {
  position: absolute;
  bottom: 200px;
  font-size: 70px;
  color: #00277e;
}

.hamburger-menu {
  display: none;
}

@media screen and (max-width: 768px) {
  .header-nav {
    display: none;
  }

  .hamburger-menu {
    position: absolute;
    top: 0;
    right: 0;
    display: block;
    width: 35px;
    height: 35px;
  }

  .line-top,
  .line-middle,
  .line-bottom {
    display: block;
    width: 35px;
    height: 3px;
    background-color: #00277e;
    position: absolute;
    right: 30px;
    top: 35px;
  }

  .line-top {
    transform: translateY(-10px);
  }

  .line-bottom {
    transform: translateY(10px);
  }

  .eyecatch {
    height: calc(100vh - 70px);
  }

  .eyecatch-img-container {
    margin: 0 0 0 10%;
    width: 90%;
  }

  .bg-blue {
    width: 90%;
    bottom: 0;
  }

  .catch-copy {
    bottom: 150%;
    font-size: 55px;
    width: 100%;
    text-align: center;
  }

}
</style>