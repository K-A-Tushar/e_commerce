<template>
    <div class="card rounded-4 me-4 mb-3 border-2 position-relative">
        <!-- Carousel section -->
        <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../../../public/image/banner7.jpg" class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item">
                    <img src="../../../public/image/banner5.jpg" class="d-block w-100" alt="Image 2">
                </div>
                <div class="carousel-item">
                    <img src="../../../public/image/banner6.jpg" class="d-block w-100" alt="Image 3">
                </div>
            </div>
            <!-- Carousel controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Card image (placed below the carousel) -->
       

        <!-- Card body -->
        <div class="card-body">
            <h5 class="card-title text-start fw-bold">Card title</h5>
            <p class="card-text text-start">
                details
            </p>
            <br>
            <p class="card-text text-end">
                price
            </p>
        </div>

        <!-- Add to Cart button -->
        <div class="card-body text-center">
            <a href="#" class="card-link btn btn-info rounded-5 text-white text-decoration-none"> +Add to Cart</a>
        </div>
    </div>
</template>
