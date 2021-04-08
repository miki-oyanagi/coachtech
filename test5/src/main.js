import Vue from 'vue'
import App from './App.vue'
import router from './router'
// import Member from './views/Member.vue'

Vue.config.productionTip = false

new Vue({
  router,
  render: h => h(App)
}).$mount('#app')
