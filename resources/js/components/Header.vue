<style lang="scss">

.logo {
    max-width: 50px;
}

.top-bar {
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 5;
}

</style>

<template>
    <div id='header'>
         <div class="top-bar">
            <div class="top-bar-left">
                <router-link :to="{ name: 'Home'}"><img class="logo" v-bind:src="logo_img"></router-link>
            </div>
            <div class="top-bar-right">
                <TopnavbarComponent></TopnavbarComponent>
            </div>
        </div>
    </div>
</template>

<script>
import TopnavbarComponent from '@js/components/Topnavbar';
export default {
    components: {
        TopnavbarComponent
    },
    data () {
        return {
            logo_img: "/storage/logo.png",
        }
    },
}
</script>
