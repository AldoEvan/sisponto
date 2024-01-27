import { defineStore } from 'pinia';
import { ref } from 'vue';
import http from '@/services/http.js';

export const useAuth = defineStore('auth/login', () => {
    const token = ref(localStorage.getItem('token'));

    function setToken(tokenValue) {
        console.log('aqui');
        localStorage.setItem('token', tokenValue);
        token.value = tokenValue;
    }

    async function checkToken(){
        try {
            const tokenAuth = 'Bearer '+token.value;
            const {data} = await http.get('/auth/verify',{
                headers: {
                    Authorization: tokenAuth
                }
            });
            return data;
        } catch (error) {
            console.log(error.response?.data)
        }
    }

    return {
        token,
        setToken,
        checkToken
    }
})