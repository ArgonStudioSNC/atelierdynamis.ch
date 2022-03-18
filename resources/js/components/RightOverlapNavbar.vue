<style lang="scss">

.off-canvas-content {
    height: 100%;
    padding-top: calc(90px + 2rem);
    padding-bottom: 2rem;
}

.separator {
    position: relative;
    display: inline-block;
    vertical-align: middle;
    width: 2em;
    height: 1em;
    margin-top: 1em;
    &::after {
        position: absolute;
        top: 0;
        left: 0;
        display: block;
        width: 100%;
        height: 4px;
        background: $medium-gray;
        content: "";
    }
}

.menu {
    &--navigation {
        font-family: 'Como';
        font-size: 1.75em;
        :nth-child(2) > a {
            color: get-color(dynamis-yellow);
            &:hover {
                color: scale-color(get-color(dynamis-yellow), $lightness: -14%);
            }
        }
        :nth-child(3) > a {
            color: get-color(dynamis-magenta);
            &:hover {
                color: scale-color(get-color(dynamis-magenta), $lightness: -14%);
            }
        }
    }
    &--localization {
        font-family: 'Como';
        color:red;
        font-size: 1.1em;
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
}

</style>

<template>
    <div id='navigation'>
        <div class="off-canvas position-right" id="offCanvasRightOverlap" v-foundation data-off-canvas data-transition="overlap">
            <div class="off-canvas-content grid-x grid-padding-x align-center">
                <div class="cell shrink">
                    <div class="grid-y grid-frame align-right">
                        <ul class="cell vertical menu menu--navigation">
                            <li><router-link :to="{ name: 'Home'}">{{ $t('site.homepage.name') }}</router-link></li>
                            <li><router-link :to="{ name: 'Physio'}">{{ $t('site.physio-page.name') }}</router-link></li>
                            <li><router-link :to="{ name: 'Cranio'}">{{ $t('site.cranio-page.name') }}</router-link></li>
                            <li><router-link :to="{ name: 'Practice'}">{{ $t('site.practice-page.name') }}</router-link></li>
                            <li><router-link :to="{ name: 'Courses'}">{{ $t('site.courses-page.name') }}</router-link></li>
                            <li><router-link :to="{ name: 'Contact'}">{{ $t('site.contact-page.name') }}</router-link></li>
                        </ul>
                        <div class="cell"><div class="separator"></div></div>
                        <ul class="cell vertical menu menu--localization">
                            <li><a :href="$router.resolve({params: {lang : 'de'}}).href">{{ $t('site.locales.de') }}</a></li>
                            <li><a :href="$router.resolve({params: {lang : 'fr'}}).href">{{ $t('site.locales.fr') }}</a></li>
                        </ul>
                        <div class="cell"><div class="separator"></div></div>
                        <div class="cell auto"></div>
                        <div class="cell menu--address">
                            <div>{{ $t('site.title') }}</div>
                            <i18n-t keypath="site.address" tag="div" class="cell">
                                &nbsp;|&nbsp;
                            </i18n-t>
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
        }
    },
}
</script>
