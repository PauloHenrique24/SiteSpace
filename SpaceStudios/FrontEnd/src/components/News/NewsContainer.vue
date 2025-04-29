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
                {title: 'Novo Patch', describe: 'Nova atualizacão do Jogo Terrius, disponivel na Play Store', data: new Date()},
                {title: 'Terrius Disponivel na Play Store', describe: 'Jogue agora mesmo a beta do jogo Terrius somente na play Store', data: new Date()},
                {title: 'Terrius Disponivel na Play Store', describe: 'Jogue agora mesmo a beta do jogo Terrius somente na play Store', data: new Date()},
                {title: 'Terrius Disponivel na Play Store', describe: 'Jogue agora mesmo a beta do jogo Terrius somente na play Store', data: new Date()},
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

        margin-top: 90px;

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
</style>