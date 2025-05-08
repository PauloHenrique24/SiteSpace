<template>
    <div class="container">
        <div class="bg"></div>
        <div class="content">
            <h2 class="title">Register</h2>
            <form class="form" @submit.prevent="register">
                <input type="text" placeholder="First name" v-model="user.firstName">
                <input type="text" placeholder="Last name" v-model="user.lastName">
                <input type="email" placeholder="email" v-model="user.email">
                <input type="password" placeholder="password" v-model="user.password">

                <button type="submit">Register</button>
            </form>

            <p class="loginWith">Or register with</p>

            <div class="orLogin">
                <img src="../../assets/img/Icones/facebook.png" alt="Facebook">
                <img src="../../assets/img/Icones/google.png" alt="Google">
            </div>

            <div class="register">
                <p class="signUp"><a href="/">Home</a></p>
                <p class="signUp"><a href="/login">Sign In</a></p>
            </div>
        </div>
    </div>
</template>
<script setup>
    import http from '@/services/http.js';

    const user = {
        firstName: '',
        lastName: '',
        email: '',
        password: ''
    }

    async function register(){
        try {
            const {data} = await http.post('/register',user);
            console.log(data);
            window.location = '/login';
        } catch (error) {
            console.log(error)
        }
    }

</script>
<style scoped>
    .container{
        display: flex;
        align-items: center;
        justify-content: center;

        flex-direction: column;

        height: 100vh;

        color: #444;

        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .bg{
        background-image: url('../../assets/img/backgroundLogin.jpg');
        width: 100%;
        height: 100vh;
        position: absolute;
        z-index: -1;

        background-position: left bottom;
        background-size: cover;
        background-attachment: fixed;

        filter: blur(2px);
    }

    .content{
        background-color: #fff;
        width: 50%;
        max-width: 390px;

        border-radius: 10px;
        height: 90%;
        max-height: 700px;

        box-shadow: 0px 0px 5px 2px rgba(255, 255, 255, 0.1);

        display: flex;
        align-items: center;

        flex-direction: column;
    }

    .title{
        margin: 60px 0 40px;
        font-weight: bold;
        font-size: 2rem;

        color: #222;
    }

    .form{
        display: flex;
        align-items: center;
        justify-content: center;

        flex-direction: column;

        gap: 20px;

        width: 100%;

        & input{
            border: none;
            box-shadow: -2px 2px 3px 2px rgba(0,0,0,.1);

            height: 45px;
            width: 70%;

            border-radius: 20px;
            padding: 10px;

            font-weight: bold;
            outline: none;

            transition: all .5s;
            color: #444;
        }

        & input::placeholder{
            color: #acabab;
        }

        & input:focus{
            transform: scale(1.03);
        }

        & button{
            width: 40%;
            height: 40px;

            border: none;
            background-color: #d11f1f;
            border-radius: 20px;

            font-weight: bold;

            margin: 10px 0 40px 0;

            cursor: pointer;
            box-shadow: 0px 0px 4px 3px rgba(209, 31, 31,.5);

            color: #fff;

            transition: all .5s;
        }

        & button:hover{
            width: 50%;
            box-shadow: 0px 0px 4px 4px rgba(209, 31, 31,.5);
        }
    }

    .loginWith{
        margin: 20px;
        font-weight: bold;
        color: #818181;

        text-transform: capitalize;

        font-size: .85rem;
    }

    .orLogin{
        & img{
            width: 50px;
            filter: drop-shadow(-2px 2px 4px rgba(0,0,0,.3));
            margin: 8px;

            cursor: pointer;
            transition: all .5s;
        }

        & img:hover{
            transform: scale(1.1);
        }
    }

    .register{
        display: flex;
        align-items: center;
        justify-content: center;

        gap: 30px;
    }

    .signUp{
        margin: auto auto 30px auto;

        cursor: pointer;
        transition: all .5s;
    }

    .signUp a{
        font-weight: bold;
        font-size: 1.1rem;

        color: #333333;

        text-decoration: none;
    }

    .signUp:hover{
        transform: scale(1.1);
        opacity: .8;
    }

</style>