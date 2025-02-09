<template>
  <header>
    <div class="navbar-light shadow fixed-top shadow-bottom align-items-baseline" style="z-index: 1000; background-color: #A3C140;">
      <div class="container-fluid d-flex justify-content-between align-items-center">
        <div class="toggle_icon pt-2">
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
                <input class="form-control me-2" type="search" v-model="searchQuery" @input="searchProducts" placeholder="Search here..." aria-label="Search">
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
              <button v-else @click="setLanguage('bn')" class="btn rounded-5 btn-active">
                বাং
              </button>
            </div>
          </div>
        </div>

        <div class="profile me-3">
          <div v-if="isAuthenticated" class="dropdown">
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
          <div v-else>
            <a href="#" class=" " @click="showLoginModal = true">
  <i class="fas fa-user-circle" style="font-size: 40px;"></i>
</a>

          </div>
        </div>
      </div>
    </div>

    <!-- Login Modal -->
    <div v-if="showLoginModal" class="modal fade show d-block" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Login</h5>
            <button type="button" class="btn-close" @click="showLoginModal = false"></button>
          </div>
          <div class="modal-body">
            <input type="email" class="form-control mb-3" v-model="loginForm.email" placeholder="Email">
            <input type="password" class="form-control mb-3" v-model="loginForm.password" placeholder="Password">
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" @click="showLoginModal = false">Close</button>
            <button class="btn btn-primary" @click="login">Login</button>
          </div>
          <div style="padding-left: 20px;">
            <p>if you don't have an account, please <a href="#" @click="showRegisterModal = true">Register</a></p>
          </div>
         
        </div>
        
      </div>
    </div>

    <!-- Register Modal -->
    <div v-if="showRegisterModal" class="modal fade show d-block" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Register</h5>
            <button type="button" class="btn-close" @click="showRegisterModal = false"></button>
          </div>
          <div class="modal-body">
            <input type="text" class="form-control mb-3" v-model="registerForm.name" placeholder="Full Name">
            <input type="email" class="form-control mb-3" v-model="registerForm.email" placeholder="Email">
            <input type="password" class="form-control mb-3" v-model="registerForm.password" placeholder="Password">
            <input type="password" class="form-control mb-3" v-model="registerForm.password_confirmation" placeholder="Confirm Password">
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" @click="showRegisterModal = false">Close</button>
            <button class="btn btn-primary" @click="register">Register</button>
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
      isAuthenticated: false, // Authentication status
      showLoginModal: false, // Controls login modal visibility
      showRegisterModal: false, // Controls register modal visibility
      loginForm: {
        email: '',
        password: ''
      },
      registerForm: {
        name: '',
        email: '',
        password: '',
        password_confirmation: ''
      }
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
      this.isAuthenticated = false; // Update authentication status
      // Logout logic (clear auth token & redirect) goes here
    },
    login() {
      console.log("Login attempt with:", this.loginForm);
      // Add login logic here (API call, validation, etc.)
      this.isAuthenticated = true; // Simulate successful login
      this.showLoginModal = false; // Close the modal
    },
    register() {
      console.log("Register attempt with:", this.registerForm);
      // Add registration logic here (API call, validation, etc.)
      this.showRegisterModal = false; // Close the modal
    }
  }
};
</script>

<style scoped>
.navbar-toggler {
  display: none;
}

.navbar-collapse {
  display: flex;
}

.navbar {
  z-index: 1000;
  background-color: #a3c140;
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  right: 0;
  min-width: 150px;
  z-index: 1050;
}

.navbar-nav {
  position: relative;
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
  }

  .col {
    flex: 1;
  }

  .navbar-nav.ms-auto {
    justify-content: space-around;
  }

  .search-btn span {
    display: none;
  }

  .search-btn i {
    font-size: 20px;
  }
}


</style>