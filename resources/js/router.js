import { createWebHistory, createRouter} from 'vue-router';
import Home from './pages/Home.vue';
import Contact from './pages/Contact.vue'

const routes = [
    {
        path : '/',
        name : 'Awesome Home Page',
        component : Home
    },
    {
        path : '/contact',
        name : 'Contact',
        component : Contact
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;