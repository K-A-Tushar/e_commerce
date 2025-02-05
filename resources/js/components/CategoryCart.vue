<template>
    <div id="card-section" class="card  me-4 mb-3 border-2 p-1 position-relative ">

        <div id="top-band" class="position-absolute top-0 end-0 p-2 bg-info text-white rounded-start">
            <!-- <img src="https://via.placeholder.com/10" class="img-fluid me-2" alt="icon"> -->
            <i class="fa-solid fa-mug-hot"></i>
        </div>

        <img id="card-image" src="https://picsum.photos/seed/picsum/200/100" class="card-img-top " alt="Child Shirt">

        <div id="card-body" class="card-body">
            <div id="card-link" class="text-end">
                <a href="#" id="add-button" class="card-link btn btn-info rounded-5 text-decoration-none"> + </a>
            </div>

            <h5 id="card-title" class="card-title text-start fw-bold">Card title</h5>
            <div id="rating" class="rating text-start">
                <span id="star1" class="star filled">&#9733;</span>
                <span id="star2" class="star filled">&#9733;</span>
                <span id="star3" class="star">&#9733;</span>
                <span id="star4" class="star">&#9733;</span>
                <span id="star5" class="star">&#9733;</span>
            </div>

            <p id="price" class="card-text text-end">
                price
            </p>

        </div>

    </div>
</template>

<style scoped>
#card-section {
    position: relative;
    display: flex;
    flex-direction: column;
    overflow: hidden;
    background-color: #ffffff;
}

#top-band {
    transform: translate(0px, -5px);
}

#card-image {
    height: 200px;  /* Set the height to your desired size */
    object-fit: cover;
    
}

#card-body {
    flex-grow: 1;
    
    text-align: center;
    overflow: hidden;
    position: relative;
    background-color: #ffff;
}

#card-body h5 {
    font-size: 1.1rem;
}

#card-body p {
    font-size: 0.9rem;
}

#add-button {
    padding: 5px 30px;
    font-size: 2rem;
    background-color:#f8ebebee;
    color: #e45633;
    font-weight: bold;
    border: 1px solid #ffffff;
    box-shadow: 2px solid #e45633;
}

#card-body .card-title {
    font-size: 1.25rem;
    font-weight: bold;
}

#card-body .card-text {
    font-size: 1rem;
}

#rating {
    display: inline-block;
}

#star1,
#star2,
#star3,
#star4,
#star5 {
    font-size: 24px;
    color: #ccc;
}

#star1.filled,
#star2.filled {
    color: #e45633; /* Gold color for filled stars */
}

#star1:hover,
#star2:hover,
#star3:hover,
#star4:hover,
#star5:hover {
    color: #ff9900; /* Slightly darker gold on hover */
}

</style>
