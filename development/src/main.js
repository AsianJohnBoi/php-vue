import Vue from 'vue'
import App from './App.vue'
import BootstrapVue from 'bootstrap-vue'

// Boostrap files
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

Vue.use(BootstrapVue)

Vue.config.productionTip = false

new Vue({
  data:{
    response: {}
  },
  render: h => h(App),
}).$mount('#app')
