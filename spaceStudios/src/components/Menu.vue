<template>
    <div>
        <div class="menu-container">
            <ul class="menu-content-left">
                <li><a href=""> Jogos </a></li>
                <li><a href="#sobre"> Sobre nós </a></li>
                <li><a href=""> O Estudio </a></li>
                <li><a href=""> Premios </a></li>
            </ul>
            
            <img src="../assets/img/icone.png" alt="Icone do Space Studios" onclick="location.href='#home'">

            <ul class="menu-content-right">
                <li><a href=""> News </a></li>
                <li><a href=""> Cursos </a></li>
                <li><a href=""> Nossas Redes </a></li>
                <li><a href=""> Contato </a></li>
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
</script>
<style scoped>
    .menu-container{
        display: flex;
        align-items: center;

        width: 100%;
        padding: 30px 0;

        position: fixed;
        top: 0;

        transition: all 1s;

        & img{
            width: 150px;
            position: absolute;

            left: 50%;
            transform: translate(-50%);

            transition: all .3s cubic-bezier(.39,.08,.94,.15);

            cursor: pointer;
        }

        & img:hover{
            width: 170px;
        }

        & ul li{
            display: inline;
            padding: 10px 5px;

            & a{
                color: #ccc;
                text-decoration: none;

                text-transform: capitalize;
                padding: .8rem 1rem;

                border-radius: 40px;
            }

            & a:hover{
                background-image: linear-gradient(45deg,#2A4561,#277EDB);
                box-shadow: -2px 2px 3px 1px rgba(0, 0, 0,.4);
                color: white;
            }
        }
    }

    .menu-container.scrolled {
        background-color: rgba(0, 0, 0, 0.8); /* muda ao descer */
    }

    .menu-content-left{
        display: flex;
        width: 50%;
        justify-content: center;
        align-items: center;
        left: 0;
    }

    .menu-content-right{
        display: flex;
        width: 50%;
        justify-content: center;
        align-items: center;

        right: 0;
    }
</style>