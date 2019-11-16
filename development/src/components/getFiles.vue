<template>
  <div>
    <table cellspacing="5" cellpadding="8">
      <tr>
        <th>Filename</th>
        <th>Date</th>
        <th>Size</th>
        <th>Thumbnail</th>
      </tr>
      <tr v-for="file in files" :key="file">
        <td>{{file.name}}</td>
        <td>{{file.date}}</td>
        <td>{{file.size}}</td>
        <td>
            <img v-bind:src="'http://localhost/' + file.name" 
                  :alt='file.name' 
                  width="20" 
                  height="20" 
                  v-on:click="selected = submit('http://localhost/' + file.name)"/>
        </td>
      </tr>
    </table>
  </div>
</template>

<script>
const axios = require("axios");

export default {
  name: "getFiles",
  description: "Calls PHP server for data. Obtains file details in \
                in folder and it in a table.",
  data() {
    return {
      files: null
    };
  },
  methods: {

    /** 
      Calls the PHP server for folder data. Assigns to files for display
    */
    getData() {
      axios
        .get("http://localhost/getFiles.php") 
        .then(response => {
          this.files = response.data;
          console.log(response.data);
        })
        .catch(err => {
          this.files = err;
          console.log(err);
        });
    },

    /**
      Emits the data to App.vue to send to previewImg component
    */
    submit(variable) {
      this.$emit("inputData", variable);
    }
  },
  beforeMount() {
    this.getData();
  }
};
</script>
<style scoped>

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #343a40;
  color: white;
}

h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
