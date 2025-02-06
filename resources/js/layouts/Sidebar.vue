<template>
  <div 
    class="bg-light border-end" 
    id="sidebar-wrapper" 
    :style="{ 
      width: sidebarOpen ? (isMobileView ? '200px' : '200px') : '0', 
      position: isMobileView && sidebarOpen ? 'fixed' : 'fixed',
      top: 0, 
      left: 0,
      zIndex: 999,
      marginTop: '60px',
      overflow: 'auto',
      height: 'calc(100vh - 60px)', /* Subtract header height */
      transition: 'width 0.3s ease'
    }"
  >
    <div class="sidebar-heading">Sidebar</div>
    <div class="list-group list-group-flush">
      <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Settings</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Settings</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Settings</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Settings</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Settings</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Settings</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
      <span><br></span>
    </div>
  </div>
</template>

<script>
export default {
  name: "SidebarComponent",
  props: ["sidebarOpen", "isMobileView"],
};
</script>

