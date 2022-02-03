<style lang="scss">

</style>

<template>
    <div id='contact-page'>
        <div style="height: 65px;"></div>
        <div class="grid-container">
            <div class="grid-x grid-margin-y">
                <h2 class="cell">{{ $t('site.contact-page.name') }}</h2>

                <div class="cell">
                    <h5>{{ $t('site.contact-page.title') }}</h5>
                    <div>{{ $t('site.contact-page.subtitle') }}</div>
                    <i18n-t keypath="site.contact-page.address" tag="div">
                        <br />
                    </i18n-t>
                </div>

                <div class="cell">
                    <ContactFormComponent></ContactFormComponent>
                </div>

                <div class="cell">
                    <i18n-t keypath="site.contact-page.access" tag="div">
                        <br />
                    </i18n-t>
                </div>

                <div class="cell">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2714.2135053637858!2d7.2396564157609085!3d47.13408302849203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478e1950365508ab%3A0xa493c70904e4b54a!2sPl.%20de%20la%20Gare%201%2C%202502%20Bienne!5e0!3m2!1sfr!2sch!4v1641890906232!5m2!1sfr!2sch"
                        width="600"
                        height="450"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import ContactFormComponent from '@js/components/ContactForm';
export default {
    components: {
        ContactFormComponent
    },
    data () {
        return {
        }
    },
}
</script>
