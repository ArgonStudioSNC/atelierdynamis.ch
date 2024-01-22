<style lang="scss">
@import '~@sass/_mixins';

.practice-page {
    .page-title-image {
        background-position: 50% 72%;
        background-image: url(/storage/pictures/@600/practice-banner.jpg);
        @include breakpoint(600px) {
            background-image: url(/storage/pictures/@1200/practice-banner.jpg);
        }
        @include breakpoint(1200px) {
            background-image: url(/storage/pictures/@2400/practice-banner.jpg);
        }
    }
    .portrait-image {
        width: 140px;
        @include breakpoint(medium up) {
            width: 190px;
        }
    }

    .card {
        .portrait {
            color: $light-gray;
            font-family: 'Como';
            font-size: 1.25rem;
            line-height: 1.2;
        }
        .formation-title {
            text-transform: lowercase;
            color: get-color(dynamis-yellow);
            font-family: 'Como';
            font-size: 1.5rem;
            font-weight: 600;
        }
        &.card--magenta .formation-title {
            color: get-color(dynamis-magenta);
        }
        &.card--yellow .formation-title {
            color: get-color(dynamis-yellow);
        }
    }

    .expandable {
        //TODO fix expandable flickering
        @include breakpoint(small only) {
            max-height: calc(2.4em + 30px);
            overflow: hidden;
            &.expanded {
                max-height: 300vh;
            }
            &:not(.expanded) {
                .ellipsis {
                    @include ellipsis(2);
                }
            }
        }
        transition: max-height .2s ease-in-out;
    }
}

</style>

<template>
    <div id='practice-page' class="practice-page">
        <div class="page-title page-title--gray">
            <div class="page-title-image"></div>
            <div class="grid-container">
                <h2 class="page-title-content">{{ $t('site.practice-page.name') }}</h2>
            </div>
        </div>
        <div class="section section--bg-gray">
            <div class="grid-container">
                <div class="grid-x grid-margin-x align-center">
                    <div class="cell small-12 xlarge-6 card card--magenta">
                        <div class="card-section" data-toggle="sarahExpandable">
                            <div class="grid-x grid-margin-y">
                                <div class="cell">
                                    <div class="grid-x grid-margin-x align-middle">
                                        <div class="cell shrink">
                                            <svg class="portrait-image" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" x="0" y="0">
                                                <defs>
                                                    <clipPath id="circle-mask" clipPathUnits="userSpaceOnUse">
                                                        <circle cx="50" cy="50" r="50" />
                                                    </clipPath>
                                                </defs>
                                                <image width="100" href="/storage/pictures/@600/portrait-sarah.jpg" clip-path="url(#circle-mask)" y="-10" />
                                            </svg>
                                        </div>
                                        <div class="cell auto">
                                            <h1 class="card-section-title">sarah meier</h1>
                                            <div class="separator"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <div id="sarahExpandable" class="grid-x grid-margin-y expandable" v-foundation data-toggler=".expanded">
                                        <div class="cell">
                                            <i18n-t keypath="site.practice-page.sarah-portrait" tag="div" class="portrait ellipsis">
                                                <div class="spacer"></div>
                                            </i18n-t>
                                        </div>
                                        <div class="cell">
                                            <div class="formation-title">{{ $t('site.practice-page.formation-title') }}</div>
                                            <div class="separator"></div>
                                            <div class="grid-x grid-margin-y">
                                                <div class="cell">
                                                    <div class="strong-text">{{ $t('site.practice-page.sarah-formation1.title') }}</div>
                                                    <i18n-t keypath="site.practice-page.sarah-formation1.content" tag="div">
                                                        <br />
                                                    </i18n-t>
                                                </div>
                                                <div class="cell">
                                                    <div class="strong-text">{{ $t('site.practice-page.sarah-formation2.title') }}</div>
                                                    <i18n-t keypath="site.practice-page.sarah-formation2.content" tag="div">
                                                        <br />
                                                    </i18n-t>
                                                </div>
                                                <div class="cell">
                                                    <div class="strong-text">{{ $t('site.practice-page.sarah-formation3.title') }}</div>
                                                    <i18n-t keypath="site.practice-page.sarah-formation3.content" tag="div">
                                                        <br />
                                                    </i18n-t>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cell small-12 xlarge-6 card card--yellow">
                        <div class="card-section" data-toggle="sophieExpandable">
                            <div class="grid-x grid-margin-y">
                                <div class="cell">
                                    <div class="grid-x grid-margin-x align-middle">
                                        <div class="cell shrink">
                                            <svg class="portrait-image" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" x="0" y="0">
                                                <defs>
                                                    <clipPath id="circle-mask" clipPathUnits="userSpaceOnUse">
                                                        <circle cx="50" cy="50" r="50" />
                                                    </clipPath>
                                                </defs>
                                                <image width="100" href="/storage/pictures/@600/portrait-sophie.jpg" clip-path="url(#circle-mask)" y="-10" />
                                            </svg>
                                        </div>
                                        <div class="cell auto">
                                            <h1 class="card-section-title">sophie charrière</h1>
                                            <div class="separator"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <div id="sophieExpandable" class="grid-x grid-margin-y expandable" v-foundation data-toggler=".expanded">
                                        <div class="cell">
                                            <i18n-t keypath="site.practice-page.sophie-portrait" tag="div" class="portrait ellipsis">
                                                <div class="spacer"></div>
                                            </i18n-t>
                                        </div>
                                        <div class="cell">
                                            <div class="formation-title">{{ $t('site.practice-page.formation-title') }}</div>
                                            <div class="separator"></div>
                                            <div class="grid-x grid-margin-y">
                                                <div class="cell">
                                                    <div>{{ $t('site.practice-page.sophie-degree') }}</div>
                                                </div>
                                                <div class="cell">
                                                    <div class="strong-text">{{ $t('site.practice-page.sophie-formation1.title') }}</div>
                                                    <i18n-t keypath="site.practice-page.sophie-formation1.content" tag="div">
                                                        <br />
                                                    </i18n-t>
                                                </div>
                                                <div class="cell">
                                                    <div class="strong-text">{{ $t('site.practice-page.sophie-formation2.title') }}</div>
                                                    <i18n-t keypath="site.practice-page.sophie-formation2.content" tag="div">
                                                        <br />
                                                    </i18n-t>
                                                </div>
                                                <div class="cell">
                                                    <div class="strong-text">{{ $t('site.practice-page.sophie-formation3.title') }}</div>
                                                    <i18n-t keypath="site.practice-page.sophie-formation3.content" tag="div">
                                                        <br />
                                                    </i18n-t>
                                                </div>
                                                <div class="cell">
                                                    <div class="strong-text">{{ $t('site.practice-page.sophie-formation4.title') }}</div>
                                                    <i18n-t keypath="site.practice-page.sophie-formation4.content" tag="div">
                                                        <br />
                                                    </i18n-t>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cell hide small-12 xlarge-6 card card--magenta">
                        <div class="card-section" data-toggle="dagmarExpandable">
                            <div class="grid-x grid-margin-y">
                                <div class="cell">
                                    <div class="grid-x grid-margin-x align-middle">
                                        <div class="cell shrink">
                                            <svg class="portrait-image" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" x="0" y="0">
                                                <defs>
                                                    <clipPath id="circle-mask" clipPathUnits="userSpaceOnUse">
                                                        <circle cx="50" cy="50" r="50" />
                                                    </clipPath>
                                                </defs>
                                                <image width="100" href="/storage/pictures/@600/portrait-dagmar.jpg" clip-path="url(#circle-mask)" y="-10" />
                                            </svg>
                                        </div>
                                        <div class="cell auto">
                                            <h1 class="card-section-title">dagmar hopf</h1>
                                            <div class="separator"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <div id="dagmarExpandable" class="grid-x grid-margin-y expandable" v-foundation data-toggler=".expanded">
                                        <div class="cell">
                                            <i18n-t keypath="site.practice-page.dagmar-portrait" tag="div" class="portrait ellipsis">
                                                <div class="spacer"></div>
                                            </i18n-t>
                                        </div>
                                        <div class="cell">
                                            <div class="formation-title">{{ $t('site.practice-page.formation-title') }}</div>
                                            <div class="separator"></div>
                                            <div class="grid-x grid-margin-y">
                                                <div class="cell">
                                                    <div class="strong-text">{{ $t('site.practice-page.dagmar-formation1.title') }}</div>
                                                    <i18n-t keypath="site.practice-page.dagmar-formation1.content" tag="div">
                                                        <br />
                                                    </i18n-t>
                                                </div>
                                                <div class="cell">
                                                    <div class="strong-text">{{ $t('site.practice-page.dagmar-formation2.title') }}</div>
                                                    <i18n-t keypath="site.practice-page.dagmar-formation2.content" tag="div">
                                                        <br />
                                                    </i18n-t>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cell hide small-12 xlarge-6 card card--magenta">
                        <div class="card-section" data-toggle="anjaExpandable">
                            <div class="grid-x grid-margin-y">
                                <div class="cell">
                                    <div class="grid-x grid-margin-x align-middle">
                                        <div class="cell shrink">
                                            <svg class="portrait-image" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" x="0" y="0">
                                                <defs>
                                                    <clipPath id="circle-mask" clipPathUnits="userSpaceOnUse">
                                                        <circle cx="50" cy="50" r="50" />
                                                    </clipPath>
                                                </defs>
                                                <image width="100" href="/storage/pictures/@600/portrait-anja.jpg" clip-path="url(#circle-mask)" y="-10" />
                                            </svg>
                                        </div>
                                        <div class="cell auto">
                                            <h1 class="card-section-title">anja eggimann</h1>
                                            <div class="separator"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <div id="anjaExpandable" class="grid-x grid-margin-y expandable" v-foundation data-toggler=".expanded">
                                        <div class="cell">
                                            <i18n-t keypath="site.practice-page.anja-portrait" tag="div" class="portrait ellipsis">
                                                <div class="spacer"></div>
                                            </i18n-t>
                                        </div>
                                        <div class="cell">
                                            <div class="formation-title">{{ $t('site.practice-page.formation-title') }}</div>
                                            <div class="separator"></div>
                                            <div class="grid-x grid-margin-y">
                                                <div class="cell">
                                                    <div class="strong-text">{{ $t('site.practice-page.anja-formation1.title') }}</div>
                                                    <i18n-t keypath="site.practice-page.anja-formation1.content" tag="div">
                                                        <br />
                                                    </i18n-t>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="section section--bg-gray">
            <div class="grid-container">
                <div class="grid-x align-center grid-margin-x grid-margin-y">
                    <div class="cell small-10">
                        <div class="section-title"><h1>{{ $t('site.practice-page.our-office') }}</h1></div>
                        <div class="separator"></div>
                    </div>
                    <div class="cell small-10 medium-5">
                        <picture>
                            <source media="(min-width:1200px)" srcset="/storage/pictures/@2400/practice-gallery-01.jpg">
                            <source media="(min-width:600px)" srcset="/storage/pictures/@1200/practice-gallery-01.jpg">
                            <img src="/storage/pictures/@600/practice-gallery-01.jpg" alt="practice picture">
                        </picture>
                    </div>
                    <div class="cell small-10 medium-5">
                        <picture>
                            <source media="(min-width:1200px)" srcset="/storage/pictures/@2400/practice-gallery-00.jpg">
                            <source media="(min-width:600px)" srcset="/storage/pictures/@1200/practice-gallery-00.jpg">
                            <img src="/storage/pictures/@600/practice-gallery-00.jpg" alt="practice picture">
                        </picture>
                    </div>
                    <div class="cell small-10 medium-5">
                        <picture>
                            <source media="(min-width:1200px)" srcset="/storage/pictures/@2400/practice-gallery-03.jpg">
                            <source media="(min-width:600px)" srcset="/storage/pictures/@1200/practice-gallery-03.jpg">
                            <img src="/storage/pictures/@600/practice-gallery-03.jpg" alt="practice picture">
                        </picture>
                    </div>
                    <div class="cell small-10 medium-5">
                        <picture>
                            <source media="(min-width:1200px)" srcset="/storage/pictures/@2400/practice-gallery-02.jpg">
                            <source media="(min-width:600px)" srcset="/storage/pictures/@1200/practice-gallery-02.jpg">
                            <img src="/storage/pictures/@600/practice-gallery-02.jpg" alt="practice picture">
                        </picture>
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
