import {computed, ref} from 'vue'
import {defineStore} from 'pinia'
import http from '@/services/http.js';

export const useAuth = defineStore('auth', () => {
    const token = ref(localStorage.getItem('token'));
    const user = ref(JSON.parse(localStorage.getItem('user')));

    function setToken(tokenValue){
        localStorage.setItem('token', tokenValue);
        token.value = tokenValue;
    }

    function setUser(UserValue){
        localStorage.setItem('user', JSON.stringify(UserValue));
        user.value = UserValue;
    }

    const isAuthenticated = computed(() => {
        return token.value && user.value;
    })

    const isAdmin = computed(() => {
        if(user.value.admin == '1')
            return true;
        else
            return false;
    })

    const fullName = computed(() => {
        if(user.value){
            return user.value.firstName + ' ' + user.value.lastName;
        }else{
            return '';
        }
    })

    const FirstName = computed(() => user.value.firstName);
    const LastName = computed(() => user.value.lastName);

    const Email = computed(() => {
        return user.value.email;
    })

    async function checkToken(tokenA){
        try {
            const tokenAuth = 'Bearer ' + tokenA;
            const {data} = await http.get('/auth/verify', {
                headers: {
                    Authorization: tokenAuth
                }
            });

            return data;

        } catch (error) {
            console.log(error.response.data);
        }
    }

    function clear(){
        localStorage.removeItem('token');
        localStorage.removeItem('user');
        token.value = '';
        user.value = '';
    }

    return {
        token,
        user,
        setToken,
        setUser,
        checkToken,
        isAuthenticated,
        fullName,
        clear,
        isAdmin,
        Email,
        FirstName,
        LastName,
    }
})