<template>
    <div class="escopo">
        <h2 class="title">Nosso Estudio</h2>
        <div class="estudio">
        <div class="quemSomos">
            <h4>Quem Somos</h4>
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, molestias.</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Alias, dolorem maiores neque magni illo enim...
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Alias, dolorem maiores neque magni illo enim...
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Alias, dolorem maiores neque magni illo enim...
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Alias, dolorem maiores neque magni illo enim...</p>
        </div>
        <div class="passos">
            <div class="missao">
                <div class="title-container">
                    <h2>Nossa Missão</h2>
                    <hr>
                </div>
                <div class="container">
                    <div class="content">
                        <img src="/src/assets/img/Icones/iconeCreatividade.png" alt="">
                        <p>Criatividade</p>
                    </div>
                    <div class="content">
                        <img src="/src/assets/img/Icones/iconeIdeia.png" alt="">
                        <p>Inovacão</p>
                    </div>
                    <div class="content">
                        <img src="/src/assets/img/Icones/iconeDiversao.png" alt="">
                        <p>Diversão</p>
                    </div>
                    <div class="content">
                        <img src="/src/assets/img/Icones/iconeEnsino.png" alt="">
                        <p>Ensino</p>
                    </div>
                </div>
            </div>
            <div class="trabalhamos">
                <div class="title-container">
                    <h2>Como Trabalhamos</h2>
                    <hr>
                </div>
                <div class="container">
                    <div class="content">
                        <img src="/src/assets/img/Icones/iconeHistoria.png" alt="">
                        <p>StoryBoard</p>
                    </div>
                    <div class="content">
                        <img src="/src/assets/img/Icones/iconeDesenvolvimento.png" alt="">
                        <p>Desenvolvimento</p>
                    </div>
                    <div class="content">
                        <img src="/src/assets/img/Icones/iconeTeste.png" alt="">
                        <p>Teste</p>
                    </div>
                    <div class="content">
                        <img src="/src/assets/img/Icones/iconeEnviado.png" alt="">
                        <p>Publicar</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</template>
<script>
export default {
    
}
</script>
<style scoped>
    .escopo{
        width: 100%;
        height: 100vh;
        background-color: #111;

        color: #ccc;
        padding: 30px;

        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    .title{

        background-color: #000;
        font-size: 1.6rem;
        
        border-radius: 10px;

        display: inline-block;

        padding: 20px 15rem;
        margin: 20px 0;

        position: relative;
        left: 50%;
        transform: translateX(-50%);

        box-shadow: -1px 1px 3px 1px rgba(0,0,0,.3);
        color: #fff;
    }

    .estudio{
        display: flex;
        align-items: center;
        justify-content: space-around;
        height: 80%;
    }

    .quemSomos{
        display: flex;
        align-items: start;
        justify-content: center;
        flex-direction: column;
        flex:.5;

        & h4{
            color: #eee;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        & h2{
            font-weight: 900;
            color: #fff;
            letter-spacing: -1px;
            font-size: 1.8rem;
            line-height: 37px;
            margin-bottom: 10px;
        }

        & p{
            color: #ccc;
            margin: 0 5px;
            line-height: 30px;
        }
    }

    .passos{
        
        & .container{
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 40px;

            & .content{

                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                gap: 10px;

                & img{
                    width: 90px;
                    background-color: rgba(255,255,255,0.2);
                    border: 2px solid #fff;
                    border-radius: 4px;
                    padding: 10px;
                }

                & p{
                    font-size: 1rem;
                    text-transform: capitalize;

                    font-family: Cal sans;
                    letter-spacing: 1px;
                }
            }
        }
    }

    .title-container{
        display: flex;
        align-items: center;
        justify-content: space-between;
        
        margin: 20px 0;

        & h2{
            font-size: 1.4rem;
            font-family: Cal sans, sans-serif;

            letter-spacing: 2px;
        }

        & hr{
            border: none;
            width: 55%;
            height: 2px;
            
            background-color: #555;

        }
    }
</style>
