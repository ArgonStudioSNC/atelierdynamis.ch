<style lang="scss">
@import '~@sass/_mixins';

.footer {
    padding: 2rem 0 3rem 0;
    color: $light-gray;
    background-color: $white;
    @include breakpoint(small only) {
        text-align: center;
    }
    @include breakpoint(large) {
        padding: 0;
    }
    .circle {
        position: absolute;
        left: 0;
        right: 0;
        width: 100%;
        height: 100%;
    }
    .contact {
        text-transform: lowercase;
        @include breakpoint(large) {
            font-size: 1.25em;
            line-height: 1.4;
        }
        .contact-name {
            font-family: 'Como';
            font-weight: bold;
            @include breakpoint(large) {
                line-height: 1.2;
                font-size: 2rem;
            }
        }
        &--magenta {
            .separator::after {
                background: get-color(dynamis-magenta);
            }
        }
        &--yellow {
            .separator::after {
                background: get-color(dynamis-yellow);
            }
        }
    }

    .footer-left, .footer-right {
        position: relative;
        .contact {
            color: $white;
            position: absolute;
            left: 0;
            right: 0;
        }
        a {
            color: $white;
        }
    }
    .footer-left {
        margin-top: 2rem;
        .circle {
            fill: get-color(dynamis-magenta);
        }
        .contact {
            top: 60%;
            @include translate(0, -60%);
        }
    }
    .footer-right {
        margin-bottom: 2rem;
        .circle {
            fill: get-color(dynamis-yellow);
        }
        .contact {
            top: 40%;
            @include translate(0, -40%);
        }
    }
    .atelier {
        text-transform: lowercase;
        @include breakpoint(large) {
            padding: 0 $global-padding;
            margin-bottom: $global-margin;
        }
        .logo {
            max-width: 200px;
            height: auto;
        }
        .title {
            font-family: 'Como';
            font-weight: bold;
        }
    }
}
</style>

<template>
    <div id='footer' class='footer'>
        <div class='grid-container'>
            <div class="hide-for-large grid-x grid-margin-y">
                <div class="cell small-12 medium-6">
                    <div class="atelier">
                        <div class="title">{{ $t('site.title') }}</div>
                        <i18n-t keypath="site.address" tag="div">
                            <br />
                        </i18n-t>
                    </div>
                </div>
                <div class="cell small-12 medium-6">
                    <div class="grid-y grid-margin-y">
                        <div class="cell contact contact--magenta">
                            <div class="contact-name">sarah meier</div>
                            <div class="separator"></div>
                            <div>{{ $t('site.cranio-page.name') }}</div>
                            <a href="tel:+41763288990">t. +41 76 328 89 90</a>
                        </div>
                        <div class="cell contact contact--yellow">
                            <div class="contact-name">sophie charrière</div>
                            <div class="separator"></div>
                            <div>{{ $t('site.physio-page.name') }}</div>
                            <a href="tel:+41774569616">t. +41 77 456 96 16</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="show-for-large grid-x text-center">
                <div class="cell large-4 footer-left">
                    <svg class="circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" x="0" y="0" preserveAspectRatio="xMidYMin slice" >
                        <circle cx="50" cy="50" r="50" />
                    </svg>
                    <div class="contact">
                        <div class="contact-name">sarah meier</div>
                        {{ $t('site.cranio-page.name') }}<br />
                        <a href="tel:+41763288990">t. +41 76 328 89 90</a>
                    </div>
                </div>
                <div class="cell auto align-self-middle">
                    <div class="atelier">
                        <img class="logo" v-bind:src="logo_img">
                        <div class="title">{{ $t('site.title') }}</div>
                        <i18n-t keypath="site.address" tag="div">
                            &nbsp;|&nbsp;
                        </i18n-t>
                    </div>
                </div>
                <div class="cell large-4 footer-right">
                    <svg class="circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" x="0" y="0" preserveAspectRatio="xMidYMax slice" >
                        <circle cx="50" cy="50" r="50" />
                    </svg>
                    <div class="contact">
                        <div class="contact-name">sophie charrière</div>
                        {{ $t('site.physio-page.name') }}<br />
                        <a href="tel:+41774569616">t. +41 77 456 96 16</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data () {
        return {
            logo_img: "/storage/logo_atelier_dynamis.svg",
        }
    },
}
</script>
