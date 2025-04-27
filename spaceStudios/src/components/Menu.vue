<template>
    <div>
        <div class="menu-container">
            <ul class="menu-content-left">
                <li class="btn-menu"><a href="#sobre"> Sobre nós </a></li>
                <li class="btn-menu"><a href="#estudio"> O Estudio </a></li>
                <li class="btn-menu"><a href="#contato"> Contato </a></li>
                <li class="btn-menu"><a href=""> Jogos </a></li>
            </ul>
            
            <img src="../assets/img/icone.png" alt="Icone do Space Studios" onclick="location.href='#home'">

            <ul class="menu-content-right">
                <li class="btn-menu"><a href=""> News </a></li>
                <li class="btn-menu"><a href=""> Cursos </a></li>
                <li class="btn-menu"><a href=""> Nossas Redes </a></li>
                <li class="sign"><a href=""> Sign Up </a></li>
            </ul>
        </div>
    </div>
</template>
<script>
    window.addEventListener('scroll', () => {
        const bar = document.querySelector('.menu-container');
        if (window.scrollY > 50) {
        bar.classList.add('scrolled');
        } else {
        bar.classList.remove('scrolled');
        }
    });

    window.addEventListener('load', () => {
        const bar = document.querySelector('.menu-container');
        bar.classList.add('loaded');
    });

</script>
<style scoped>
    .menu-container {
        display: flex;
        align-items: center;
        width: 100%;
        padding: 20px 0;
        position: fixed;
        top: 0;
        transition: all 0.8s ease;
        opacity: 0;
        transform: translateY(-100px);

        z-index: 100;
    }

    .menu-container.loaded {
        opacity: 1;
        transform: translateY(0);
    }

    .menu-container img {
        width: 130px;
        position: absolute;
        left: 50%;
        transform: translate(-50%);
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
    }

    .menu-container .btn-menu a:hover {
        color: white;
        background-color: #277EDB;
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

    .sign a{
        color: #fff;
        background-color: #277EDB;
        border-radius: 10px;
        font-size: 1.1rem;

        margin-left: 10px;
    }

    .sign a:hover{
        color: #277EDB;
        background-color: #fff;
    }


</style>