/*
|-------------------------------------------------------------------------------
| routes.js
|-------------------------------------------------------------------------------
| Contains all of the routes for the application
*/

/*
Imports Vue and VueRouter to extend with the routes.
*/
import { createWebHistory, createRouter } from 'vue-router'

import DefaultLayout from '@js/layouts/Default.vue'
import Home from '@js/pages/Home.vue'
import Physio from '@js/pages/Physio.vue'
import Cranio from '@js/pages/Cranio.vue'
import Practice from '@js/pages/Practice.vue'
import Courses from '@js/pages/Courses.vue'
import Contact from '@js/pages/Contact.vue'
import Impressum from '@js/pages/Impressum.vue'
import NotFound from '@js/pages/404.vue'

const routes = [
    {
        path: '/:lang',
        component: DefaultLayout,
        children: [
            {
                path: 'home',
                name: 'Home',
                component: Home,
            },
            {
                path: 'physio',
                name: 'Physio',
                component: Physio,
            },
            {
                path: 'cranio',
                name: 'Cranio',
                component: Cranio,
            },
            {
                path: 'practice',
                name: 'Practice',
                component: Practice,
            },
            {
                path: 'courses',
                name: 'Courses',
                component: Courses,
            },
            {
                path: 'contact',
                name: 'Contact',
                component: Contact,
            },
            {
                path: 'impressum',
                name: 'Impressum',
                component: Impressum,
            },
            {
                path: ':pathMatch(.*)*',
                name: 'NotFound',
                component: NotFound,
            },
        ]
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
