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

    .contact {
        text-transform: lowercase;

        .contact-name {
            font-family: 'Como';
            font-weight: bold;
        }

        @each $colorname, $color in $dynamis-palette {
            &--#{$colorname} {
                .separator::after {
                    background: $color;
                }
            }
        }
    }

    .atelier {
        text-transform: lowercase;
        text-wrap: none;
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
                            <br/>
                        </i18n-t>
                    </div>
                </div>
                <div class="cell small-12 medium-6">
                    <div class="grid-y grid-margin-y">
                        <template v-for="(person, key) in persons">
                            <div :class="'cell contact contact--' + person.tag">
                                <div class="contact-name">{{ person.name }}</div>
                                <div class="separator show-for-medium"></div>
                                <div v-for="activity in person.activities">{{
                                        $t('site.' + activity + '-page.name')
                                    }}<br/></div>
                                <a :href="'tel:'+person.phone.replaceAll(' ','')">t. {{ person.phone }}</a>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
            <div class="show-for-large grid-x text-center">
                <div class="cell auto" style="position: relative;">
                    <FooterCircleComponent :person=persons.sophie />
                </div>
                <div class="cell auto" style="position: relative;">
                    <FooterCircleComponent :person=persons.anja />
                </div>
                <div class="cell large-3 align-self-middle">
                    <div class="atelier">
                        <img class="logo" v-bind:src="logo_img">
                        <div class="title">{{ $t('site.title') }}</div>
                        <i18n-t keypath="site.address" tag="div">
                            &nbsp;|&nbsp;
                        </i18n-t>
                    </div>
                </div>
                <div class="cell auto" style="position: relative;">
                    <FooterCircleComponent :person=persons.dagmar />
                </div>
                <div class="cell auto" style="position: relative;">
                    <FooterCircleComponent :person=persons.sarah />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import FooterCircleComponent from '@js/components/FooterCircle';

export default {
    components: {
        FooterCircleComponent,
    },
    data() {
        return {
            logo_img: "/storage/logo/atelier_dynamis.svg",
            persons: {
                sophie: {
                    tag: 'sophie',
                    name: 'Sophie Charrière',
                    email: 'sophie.charriere@atelierdynamis.ch',
                    phone: '+41 77 456 96 16',
                    activities: ['physio'],
                },
                sarah: {
                    tag: 'sarah',
                    name: 'Sarah Meier',
                    email: 'sarah.meier@atelierdynamis.ch',
                    phone: '+41 76 328 89 90',
                    activities: ['cranio', 'physio'],
                },
                anja: {
                    tag: 'anja',
                    name: 'Anja Eggimann',
                    email: 'anja.eggimann@atelierdynamis.ch',
                    phone: '+41 79 931 83 38',
                    activities: ['cranio', 'physio'],
                },
                dagmar: {
                    tag: 'dagmar',
                    name: 'Dagmar Hopf',
                    email: 'dagmar.hopf@atelierdynamis.ch',
                    phone: '+41 79 801 86 78',
                    activities: ['physio'],
                },
            }
        }
    },
    created() {
    },
}
</script>
