import {createRouter, createWebHistory} from 'vue-router';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.min.js';
import 'bootstrap';

import HomePage from './pages/HomePage.vue';
import AboutPage from './pages/AboutPage.vue';


const routes = [
    {
        path: '/',
        
        children: [
            { path: '', name: 'home', component: HomePage }, // this works for the root URL
            { path: 'about', name: 'about', component: AboutPage },
        ]
    },
    
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
