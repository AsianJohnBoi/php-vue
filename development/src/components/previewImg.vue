<template>
  <div>
    <h3>Preview</h3>
    <b-img thumbnail fluid 
      :src="preview"
      alt="select image"
      width="500"
      height="1000"
    >
    </b-img>
  </div>
</template>

<script>
export default {
  name: "previewFile",
  description: "Previews image file when user clicks \
                a thumbnail from the getFiles component. \
                Always listens for incoming messages.",
  props: {
    preview: null,
    msg: {
    type: String
    }
  },
  watch: {
    /**
        Listens for incoming values and stores in preview property

        @param variable - emitted value
    */
    msg(variable) {
      this.preview = variable;
    }
  }
};
</script>
<style scoped>
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

img {
    display: block;
}
</style>
