<style lang="scss">
@import '~@sass/_mixins';

.hero {
    .hero-title-container {
        height: 100%;
        .hero-title {
            color: $light-gray;
            line-height: 1.3;
            font-weight: 500;
            margin-bottom: 2rem;
            padding-right: 2rem;
            .button {
                position: absolute;
            }
        }
    }
    .hero-graphics-container {
        position: absolute;
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        z-index: -10;
        background-color: get-color(dynamis-yellow);
        & > * {
            position: absolute;
            width: 50%;
            height: 100%;
        }
        .circle-1 > circle{
            fill: $white;
        }
        .circle-2 {
            right: 0;
            circle{
                fill: get-color(dynamis-magenta);
            }
        }
        .circle-3 {
            right: 0;
        }
    }
    .hero-downarrow {
        position: absolute;
        margin: auto;
        right: 0;
        left: 0;
        bottom: 4rem;
        cursor: pointer;
    }
    .chevron-symbol {
        stroke: $white;
        height: 2rem;
    }
}

.philosophy {
    &.section {
        padding-top: 9rem;
    }
    .philosophy-banner {
        font-size: 1.5rem;
        line-height: 1.3;
    }
}

.section {
    padding: 4rem 0 9rem 0;
    .section-lead {
        text-transform: lowercase;
        font-size: 2rem;
        font-family: 'Como';
        font-weight: 500;
        line-height: 1.125;
        color: $light-gray;
        margin-bottom: 2rem;
    }
    .section-paragraph {
        margin-bottom: 2rem;
    }
    &--bg-white {

    }
    &--bg-gray {
        background-color: rgba($light-gray, 0.07);
        color: $dark-gray;
        .section-title {
            font-weight: 600;
            color: $light-gray;
        }
    }
    &--yellow {
        .section-title  {
            color: get-color(dynamis-yellow);
        }
        .separator {
            &::after {
                background: get-color(dynamis-yellow);
            }
        }
    }
    &--magenta {
        .section-title  {
            color: get-color(dynamis-magenta);
        }
        .separator {
            &::after {
                background: get-color(dynamis-magenta);
            }
        }
    }
}

.card {
    position: relative;
    z-index: 5;
    .strong-text {
        font-family: 'Graphie Regular';
    }
    .card-section {
        padding : 2.2rem 3.3rem;
        .card-section-title {
            color: $light-gray;
        }
    }
    .card-section-lead {
        text-transform: lowercase;
        font-size: 2rem;
        font-family: 'Como';
        font-weight: 500;
        line-height: 1.125;
        color: $light-gray;
        margin-bottom: 1rem;
        max-width: 1100px;
    }
    &--yellow {
        .card-divider {
            color: $white;
            background-color: get-color(dynamis-yellow);
        }
        .strong-text {
            color: get-color(dynamis-yellow);
        }
        .separator::after {
            background: get-color(dynamis-yellow);
        }
    }
    &--magenta {
        .card-divider {
            color: $white;
            background-color: get-color(dynamis-magenta);
        }
        .strong-text {
            color: get-color(dynamis-magenta);
        }
        .separator::after {
            background: get-color(dynamis-magenta);
        }
    }
    &--full-yellow {
        margin-bottom: 6rem;
        .card-section {
            background-color: get-color(dynamis-yellow);
            padding-bottom: 6rem;
            .card-section-title {
                color: $white;
            }
        }
        .separator::after {
            background: $white;
        }
    }
    &--full-magenta {
        color: $white;
        margin-bottom: 6rem;
        .card-section {
            background-color: get-color(dynamis-magenta);
            padding-bottom: 6rem;
            .card-section-title, .card-section-lead {
                color: $white;
            }
        }
        .separator::after {
            background: $white;
        }
    }
}

.summary {
    &.section {
        padding: 9rem 0;
    }
    .sub-section {
        padding-top: 150px;
        margin-bottom: 100px;
    }
    .summary-relative-container {
        position: relative;
    }
    .summary-circle {
        position: absolute;
        top: 50%;
        @include translate(0, -50%);
        height: 1360px;
        &.summary-left {
            right: calc(100% - 375px);
            circle {
                fill: get-color(dynamis-magenta);
            }
        }
        &.summary-right {
            left: calc(100% - 375px);
            circle {
                fill: get-color(dynamis-yellow);
            }
        }
    }
    .summary-image {
        position: absolute;
        top: 50%;
        @include translate(0, -50%);
        height: 600px;
        &.summary-right {
            right: 100px;
        }
    }
}

.button {
    &.button-magenta {
        background-color: get-color(dynamis-magenta);
        &:hover {
            background-color: scale-color(get-color(dynamis-magenta), $lightness: -15%);
        }
    }
    &.button-yellow {
        background-color: get-color(dynamis-yellow);
        &:hover {
            background-color: scale-color(get-color(dynamis-yellow), $lightness: -15%);
        }
    }
}

.margin-top-auto {
    margin-top: auto;
}

.spacer {
    height: 1em;
}

</style>

<template>
    <div id='homepage'>
        <div id="hero" class="hero grid-y grid-frame">
            <div class="cell hero-title-container grid-container grid-x align-middle">
                    <div class="cell small-6">
                        <h1 class="hero-title"><b>atelier dynamis</b><br />
                        <i18n-t keypath="site.homepage.lead">
                            <br />
                        </i18n-t>
                        </h1>
                        <button @click="scrollPastHero" class="button">{{ $t("site.know-more-btn") }}</button>
                    </div>
            </div>
            <div class="hero-graphics-container">
                <svg class="circle-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMaxYMid slice" x="0" y="0">
                    <circle cx="28" cy="50" r="72" />
                </svg>
                <svg class="circle-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMin meet" x="0" y="0">
                    <circle cx="75" cy="15" r="45" />
                </svg>
                <svg class="circle-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMinYMid meet" x="0" y="0">
                    <defs>
                        <clipPath id="hero-mask">
                            <circle cx="35" cy="52" r="30" fill="#ffffff" />
                        </clipPath>
                    </defs>
                    <image width="80" href="/storage/pictures/@1200/sarah-sophie-02.jpg" clip-path="url(#hero-mask)" y="2" />
                </svg>
            </div>
            <button @click="scrollPastHero" class="hero-downarrow">
                <svg class="chevron-symbol" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 26">
                    <use href="/static/icons/vector.svg#chevron-symbol" />
                </svg>
            </button>
        </div>
        <div id='philosophy' class="section section--bg-white philosophy">
            <div class="grid-container">
                <div class="grid-x align-center grid-padding-y text-center">
                    <div class="cell">
                        <h1>{{ $t("site.homepage.dynamis-philosophy-title") }}</h1>
                    </div>
                    <div class="cell medium-10">
                        <div class="philosophy-banner text-lowercase">{{ $t("site.homepage.dynamis-philosophy") }}</div>
                    </div>
                </div>
            </div>
        </div>

        <div id='summary' class="section section--bg-gray summary">
            <div class="grid-container">
                <div class="grid-x align-center sub-section">
                    <div class="cell small-6 summary-relative-container">
                        <svg class="summary-circle summary-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" x="0" y="0">
                            <circle cx="50" cy="50" r="50" />
                        </svg>
                        <svg class="summary-image summary-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" x="0" y="0">
                            <defs>
                                <clipPath id="circle-mask" clipPathUnits="userSpaceOnUse">
                                    <circle cx="50" cy="50" r="50" />
                                </clipPath>
                            </defs>
                            <image height="100" href="/storage/pictures/@1200/home-cranio.jpg" clip-path="url(#circle-mask)" x="-22" />
                        </svg>
                    </div>
                    <div class="cell small-4">
                        <h1 class="section-title">{{ $t("site.cranio-page.name") }}</h1>
                        <div class="separator"></div>
                        <div class="section-paragraph">{{ $t("site.homepage.cranio-summary") }}</div>
                        <div>
                            <router-link class="button button-magenta" :to="{ name: 'Cranio'}">{{ $t("site.know-more-btn") }}</router-link>
                        </div>
                    </div>
                    <div class="cell small-2"></div>
                </div>
                <div class="sub-section"></div>
                <div class="grid-x align-center sub-section">
                    <div class="cell small-2"></div>
                    <div class="cell small-4">
                        <h1 class="section-title">{{ $t("site.physio-page.name") }}</h1>
                        <div class="separator"></div>
                        <div class="section-paragraph">{{ $t("site.homepage.physio-summary") }}</div>
                        <div>
                            <router-link class="button button-yellow" :to="{ name: 'Physio'}">{{ $t("site.know-more-btn") }}</router-link>
                        </div>
                    </div>
                    <div class="cell small-6 summary-relative-container">
                        <svg class="summary-circle summary-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" x="0" y="0">
                            <circle cx="50" cy="50" r="50" />
                        </svg>
                        <svg class="summary-image summary-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" x="0" y="0">
                            <defs>
                                <clipPath id="circle-mask" clipPathUnits="userSpaceOnUse">
                                    <circle cx="50" cy="50" r="50" />
                                </clipPath>
                            </defs>
                            <image height="100" href="/storage/pictures/@1200/home-physio.jpg" clip-path="url(#circle-mask)" x="-25" />
                        </svg>
                    </div>
                </div>
                <div class="grid-x align-center grid-margin-x sub-section">
                    <div class="cell small-5 flex-container">
                        <div class="card card--magenta">
                            <div class="card-divider"></div>
                            <div class="card-section text-center grid-y">
                                <h2 class="card-section-title">{{ $t("site.practice-page.name") }}</h2>
                                <p>{{ $t("site.homepage.practice-summary") }}</p>
                                <div class="margin-top-auto">
                                    <router-link class="button button-yellow" :to="{ name: 'Practice'}">{{ $t("site.know-more-btn") }}</router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cell small-5 flex-container">
                        <div class="card card--yellow">
                            <div class="card-divider"></div>
                            <div class="card-section text-center grid-y">
                                <h2 class="card-section-title">{{ $t("site.courses-page.name") }}</h2>
                                <p>{{ $t("site.homepage.courses-summary") }}</p>
                                <div class="margin-top-auto">
                                    <router-link class="button button-magenta" :to="{ name: 'Courses'}">{{ $t("site.know-more-btn") }}</router-link>
                                </div>
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
    methods: {
        scrollPastHero(){
            window.scrollTo({
                top: $(".header-fixed").length > 0 ? $("#hero").height() - $(".header-fixed").height() : $("#hero").height(),
                behavior: 'smooth',
            });
        },
    }
}
</script>
