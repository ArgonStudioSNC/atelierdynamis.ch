<style lang="scss">

</style>

<template>
    <div id='cranio-page'>
        <div style="height: 65px;"></div>
        <div class="grid-container">
            <h2>{{ $t('site.cranio-page.name') }}</h2>

            <div class="cell">
                <p>{{ $t('site.cranio-page.offer-content1') }}</p>
                <p>{{ $t('site.cranio-page.offer-content2') }}</p>
                <p>{{ $t('site.cranio-page.offer-content3') }}</p>
            </div>

            <div class="cell">
                <i18n-t keypath="site.cranio-page.links" tag="div" class="cell">
                    <br />
                </i18n-t>
            </div>
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
