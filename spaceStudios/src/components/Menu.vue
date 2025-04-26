<template>
    <div>
        <div class="menu-container">
            <ul class="menu-content-left">
                <li><a href=""> Jogos </a></li>
                <li><a href="#sobre"> Sobre nós </a></li>
                <li><a href=""> O Estudio </a></li>
                <li><a href=""> Contato </a></li>
            </ul>
            
            <img src="../assets/img/icone.png" alt="Icone do Space Studios" onclick="location.href='#home'">

            <ul class="menu-content-right">
                <li><a href=""> News </a></li>
                <li><a href=""> Cursos </a></li>
                <li><a href=""> Nossas Redes </a></li>
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
        padding: 10px 0;
        position: fixed;
        top: 0;
        transition: all 0.8s ease;
        opacity: 0;
        transform: translateY(-100px);
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
        width: 170px;
        transform: translate(-50%) scale(1.1);
    }

    .menu-container ul li {
        display: inline;
        padding: 10px 5px;
    }

    .menu-container ul li a {
        color: #ccc;
        text-decoration: none;
        text-transform: capitalize;
        padding: .8rem 1rem;
        border-radius: 40px;
        transition: all 0.2s ease, background-size 0.4s ease;
        background-image: linear-gradient(45deg, #2A4561, #277EDB);
        background-size: 100% 0%;
        background-repeat: no-repeat;
        background-position: center;
        display: inline-block;
    }

    .menu-container ul li a:hover {
        color: white;
        background-size: 100% 100%;
        box-shadow: -2px 2px 10px 2px rgba(0, 0, 0, 0.5);
        transform: scale(1.1) rotate(1deg);
    }

    .menu-container.scrolled {
        background-color: rgba(0, 0, 0, 0.8);
        backdrop-filter: blur(5px);
        border-bottom: 2px solid #fff;
    }

    .menu-content-left,
    .menu-content-right {
        display: flex;
        width: 50%;
        justify-content: center;
        align-items: center;
    }


</style>