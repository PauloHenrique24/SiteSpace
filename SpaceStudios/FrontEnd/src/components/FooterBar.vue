<template>
    <div class="foot">
        <div class="container">
        <h2 class="title">Já deu uma olhada em nossos cursos?</h2>
        <p class="subtitle">Temos alguns cursos gratuitos para voce engajar no ramo da programacao</p>

        <button class="btn">Em breve</button>

        <hr>

        <div class="espacos">
            <div class="espaco-title">
                <h3>Lets</h3>
                <h2>One</h2>
            </div>

            <div class="espaco-linhas">
                <h3>Informacões</h3>
                <p><a href="/#estudio">O Estudio</a></p>
                <p><a href="/#sobre">Sobre Nós</a></p>
                <p><a href="/news">News</a></p>
            </div>

            <div class="espaco-linhas">
                <h3>Diversão e Aprendizado</h3>
                <p><a href="/jogos">Jogos</a></p>
                <!-- <p><a href="/cursos">Cursos</a></p> -->
                <!-- <p><a href="/login">Login</a></p> -->
            </div>

            <div class="espaco-linhas">
                <h3>Contato</h3>
                <p><a href="/#contato">Contato</a></p>
                <p><a href="/#contato">Nossas Redes</a></p>
                
            </div>

            <div class="redes">
                <h3>Nossas Redes Sociais</h3>
                <button class="btn" @click="Redes()">Redes Sociais</button>
            </div>
        </div>

        <hr>
        </div>

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
    },
    methods:{
        Redes(){
            window.location = "/#contato";
        },
        Cursos(){
            window.location = "/cursos";
        }
    }
}
</script>
<style scoped>
    .foot {
        background-image: linear-gradient(to top, #111, #000);
        width: 100%;
        height: max-content;
        text-align: center;
        padding: 40px 150px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    .title {
        color: #fff;
        font-size: 1.6rem;
    }

    .subtitle {
        color: #eee;
        margin: 10px 0 20px;
    }

    hr {
        opacity: .2;
    }

    .espaco-title {
        & h3 {
            font-size: 1.3rem;
        }

        & h2 {
            font-size: 1.6rem;
            color: #fff;
        }
    }

    .espaco-linhas {
        display: flex;
        flex-direction: column;
        align-items: start;

        & h3 {
            color: #2273cf;
            text-transform: capitalize;
            font-size: 1rem;
        }

        & p a {
            font-size: .8rem;
            color: #fff;
            text-decoration: none;
        }
    }

    .redes {
        & h3 {
            font-size: 1.3rem;
            border-bottom: 3px solid #fff;
            color: #fff;
        }
    }

    .btn {
        background-color: #2273cf;
        border: none;
        height: 50px;
        width: 200px;
        margin: 20px 0;
        border-radius: 2px;
        color: #fff;
        font-weight: 900;
        box-shadow: -1px 1px 2px 1px rgba(0, 0, 0, .4);
        cursor: pointer;
        transition: all .5s;
    }

    .btn:hover {
        border-radius: 5px;
        background-color: #fff;
        color: #2273cf;
    }

    .espacos {
        display: flex;
        align-items: center;
        justify-content: space-around;
        margin: 20px;
    }

    .site {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 10px;
        color: #e0e0e0;

        & span {
            color: #fff;
        }
    }

    /* Estilos para dispositivos móveis */
    @media (max-width: 768px) {
        .foot {
            width: 100%;

            display: flex;
            align-items: center;
            justify-content: space-around;
            flex-direction: column;
            gap: 30px;

            padding: 10px;

        }

        .container{
            display: none;
        }

        .site{
            gap: 20px;
        }

    }

</style>

