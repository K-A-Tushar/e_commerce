<template>
    <div class="card border-0 shadow-lg p-3 mb-5 bg-body-tertiary rounded ">
        <div class="position-absolute top-0 end-0 rounded-5 bg-info text-white">
            <i class="fa-solid fa-mug-hot h1 m-2"></i>

        </div>
        <img :src="image" style="width: 200px;height: 200px;" class="card-img-top rounded-1" alt="Child Shirt">

        <div class="card-body">
            <h5 class="card-title text-center fw-bold m-0 p-0">{{ title }}</h5>
            <p class="card-text text-center">{{ details }}</p>
            <p class="card-text text-center">{{ price }}</p>
        </div>
        <div class="card-body text-center">
            <a href="#" class="card-link btn btn-info rounded-5 text-white text-decoration-none"> +Add to Cart</a>
        </div>
    </div>
</template>
<script setup>
// use the props object to access the props
const props = defineProps({
    image: {
        type: String,
        required: true
    },
    title: {
        type: String,
        required: true
    },
    details: {
        type: String,
        required: true
    },
    price: {
        type: String,
        required: true
    }
});
</script>

