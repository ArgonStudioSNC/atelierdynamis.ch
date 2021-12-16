/*
|-------------------------------------------------------------------------------
| routes.js
|-------------------------------------------------------------------------------
| Contains all of the routes for the application
*/

/*
    Imports Vue and VueRouter to extend with the routes.
*/
import Vue from 'vue'
import VueRouter from 'vue-router'
import DefaultLayout from '@js/layouts/Default.vue'

/*
    Extends Vue to use Vue Router
*/
Vue.use( VueRouter )

/*
    Makes a new VueRouter that we will use to run all of the routes
    for the app.
    */
export default new VueRouter({
    mode: 'history',
    base: '/',
    scrollBehavior (to, from, savedPosition) {
        if (savedPosition) {
          return savedPosition
        } else {
          return { x: 0, y: 0 }
        }
    },
    routes: [
        {
            path: '',
            component: DefaultLayout,
            children: [
                {
                    path: ''
                },
                {
                    path: '/:pathMatch(.*)*',
                    name: 'NotFound',
                    component: Vue.component( 'NotFound', require( '@js/pages/404.vue' ) ).default
                },
            ]
        },
    ]
});
