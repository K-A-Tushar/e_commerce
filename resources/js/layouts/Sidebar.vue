<template>
  <div 
    class="bg-light border-end" 
    id="sidebar-wrapper" 
    :style="{ 
      width: sidebarOpen ? (isMobileView ? '200px' : '200px') : '0', 
      position: isMobileView && sidebarOpen ? 'fixed' : 'absolute',
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

<style scoped>
#sidebar-wrapper {
  transition: all 0.3s ease;
  position: fixed; /* Fixed position so sidebar stays on screen */
  top: 0;
  left: 0;
  width: 200px;
  height: calc(100vh - 60px); /* Avoid overlap with header */
  background-color: rgb(203, 108, 108);
  box-shadow: 2px 0 5px rgba(0, 0, 0, 0.3);
 
  display: flex;
  flex-direction: column; /* Ensure content is stacked vertically */
  overflow: auto; /* Allow scrolling if content is taller than the sidebar */
}

@media (max-width: 768px) {
  #sidebar-wrapper {
    position: fixed;
    top: 0;
    left: 0;
    height: calc(100vh - 65px); /* Same height as above */
    width: 200px;
    background-color: white;
    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.3);
    transition: all 0.3s ease;
    padding-top: 65px;
  }
}
</style>
