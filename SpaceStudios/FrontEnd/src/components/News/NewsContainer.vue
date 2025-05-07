<template>
    <div class="container">
        <h1 class="title">News</h1>

        <div class="content">
            <div class="card-news" v-for="(noticia,index) in news" :key="index">
                <h2>{{ noticia.title }}</h2>
                <p>{{ noticia.describe }}</p>

                <p>Data: {{ noticia.data }}</p>

                <hr>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return{
            news: [
                {title: '🎉 A SPACE STUDIOS ESTÁ DE VOLTA! 🚀🎮', 
                describe: `Depois de um tempo afastados, voltamos com tudo para o mundo dos games!

                    Durante esse período, a equipe:
                    🔍 Estudou sobre desenvolvimento de jogos
                    📊 Analisou as principais tendências do mercado
                    💡 Criou ideias novas e criativas

                    Tudo isso pra trazer experiências ainda mais imersivas e incríveis pra você! ✨🎯

                    🗣️ “Passamos esse tempo estudando sobre jogos, analisando tendências e criando ideias novas. Logo, logo traremos novidades que vão surpreender.” — Equipe SPACE STUDIOS 👾🔥

                    Fiquem ligados! Vem coisa grande por aí. 💥`, 
                data: '2 de maio de 2025'},
                {title: '🚀 Space Studios lança jogos rápidos e divertidos na Itch.io! 🎮', describe: `A desenvolvedora indie Space Studios acaba de colocar no ar seus jogos leves e acessíveis na plataforma Itch.io! Entre os destaques estão:

                🌌 Space Smash – Uma corrida espacial com mecânica simples e viciante.

                🍰 Dessert Duo – Um cooperativo de culinária perfeito pra jogar com um amigo.

                Perfeitos pra quem quer diversão rápida e sem compromisso, os jogos estão disponíveis pra jogar direto no navegador ou baixar de graça! 🕹️✨

                👉 Corre lá na Itch.io e confere!`, data: '2 de maio de 2025'},
            ]
        }
    }
}
</script>
<style scoped>
    .container{
        display: flex;
        flex-direction: column;
        align-items: center;

        height: 100vh;
        width: 100%;

        gap: 40px;

        background-color: #fff;
        color: #000;

        & .title{
            font-size: 2.6rem;
            color: #000;

            font-weight: bold;
            letter-spacing: 2px;
        }
    }

    .content{
        display: flex;
        align-items: start;
        justify-content: center;
        flex-direction: column;

        width: 100%;
        padding: 30px;

        gap: 40px;

        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    .card-news{
        width: 100%;
        cursor: pointer;
        transition: all .5s;
        
        & h2{
            text-transform: capitalize;
            letter-spacing: 1px;

            font-weight: bold;
            color: #333;
        }

        & p{
            margin: 2px 4px;
            color: #111;
            letter-spacing: 1px;
        }

        & hr{
            margin: 30px 0 0 0;
            border: none;
            width: 98%;
            height: 1px;

            background-color: rgba(0,0,0,.3);
        }
    }

    .card-news:hover{
        opacity: .9;
        transform: scale(1.005);
    }

    /* Media Queries para dispositivos móveis */
    @media (max-width: 768px) {
        .container{
            height: auto;
        }
    }

    @media (max-width: 480px) {
        .container{
            height: auto;
        }
    }
</style>