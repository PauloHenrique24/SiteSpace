<template>
    <div class="escopo">
        <h1>Contato</h1>
        <h4>Fale Conosco</h4>
        <p><a href="">spaceStudios@gmail.com</a></p>

        <img src="/src/assets/img/IconeSpaceStudios.png" alt="">
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

        background-color: #fff;

        display: flex;
        justify-content: space-around;
        align-items: center;

        flex-direction: column;

        color: #222;

        padding: 30px;
    }

    h1{
        font-weight: bold;
        font-size: 4rem;
    }

    h4{
        font-size: 1.2rem;
    }

    p{
        font-size: 2rem;
        
        a{
            color: #2c7ed6;
            text-decoration: none;

            transition: all .5s;
        }

        a:hover{
            opacity: .8;
        }
    }

  
</style>