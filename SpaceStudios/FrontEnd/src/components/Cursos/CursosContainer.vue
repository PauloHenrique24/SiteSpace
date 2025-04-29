<template>
    <div class="container">
        <div class="content">
            <div class="card-curso" v-for="(curso,index) in cursos" :key="index">
                <img :src="curso.imagem" alt="Imagem do Curso" class="img-curso">
                <h2 class="title-curso">{{ curso.title }}</h2>
                <p class="describe-curso">{{ curso.describe }}</p>

                <p class="btn"><a href="">Comecar Curso -></a></p>
            </div>
        </div>
    </div>
</template>
<script>
export default{
    data(){
        return{
            cursos: [
                {title: 'Desenvolvimento de Jogos com Unity', describe: 'Comece agora mesmo a desenvolver jogos como voce sempre imaginou', imagem: 'https://metodoprogramar.com.br/wp-content/uploads/2019/03/curso-desenvolvimento-de-games.png'},
                {title: 'Desenvolvimento de Jogos com Unity', describe: 'Comece agora mesmo a desenvolver jogos como voce sempre imaginou', imagem: 'https://metodoprogramar.com.br/wp-content/uploads/2019/03/curso-desenvolvimento-de-games.png'},
                {title: 'Desenvolvimento de Jogos com Unity', describe: 'Comece agora mesmo a desenvolver jogos como voce sempre imaginou', imagem: 'https://metodoprogramar.com.br/wp-content/uploads/2019/03/curso-desenvolvimento-de-games.png'},
                {title: 'Desenvolvimento de Jogos com Unity', describe: 'Comece agora mesmo a desenvolver jogos como voce sempre imaginou', imagem: 'https://metodoprogramar.com.br/wp-content/uploads/2019/03/curso-desenvolvimento-de-games.png'},
                {title: 'Desenvolvimento de Jogos com Unity', describe: 'Comece agora mesmo a desenvolver jogos como voce sempre imaginou', imagem: 'https://metodoprogramar.com.br/wp-content/uploads/2019/03/curso-desenvolvimento-de-games.png'},
                {title: 'Desenvolvimento de Jogos com Unity', describe: 'Comece agora mesmo a desenvolver jogos como voce sempre imaginou', imagem: 'https://metodoprogramar.com.br/wp-content/uploads/2019/03/curso-desenvolvimento-de-games.png'},
                {title: 'Desenvolvimento de Jogos com Unity', describe: 'Comece agora mesmo a desenvolver jogos como voce sempre imaginou', imagem: 'https://metodoprogramar.com.br/wp-content/uploads/2019/03/curso-desenvolvimento-de-games.png'},
            ]
        }
    }
}
</script>
<style scoped>
    .container{
        width: 100%;

        margin-top: 90px;
    }

    .content{
        display: flex;
        justify-content: center;
        align-items: center;

        flex-wrap: wrap;

        height: max-content;

        max-width: 1400px;

        gap: 40px;

        margin: 50px auto;

    }

    & .card-curso{
        background-color: #1f1f1f;
        width: 280px;
        height: 550px;

        border-radius: 20px; 

        display: flex;
        flex-direction: column;
        justify-content: space-between;

        transition: all .4s;
        cursor: pointer;

        box-shadow: -2px 2px 4px 1px rgba(0,0,0,.2);

        & .img-curso{
            width: 100%;
            height: 250px;

            object-fit: cover;
            border-radius: 20px 20px 0 0;
        }

        & .title-curso{
            margin: 10px;
            text-transform: capitalize;
            font-size: 1.2rem;
            color: #fff;
        }

        & .describe-curso{
            margin: 14px;
            letter-spacing: 1px;
            color: #ccc;
        }

        & .btn{
            margin: 30px 15px;

            & a{
                color: #fff;
                text-decoration: none;

                letter-spacing: 2px;
            }
        }
    }

    .card-curso:hover{
        transform: scale(1.01);
        opacity: .8;
    }
</style>