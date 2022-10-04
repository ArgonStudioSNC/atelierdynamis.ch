<style lang="scss">
@import '~@sass/_mixins';

.navigation {
    padding-top: calc(30px + 2rem);
    @include breakpoint(medium up) {
        padding-top: calc(90px + 2rem);
    }
    padding-bottom: 2rem;
    .menu {
        text-transform: lowercase;
        li > a {
            float: right;
        }
        &--navigation {
            font-family: 'Como';
            font-size: 1.3em;
            @include breakpoint(medium up) {
                font-size: 1.75em;
            }
            :nth-child(2) > a {
                color: get-color(dynamis-magenta);
                &:hover {
                    color: scale-color(get-color(dynamis-magenta), $lightness: -14%);
                }
            }
            :nth-child(3) > a {
                color: get-color(dynamis-yellow);
                &:hover {
                    color: scale-color(get-color(dynamis-yellow), $lightness: -14%);
                }
            }
        }
        &--localization {
            font-family: 'Como';
            color:red;
            @include breakpoint(medium) {
                font-size: 1.1em;
            }
            li > a {
                line-height: $global-lineheight;
                padding: 0;
            }
        }
        &--address {
            :nth-child(1) {
                font-family: 'Como';
                font-weight: 600;
            }
        }
        @include breakpoint(small only) {
            a {
                padding: 1rem 0;
            }
        }
    }
}

</style>

<template>
    <div id='navigation' class="navigation">
        <div class="grid-x align-center text-right">
            <div class="cell small-11 medium-shrink">
                <div class="grid-y grid-frame">
                    <ul class="cell vertical menu menu--navigation text-right clearfix">
                        <li><router-link :to="{ name: 'Home'}" data-close>{{ $t('site.homepage.name') }}</router-link></li>
                        <li><router-link :to="{ name: 'Cranio'}" data-close>{{ $t('site.cranio-page.name') }}</router-link></li>
                        <li><router-link :to="{ name: 'Physio'}" data-close>{{ $t('site.physio-page.name') }}</router-link></li>
                        <li><router-link :to="{ name: 'Practice'}" data-close>{{ $t('site.practice-page.name') }}</router-link></li>
                        <li><router-link :to="{ name: 'Courses'}" data-close>{{ $t('site.courses-page.name') }}</router-link></li>
                        <li><router-link :to="{ name: 'Contact'}" data-close>{{ $t('site.contact-page.name') }}</router-link></li>
                    </ul>
                    <div class="cell"><div class="separator separator--strong"></div></div>
                    <ul class="cell vertical menu menu--localization clearfix">
                        <li v-for="local in localization">
                            <a v-if="local.tag != $route.params.lang" :href="$router.resolve({params: {lang : local.tag}}).href"  data-close>
                                {{ $t(local.path) }}
                            </a>
                        </li>
                    </ul>
                    <div class="cell align-self-right"><div class="separator separator--strong"></div></div>
                    <div class="cell auto"></div>
                    <div class="cell vertical menu menu--address">
                        <div>{{ $t('site.title') }}</div>
                        <i18n-t keypath="site.address" tag="div" class="cell">
                            &nbsp;|&nbsp;
                        </i18n-t>
                    </div>
                </div>
            </div>
            <div class="cell small-1 medium-shrink"></div>
        </div>
    </div>
</template>

<script>
export default {
    data () {
        return {
            localization: [
                {tag: "de", path: "site.locales.de"},
                {tag: "fr", path: "site.locales.fr"}
            ]
        }
    },
}
</script>
