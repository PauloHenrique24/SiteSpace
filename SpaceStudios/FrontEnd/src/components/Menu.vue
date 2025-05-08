<template>
    <div class="app">
        <div class="menu-container">
            <div class="hamburger" @click="toggleMenu" :class="{ 'is-active': isMenuOpen }" aria-label="Menu" aria-expanded="false" role="button" tabindex="0">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <ul class="menu-content-left" :class="{ 'active': isMenuOpen }">
                <li class="btn-menu" @click="closeMenu"><a href="/#sobre"> Sobre nós </a></li>
                <li class="btn-menu" @click="closeMenu"><a href="/#estudio"> O Estudio </a></li>
                <li class="btn-menu" @click="closeMenu"><a href="/#contato"> Contato </a></li>
            </ul>
            <img src="../assets/img/icone.png" alt="Icone do Space Studios" @click="goHome">
            <ul class="menu-content-right" :class="{ 'active': isMenuOpen }">
                <li class="btnhome" :class="{ 'active': isMenuOpen }" @click="closeMenu"><a href="/"> Home </a></li>
                <li class="btn-menu" @click="closeMenu"><a href="/news"> News </a></li>
                <li class="btn-menu" @click="closeMenu"><a href=""> Em Breve </a></li>
                <li v-if="auth.isAuthenticated && auth.isAdmin" class="btn-menu" @click="closeMenu"><a href="/dashboard"> DashBoard </a></li>
                <li class="btn-menu" @click="closeMenu"><a href="/jogos"> Jogos </a></li>
                <li v-if="!auth.isAuthenticated" class="sign in" @click="closeMenu"><a href="/login"> Sign In </a></li>
                <li v-else class="sign out" @click="logout"><a href=""> Sign Out </a></li>
            </ul>
        </div>
    </div>
</template>

<script>
import {useAuth} from '@/stores/auth.js';
import {useRouter} from 'vue-router';

export default {
    data() {
        return {
            isMenuOpen: false,
            auth: useAuth(),
            router: useRouter(),
        };
    },
    methods: {
        goHome() {
            window.location.href = '/#home';
        },
        toggleMenu() {
            this.isMenuOpen = !this.isMenuOpen;
            const hamburger = this.$el.querySelector('.hamburger');
            hamburger.setAttribute('aria-expanded', this.isMenuOpen);
        },
        closeMenu() {
            this.isMenuOpen = false;
            const hamburger = this.$el.querySelector('.hamburger');
            hamburger.setAttribute('aria-expanded', false);
        },
        handleScroll() {
            const bar = this.$el.querySelector('.menu-container');
            if (window.scrollY > 20) {
                bar.classList.add('scrolled');
            } else {
                bar.classList.remove('scrolled');
            }
        },
        logout() {
            this.auth.clear();
            this.router.push({name: 'login'});
        }
    },
    mounted() {
        const bar = this.$el.querySelector('.menu-container');
        bar.classList.add('loaded');
        this.handleScroll();
        window.addEventListener('scroll', this.handleScroll, { passive: true });
    },
    beforeDestroy() {
        window.removeEventListener('scroll', this.handleScroll);
    }
}
</script>

<style scoped>
.app {
    position: sticky;
    top: 0;
    z-index: 8000;
}

.menu-container {
    display: flex;
    flex-direction: row; /* default layout row */
    align-items: center;
    width: 100%;
    padding: 20px 0;
    transition: all 0.8s ease;
    opacity: 0;
    transform: translateY(-100px);
    z-index: 100;
    font-family: Quicksand, sans-serif;
    position: relative;
}

.btnhome{
    display: none;
    
    a{
        color: #ccc;
        text-decoration: none;
        text-transform: capitalize;
        padding: .8rem 1rem;
        border-radius: 40px;
        transition: all .5s;
        font-weight: 700;
    }
}

.menu-container.loaded {
    opacity: 1;
    transform: translateY(0);
}

.menu-container img {
    width: 130px;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    transition: all 0.5s ease;
    cursor: pointer;
}

.menu-container img:hover {
    width: 150px;
}

.menu-container .btn-menu, .sign {
    display: inline;
    padding: 10px 5px;
}

.menu-container .btn-menu a, .sign a {
    color: #ccc;
    text-decoration: none;
    text-transform: capitalize;
    padding: .8rem 1rem;
    border-radius: 40px;
    transition: all .5s;
    font-weight: 700;
}

.menu-container .btn-menu a:hover {
    color: white;
    background-color: #2273cf;
    box-shadow: -2px 2px 10px 2px rgba(0, 0, 0, 0.5);
    transform: scale(1.1) rotate(1deg);
}

.menu-container.scrolled {
    background-color: rgba(0, 0, 0, 0.9);
    backdrop-filter: blur(5px);
    border-bottom: 2px solid #ccc;
}

.menu-content-left,
.menu-content-right {
    display: flex;
    width: 50%;
    justify-content: center;
    align-items: center;
}

.in a{
    background-color: #2273cf;
    color: #fff;
    border-radius: 10px;
    font-size: 1.1rem;
    margin-left: 10px;
}

.out a{
    background-color: #c91323;
    color: #fff;
    border-radius: 10px;
    font-size: 1.1rem;
    margin-left: 10px;
}

.in a:hover {
    color: #2273cf;
    background-color: #fff;
}

.out a:hover {
    color: #c91323;
    background-color: #fff;
}

/* Hamburger styles */
.hamburger {
    display: none; /* hidden by default */
    flex-direction: column;
    cursor: pointer;
    padding: 10px;
    z-index: 1100;
    user-select: none;
}

.hamburger .bar {
    height: 3px;
    width: 25px;
    background-color: #ccc;
    margin: 4px 0;
    border-radius: 2px;
    transition: all 0.3s ease;
}

.hamburger.is-active .bar:nth-child(1) {
    transform: translateY(7px) rotate(45deg);
}

.hamburger.is-active .bar:nth-child(2) {
    opacity: 0;
}

.hamburger.is-active .bar:nth-child(3) {
    transform: translateY(-7px) rotate(-45deg);
}

/* Mobile styles */
@media (max-width: 768px) {
    .menu-container {
        flex-direction: column;
        padding: 10px 0;
        min-height: 60px;
        position: relative;

        text-align: center;
    }

    
    .btnhome{
        display: inline-block;
    }

    .hamburger {
        display: flex;
        position: relative;
        align-self: flex-end;
        margin-right: 20px;
    }

    .menu-content-left,
    .menu-content-right {
        display: none; /* hide by default */
        flex-direction: column;
        width: 100%;
        position: absolute;
        top: 60px; /* beneath menu bar */
        left: 0;
        background-color: rgba(0, 0, 0, 0.95);
        border-radius: 0 0 10px 10px;
        padding: 10px 0;
        box-shadow: 0 4px 10px rgba(0,0,0,0.3);
        z-index: 1000;
    }

    .menu-content-left.active,
    .menu-content-right.active {
        display: flex; /* show when active */
    }

    .menu-content-left li,
    .menu-content-right li {
        padding: 10px 20px;
    }

    .menu-content-left li a,
    .menu-content-right li a {
        font-size: 1.1rem;
        width: 100%;
        display: block;
        padding: 10px;
        border-radius: 10px;
    }

    .menu-container img {
        display: none;
    }
}

/* Smaller mobile */
@media (max-width: 480px) {
    .menu-content-left li a,
    .menu-content-right li a {
        font-size: 1rem;
        padding: 8px;
    }
}
</style>