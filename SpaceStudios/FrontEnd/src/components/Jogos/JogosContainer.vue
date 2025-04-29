<template>
    <div class="container">
        
        <div class="card-game" v-for="(game,index) in games" :key="index">
            <img :src="game.img" alt="Imagem do Jogo" class="game-img">
            <h1>{{ game.nome }}</h1>
            <p>{{ game.describe }}</p>

            <button> 
                <p>Ver Mais</p> 
                <img src="@/assets/img/Icones/externalLinkIcon.png" alt="">
            </button>
        </div>
    </div>
</template>
<script>
   export default {
    data() {
        return {
            games: [
                { nome: 'Terrius', img: 'https://www.spacestudios.nextronstudios.com.br/assets/img/banner_terrius.png', describe: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, natus?" },
                { nome: 'Galaxium Extraction', img: 'https://www.spacestudios.nextronstudios.com.br/assets/img/capaGalaxiumExtraction.jpg', describe: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, natus?" }
            ]
        }
    }
}
</script>
<style scoped>
    .container{
        width: 100%;
        height: auto;

        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;

        font-family: Cal sans;
        
        padding: 100px 20px;

        gap: 40px;
    }

    .card-game{
        width: 500px;
        cursor: pointer;

        transition: all .5s;

        & .game-img{
            width: 500px;
            height: 300px;

            border-radius: 10px;

            object-fit: cover;
            box-shadow: -2px 2px 3px rgba(0,0,0,.3);

            transition: all .5s;

            cursor: pointer;
        }

        & .game-img:hover{
            opacity: .9;
            transform: scale(1.01);
        }

        & h1{
            font-size: 1.3rem;
            text-transform: capitalize;
            margin: 20px 4px 10px;

            color: #fff;
            letter-spacing: 1px;
        }

        & p{
            color: #adadad;
            margin-left: 6px;
        }

        & button{
            display: flex;
            align-items: center;
            justify-content: space-around;

            border: none;
            padding: 11px;
            width: 150px;

            margin: 20px 5px;
            border-radius: 10px;

            background-color: #d11f1f;

            transition: all .5s;
            cursor: pointer;

            & p{
                color: white;
                font-size: 1.2rem;
            }

            & img{
                width: 20px;
                height: 20px;
                margin-bottom: 2px;
            }
            
        }

        & button:hover{
            opacity: .8;
        }
    }

    .card-game:hover{
        transform: scale(1.008);
    }
</style>