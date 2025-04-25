<template lang="">
    <div class="home-container">
        <p class="p1">The future of</p>
        <p class="p2">gaming</p>
        <p class="p3">is now</p>
    </div>
</template>
<script>
export default {
    
}
</script>
<style scoped>
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