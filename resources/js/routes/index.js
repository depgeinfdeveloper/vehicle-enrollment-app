import Vue from 'vue';
import Router from 'vue-router';
import HomePage from "../views/Home/HomePage.vue";
import Login from "../views/Auth/Login.vue";
import Layout from "../layouts/Layout.vue";
import DashboardPage from "../views/Dashboard/DashboardPage.vue";

Vue.use(Router);

const router = new Router({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'HomePage',
            component: HomePage,
            meta: {
                requiresAuth: false,
            }

        },
        {
            path: '/dashboard',
            component: Layout,
            meta: {
                requiresAuth: false,
            },
            children: [
                {
                    path: '', // Ruta hija con path vacío
                    name: 'Dashboard',
                    component: DashboardPage,
                    meta: {
                        requiresAuth: false,
                    }
                },
            ]
        },
        {
            path: '/login',
            name: 'Login',
            component: Login,
            meta: {
                requiresAuth: false,
            }
        },
    ]
});


export default router;
