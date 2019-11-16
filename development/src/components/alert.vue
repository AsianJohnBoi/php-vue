<template>
  <div>
    <b-alert show variant="success" dismissible>
        DirScanner scans your image files inside a folder ('/images/').
        Click a thumbnail to show a preview.
    </b-alert>
  </div>
</template>

<script>
export default {
  name: "alert",
  description: "A dismissable alert to inform the user how the app works."
};
</script>
<style scoped></style>

b-alert {
    width: 80%
}