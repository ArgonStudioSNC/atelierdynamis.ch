<style lang="scss">

.cranio-page {
    .page-title-image {
        background-position: 50% 71%;
        background-image: url(/storage/pictures/@600/cranio-banner.jpg);
        @include breakpoint(600px) {
            background-image: url(/storage/pictures/@1200/cranio-banner.jpg);
        }
        @include breakpoint(1200px) {
            background-image: url(/storage/pictures/@2400/cranio-banner.jpg);
        }
    }
    .cranio-symbol {
        fill: get-color(dynamis-magenta);
    }
}

</style>

<template>
    <div id='cranio-page' class="cranio-page">
        <div class="page-title page-title--magenta">
            <div class="page-title-image"></div>
            <div class="grid-container">
                <h2 class="page-title-content">{{ $t('site.cranio-page.name') }}</h2>
            </div>
        </div>
        <div class="section section--bg-white section--magenta">
            <div class="grid-container">
                <div class="grid-x align-center">
                    <div class="cell small-12 medium-10 xlarge-5">
                        <h1 class="section-title">{{ $t('site.cranio-page.offer-title') }}</h1>
                        <div class="separator"></div>
                        <div class="section-lead">{{ $t('site.cranio-page.offer-lead') }}</div>
                        <i18n-t keypath="site.cranio-page.offer-content" tag="div" class="section-paragraph">
                            <div class="spacer"></div>
                        </i18n-t>
                    </div>
                    <div class="cell small-5">
                        <svg class="circle-image" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" x="0" y="0">
                            <defs>
                                <clipPath id="circle-mask" clipPathUnits="userSpaceOnUse">
                                    <circle cx="50" cy="50" r="50" />
                                </clipPath>
                            </defs>
                            <image height="100" href="/storage/pictures/@1200/cranio.jpg" clip-path="url(#circle-mask)" x="-17" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="section section--bg-gray section--magenta">
            <div class="grid-container">
                <div class="card card--full-magenta">
                    <div class="card-section">
                        <h1 class="card-section-title">{{ $t("site.cranio-page.patient-care-title") }}</h1>
                        <div class="separator"></div>
                        <div class="card-section-lead">
                            {{ $t("site.cranio-page.patient-care-lead") }}
                        </div>
                        <div class="grid-x grid-margin-x">
                            <div class="cell small-12 large-6">
                                <div class="grid-x">
                                    <div class="cell" style="padding: 1em 0;"></div>
                                    <div class="cell">{{ $t('site.cranio-page.patient-care-children.title') }}</div>
                                    <div class="cell" v-for="item in $t('site.cranio-page.patient-care-children.content').split(';')">
                                        <div class="grid-x grid-margin-x">
                                            <div class="cell shrink">
                                                <img class="checkbox" src="/static/icons/vector.svg#checkbox-white" />
                                            </div>
                                            <div class="cell small-10">{{ item }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cell small-12 large-6">
                                <div class="grid-x">
                                    <div class="cell" style="padding: 1em 0;"></div>
                                    <div class="cell">{{ $t('site.cranio-page.patient-care-adults.title') }}</div>
                                    <div class="cell" v-for="item in $t('site.cranio-page.patient-care-adults.content').split(';')">
                                        <div class="grid-x grid-margin-x">
                                            <div class="cell shrink">
                                                <img class="checkbox" src="/static/icons/vector.svg#checkbox-white" />
                                            </div>
                                            <div class="cell small-10">{{ item }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-x grid-margin-y">
                    <div class="cell">
                        <div class="grid-x">
                            <div class="cell show-for-medium medium-1">
                                <svg class="cranio-symbol" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43.534 57.603">
                                    <use href="/static/icons/vector.svg#appointment-symbol" />
                                </svg>
                            </div>
                            <div class="cell small-12 medium-10">
                                <h1 class="section-title">{{ $t('site.cranio-page.appointment-title') }}</h1>
                                <div class="separator"></div>
                                <i18n-t keypath="site.cranio-page.appointment-content" tag="div" class="section-paragraph">
                                    <br />
                                </i18n-t>
                            </div>
                        </div>
                    </div>
                    <div class="cell">
                        <div class="grid-x">
                            <div class="cell show-for-medium medium-1">
                                <svg class="cranio-symbol" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 51.77 46.258">
                                    <use href="/static/icons/vector.svg#reimbursement-symbol" />
                                </svg>
                            </div>
                            <div class="cell small-12 medium-10">
                                <h1 class="section-title">{{ $t('site.cranio-page.reimbursement-title') }}</h1>
                                <div class="separator"></div>
                                <i18n-t keypath="site.cranio-page.reimbursement-content" tag="div" class="section-paragraph">
                                    <br />
                                </i18n-t>
                            </div>
                        </div>
                    </div>
                    <div class="cell">
                        <div class="grid-x">
                            <div class="cell show-for-medium medium-1">
                                <svg class="cranio-symbol" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52.782 52.682">
                                    <use href="/static/icons/vector.svg#prescription-symbol" />
                                </svg>
                            </div>
                            <div class="cell small-12 medium-10">
                                <h1 class="section-title">{{ $t('site.cranio-page.prescription-title') }}</h1>
                                <div class="separator"></div>
                                <i18n-t keypath="site.cranio-page.prescription-content" tag="div" class="section-paragraph">
                                    <br />
                                </i18n-t>
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
