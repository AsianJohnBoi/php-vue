<template>
  <div id="app">
  <navbar />
  <alert />
  <br />
    <b-container>
      <b-row>
        <b-col><getFiles @inputData="updatePreview"/></b-col>
        <b-col><previewImg :msg="childData"/></b-col>
      </b-row>
    </b-container>
    <br />
  </div>
</template>

<script>
import getFiles from './components/getFiles.vue'
import previewImg from './components/previewImg.vue'
import navbar from './components/navbar.vue'
import alert from './components/alert.vue'

export default {
  name: "app",
  components: {
    getFiles,
    previewImg,
    navbar,
    alert
  },
  data () {
    return {
      childData: null
    };
  },
  methods: {
    /**
      stores emitted value in childData property for previewImg component

      @param variable - emitted value
    */
    updatePreview(variable) {
      this.childData = variable;
    }
  }
};
</script>

<style>
#app {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
