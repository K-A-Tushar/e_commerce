<template>
    <h3 id="populer">Populer Product</h3>
    <swiper
      :slides-per-view="4"
      :space-between="30"
      grab-cursor
      :pagination="{ clickable: true }"
      :modules="modules"
      :keyboard="true"
      :navigation="true"
      :loop="true"
      class="mySwiper"
      :breakpoints="{
        320: { slidesPerView: 1, spaceBetween: 10 }, // Mobile View (1 Slide)
        480: { slidesPerView: 2, spaceBetween: 15 }, // Small Screens (2 Slides)
        768: { slidesPerView: 3, spaceBetween: 20 }, // Tablets (3 Slides)
        1024: { slidesPerView: 4, spaceBetween: 30 } // Large Screens (4 Slides)
      }"
    >
      <swiper-slide>
        <Cart />
      </swiper-slide>
      <swiper-slide>
        <Cart />
      </swiper-slide>
      <swiper-slide>
        <Cart />
      </swiper-slide>
      <swiper-slide>
        <Cart />
      </swiper-slide>
      <swiper-slide>
        <Cart />
      </swiper-slide>
    </swiper>
  </template>
  
  <script setup>
  import { Swiper, SwiperSlide } from "swiper/vue";
  import Cart from "@/components/Cart.vue";
  import "swiper/css";
  import "swiper/css/pagination";
  import "swiper/css/navigation";
  import { Pagination, Keyboard, Navigation } from "swiper/modules";
  
  const modules = [Pagination, Keyboard, Navigation];
  </script>
  
  <style scoped>
  #populer {
    z-index: 1000;
    border: #0c0c0c;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    display: inline-block;
    padding: 5px;
    border-radius: 10%;
    margin-left: 10px;
  }
  </style>
  