<template>
    <div class="scope">
        <div class="card">
        <h4>Nossa História</h4>
        <h2>🎮 SPACE STUDIOS: Da Ideia ao Desenvolvimento – Uma Nova Geração de Jogos 🌵</h2>
        <p>Fundada por uma equipe jovem e apaixonada, a SPACE STUDIOS nasceu em 2022 com o sonho de transformar ideias em experiências únicas.
        Nosso primeiro jogo, Terrius, foi um infinite runner cheio de ação. 
        Em 2024, demos um grande passo ao oficializar o estúdio, com foco em jogos indie, criativos e com identidade própria.
        Nosso projeto mais ambicioso é "Sob o Sol do Sertão", um game que celebra a cultura nordestina, com inspirações em títulos como Red Dead Redemption. Para nós, jogos são uma forma de contar histórias e valorizar nossas raízes.</p>
        <button @click="jogos()">Jogos</button>
        </div>
        <div class="card-estiloso">
        <img src="/src/assets/img/imgSobre.png" alt="Imagem Top" />
        </div>
    </div>
</template>
<script>
export default {
  methods:{
        jogos(){
            window.location = "/jogos";
        }
    }
}
</script>
<style scoped>
    .scope {
        background-color: white;
        width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 30px;
        padding: 0 200px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        overflow: hidden; /* evita scroll do animation */
    }

    .card {
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 10px;
        max-width: 600px;
        width: 100%;
        transform: translateX(-100px);
    }

    .card-estiloso {
        width: 400px;
        height: 400px;
        overflow: hidden;
        transform: translateX(100px);
    }

    .card-estiloso img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        clip-path: ellipse(60% 50% at 50% 50%);
        border-radius: 30px;
        position: relative;
        z-index: 2;
        cursor: pointer;
        transition: all .5s;
    }

    .card-estiloso img:hover {
        transform: scale(1.01);
        filter: drop-shadow(-1px 1px 2px rgba(0, 0, 0, .3));
        opacity: .9;
    }

    /* Estilização dos textos */
    .card h4 {
        color: #777;
        text-transform: uppercase;
        letter-spacing: 3px;
    }

    .card h2 {
        font-weight: 900;
        color: #444;
        letter-spacing: -1px;
        font-size: 1.8rem;
        line-height: 37px;
        margin-bottom: 10px;
    }

    .card p {
        color: #555;
        margin: 0 5px;
        line-height: 30px;
        font-family: Montserrat;
    }

    .card button {
        background-image: linear-gradient(45deg, #0a468b, #2273cf);
        border: none;
        height: 50px;
        width: 200px;
        margin: 20px 0;
        border-radius: 2px;
        color: white;
        box-shadow: -1px 1px 2px 1px rgba(0, 0, 0, .4);
        cursor: pointer;
        transition: all .5s;
        font-weight: 700;
        font-family: Quicksand;
    }

    .card button:hover {
        width: 250px;
        border-radius: 5px;
    }

    /* Media Queries para dispositivos móveis */
    @media (max-width: 768px) {
        .scope {
            flex-direction: column; /* Muda a direção para coluna */
            padding: 20px 20px; /* Reduz o padding */
            gap: 20px; /* Reduz o gap */
            height: auto;
        }

        .card {
            max-width: 90%; /* Permite que o cartão ocupe toda a largura */
            transform: translateX(0); /* Remove a animação de entrada */

            font-size: .9rem;
        }

        .card-estiloso {
            display: none;
            width: 100%; /* Ajusta a largura da imagem */
            height: auto; /* Permite que a altura se ajuste automaticamente */
            transform: translateX(0); /* Remove a animação de entrada */
        }

        .card h2 {
            font-size: 1.5rem; /* Reduz o tamanho da fonte */
        }

        .card button {
            width: 100%; /* Botão ocupa toda a largura */
            display: none;
        }
    }

    @media (max-width: 480px) {
        .card h2 {
            font-size: 1.2rem; /* Reduz ainda mais o tamanho da fonte */
        }

        .card p {
            line-height: 24px; /* Ajusta a altura da linha */
        }

        .card button {
            height: 40px;
            font-size: 1rem;
            margin: 15px 0;
            width: 100%;
        }
    }
</style>