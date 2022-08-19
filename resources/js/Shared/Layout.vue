<template>


        <nav class="navbar navbar-expand-lg bg-dark">
        <div class="d-flex justify-content-center babaw">
            <a class="margin" href="/" style="color:white">MDC</a> <a class="ambot rounded-4 kani" href="/" style="color:black">Store</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse design" id="navbarNav">
            <ul class="navbar-nav">


            <li class="nav-item">
                <Link class="nav-link rand" :class="{'selected': $page.component=='Home'}" href="/">Home</Link>
            </li>
            <li class="nav-item">
                <Link class="nav-link rand" :class="{'selected': $page.component=='Phone'}" href="/phone">Stock</Link>
            </li>
    
            <li class="nav-item">
                <Link class="nav-link uwu rand" :class="{'selected': $page.component=='Contact'}" href="/contact">Contact Us</Link>
            </li>


            </ul>
        </div>
    </nav>

<section class="container p-4 rounded-3 my-5" >
    <slot />
    

</section>
<footer class="white text-center mt-5">
    <b>Copyright &copy; 2022. All rights reserved.</b>
</footer>



</template>
<script setup>
import { Link } from '@inertiajs/inertia-vue3'
</script>

<style scoped>
.white {
    padding: 30px;
    background-color: orange;
}
.ambot {
    background-color: orange;
    margin: 0;
    padding: 0;
}
b{
    letter-spacing: 3px;
    font-size: 20px;
}
.kani {
    padding-left: 5px;
    padding-right: 5px;
}

.babaw a{
    text-decoration: none;
    font-size: 30px;
}
.rand {
    color: white;
}
/* section {
} */
h1 {
    color: white;
}
.margin {
    margin-left: 20px;
    color: white;

}
.uwu {
    margin-right: 20px;
}
.selected {
    color: black;
    background-color: orange;
    font-weight: bold;
    transition: all 0.3s ease-in-out;
}
.design {
    display: flex;
    justify-content: end;
}
h1 {
    color: white;
}



</style>