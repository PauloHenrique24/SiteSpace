<template>
    <div class="container">
        <h1 class="title">Jogos</h1>

        <form class="find" @submit.prevent="searchGames">
            <input type="text" v-model="searchQuery" placeholder="Digite o nome do curso...">
            <button type="submit"><img src="@/assets/img/find.png" alt=""></button>
        </form>

        <div class="content">
            <div class="card-game" v-for="(game, index) in limitedGames" :key="index">
                <img :src="game.img" alt="Imagem do Jogo" class="game-img">
                <h1>{{ game.nome }}</h1>
                <p>{{ game.describe }}</p>

                <button @click="goToLink(game.link)"> 
                    <p>Jogar</p>
                    <img src="@/assets/img/Icones/externalLinkIcon.png" alt="">
                </button>
            </div>
        </div>

        <div class="button-container">
            <button v-if="hasMoreGames" @click="showMoreGames" class="btn">Ver Mais</button>
            <button v-if="displayedCount > 6" @click="showLessGames" class="btn">Ver Menos</button>
        </div>
    </div>
</template>

<script>
import arcane from '@/assets/img/capas/arcane.png';
import angry from '@/assets/img/capas/angry.png';
import dessert from '@/assets/img/capas/dessert.png';
import christmas from '@/assets/img/capas/christamas.png';
import teach from '@/assets/img/capas/teach.png';
import space from '@/assets/img/capas/space.png';

export default {
    data() {
        return {
            searchQuery: '',
            games: [
                { nome: 'Arcane Rise', img: `${arcane}`, describe: "Arcane Rise é um jogo de ação mágica onde você enfrenta a corrupção de um mundo em colapso.", link: 'https://ultrabyte-studios.itch.io/arcane-rise' },
                { nome: 'Dessert Duo', img: `${dessert}`, describe: "Dessert Duo é um jogo cooperativo onde dois jogadores preparam e servem sobremesas em uma cozinha agitada.", link: 'https://ultrabyte-studios.itch.io/dessert-duo' },
                { nome: 'Christmas Gift', img: `${christmas}`, describe: "Christmas Gift é um jogo de plataforma onde você ajuda o Papai Noel a entregar presentes e superar obstáculos natalinos.", link: 'https://ultrabyte-studios.itch.io/christmas-gift' },
                { nome: 'Teach Code', img: `${teach}`, describe: "Teach Code é um jogo educativo que ensina lógica de programação de forma interativa e divertida, utilizando desafios e comandos simples para resolver problemas.", link: 'https://ultrabyte-studios.itch.io/teach-code' },
                { nome: 'Space Smash', img: `${space}`, describe: "Space Smash é um jogo arcade onde você controla uma nave espacial para rebater uma bola e destruir blocos no espaço.", link: 'https://ultrabyte-studios.itch.io/space-smash' },
                { nome: 'Angry Cat', img: `${angry}`, describe: "Angry Cat é um jogo de ação onde você controla um gato que luta contra inimigos em um sonho, enfrentando desafios cada vez maiores.", link: 'https://ultrabyte-studios.itch.io/angrycat' },
            ],
            displayedCount: 6 // Number of games to display initially
        }
    },
    computed: {
        filteredGames() {
            return this.games.filter(game => {
                const words = game.nome.toLowerCase().split(' ');
                return words.some(word => word.startsWith(this.searchQuery.toLowerCase()));
            });
        },
        limitedGames() {
            return this.filteredGames.slice(0, this.displayedCount);
        },
        hasMoreGames() {
            return this.filteredGames.length > this.displayedCount;
        }
    },
    methods: {
        searchGames() {
            // This method is called when the search button is clicked
            // You can add any additional logic here if needed
            // Currently, it just filters the games based on the search query
            this.displayedCount = 6; // Reset displayed count to show the first 6 results
        },
        showMoreGames() {
            this.displayedCount += 6; // Increase the count by 6 when "Ver Mais" is clicked
        },
        showLessGames() {
            this.displayedCount = Math.max(this.displayedCount - 6, 6); // Decrease the count by 6, but not below 6
        },
        goToLink(link) {
            window.open(link, '_blank');
        },
    }
}
</script>

<style scoped>
    .container {
        width: 100%;
        height: auto;
        display: flex;
        align-items: center;
        flex-direction: column;
        flex-wrap: wrap;
        font-family: Cal sans;
        gap: 40px;
        padding: 30px;
        background-color: #fff;
    }

    .content {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        gap: 40px;
        padding: 40px;
    }

    .title {
        color: #111;
        font-size: 40px;
    }

    .btn {
        background-color: transparent;
        border: none;
        font-weight: bold;
        font-size: 1rem;
        color: #333;
        letter-spacing: 2px;
        cursor: pointer;
        transition: all .5s;
    }

    .btn:hover {
        font-size: 1.1rem;
    }

    .card-game {
        width: 400px;
        cursor: pointer;
        transition: all .5s;
    }

    .card-game .game-img {
        width: 400px;
        height: 250px;
        border-radius: 10px;
        object-fit: cover;
        box-shadow: -2px 2px 3px rgba(0,0,0,.3);
        transition: all .5s;
        cursor: pointer;
    }

    .card-game .game-img:hover {
        opacity: .9;
        transform: scale(1.01);
    }

    .card-game h1 {
        font-size: 1.3rem;
        text-transform: capitalize;
        margin: 20px 4px 10px;
        color: #242424;
        letter-spacing: 2px;
        font-weight: bold;
    }

    .card-game p {
        color: #363636;
        margin-left: 6px;
    }

    .card-game button {
        display: flex;
        align-items: center;
        justify-content: space-around;
        border: none;
        padding: 11px;
        width: 140px;
        margin: 20px 5px 40px;
        border-radius: 10px;
        background-color: #2273cf;
        box-shadow: -2px 2px 3px rgba(0,0,0,.3);
        transition: all .5s;
        cursor: pointer;
    }

    .card-game button p {
        color: white;
        font-size: 1.2rem;
    }

    .card-game button img {
        width: 20px;
        height: 20px;
        margin-bottom: 2px;
    }

    .card-game button:hover {
        opacity: .8;
    }

    .card-game:hover {
        transform: scale(1.008);
    }

    .find {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        max-width: 1030px;
    }

    .find input {
        width: 100%;
        height: 40px;
        border: none;
        padding: 10px;
        background-color: #ffffff;
        color: #111;
        border: 2px solid #ccc;
        outline: none;
        border-radius: 10px 0 0 10px;
        box-shadow: -1px 1px 2px rgba(0,0,0,.2);
        font-weight: bold;
    }

    .find button {
        border: none;
        height: 40px;
        width: 50px;
        background-color: #2273cf;
        color: #fff;
        border-radius: 0 5px 5px 0;
        cursor: pointer;
    }

    .find button img {
        width: 20px;
        transition: all .3s;
    }

    .find button:hover {
        opacity: .9;
    }

    .find button:hover img {
        width: 23px;
    }

    /* Estilos para dispositivos móveis */
    @media (max-width: 768px) {
        .title {
            font-size: 30px;
        }

        .btn {
            font-size: 0.9rem;
        }

        .card-game {
            width: 90%;
            max-width: 350px;
        }

        .card-game .game-img {
            width: 100%;
            height: 200px;
        }

        .card-game h1 {
            font-size: 1.1rem;
            margin: 15px 4px 8px;
        }

        .card-game button {
            width: 120px;
            padding: 9px;
            margin: 15px 5px 30px;
        }

        .card-game button p {
            font-size: 1.1rem;
        }

        .find {
            max-width: 100%;
            padding: 0 10px;
        }

        .find input {
            height: 35px;
            font-size: 0.9rem;
            border-radius: 10px 0 0 10px;
        }

        .find button {
            height: 35px;
            width: 45px;
        }

        .find button img {
            width: 18px;
        }
    }

    /* Estilos para telas muito pequenas */
    @media (max-width: 480px) {
        .title {
            font-size: 24px;
        }

        .btn {
            font-size: 0.85rem;
        }

        .card-game {
            max-width: 90%;
        }

        .card-game .game-img {
            height: 150px;
        }

        .card-game h1 {
            font-size: 1rem;
            margin: 10px 4px 6px;
        }

        .card-game button {
            width: 110px;
            padding: 8px;
            margin: 10px 5px 25px;
        }

        .card-game button p {
            font-size: 1rem;
        }

        .find input {
            height: 30px;
            font-size: 0.85rem;
        }

        .find button {
            height: 30px;
            width: 40px;
        }

        .find button img {
            width: 16px;
        }
    }
</style>