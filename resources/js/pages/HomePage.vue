<script setup>
import Navbar from "@/components/Navbar.vue";
import Banner from "@/components/Banner.vue";
import Cart from "@/components/Cart.vue";
import Poster from "@/components/Poster.vue";
import CarouselOne from "@/components/CarouselOne.vue";
import CarouselTwo from "@/components/CarouselTwo.vue";
import CarouselThree from "@/components/CarouselThree.vue";

</script>

<template >
  <div class="container-fluid">

 
  <!-- Navbar -->
  <section>
    <Navbar />
  </section>

  <!-- Banner -->
  <section>
    <Banner />
  </section>

  <!-- Poster -->
  <section class="postersection">
    <div class="row pt-2">
      <div class="col-lg-3 col-md-2 col-sm-6">
        <Poster />
      </div>
      <div class="col-lg-3 col-md-2 col-sm-6">
        <Poster />
      </div>
      <div class="col-lg-3 col-md-2 col-sm-6">
        <Poster />
      </div>
      <div class="col-lg-3 col-md-2 col-sm-6">
        <Poster />
      </div>
    </div>
  </section>

  <!-- Cart -->
  <section class="cartsection ">
    <CarouselThree />
  </section>

  
  <section>

    <CarouselOne />

  </section>
 

  <section>

<CarouselTwo />

</section>

</div>

</template>

<style scoped>
.border-container {
  position: relative;
  border: 2px solid #a4ad21;
  border-radius: 8px;
  padding: 20px;
  margin:15px;
  background-color: #fff;
}

.border-text {
  position: absolute;
  top: -10px;
  left: 10px;
  border: 1px solid hsl(0, 29%, 97%);
  border-radius: 25%;
  font-size: 18px;
  font-weight: bold;
  color: #0c0c0c;
  background-color: hsl(0, 2%, 74%);
  padding: 5px;
}

/* Add specific styles for each section as needed */
</style>
