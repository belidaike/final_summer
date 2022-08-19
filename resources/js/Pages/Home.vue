<template>
  
  <div class="bg-dark rounded-4">
    <h1 class="text-center">Welcome to PhoneStore</h1><br>
    <p class="text-center">This store provides newly made from the factory and delivery to you with care nothing matters to the company but the satifaction of their customers hoping they have a good time and for that we would like to have your honest opinion and feedback.</p>
  </div>
  <div class="row">
    <div class="card text-center k">
      <h2>Links</h2>
      <div class="bg-dark rounded-3 asd"><br>

        <div class="baw">
          <a class="libog" href="/phone">Stock</a>
        </div><br>
        <a ></a>
        <div class="baw">
          <a class="libog" href="/contact">About Us</a>
        </div><br>


      </div>
    </div>
  </div>





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


.k {
  background-color: rgba(238, 230, 230,0.5);
}
.asd {
  margin-bottom: 10px;
}
.rounded-4{
  padding: 10px;
}
h2 {
  margin-top: 20px;
  color: black;
}
.libog {
  background-color: orange;
  border-radius: 2em;
  padding: 10px;
  width: 50%;
  font-size: 30px;
}
.baw {
  display: flex;
  justify-content: space-evenly;
  padding-left: 10px;
}
a{
  text-decoration: none;

}

.row {
  width: 400px;
  margin: 100px auto;
}
.card-header {
  display: flex;
  justify-content: space-evenly;
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



