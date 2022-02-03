<style lang="scss">

</style>

<template>
    <div id='courses-page'>
        <div style="height: 65px;"></div>
        <div class="grid-container">
            <div class="grid-x grid-margin-y">
                <h2 class="cell">{{ $t('site.courses-page.name') }}</h2>

                <div class="cell">
                    <h5>{{ $t('site.courses-page.course1-title') }}</h5>
                    <i18n-t keypath="site.courses-page.course1-content" tag="div">
                    <br />
                    </i18n-t>
                </div>

                <div class="cell">
                    <h5>{{ $t('site.courses-page.course2-title') }}</h5>
                    <i18n-t keypath="site.courses-page.course2-content" tag="div">
                    <br />
                    </i18n-t>
                </div>

                <h5 class="cell">réservation des cours</h5>

                <div class="cell">
                    <h5>{{ $t('site.courses-page.links-title') }}</h5>
                    <i18n-t keypath="site.courses-page.links-content" tag="div">
                        <br />
                    </i18n-t>
                </div>
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
