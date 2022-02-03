<style lang="scss">
.grid-frame {
    background-image: "url('/storage/shutterstock_1646599021.jpg')";
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

</style>

<template>
    <div id='homepage'>
        <div class="grid-y grid-frame" :style="{backgroundImage:'url(/storage/shutterstock_1646599021.jpg)'}">
            <div style="height: 65px;"></div>
            <h2>{{ $t('site.homepage.name') }}</h2>
        </div>
        <i18n-t keypath="site.homepage.dynamis-phylosophy" tag="p">
            <br />
        </i18n-t>
        <div>Résumé et <router-link :to="{ name: 'Physio'}">lien vers Physio</router-link></div>
        <div>Résumé et <router-link :to="{ name: 'Cranio'}">lien vers Cranio</router-link></div>
        <div>Résumé et <router-link :to="{ name: 'Practice'}">lien vers Practice</router-link></div>
        <div>Résumé et <router-link :to="{ name: 'Courses'}">lien vers Courses</router-link></div>
        <div>Résumé et <router-link :to="{ name: 'Contact'}">lien vers Contact</router-link></div>
    </div>
</template>

<script>
export default {
    data () {
        return {
            hero_img: {backgroundImage: "url(/storage/shutterstock_1646599021.jpg)"},
        }
    }
}
</script>
