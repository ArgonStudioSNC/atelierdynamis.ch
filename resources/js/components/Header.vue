<style lang="scss">
@import '~@sass/_mixins';

.header {
    .desktop {
        height: $titlebar-height;
        .fixed-title-bar {
            position: fixed;
            z-index: 10;
            top: 0;
            left: 0;
            right: 0;
            height: $titlebar-height;
            background-color: $topbar-background;
            .logo {
                height: calc($titlebar-height - 2rem);
                position: absolute;
                top: 1rem;
                width: auto;
            }
        }

        .fixed-hamburger {
            position: fixed;
            z-index: 20;
            top: 0;
            right: 0;
            height: $titlebar-height;
            .hamburger-button {
                position: absolute;
                right: 50px;
                top: 50%;
                padding: 3px;
                margin-top: -10px;
                cursor: pointer;
            }
        }
        &.header-scroll {
            .fixed-title-bar {
                @include transition(background-color 0.2s ease);
                .logo {
                    @include transition(height 0.2s ease);
                }
            }
            .hamburger > .bar {
                @include transition(transform 0.2s ease, background-color 0.2s ease);
            }
        }
        &.transparent {
            .fixed-title-bar {
                background-color: transparent;
                .logo {
                    @include breakpoint(medium up) {
                        height: 180px;
                    }
                    @include breakpoint(xlarge up) {
                        height: 250px;
                    }
                }
            }
            .hamburger > .bar {
                background-color: $white;
            }
        }
    }
    .mobile-fixed-bottom {
        position: fixed;
        bottom: 0;
        z-index: 50;
        background-color: $topbar-background;
        width: 100%;
        box-shadow: 3px 0 6px rgba(10, 10, 10, 0.2);
        .mobile-bar {
            height: calc($titlebar-height / 2);
            font-size: 1.2em;
            .hamburger-button {
                margin-top: 10px;
            }
        }
    }
}

.hamburger {
    cursor: pointer;
    position: relative;
    padding-top: 10px;
    height: 24px;
    width: 32px;
    &:hover > .bar {
        background: $anchor-color-hover;
    }
    .bar {
        position: absolute;
        top: 10px;
        width: 100%;
        height: 4px;
        background-color: $light-gray;
        @include transition(transform 0.2s ease);
        @include border-radius(2px);
        &:nth-child(1) {
            @include translate(0, -10px);
        }
        &:nth-child(2) {
            @include translate(0, 10px);
        }
    }
}

.off-canvas-content {
    &.is-open-right {
        .hamburger > .bar {
            background-color: $light-gray!important;
            &:nth-child(1) {
                @include rotate(45deg);
            }
            &:nth-child(2) {
                @include rotate(-45deg);
            }
            &:nth-child(3) {
                opacity: 0;
            }
        }
        .hamburger:hover > .bar {
            background: $anchor-color-hover!important;
        }
    }
    &.has-transition-overlap:not(.is-open-right) {
        .hamburger > .bar {
            @include transition(transform 0.2s ease, background-color 0.2s ease 0.2s);
        }
    }
}
.homepage {
    @include breakpoint(medium) {
        margin-top: -$titlebar-height;
    }
}
.footer {
    @include breakpoint(small only) {
        margin-bottom: calc($titlebar-height / 2);
    }
}

</style>

<template>
    <div id='header' class="header">
        <div class="desktop show-for-medium" ref="desktopHeader">
            <div class="header-padding" v-if="$route.name != 'Home'"></div>
            <div class="fixed-title-bar">
                <div class="grid-container">
                    <router-link :to="{ name: 'Home'}"><img class="logo" v-bind:src="logoImg"></router-link>
                </div>
            </div>
            <div class="fixed-hamburger">
                <div class="grid-container">
                    <button class="hamburger-button" type="button" data-toggle="offCanvasRightOverlap">
                        <div class='hamburger'>
                            <div class='bar'></div>
                            <div class='bar'></div>
                            <div class='bar'></div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
        <div class="mobile hide-for-medium">
            <div class="mobile-fixed-bottom">
                <div class="grid-container full">
                    <div class="mobile-bar grid-x align-middle text-center">
                        <div class="cell small-3">
                            <a @click="scrollToFooter">
                                <font-awesome-icon icon="fa-solid fa-phone" />
                            </a>
                        </div>
                        <div class="cell small-3">
                            <router-link :to="{ name: 'Contact'}">
                                <font-awesome-icon icon="fa-solid fa-paper-plane" />
                            </router-link>
                        </div>
                        <div class="cell small-3">
                            <a href="https://goo.gl/maps/3MJqJJds5HJuY5AU9" target="_blank">
                                <font-awesome-icon icon="fa-solid fa-location-dot" />
                            </a>
                        </div>
                        <div class="cell small-3">
                            <button class="hamburger-button" type="button" data-toggle="offCanvasRightOverlap">
                                <div class='hamburger'>
                                    <div class='bar'></div>
                                    <div class='bar'></div>
                                    <div class='bar'></div>
                                </div>
                            </button>
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
            logoImg: "/storage/logo_atelier_dynamis.svg",
        }
    },
    watch: {
        $route: {
            handler: function(to, from) {
                if(to.name == 'Home') this.enableTransition();
                if(from.name == 'Home') this.disableTransition();
            },
        },
    },
    mounted(){
        if (this.$route.name == 'Home') this.enableTransition();
    },
    destroyed () {
        if (this.$route.name == 'Home') this.disableTransition();
    },
    methods: {
        scrollHandler(event) {
            if(window.pageYOffset > 0){
                this.$refs.desktopHeader.classList.remove('transparent');
            } else {
                this.$refs.desktopHeader.classList.add('transparent');
            };
        },
        enableTransition() {
            window.addEventListener('scroll', this.scrollHandler);
            this.scrollHandler();
            this.$refs.desktopHeader.classList.add('header-scroll');
        },
        disableTransition() {
            this.$refs.desktopHeader.classList.remove('header-scroll');
            window.removeEventListener('scroll', this.scrollHandler);
            this.$refs.desktopHeader.classList.remove('transparent');
        },
        scrollToFooter() {
            window.scrollTo({
                top: document.body.scrollHeight,
                behavior: 'smooth',
            });
        },
    },
}
</script>
