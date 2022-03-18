<style lang="scss">

.hero {
    .hero-title-container {
        height: 100%;
        .hero-title {
            width: 50%;
            height: 100%;
            padding-right: 2rem;
            button {
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
    }
    .chevron {
        height: 2rem;
    }
}

</style>

<template>
    <div id='homepage'>
        <div id="hero" class="hero grid-y grid-frame">
            <div class="cell hero-title-container grid-container">
                <div class="hero-title grid-x align-middle">
                    <div class="cell">
                        <h1><b>atelier dynamis</b>, dolor sit amet, consectetuer adipiscing elit.</h1>
                        <button class="button">en savoir +</button>
                    </div>
                </div>
            </div>
            <div class="cell hero-graphics-container">
                <svg class="circle-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMaxYMid slice" x="0" y="0">
                    <circle cx="28" cy="50" r="72" />
                </svg>
                <svg class="circle-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMin meet" x="0" y="0">
                    <circle cx="75" cy="15" r="45" />
                </svg>
                <svg class="circle-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMinYMid meet" x="0" y="0">
                    <defs>
                        <clipPath id="circle-mask">
                            <circle cx="35" cy="52" r="30" fill="#ffffff" />
                        </clipPath>
                    </defs>
                    <image width="80" xlink:href="/storage/images/DSC00739.jpg" clip-path="url(#circle-mask)" y="2" />
                </svg>
            </div>
            <button class="cell hero-downarrow">
                <img class="chevron" src="/static/icons/vector.svg#chevron-white" />
            </button>
        </div>



        <i18n-t keypath="site.homepage.dynamis-phylosophy" tag="p">
            <br />
        </i18n-t>
        <div>Résumé et <router-link :to="{ name: 'Physio'}">lien vers Physio</router-link></div>
        <div>Résumé et <router-link :to="{ name: 'Cranio'}">lien vers Cranio</router-link></div>
        <div>Résumé et <router-link :to="{ name: 'Practice'}">lien vers Practice</router-link></div>
        <div>Résumé et <router-link :to="{ name: 'Courses'}">lien vers Courses</router-link></div>
        <div>Résumé et <router-link :to="{ name: 'Contact'}">lien vers Contact</router-link></div>
    </div>
</template>

<script>
export default {

}
</script>
