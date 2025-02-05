import './bootstrap';
import { createApp } from 'vue';
import router from './index.js';
// import App from './App.vue';
import DefaultLayout from './layouts/DefaultLayout.vue';
// import VueSplide from '@splidejs/vue-splide';
// add bootstrap css, js and  bootstrap icon
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import 'bootstrap-icons/font/bootstrap-icons.min.css';
import '@fortawesome/fontawesome-free/css/all.css';


// const app = createApp(App);
const app = createApp(DefaultLayout);
app.use(router);
// app.use( VueSplide );
app.mount('#app');

