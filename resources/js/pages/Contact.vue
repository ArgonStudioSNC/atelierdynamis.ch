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
                                <i18n-t keypath="site.contact-page.access-content" tag="div">
                                    <div class="spacer"></div>
                                </i18n-t>
                            </div>
                            <div class="cell">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2217.2764243025695!2d7.24385034955967!3d47.13699171499327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478e195204d44eeb%3A0x9e960f5b38ff7f0c!2sRue%20Neuve%2014%2C%202502%20Bienne!5e0!3m2!1sfr!2sch!4v1704729361768!5m2!1sfr!2sch"
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
