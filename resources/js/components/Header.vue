<style lang="scss">
@import '~@sass/_mixins';

.header-padding {
    height: $titlebar-height;
}
.header-fixed {
    width: 100%;
    position: fixed;
    top: 0;
    z-index: 50;
    background-color: $topbar-background;
    .title-bar {
        height: $titlebar-height;
        .logo {
            height: calc($titlebar-height - 2rem);
            position: absolute;
            top: 1rem;
            width: auto;
        }
        .menu-btn {
            position: absolute;
            right: 50px;
            top: 50%;
            padding: 3px;
            z-index: 50;
            @include translate(0, calc(-50% + 2px));
            cursor: pointer;
        }
    }
    &.header-scroll {
        @include transition(background-color 0.2s ease);
        .logo {
            @include transition(height 0.2s ease);
        }
        .hamburger > .bar {
            @include transition(transform 0.2s ease, background-color 0.2s ease);
        }
    }
    &.transparent {
        background-color: transparent;
        .logo {
            height: 250px;
        }
        .hamburger > .bar {
            background-color: $white;
        }
    }
}

.hamburger {
    cursor: pointer;
    position: relative;
    height: 24px;
    width: 32px;
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
    }
    &.has-transition-overlap:not(.is-open-right) {
        .hamburger > .bar {
            @include transition(transform 0.2s ease, background-color 0.2s ease 0.2s);
        }
    }
}

</style>

<template>
    <div id='header' class="header">
        <div class="header-padding" v-if="$route.name != 'Home'"></div>
        <div class="header-fixed" ref="header">
            <div class="grid-container">
                <div class="title-bar">
                    <div class="title-bar-left">
                        <router-link :to="{ name: 'Home'}"><img class="logo" v-bind:src="logoImg"></router-link>
                    </div>
                    <div class="title-bar-right">
                        <button class="menu-btn" type="button" data-toggle="offCanvasRightOverlap">
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
                this.$refs.header.classList.remove('transparent');
            } else {
                this.$refs.header.classList.add('transparent');
            };
        },
        enableTransition() {
            window.addEventListener('scroll', this.scrollHandler);
            this.scrollHandler();
            this.$refs.header.classList.add('header-scroll');
        },
        disableTransition() {
            this.$refs.header.classList.remove('header-scroll');
            window.removeEventListener('scroll', this.scrollHandler);
            this.$refs.header.classList.remove('transparent');
        },
    },
}
</script>
