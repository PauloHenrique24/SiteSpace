<template>
    <div class="foot">
        <h2 class="title">Já deu uma olhada em nossos cursos?</h2>
        <p class="subtitle">Temos alguns cursos gratuitos para voce engajar no ramo da programacao</p>

        <button class="btn">Ver Cursos</button>

        <hr>

        <div class="espacos">
            <div class="espaco-title">
                <h3>Lets</h3>
                <h2>One</h2>
            </div>

            <div class="espaco-linhas">
                <h3>Informacões</h3>
                <p><a href="">Contato</a></p>
                <p><a href="">O Estudio</a></p>
                <p><a href="">Sobre Nós</a></p>
                <p><a href="">News</a></p>
            </div>

            <div class="espaco-linhas">
                <h3>Diversão e Aprendizado</h3>
                <p><a href="">Jogos</a></p>
                <p><a href="">Cursos</a></p>
                <p><a href="">Login</a></p>
            </div>

            <div class="espaco-linhas">
                <h3>Contato</h3>
                <p><a href="">Contato</a></p>
                <p><a href="">Nossas Redes</a></p>
                
            </div>

            <div class="redes">
                <h3>Nossas Redes Sociais</h3>
                <button class="btn">Redes Sociais</button>
            </div>
        </div>

        <hr>

        <div class="site">
            <p>&copy; {{ currentYear }} Space <span>Studios</span></p>
            <p>Desde 2022</p>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            currentYear: new Date().getFullYear()
        }
    }
}
</script>
<style scoped>
    .foot{
        background-image: linear-gradient(to top, #111,#000);

        width: 100%;
        height: max-content;
        text-align: center;

        padding: 40px 150px;

        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    .title{
        color: #fff;
        font-size: 1.6rem;
    }

    .subtitle{
        color:#eee;

        margin: 10px 0 20px;
    }

    hr{
        opacity: .2;
    }

    .espaco-title{
        & h3{
            font-size: 1.3rem;
        }

        & h2{
            font-size: 1.6rem;
            color: #fff;
        }
    }

    .espaco-linhas{
        display: flex;
        flex-direction: column;
        align-items: start;

        & h3{
            color: #4098f7;
            text-transform: capitalize;
            font-size: 1rem;
        }

        & p a{
            font-size: .8rem;
            color: #fff;

            text-decoration: none;
        }
    }

    .redes{
        & h3{
            font-size: 1.3rem;
            border-bottom: 3px solid #fff;
            color: #fff;
        }
    }

    .btn {
        background-color: #2c7ed6;
        border: none;
        height: 50px;
        width: 200px;
        margin: 20px 0;
        border-radius: 2px;
        color: #fff;
        font-weight: 900;
        box-shadow: -1px 1px 2px 1px rgba(0,0,0,.4);
        cursor: pointer;
        transition: all .5s;
    }

    .btn:hover {
        border-radius: 5px;
        background-color: #fff;
        color: #2c7ed6;
    }

    .espacos{
        display: flex;
        align-items: center;
        justify-content: space-around;

        margin: 20px;
    }

    .site{
        display: flex;
        align-items: center;
        justify-content: space-between;

        margin: 10px;

        color: #e0e0e0;

        & span{
            color: #fff;
        }
    }
</style>