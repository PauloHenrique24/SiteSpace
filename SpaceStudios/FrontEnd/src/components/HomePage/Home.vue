<template>
    <div>
        <div class="video-background">
            <video autoplay muted loop playsinline>
                <source src="/src/assets/videos/bg4.mp4" type="video/mp4">
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

    .p1{
        margin-right: auto;
    }

    .p2{
        font-size: 2.2em;
        letter-spacing: 10px;
        color: white;
        font-family: Cal sans;
    }

    .p3{
        margin-left: auto;
    }

    @keyframes blink {
        50% { border-color: transparent; }
    }


</style>