<style lang="scss">

.courses-page {
    .page-title-image {
        background-position: 50% 32%;
        background-image: url(/storage/pictures/@600/courses-banner.jpg);
        @include breakpoint(600px) {
            background-image: url(/storage/pictures/@1200/courses-banner.jpg);
        }
        @include breakpoint(1200px) {
            background-image: url(/storage/pictures/@2400/courses-banner.jpg);
        }
    }
    .card-divider {
        padding-left : 1.3rem;
        padding-right : 1.3rem;
    }
    .card-section {
        padding: 1.3rem;
    }
}

</style>

<template>
    <div id='courses-page' class="courses-page">
        <div class="page-title page-title--gray">
            <div class="page-title-image"></div>
            <div class="grid-container">
                <h2 class="page-title-content">{{ $t('site.courses-page.name') }}</h2>
            </div>
        </div>
        <div class="section section--bg-gray">
            <div class="grid-container">
                <div class="grid-x grid-margin-x">
                    <div class="cell small-4 card card--yellow">
                        <picture>
                            <source media="(min-width:1200px)" srcset="/storage/pictures/@1200/courses-sourir.jpg">
                            <img src="/storage/pictures/@600/courses-sourir.jpg" alt="course picture">
                        </picture>
                        <div class="card-divider align-center"><h2>{{ $t('site.courses-page.course1-title') }}</h2></div>
                        <div class="card-section text-center grid-y grid-padding-y">
                            <div class="cell">
                                <i18n-t keypath="site.courses-page.course1-lead" tag="div">
                                    <div class="spacer"></div>
                                </i18n-t>
                            </div>
                            <div class="cell">
                                <div class="strong-text">{{ $t("site.courses-page.target") }}</div>
                                <div>{{ $t("site.courses-page.course1-target") }}</div>
                            </div>
                            <div class="cell">
                                <div class="strong-text">{{ $t("site.courses-page.schedule") }}</div>
                                <i18n-t keypath="site.courses-page.course1-schedule" tag="div">
                                    <br />
                                </i18n-t>
                            </div>
                            <div class="cell">
                                <div class="strong-text">{{ $t("site.courses-page.rate") }}</div>
                                <div>{{ $t("site.courses-page.course1-rate") }}</div>
                            </div>
                            <div class="cell margin-top-auto">
                                <button class="button button-yellow disabled">{{ $t("site.courses-page.register-me") }}</button>
                            </div>
                        </div>
                    </div>
                    <div class="cell small-4 card card--yellow">
                        <picture>
                            <source media="(min-width:1200px)" srcset="/storage/pictures/@1200/courses-crapahuteurs.jpg">
                            <img src="/storage/pictures/@600/courses-crapahuteurs.jpg" alt="course image">
                        </picture>
                        <div class="card-divider align-center"><h2>{{ $t('site.courses-page.course2-title') }}</h2></div>
                        <div class="card-section text-center grid-y grid-padding-y">
                            <div class="cell">
                                <i18n-t keypath="site.courses-page.course2-lead" tag="div">
                                    <div class="spacer"></div>
                                </i18n-t>
                            </div>
                            <div class="cell">
                                <div class="strong-text">{{ $t("site.courses-page.target") }}</div>
                                <div>{{ $t("site.courses-page.course2-target") }}</div>
                            </div>
                            <div class="cell">
                                <div class="strong-text">{{ $t("site.courses-page.schedule") }}</div>
                                <i18n-t keypath="site.courses-page.course2-schedule" tag="div">
                                    <br />
                                </i18n-t>
                            </div>
                            <div class="cell">
                                <div class="strong-text">{{ $t("site.courses-page.rate") }}</div>
                                <div>{{ $t("site.courses-page.course2-rate") }}</div>
                            </div>
                            <div class="cell margin-top-auto">
                                <button class="button button-yellow disabled">{{ $t("site.courses-page.register-me") }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>
