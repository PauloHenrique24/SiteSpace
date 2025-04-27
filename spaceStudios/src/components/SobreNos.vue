<template>
    <div class="scope">
        <div class="card">
        <h4>About Us</h4>
        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, autem!</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, nesciunt. Eligendi temporibus soluta aspernatur...</p>
        <button>Sign Up for Free</button>
        </div>
        <div class="card-estiloso">
        <img src="../assets/img/imgSobre.png" alt="Imagem Top" />
        </div>
    </div>
</template>
<script>
export default {

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
}

.card button {
  background-image: linear-gradient(45deg, #2A4561, #2c7ed6);
  border: none;
  height: 50px;
  width: 200px;
  margin: 20px 0;
  border-radius: 2px;
  color: white;
  font-weight: 900;
  box-shadow: -1px 1px 2px 1px rgba(0,0,0,.4);
  cursor: pointer;
  transition: all .5s;
}

.card button:hover {
  width: 250px;
  border-radius: 5px;
}

</style>
