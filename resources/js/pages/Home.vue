<style lang="scss">
@import '~@sass/_mixins';

.homepage {
    .hero {
        .hero-title-container {
            height: 100%;
            .hero-title {
                color: $light-gray;
                line-height: 1.3;
                font-weight: 500;
                margin: 0;
                padding-right: 2rem;
            }
            .button {
                position: absolute;
                margin-top: 2rem;
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
                position: relative;
            }
            .circle-1 {
                position: absolute;
                right: 0;
                min-height: 100%;
                min-width: 100%;
                top: 50%;
                @include translate(0, -50%);
                circle{
                    fill: $white;
                }
            }
            .circle-2 {
                position: absolute;
                min-width: 285px;
                min-height: 285px;
                max-height: 100%;
                right: 0;
                circle{
                    fill: get-color(dynamis-magenta);
                }
            }
            .circle-3 {
                position: absolute;
                top: 50%;
                @include translate(0, -50%);
                margin-right: 20px;
                max-height: 90%;
                @include breakpoint(large up) {
                    max-width: 66%;
                }
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
        .background-cover {
            background: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url(/storage/pictures/@1200/sarah-sophie-02.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    }

    .philosophy {
        &.section {
            padding-top: 5rem;
            @include breakpoint(large) {
                padding-top: 9rem;
            }
        }
        .philosophy-banner {
            font-size: 1.5rem;
            line-height: 1.3;
        }
    }

    .summary {
        &.section {
            padding: 5rem 0;
            @include breakpoint(large) {
                padding: 9rem 0;
            }
        }
        .sub-section {
            text-align: center;
            padding-top: 30px;
            margin-bottom: 80px;
            @include breakpoint(medium) {
                text-align: inherit;
                padding-top: 150px;
                margin-bottom: 100px;
            }
        }
        .summary-mobile {
            height: 180px;
        }
        .summary-relative-container {
            position: relative;
        }
        .summary-circle {
            position: absolute;
            top: 50%;
            @include translate(0, -50%);
            height: 1360px;
            &--left {
                right: calc(50%);
                @include breakpoint(large) {
                    right: calc(100% - 375px);
                }
                circle {
                    fill: get-color(dynamis-magenta);
                }
            }
            &--right {
                left: calc(50%);
                @include breakpoint(large) {
                    left: calc(100% - 375px);
                }
                circle {
                    fill: get-color(dynamis-yellow);
                }
            }
        }
        .summary-image {
            position: absolute;
            top: 50%;
            @include translate(0, -50%);
            width: auto;
            max-height: 600px;
            &--left {
                right: 2rem;
                @include breakpoint(large) {
                    right: 4rem;
                }
            }
            &--right {
                left: 2rem;
                @include breakpoint(large) {
                    left: 4rem;
                }
            }
        }
    }
}

</style>

<template>
    <div id='homepage' class="homepage">
        <div id="hero" class="hero">
            <div class="desktop show-for-medium">
                <div class="grid-y grid-frame">
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
                    <div class="hero-graphics-container grid-x">
                        <div class="cell small-6">
                            <svg class="circle-1 float-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMaxYMid slice" x="0" y="0">
                                <circle cx="28" cy="50" r="72" />
                            </svg>
                        </div>
                        <div class="cell small-6">
                            <svg class="circle-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMin meet" x="0" y="0">
                                <circle cx="75" cy="15" r="45" />
                            </svg>
                            <svg class="circle-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMinYMid meet" x="0" y="0">
                                <defs>
                                    <clipPath id="heroMask">
                                        <circle cx="54" cy="53" r="46" fill="#ffffff" />
                                    </clipPath>
                                </defs>
                                <image width="120" href="/storage/pictures/@2400/sarah-sophie-02.jpg" clip-path="url(#heroMask)" y="-23" />
                            </svg>
                        </div>
                    </div>
                    <button @click="scrollPastHero" class="hero-downarrow">
                        <svg class="chevron-symbol" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 26">
                            <use href="/static/icons/vector.svg#chevron-symbol" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="mobile hide-for-medium">
                <div class="grid-y grid-frame background-cover">
                    <img src="/storage/logo/atelier_dynamis.svg"/>
                </div>
            </div>
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
                <div class="grid-x grid-margin-y sub-section">
                    <div class="cell small-12 hide-for-medium">
                        <svg class="summary-mobile" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" x="0" y="0">
                            <image height="88" href="/storage/pictures/@600/home-cranio.jpg" clip-path="url(/static/icons/vector.svg#circle88)" x="-16" y="6" />
                            <image xlink:href="/static/icons/dynamis-circle.svg" height="100" />
                        </svg>
                    </div>
                    <div class="cell show-for-medium medium-6 summary-relative-container">
                        <svg class="summary-circle summary-circle--left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" x="0" y="0">
                            <circle cx="50" cy="50" r="50" />
                        </svg>
                        <svg class="summary-image summary-image--left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" x="0" y="0">
                            <image height="100" href="/storage/pictures/@1200/home-cranio.jpg" clip-path="url(/static/icons/vector.svg#circle100)" x="-22" />
                        </svg>
                    </div>
                    <div class="cell small-12 medium-6 large-4">
                        <h1 class="section-title">{{ $t("site.cranio-page.name") }}</h1>
                        <div class="separator"></div>
                        <div class="section-paragraph">{{ $t("site.homepage.cranio-summary") }}</div>
                        <div>
                            <router-link class="button button-magenta" :to="{ name: 'Cranio'}">{{ $t("site.know-more-btn") }}</router-link>
                        </div>
                    </div>
                    <div class="cell show-for-large large-2"></div>
                </div>
                <div class="sub-section show-for-medium"></div>
                <div class="grid-x grid-margin-y sub-section">
                    <div class="cell small-12 hide-for-medium">
                        <svg class="summary-mobile" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" x="0" y="0">
                            <image height="88" href="/storage/pictures/@600/home-physio.jpg" clip-path="url(/static/icons/vector.svg#circle88)" x="-19" y="6" />
                            <image xlink:href="/static/icons/dynamis-circle.svg" height="100" />
                        </svg>
                    </div>
                    <div class="cell show-for-large large-2"></div>
                    <div class="cell small-12 medium-6 large-4">
                        <h1 class="section-title">{{ $t("site.physio-page.name") }}</h1>
                        <div class="separator"></div>
                        <div class="section-paragraph">{{ $t("site.homepage.physio-summary") }}</div>
                        <div>
                            <router-link class="button button-yellow" :to="{ name: 'Physio'}">{{ $t("site.know-more-btn") }}</router-link>
                        </div>
                    </div>
                    <div class="cell show-for-medium medium-6 summary-relative-container">
                        <svg class="summary-circle summary-circle--right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" x="0" y="0">
                            <circle cx="50" cy="50" r="50" />
                        </svg>
                        <svg class="summary-image summary-image--right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" x="0" y="0">
                            <image height="100" href="/storage/pictures/@1200/home-physio.jpg" clip-path="url(/static/icons/vector.svg#circle100)" x="-25" />
                        </svg>
                    </div>
                </div>
                <div class="grid-x align-center grid-margin-x sub-section">
                    <div class="cell small-12 medium-10 large-6 xlarge-5 flex-container">
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
                    <div class="cell small-12 medium-10 large-6 xlarge-5 flex-container">
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
                top: $("#header > div.desktop").is(":visible") ? $("#hero").height() - $("#header > div.desktop").height() : $("#hero").height(),
                behavior: 'smooth',
            });
        },
    }
}
</script>
