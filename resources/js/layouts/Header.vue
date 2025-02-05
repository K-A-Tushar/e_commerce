<template>
  <header>
    <div class="navbar-light shadow fixed-top shadow-bottom  align-items-baseline" style="z-index: 1000; background-color: #A3C140;">

      <div class="container-fluid d-flex justify-content-between align-items-center">
        <div class="toggle_icon pt-2 ">
            <button class="btn border-0 rounded-0" @click="$emit('toggle-sidebar')">
              <i class="fas fa-bars h3"></i>
            </button>
        </div>
        <div class="logo_shearch_btn d-flex justify-content-between w-100">
          <div class="logo_container">
            <img src="../../../public/image/logo.png" alt="Logo" style="height: 60px;">
          </div>
          <div class="search_bar pt-2 w-50">
            <div class="col d-flex justify-content-center" style="padding-right: 20px;">
              <div class="input-group w-100">
                <input class="form-control me-2" type="search" placeholder="Search here..." aria-label="Search">
                <button class="btn btn-primary search-btn" type="submit">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
          <div>
            <div class="btn-group pt-2 me-3">
              <button v-if="selectedLanguage === 'bn'" @click="setLanguage('en')" class="btn rounded-5 btn-active">
                Eng
              </button>
              <button v-else @click="setLanguage('bn')" class="btn  rounded-5 btn-active">
                বাং
              </button>
            </div>
          </div>
        </div>
        <div class="profile me-3">
          <div class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-user-circle" style="font-size: 30px;"></i>

            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><router-link class="dropdown-item" to="/profile">Profile</router-link></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#" @click="logout">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </header>
</template>

<script>
export default {
  name: "HeaderComponent",
  data() {
    return {
      selectedLanguage: 'en', // Default language is English
    };
  },
  methods: {
    setLanguage(lang) {
      this.selectedLanguage = lang; // Toggle language
      console.log("Language changed to:", lang);
      // You can add language persistence logic here (localStorage, Vuex, API call, etc.)
    },
    logout() {
      console.log("User logged out!");
      // Logout logic (clear auth token & redirect) goes here
    },
  },
};
</script>

<style scoped>
.navbar-toggler {
  display: none;
  /* Hide the collapse button */
}

.navbar-collapse {
  display: flex;
  /* Always display the navbar items in a row */
}

.navbar {
  z-index: 1000;
  background-color: #a3c140;
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  /* Aligns the dropdown below the navbar */
  right: 0;
  /* Adjust based on your preference */
  min-width: 150px;
  z-index: 1050;
  /* Ensure it stays on top of other elements */
}

.navbar-nav {
  position: relative;
  /* Make the navbar position relative to contain the absolute dropdown */
}

.btn-outline-secondary {
  transition: background-color 0.3s ease;
}

.btn-active {
  background-color: #007bff;
  color: white;
}

.btn-outline-secondary:hover {
  background-color: #d3d3d3;
}

.navbar-brand img.logo {
  max-height: 50px;
  width: 20px;
}


/* Mobile-specific adjustments */
@media (max-width: 767px) {
  .navbar-nav {
    flex-direction: row;
    justify-content: space-between;
  }


  .navbar-nav.col-2 {
    flex: 1;
  }

  .input-group {
    max-width: 200px;
    /* Shrink search bar on mobile */
  }

  /* Ensures the navbar sections take up 6 columns */
  .col {
    flex: 1;
    /* Search bar takes remaining space */
  }

  .navbar-nav.ms-auto {
    justify-content: space-around;
  }

  /* Make the search button text hidden on mobile */
  .search-btn span {
    display: none;
  }

  .search-btn i {
    font-size: 20px;
    /* Larger search icon */
  }
}
</style>
