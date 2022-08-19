<template>

    <h1 class="text-center" style="color:orange">Phones</h1>
    
    <div class="row d-flex justify-content-center">
        <div class="asd card" v-for="phone in phones" :key="phone.id">
            <div class="column card-header text-center">
                <h3>{{ phone.brand }}</h3>
            </div>
            <div class="card-body">
                <h5 class="text-center"><b>Specs</b></h5>
                <ul class="text-center">
                    <li v-for="spec in phone.specs" :key="spec.id">
                       <p class="bold"><b>Processor: </b>{{ spec.processor }}  </p> 
                    </li>
                    <li v-for="spec in phone.specs" :key="spec.id">
                       <p class="bold"><b>mAh: </b>{{ spec.battery }}  </p> 
                    </li>
                    <li v-for="spec in phone.specs" :key="spec.id">
                        <div><b>Camera: </b>{{ spec.camera }}  </div> <br><br>
                    </li>
                        
                </ul>
                <h6 class="text-center"><b>Amount:</b></h6>
                <ul class="text-center">
                    <li class="instruction" v-bind="phone in phones" :key="phone.id">
                        {{ phone.price }}
                    </li>
                </ul>
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
.card {
    width: 375px;
}
.instruction {
    list-style: none;
}
li {
    list-style: none;
    padding: 0;
    margin: 0;
}
.column {
    background-color: orange;
}
h4{
    color: black;
}
ul {
    list-style: none;
    padding: 0;
    margin: 0;
}


h1 {
    color: white;
}
.asd {
    margin: 100px auto;
    background-color: rgba(255, 255, 255,0.6);
    display: inline-block;
    padding: 0;
}
.line {
    margin: auto;
    width: 90%;
    /* border: 3px solid green; */
    padding: 10px;
}

</style>