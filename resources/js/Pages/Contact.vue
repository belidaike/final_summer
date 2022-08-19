<template>
  
  <div class="mao d-flex justify-content-center">
    <div class="rounded-4 bg-dark">
    <h1 class="text-center">About Us</h1><br>
    <div class="text-center ">
        <p><b>Facebook/ace.com</b></p>
        <p><b>+63-234-234-135</b></p>
        <p><b>Tel no.</b>528 353 2342</p>
    </div>

  </div>
  </div>
    <div class="asdf"></div>





</template>



<script>
import Layout from '../Shared/Layout.vue'

export default {
    layout: Layout,
    props: {
        phones: Array
    }
}
</script>





<style scoped>

.rounded-4 {
  width: 70%;
  padding: 10px;
}

.asdf {
  height: 117px;
}



h2 {
  color: white;
}




h1,p {
  color: orange;
}
/* .baw {
  border-radius: 2em;
  background-color: orange;
  width: 50%;
  padding: 0;
  margin: 0;
} */
</style>



