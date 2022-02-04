<style lang="scss">

</style>

<template>
    <div id='practice-page'>
        <div style="height: 65px;"></div>
        <div class="grid-container">
            <div class="grid-x grid-margin-y">
                <h2 class="cell">{{ $t('site.practice-page.name') }}</h2>

                <div class="cell">
                    <h5>Sophie Charrière</h5>
                    <div>{{ $t('site.practice-page.sophie-portrait') }}</div>
                </div>

                <h4 class="cell">{{ $t('site.practice-page.formation-title') }}</h4>

                <div class="cell">
                    <h5>{{ $t('site.practice-page.sophie-formation-sub1-title') }}</h5>
                    <i18n-t keypath="site.practice-page.sophie-formation-sub1-content" tag="div">
                        <br />
                    </i18n-t>
                </div>

                <div class="cell">
                    <h5>{{ $t('site.practice-page.sophie-formation-sub2-title') }}</h5>
                    <i18n-t keypath="site.practice-page.sophie-formation-sub2-content" tag="div">
                        <br />
                    </i18n-t>
                </div>

                <div class="cell">
                    <h5>{{ $t('site.practice-page.sophie-formation-sub3-title') }}</h5>
                    <i18n-t keypath="site.practice-page.sophie-formation-sub3-content" tag="div">
                        <br />
                    </i18n-t>
                </div>

                <div class="cell">
                    <h5>{{ $t('site.practice-page.sophie-formation-sub4-title') }}</h5>
                    <i18n-t keypath="site.practice-page.sophie-formation-sub4-content" tag="div">
                        <br />
                    </i18n-t>
                </div>

                <div class="cell">
                    <h5>Sarah Meier</h5>
                </div>

                <div class="cell">
                    <h5>{{ $t('site.practice-page.sarah-formation-sub1-title') }}</h5>
                    <i18n-t keypath="site.practice-page.sarah-formation-sub1-content" tag="div">
                        <br />
                    </i18n-t>
                </div>

                <div class="cell">
                    <h5>{{ $t('site.practice-page.sarah-formation-sub2-title') }}</h5>
                    <i18n-t keypath="site.practice-page.sarah-formation-sub2-content" tag="div">
                        <br />
                    </i18n-t>
                </div>

                <div class="cell">
                    <div>locaux : PHOTOS</div>
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
