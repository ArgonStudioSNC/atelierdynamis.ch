<style lang="scss">
.footer {
    color: $light-gray;
    background-color: $white;
    .circle {
        width: 100%
    }
    .contact {
        text-transform: lowercase;
        font-size: 1.25em;
        line-height: 1.4;
        color: $white;
        position: absolute;
        left: 0;
        right: 0;
        margin: auto;
        .contact-name {
            font-family: 'Como';
            line-height: 1.2;
            font-size: 2rem;
            font-weight: bold;
        }
    }
    a {
        color: $white;
    }

    .footer-left {
        padding-top: 2rem;
        position: relative;
        .circle {
            fill: get-color(dynamis-magenta);
            vertical-align: bottom;
        }
        .contact {
            bottom: 2.5rem;
        }
    }
    .footer-right {
        padding-bottom: 2rem;
        position: relative;
        .circle {
            fill: get-color(dynamis-yellow);
        }
        .contact {
            top: 2.5rem;
        }
    }
    .footer-middle {
        text-transform: lowercase;
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
        <div class="grid-container">
            <div class="grid-x text-center">
                <div class="cell small-4 align-self-bottom">
                    <div class="footer-left">
                        <svg class="circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 50" x="0" y="0">
                            <circle cx="50" cy="50" r="50" />
                        </svg>
                        <div class="contact">
                            <div class="contact-name">sarah meier</div>
                            {{ $t('site.cranio-page.name') }}<br />
                            <a href="tel:+41763288990">t. +41 76 328 89 90</a>
                        </div>
                    </div>
                </div>
                <div class="cell auto align-self-middle">
                    <div class="footer-middle">
                        <img class="logo" v-bind:src="logo_img">
                        <div class="title">{{ $t('site.title') }}</div>
                        <i18n-t keypath="site.address" tag="div">
                            &nbsp;|&nbsp;
                        </i18n-t>
                    </div>
                </div>
                <div class="cell small-4">
                    <div class="footer-right">
                        <svg class="circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 50" x="0" y="0">
                            <circle cx="50" cy="0" r="50" />
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
