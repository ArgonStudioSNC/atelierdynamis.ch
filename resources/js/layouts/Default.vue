<style lang="scss">

</style>

<template>
    <div id='page-layout'>
        <div class="off-canvas-wrapper">
            <div class="off-canvas position-right" id="offCanvasRightOverlap" v-foundation data-off-canvas data-transition="overlap">
                <NavigationComponent></NavigationComponent>
            </div>
            <div class="off-canvas-content" data-off-canvas-content>
                <HeaderComponent></HeaderComponent>
                <router-view></router-view>
                <FooterComponent></FooterComponent>
            </div>
        </div>
    </div>
</template>

<script>
import HeaderComponent from '@js/components/Header';
import FooterComponent from '@js/components/Footer';
import NavigationComponent from '@js/components/Navigation';
export default {
    components: {
        HeaderComponent,
        FooterComponent,
        NavigationComponent
    },
    data () {
        return {
        }
    },

    created () {
    }
}
</script>
