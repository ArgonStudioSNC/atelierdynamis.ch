<style lang="scss">

</style>

<template>
    <div id='physio-page'>
        <div style="height: 65px;"></div>
        <div class="grid-container">
            <div class="grid-x grid-margin-y">
                <h2 class="cell">{{ $t('site.physio-page.name') }}</h2>

                <div class="cell">
                    <h5>{{ $t('site.physio-page.offer-title') }}</h5>
                    <p>{{ $t('site.physio-page.offer-content1') }}</p>
                    <p>{{ $t('site.physio-page.offer-content2') }}</p>
                    <p>{{ $t('site.physio-page.offer-content3') }}</p>
                </div>

                <div class="cell">
                    <i18n-t keypath="site.physio-page.info1-content" tag="div" class="cell">
                        <br />
                    </i18n-t>
                </div>

                <div class="cell">
                    <h5>{{ $t('site.physio-page.info2-title') }}</h5>
                </div>

                <div class="cell">
                    <h5>{{ $t('site.physio-page.info3-title') }}</h5>
                    <i18n-t keypath="site.physio-page.info3-content" tag="div">
                        <br />
                    </i18n-t>
                </div>

                <div class="cell">
                    <h5>{{ $t('site.physio-page.info4-title') }}</h5>
                    <i18n-t keypath="site.physio-page.info4-content" tag="div">
                        <br />
                    </i18n-t>
                </div>

                <div class="cell">
                    <h5>{{ $t('site.physio-page.info5-title') }}</h5>
                    <i18n-t keypath="site.physio-page.info5-content" tag="div">
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
