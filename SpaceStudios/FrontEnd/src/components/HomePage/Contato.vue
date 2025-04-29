<template>
    <div class="escopo">
        <h1 class="title">Contato</h1>
        <h4 class="subtitle">Fale Conosco</h4>

        <div class="email-container">
            <p class="email-title">Email da Space Studios, entre em contato com sabedoria</p>
            <p class="email"><a href="">spaceStudios@gmail.com</a></p>
        </div>

        <div class="redes">
            <div class="container-redes">
                <a href=""><img src="@/assets/img/Icones/facebook.png" alt=""></a>
                <a href=""><img src="@/assets/img/Icones/instagram.png" alt=""></a>
                <a href=""><img src="@/assets/img/Icones/x.png" alt=""></a>
                <a href=""><img src="@/assets/img/Icones/youtube.png" alt=""></a>
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
        z-index: -3;

        background-color: #fff;

        display: flex;
        align-items: center;

        flex-direction: column;

        color: #222;
        padding: 30px;

        font-family: Verdana, Geneva, Tahoma, sans-serif;

        & .title{
            font-size: 2rem;
        }

        & .email-container{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;

            height: 100vh;

            & .email-title{
                font-size: 1.2rem;
                font-weight: bold;
                
                color: #555;
                letter-spacing: 1px;
            }
            
            & .email{
                font-size: 4rem;
                text-transform: uppercase;
                letter-spacing: 4px;

                & a{
                    color: #d11f1f;
                    text-decoration: none;

                    transition: all .5s;
                }

                & a:hover{
                    font-size: 4.1rem;
                    opacity: .8;
                }
            }
        }
    }

    

    .redes{
        display: flex;
        align-items: center;
        flex-direction: column;

        margin-top: auto;
        
        & .container-redes{
            display: flex;
            align-items: center;
            justify-content: center;

            flex-wrap: nowrap;

            gap: 20px;

            margin: 40px;

            & img{
                width: 80px;
                filter: drop-shadow(-2px 2px 3px rgba(0,0,0,.3));

                transition: all .2s ease-in-out;
            }

            & img:hover{    
                transform: scale(1.1);
                opacity: .8;
            }
        }
    }

  
</style>