<template>
    <div>
        <div class="video-background">
            <video autoplay muted loop playsinline>
                <source src="../assets/img/background-home.mp4" type="video/mp4">
            </video>
        </div>
        <div class="home-container">
            <p class="p1">The future of</p>
            <p class="p2">gaming</p>
            <p class="p3">is now</p>
        </div>
    </div>
</template>
<script>
export default {
    
}
</script>
<style scoped>
    .video-background{
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: -1;

        filter: blur(8px);
    }

    .background{
        min-width: 100%;
        min-height: 100%;
        object-fit: cover;

        
    }

    .home-container{
        display: flex;
        align-items: center;
        justify-content: center;

        flex-direction: column;

        font-size: 6rem;
        letter-spacing: 6px;
        line-height: 10rem;
        height: 100vh;
        width: min-content;

        margin: auto;

        font-family: Helvetica;

        & .p1{
            margin-right: auto;
            color: #fff;
        }

        & .p2{
            font-size: 2.2em;
            letter-spacing: 10px;
            color: #2c7ed6;

            font-family: Cal sans;
        }

        & .p3{
            margin-left: auto;
        }
    }

</style>