<template>
    <div>
        <div class="video-background">
            <video autoplay muted loop playsinline>
                <source src="/src/assets/videos/bg1.mp4" type="video/mp4">
            </video>
        </div>
        <div class="home-container">
            <p class="p1" ref="text1"></p>
            <p class="p2" ref="text2"></p>
            <p class="p3" ref="text3"></p>
        </div>
    </div>
</template>
<script>
export default {
    mounted() {
    const texts = [
      "The future of",
      "gaming",
      "is now"
    ];

    const refs = [
      this.$refs.text1,
      this.$refs.text2,
      this.$refs.text3
    ];

    let currentText = 0;
    let currentChar = 0;

    const typeWriter = () => {
      if (currentText < texts.length) {
        let currentRef = refs[currentText];

        if (currentChar === 0) {
          currentRef.innerHTML = ""; // limpa certinho
        }

        let char = texts[currentText][currentChar];
        if (char === " ") {
          char = "&nbsp;"; // espaço visível
        }
        currentRef.innerHTML += char;
        currentChar++;

        if (currentChar < texts[currentText].length) {
          setTimeout(typeWriter, 100); // velocidade da letra
        } else {
          currentText++;
          currentChar = 0;
          setTimeout(typeWriter, 400); // pausa entre os textos
        }
      }
    };

    typeWriter();
  }
}
</script>
<style scoped>
    .video-background {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: -1;
        filter: blur(4px);
    }

    .home-container {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        font-size: 6rem;
        letter-spacing: 6px;
        line-height: 10rem;
        height: calc(100vh - 80px);
        width: min-content;
        margin: auto;
        font-family: Montserrat;
    }

    .p1 {
        margin-right: auto;
    }

    .p2 {
        font-size: 2.2em;
        letter-spacing: 10px;
        color: white;
        font-family: 'Cal Sans';
    }

    .p3 {
        margin-left: auto;
    }

    @keyframes blink {
        50% { border-color: transparent; }
    }

    /* Media Queries para dispositivos móveis */
    @media (max-width: 768px) {
        .home-container {
            font-size: 4rem; /* Reduz o tamanho da fonte */
            line-height: 6rem; /* Ajusta a altura da linha */
        }

        .p2 {
            font-size: 2em; /* Reduz o tamanho da fonte para p2 */
            letter-spacing: 5px; /* Ajusta o espaçamento */
        }
    }

    @media (max-width: 480px) {
        .home-container {
            font-size: 3rem; /* Reduz ainda mais o tamanho da fonte */
            line-height: 4rem; /* Ajusta a altura da linha */
        }

        .p1{
          font-size: 1.8rem;
        }

        .p2 {
            font-size: 2em; /* Reduz o tamanho da fonte para p2 */
            letter-spacing: 3px; /* Ajusta o espaçamento */
        }

        .p3{
          font-size: 1.9rem;
        }
    }
</style>