<template>
    <div class="scope">
        <div class="card">
            <h4>About Us</h4>
            <h2>Lorem ipsum dolor, sit amet 
                consectetur adipisicing elit. Facere, autem!</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing 
                elit. Quo, nesciunt. Eligendi temporibus soluta 
                aspernatur, ducimus nihil quam illo sed labore maxime 
                tempora asperiores praesentium consequuntur obcaecati 
                sapiente in officiis aperiam consequatur unde ad 
                dolor voluptatibus dolore cupiditate. In, est dicta!</p>
            <button>Sign Up for Free</button>
        </div>
        <div class="card-estiloso">
            <img src="../assets/img/imgSobre.png" alt="Imagem Top">
        </div>
    </div>
</template>
<script>
export default {
    
}
</script>
<style scoped>
    .scope{
        background-color: white;
        width: 100%;
        height: 100vh;

        display: flex;
        align-items: center;
        justify-content: center;

        gap: 30px;

        color: #222;

        padding: 0 200px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    .card{
        display: flex;
        justify-content: center;
        flex-direction: column;
        gap: 2px;

        width: 100%;
        max-width: 600px;

        & h4{
            color: #777;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        & h2{
            font-weight: 900;
            color: #444;
            letter-spacing: -1px;
            font-size: 1.8rem;
            line-height: 37px;

            margin-bottom: 10px;
        }

        & p{
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #555;
            margin: 0 5px;
            line-height: 30px;
        }

        & button{
            background-image: linear-gradient(45deg,#2A4561,#2c7ed6);
            border:none;
            height: 50px;
            width: 200px;
            margin: 20px 0;

            border-radius: 2px;

            font-family: Helvetica;
            color: white;
            font-weight: 900;
            box-shadow: -1px 1px 2px 1px rgba(0,0,0,.4);

            cursor: pointer;
        }
        
    }

    .card-estiloso {
        position: relative;
        width: 400px;
        height: 400px;
        overflow: hidden;
    }

    .card-estiloso img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        clip-path: ellipse(60% 50% at 50% 50%);
        border-radius: 30px;
        position: relative;
        z-index: 2;

    }

</style>