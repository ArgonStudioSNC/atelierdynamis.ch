<style lang="scss">

</style>

<template>
    <div id='page-layout'>
        <HeaderComponent></HeaderComponent>
        <router-view></router-view>
        <FooterComponent></FooterComponent>
    </div>
</template>

<script>
import HeaderComponent from '@js/components/Header';
import FooterComponent from '@js/components/Footer';
export default {
    components: {
        HeaderComponent,
        FooterComponent
    },
    data () {
        return {
        }
    },

    created () {
    }
}
</script>
