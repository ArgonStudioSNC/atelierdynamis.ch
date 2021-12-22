import { createI18n } from 'vue-i18n'

const i18n = createI18n({
    locale: window.locale || window.default_locale || 'en', // set locale
    fallbackLocale: window.fallback_locale || 'en', // set fallback locale
    messages: window.messages,
});

export default i18n;
