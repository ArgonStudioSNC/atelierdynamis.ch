<style lang="scss">

.contact-page {
    .page-title-image {
        background-position: 50% 35%;
        background-image: url(/storage/pictures/@600/sarah-sophie-01.jpg);
        @include breakpoint(600px) {
            background-image: url(/storage/pictures/@1200/sarah-sophie-01.jpg);
        }
        @include breakpoint(1200px) {
            background-image: url(/storage/pictures/@2400/sarah-sophie-01.jpg);
        }
    }
    .strong {
        font-family: 'Como';
        font-weight: 600;
        color: $light-gray;
    }
}

</style>

<template>
    <div id='contact-page' class="contact-page">
        <div class="page-title page-title--gray">
            <div class="page-title-image"></div>
            <div class="grid-container">
                <h2 class="page-title-content">{{ $t('site.contact-page.name') }}</h2>
            </div>
        </div>
        <div class="section section--bg-gray">
            <div class="grid-container">
                <div class="grid-x align-center">
                    <div class="cell small-12 medium-8 xlarge-4">
                        <ContactFormComponent></ContactFormComponent>
                    </div>
                    <div class="cell show-for-xlarge xlarge-1"></div>
                    <div class="cell small-12 medium-10 xlarge-5">

                        <div class="grid-x grid-margin-y">
                            <div class="cell">
                                <div class="strong">{{ $t('site.title') }}</div>
                                <i18n-t keypath="site.address" tag="div" class="text-lowercase">
                                    &nbsp;|&nbsp;
                                </i18n-t>
                            </div>
                            <div class="cell">
                                <div class="strong text-lowercase">{{ $t('site.contact-page.access') }}</div>
                                <div class="separator"></div>
                                <div>{{ $t('site.contact-page.access-content') }}</div>
                            </div>
                            <div class="cell">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2714.2135053637858!2d7.2396564157609085!3d47.13408302849203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478e1950365508ab%3A0xa493c70904e4b54a!2sPl.%20de%20la%20Gare%201%2C%202502%20Bienne!5e0!3m2!1sfr!2sch!4v1641890906232!5m2!1sfr!2sch"
                                    width="100%"
                                    height="450"
                                    style="border:0;"
                                    allowfullscreen=""
                                    loading="lazy">
                                </iframe>
                            </div>
                        </div>
                    </div>
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
}
</script>
