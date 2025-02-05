<template>
  <div id="wrapper">
    <HeaderComponent @toggle-sidebar="toggleSidebar" />

    <div id="main-content">
      <SidebarComponent :sidebarOpen="sidebarOpen" :isMobileView="isMobileView" />
      
      <div 
        id="page-content-wrapper" 
        :class="{ 'sidebar-open': sidebarOpen && !isMobileView }"
      >
        <main class="container-fluid">
          <router-view />
        </main>
      </div>
    </div>

    <FooterPage id="footerHeight"/>
  </div>
</template>

<script>
import HeaderComponent from "@/layouts/Header.vue";
import SidebarComponent from "@/layouts/Sidebar.vue";
import FooterPage from "@/components/FooterPage.vue";

export default {
  name: "DefaultLayout",
  components: {
    HeaderComponent,
    SidebarComponent,
    FooterPage,
  },
  data() {
    return {
      sidebarOpen: window.innerWidth > 768,
      isMobileView: window.innerWidth <= 768,
    };
  },
  mounted() {
    window.addEventListener("resize", this.handleResize);
  },
  beforeDestroy() {
    window.removeEventListener("resize", this.handleResize);
  },
  methods: {
    toggleSidebar() {
      this.sidebarOpen = !this.sidebarOpen;
    },
    handleResize() {
      this.isMobileView = window.innerWidth <= 768;
      if (this.isMobileView) this.sidebarOpen = false;
    },
  },
};
</script>

<style scoped>

#wrapper {
  display: flex;
  flex-direction: column;
  height: 100vh;
}

#main-content {
  display: flex;
  flex: 1;
  min-height: calc(100vh - 60px); /* Header er height minus kora */
}

#sidebar-wrapper {
  width: 200px;
  transition: width 0.3s ease;
  height: 100vh;
  background-color: white;
  box-shadow: 2px 0 5px rgba(0, 0, 0, 0.3);
}

#page-content-wrapper {
  flex: 1;
  transition: margin-left 0.3s ease;
  padding-top: 20px;
  overflow-y: auto;
}

.sidebar-open {
  margin-left: 200px;
}

@media (max-width: 768px) {
  #sidebar-wrapper {
    width: 0;
    position: fixed;
    top: 60px; /* Header er niche thakar jonno */
    left: 0;
    height: calc(100vh - 60px);
    z-index: 1000;
    transition: width 0.3s ease;
  }

  .sidebar-open {
    margin-left: 0;
  }
}

#footerHeight {
  z-index: 1000;
  box-shadow: 2px 0 5px rgba(0, 0, 0, 0.3);
}
</style>
