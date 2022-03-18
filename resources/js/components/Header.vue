<style lang="scss">

.header {
    width: 100%;
    position: fixed;
    z-index: 50;
    background-color: $topbar-background;
    .title-bar {
        padding: 1em 0;
        .logo {
            height: 90px;
            width: auto;
        }
        .hamburger {
            cursor: pointer;
            svg {
                height: 24px;
                width: auto;
                stroke: $titlebar-color;
            }
        }
    }
}

</style>

<template>
    <div id='header' class="header">
        <div class="grid-container">
            <div class="title-bar">
                <div class="title-bar-left">
                    <router-link :to="{ name: 'Home'}"><img class="logo" v-bind:src="logo_img"></router-link>
                </div>
                <div class="title-bar-right">
                    <button class="hamburger" type="button" data-open="offCanvasRightOverlap">
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 24">
                           <path style="fill:none;stroke:inherit;stroke-linecap:round;stroke-width:4px;" d="M2.5,2.5l27,0M2.5,12l27,0M2.5,21.5l27,0"/>
                       </svg>
                    </button>
                    <RightOverlapNavbarComponent></RightOverlapNavbarComponent>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import RightOverlapNavbarComponent from '@js/components/RightOverlapNavbar';
export default {
    components: {
        RightOverlapNavbarComponent
    },
    data () {
        return {
            logo_img: "/storage/logo_atelier_dynamis.svg",
        }
    },
}
</script>
