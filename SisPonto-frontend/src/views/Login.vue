<template>
    <div>
        <h2>Login</h2>
    </div>
    <div>
        <form @submit.prevent="login">
            <input type="text" placholder="Email" v-model="user.email">
            <input type="password" placholder="Senha" v-model="user.password">
            <button type="submit">Entrar</button>
        </form>
    </div>
</template>

<script setup>
import http from '@/services/http.js';
import {reactive} from 'vue';
import { createApp } from 'vue';
import { createPinia } from 'pinia';
import App from '@/App.vue'
import {useAuth} from '@/stores/auth.js';

const pinia = createPinia()
const app = createApp(App)
app.use(pinia)
const auth = useAuth();

const user = reactive({
    email: 'aldo_evan@teste.com',
    password: 'senha_aleatoria'
});

async function login() {
    try {
        const {data} = await http.post('/auth', user);
        console.log(data.access_token);
        auth.setToken(data.access_token);
    } catch (error) {
        console.log(error?.response?.data)
    }
}

</script>