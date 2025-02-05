<template>
    <section>
      <div class="border-container">
        <span class="border-text">Top Left Text</span>
  
        <!-- Cart Carousel Container -->
        <div id="carouselTwo" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <!-- First Group of 3 Cards -->
            <div class="carousel-item active">
              <div class="row pt-3">
                <div class="col-lg-3 col-md-3 col-sm-6 card-item">
                  <Cart />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 card-item">
                  <Cart />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 card-item">
                  <Cart />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 card-item">
                  <Cart />
                </div>
              </div>
            </div>
  
            <!-- Second Group of 3 Cards -->
            <div class="carousel-item">
              <div class="row pt-3">
                <div class="col-lg-3 col-md-3 col-sm-6 card-item">
                  <Cart />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 card-item">
                  <Cart />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 card-item">
                  <Cart />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 card-item">
                  <Cart />
                </div>
              </div>
            </div>
  
            <!-- Third Group of 3 Cards -->
            <div class="carousel-item">
              <div class="row pt-3">
                <div class="col-lg-3 col-md-3 col-sm-6 card-item">
                  <Cart />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 card-item">
                  <Cart />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 card-item">
                  <Cart />
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 card-item">
                  <Cart />
                </div>
              </div>
            </div>
          </div>
  
          <!-- Carousel Controls -->
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselTwo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselTwo" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
  </template>
  
  <script setup>
  import Cart from '@/components/Cart.vue';
  
 
  </script>
  
  <style scoped>
  /* Add your custom styles */
  .border-container {
    position: relative;
    border: 2px solid #a4ad21;
    border-radius: 8px;
    padding-top: 20px;
    
    border: none;
    
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
  </style>
  