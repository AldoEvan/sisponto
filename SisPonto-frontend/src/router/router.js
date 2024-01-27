import { createRouter, createWebHistory } from 'vue-router';
import { useAuth } from '@/stores/auth.js';
import { createApp } from 'vue';
import { createPinia } from 'pinia';
import App from '@/App.vue'


function lazyLoad(view) {
    return import(`../views/${view}.vue`);
}

const routes = [
    {
        path: '/',
        name: 'home',
        component: lazyLoad('Home')
    },
    {
        path: '/login',
        name: 'login',
        component: lazyLoad('Login')
    },
    {
        path: '/:pathMatch(.*)*',
        component: lazyLoad('NotFound')
    },
    {
        path: '/registro_ponto',
        name: 'registro_ponto',
        component: lazyLoad('RegistroPonto'),
        meta: {
            auth: true
        }
    },

];

const router = createRouter({ history: createWebHistory(), routes });

router.beforeEach((to, from, next) => {
    if (to.meta?.auth) {
        const pinia = createPinia()
        const app = createApp(App)
        app.use(pinia)
        const auth = useAuth();
        if (auth.token) {
            const isAuthenticated = auth.checkToken();
            console.log(isAuthenticated.data);
            if (isAuthenticated.data) {
                next();
            } else {
                next({ name: 'login' });
            }
        } else {
            next({ name: 'login' });
        }

    } else {
        next();
    }
})

export default router;