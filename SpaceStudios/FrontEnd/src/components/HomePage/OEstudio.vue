<template>
    <div class="escopo">
        <h2 class="title">O Estudio</h2>
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
                        <div class="icone_"><img src="/src/assets/img/Icones/iconeCreatividade.png" alt=""></div>
                        <p>Criatividade</p>
                    </div>
                    <div class="content">
                        <div class="icone_"><img src="/src/assets/img/Icones/iconeIdeia.png" alt=""></div>
                        <p>Inovacão</p>
                    </div>
                    <div class="content">
                        <div class="icone_"><img src="/src/assets/img/Icones/iconeDiversao.png" alt=""></div>
                        <p>Diversão</p>
                    </div>
                    <div class="content">
                        <div class="icone_"><img src="/src/assets/img/Icones/iconeEnsino.png" alt=""></div>
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
                        <div class="icone_"><img src="/src/assets/img/Icones/iconeHistoria.png" alt=""></div>
                        <p>StoryBoard</p>
                    </div>
                    <div class="content">
                        <div class="icone_"><img src="/src/assets/img/Icones/iconeDesenvolvimento.png" alt=""></div>
                        <p>Desenvolvimento</p>
                    </div>
                    <div class="content">
                        <div class="icone_"><img src="/src/assets/img/Icones/iconeTeste.png" alt=""></div>
                        <p>Teste</p>
                    </div>
                    <div class="content">
                        <div class="icone_"><img src="/src/assets/img/Icones/iconeEnviado.png" alt=""></div>
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

        font-family: Montserrat, sans-serif;
    }

    .title{
        color: #fff;

        font-size: 3.5rem;

        display: inline-block;

        padding: 20px 15rem;
        margin: 20px 0;

        position: relative;
        left: 50%;
        transform: translateX(-50%);
        
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
            color: #b8b8b8;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin: 8px 2px;

            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        & h2{
            font-weight: 900;
            color: #fff;
            letter-spacing: -1px;
            font-size: 1.8rem;
            line-height: 37px;
            margin-bottom: 20px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
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

                & .icone_{
                    width: 90px;
                    height: 90px;
                    background-color: #fff;
                    border: 2px solid #fff;
                    border-radius: 50px;
                    padding: 10px;

                    display: flex;
                    align-items: center;
                    justify-content: center;

                    transition: all .5s ease-in-out;
                    cursor: pointer;

                    box-shadow: -4px 4px 6px rgba(0,0,0,.9);
                    

                    & img{
                        width: 60px;
                    }
                }

                & .icone_:hover{
                    transform: scale(1.15) rotateY(180deg);
                    background-color: #111;
                    border: 2px solid #444;
                    opacity: .8;
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
