<template>
    <div class="escopo">
        <h2 class="title">O Estudio</h2>
        <div class="estudio">
        <div class="quemSomos">
            <h4>Quem Somos</h4>
            <h2>🌟 SPACE STUDIOS: Onde Ideias Viram Jogos com Propósito, Criatividade e Diversão 🎮✨</h2>
            <p>Na SPACE STUDIOS, criamos jogos com paixão, propósito e liberdade criativa. Nosso estúdio é um ambiente leve e colaborativo, onde cada ideia pode crescer e se transformar em experiências únicas.
                Nossa missão é unir inovação, diversão e aprendizado em tudo o que fazemos.
            </p>
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
  .escopo {
    width: 100%;
    min-height: max-content;
    height: 100vh;
    max-height: 120vh;
    background-color: #111;
    color: #ccc;
    padding: 30px;
    font-family: Montserrat, sans-serif;
  }

  .title {
    color: #fff;
    font-size: 3.5rem;
    display: inline-block;
    padding: 20px 15rem;
    margin: 20px 0;
    position: relative;
    left: 50%;
    transform: translateX(-50%);
  }

  .estudio {
    display: flex;
    align-items: center;
    justify-content: space-around;
    height: 80%;
  }

  .quemSomos {
    display: flex;
    align-items: flex-start;
    justify-content: center;
    flex-direction: column;
    flex: 0.5;
  }

  .quemSomos h4 {
    color: #b8b8b8;
    text-transform: uppercase;
    letter-spacing: 3px;
    margin: 8px 2px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
  }

  .quemSomos h2 {
    font-weight: 900;
    color: #fff;
    letter-spacing: -1px;
    font-size: 1.8rem;
    line-height: 37px;
    margin-bottom: 20px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
  }

  .quemSomos p {
    color: #ccc;
    margin: 0 5px;
    line-height: 30px;
  }

  .passos .container {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 40px;
  }

  .passos .content {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 10px;
  }

  .passos .icone_ {
    width: 90px;
    height: 90px;
    background-color: #fff;
    border: 2px solid #fff;
    border-radius: 50px;
    padding: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.5s ease-in-out;
    cursor: pointer;
    box-shadow: -4px 4px 6px rgba(0, 0, 0, 0.9);
  }

  .passos .icone_ img {
    width: 60px;
  }

  .passos .icone_:hover {
    transform: scale(1.15) rotateY(180deg);
    background-color: #111;
    border: 2px solid #444;
    opacity: 0.8;
  }

  .passos p {
    font-size: 1rem;
    text-transform: capitalize;
    font-family: 'Cal Sans', sans-serif;
    letter-spacing: 1px;
  }

  .title-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin: 20px 0;
  }

  .title-container h2 {
    font-size: 1.4rem;
    font-family: 'Cal Sans', sans-serif;
    letter-spacing: 2px;
  }

  .title-container hr {
    border: none;
    width: 55%;
    height: 2px;
    background-color: #555;
  }

  /* Responsividade para telas menores */

  @media (max-width: 768px) {
    .title {
      font-size: 2.5rem;
      padding: 20px 5rem;
      margin: 20px auto;
      left: 50%;
      transform: translateX(-50%);
    }

    .escopo{
      height: auto;
    }

    .estudio {
      flex-direction: column;
      height: auto;
    }

    .quemSomos {
      flex: 1;
      align-items: center;
      text-align: center;
      margin-bottom: 20px;
    }

    .passos{
        display: none;
    }

    .passos .container {
        flex-direction: column;
        gap: 30px;
    }
  }

  @media (max-width: 480px) {
    .title {
      font-size: 1.8rem;
      padding: 15px 2rem;
    }

    .quemSomos h2 {
      font-size: 1.4rem;
      line-height: 1.2;
    }

    .quemSomos p {
      font-size: 0.9rem;
      line-height: 1.4;
      margin: 0 10px;
    }

    .passos{
        display: none;
    }

    .passos .icone_ {
      width: 70px;
      height: 70px;
      padding: 8px;
    }

    .passos .icone_ img {
      width: 45px;
    }

    .passos p {
      font-size: 0.85rem;
    }

    .title-container h2 {
      font-size: 1.2rem;
    }

    .title-container hr {
      width: 40%;
      height: 1.5px;
    }
  }
</style>