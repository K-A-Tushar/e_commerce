<template>
    <h3 id="populer">Recent Product</h3>
    <swiper
      :slides-per-view="6"
      :space-between="30"
      grab-cursor
      :pagination="{ clickable: true }"
      :modules="modules"
      :keyboard="true"
      :navigation="true"
      :loop="true"
      class="mySwiper"
      :breakpoints="{
        320: { slidesPerView: 2, spaceBetween: 10 }, // Mobile View (1 Slide)
        480: { slidesPerView: 3, spaceBetween: 15 }, // Small Screens (2 Slides)
        768: { slidesPerView: 4, spaceBetween: 20 }, // Tablets (3 Slides)
        1024: { slidesPerView: 6, spaceBetween: 30 } // Large Screens (4 Slides)
      }"
    >
      <swiper-slide v-for="product in products" :key="product.title">
        <Cart :title="product.title" :details="product.details" :price="product.price" :image="product.image" />
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
  
 
  const products = [
  {
    image: "https://picsum.photos/seed/1/200/200",
    title: "Product 1",
    details: "Description for product 1",
    price: "$10.00",
  },
  {
    image: "https://picsum.photos/seed/2/200/200",
    title: "Product 2",
    details: "Description for product 2",
    price: "$15.00",
  },
  {
    image: "https://picsum.photos/seed/3/200/200",
    title: "Product 3",
    details: "Description for product 3",
    price: "$20.00",
  },
  {
    image: "https://picsum.photos/seed/4/200/200",
    title: "Product 4",
    details: "Description for product 4",
    price: "$25.00",
  },
  {
    image: "https://picsum.photos/seed/5/200/200",
    title: "Product 5",
    details: "Description for product 5",
    price: "$30.00",
  },
  {
    image: "https://picsum.photos/seed/6/200/200",
    title: "Product 6",
    details: "Description for product 6",
    price: "$35.00",
  },
  {
    image: "https://picsum.photos/seed/7/200/200",
    title: "Product 7",
    details: "Description for product 7",
    price: "$40.00",
  },
  {
    image: "https://picsum.photos/seed/8/200/200",
    title: "Product 8",
    details: "Description for product 8",
    price: "$45.00",
  },
  {
    image: "https://picsum.photos/seed/9/200/200",
    title: "Product 9",
    details: "Description for product 9",
    price: "$50.00",
  },
  {
    image: "https://picsum.photos/seed/10/200/200",
    title: "Product 10",
    details: "Description for product 10",
    price: "$55.00",
  },
];
  
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
  