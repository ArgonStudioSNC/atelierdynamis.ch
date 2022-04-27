<style lang="scss">

.physio-page, .cranio-page {
    &>div:nth-child(2) {
        margin-bottom: 220px;
        .circle-image {
            margin-left: 10%;
        }
    }
    &>div:nth-child(3) {
        .card {
            margin-top: -320px;
        }
    }
    .physio-symbol, .cranio-symbol {
        margin: 0.7rem 1rem 0 0;
        max-width: 3.5rem;
    }
}

.physio-page {
    .page-title-image {
        background-position: 50% 53%;
        background-image: url(/storage/pictures/@600/physio-banner.jpg);
        @include breakpoint(600px) {
            background-image: url(/storage/pictures/@1200/physio-banner.jpg);
        }
        @include breakpoint(1200px) {
            background-image: url(/storage/pictures/@2400/physio-banner.jpg);
        }
    }
    .physio-symbol {
        fill: get-color(dynamis-yellow);
    }
}

.page-title {
    position: relative;
    height: $titlebar-height;
    padding: $titlebar-padding;
    color: $white;
    .page-title-image {
        opacity: 0.2;
        position: absolute;
        top:0 ;
        bottom: 0;
        left: 0;
        right: 0;
        background-size: cover;
    }
    .page-title-content {
        position: relative;
        line-height: 90px;
    }
    &--yellow {
        background-color: get-color(dynamis-yellow);
    }
    &--magenta {
        background-color: get-color(dynamis-magenta);
    }
    &--gray {
        background-color: $medium-gray;
    }
}

.checkbox {
    height: 1em;
}

</style>

<template>
    <div id='physio-page' class="physio-page">
        <div class="page-title page-title--yellow">
            <div class="page-title-image"></div>
            <div class="grid-container">
                <h2 class="page-title-content">{{ $t('site.physio-page.name') }}</h2>
            </div>
        </div>
        <div class="section section--bg-white section--yellow">
            <div class="grid-container">
                <div class="grid-x align-center">
                    <div class="cell small-5">
                        <h1 class="section-title">{{ $t('site.physio-page.offer-title') }}</h1>
                        <div class="separator"></div>
                        <div class="section-lead">{{ $t('site.physio-page.offer-lead') }}</div>
                        <i18n-t keypath="site.physio-page.offer-content" tag="div" class="section-paragraph">
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
                            <image height="100" href="/storage/pictures/@1200/physio.jpg" clip-path="url(#circle-mask)" x="-17" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="section section--bg-gray section--yellow">
            <div class="grid-container">
                <div class="card card--full-yellow">
                    <div class="card-section">
                        <h1 class="card-section-title">{{ $t("site.physio-page.patient-care-title") }}</h1>
                        <div class="separator"></div>
                        <div class="card-section-lead">
                            {{ $t("site.physio-page.patient-care-lead") }}
                        </div>
                        <div class="grid-x grid-margin-x">
                            <div class="cell small-6">
                                <div class="grid-x">
                                    <div class="cell" style="padding: 1em 0;"></div>
                                    <div class="cell" v-for="item in $t('site.physio-page.patient-care-content1').split(';')">
                                        <div class="grid-x grid-margin-x">
                                            <div class="cell shrink">
                                                <img class="checkbox" src="/static/icons/vector.svg#checkbox-white" />
                                            </div>
                                            <div class="cell small-10">{{ item }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cell small-6">
                                <div class="grid-x">
                                    <div class="cell" v-for="item in $t('site.physio-page.patient-care-content2').split(';')">
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
                            <div class="cell small-1">
                                <svg class="physio-symbol" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43.534 57.603">
                                    <use href="/static/icons/vector.svg#appointment-symbol" />
                                </svg>
                            </div>
                            <div class="cell small-10">
                                <h1 class="section-title">{{ $t('site.physio-page.appointment-title') }}</h1>
                                <div class="separator"></div>
                                <i18n-t keypath="site.physio-page.appointment-content" tag="div" class="section-paragraph">
                                    <br />
                                </i18n-t>
                            </div>
                        </div>
                    </div>
                    <div class="cell">
                        <div class="grid-x">
                            <div class="cell small-1">
                                <svg class="physio-symbol" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 51.77 46.258">
                                    <use href="/static/icons/vector.svg#reimbursement-symbol" />
                                </svg>
                            </div>
                            <div class="cell small-10">
                                <h1 class="section-title">{{ $t('site.physio-page.reimbursement-title') }}</h1>
                                <div class="separator"></div>
                                <i18n-t keypath="site.physio-page.reimbursement-content" tag="div" class="section-paragraph">
                                    <br />
                                </i18n-t>
                            </div>
                        </div>
                    </div>
                    <div class="cell">
                        <div class="grid-x">
                            <div class="cell small-1">
                                <svg class="physio-symbol" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52.782 52.682">
                                    <use href="/static/icons/vector.svg#prescription-symbol" />
                                </svg>
                            </div>
                            <div class="cell small-10">
                                <h1 class="section-title">{{ $t('site.physio-page.prescription-title') }}</h1>
                                <div class="separator"></div>
                                <i18n-t keypath="site.physio-page.prescription-content" tag="div" class="section-paragraph">
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
