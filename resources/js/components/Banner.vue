<template>
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
      <div class="carousel-inner">
        <div 
          class="carousel-item" 
          :class="{'active': index === 0}" 
          v-for="(image, index) in images" 
          :key="index"
        >
          <img :src="image.src" class="d-block w-100" :alt="image.alt">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</template>

<script>
export default {
  data() {
    return {
      images: [
        { src: '/image/banner5.jpg', alt: 'Banner5' },
        { src: '/image/banner6.jpg', alt: 'Banner6' },
        { src: '/image/banner7.jpg', alt: 'Banner7' }
      ]
    };
  }
};
</script>

<style scoped>
/* Custom Carousel Container */
#carouselExample {
  width: 100%;        /* Ensures the carousel takes full width */
  height: 300px;      /* Custom height for the carousel */
  overflow: hidden;   /* Prevents images from overflowing */
}

/* Ensures the inner carousel container takes full height */
.carousel-inner {
  height: 100%;
}

/* Custom Carousel Images */
.carousel-item img {
  object-fit: cover;  /* Ensures images fill the container and crop appropriately */
  width: 100%;        /* Ensure image width fills the carousel */
  height: 100%;       /* Ensure image height fills the carousel */
}

/* Controls custom styles (optional) */
.carousel-control-prev-icon, .carousel-control-next-icon {
  background-color: black; /* Set controls color */
}

/* Mobile-specific adjustments */
@media (max-width: 767px) {
  #carouselExample {
    height: 200px;  /* Reduce carousel height on mobile */
  }

  /* Adjust carousel images for better fit on mobile */
  .carousel-item img {
    object-fit: cover; /* Ensures images still cover the container */
    width: 100%;       /* Ensure image fills horizontally */
    height: 100%;      /* Ensure image fills vertically */
  }
  
  /* Optional: Adjust carousel control buttons */
  .carousel-control-prev-icon, .carousel-control-next-icon {
    background-color: rgb(42, 40, 40);  /* Make controls more visible on dark backgrounds */
    font-size: 18px;          /* Adjust icon size for mobile */
  }
}
</style>
