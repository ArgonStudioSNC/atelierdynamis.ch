<style lang="scss">
.footer {
    color: $white;
    background-color: $secondary-color;
}
</style>

<template>
    <div id='footer' class='footer'>
        <div class="grid-y text-center">
            <div class="cell">{{ $t('site.title') }}</div>
            <div class="cell">{{ $t('site.subtitle') }}</div>
            <div class="cell">{{ $t('site.biel') }}</div>

            <a :href="$router.resolve({params: {lang : 'fr'}}).href">{{ $t('site.locales.fr') }}</a>
            <a :href="$router.resolve({params: {lang : 'de'}}).href">{{ $t('site.locales.de') }}</a>
        </div>
    </div>
</template>

<script>
export default {
    data () {
        return {
        }
    },
}
</script>
