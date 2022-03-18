require('./foundation');
require('@fortawesome/fontawesome-free/js/solid.min');
require('@fortawesome/fontawesome-free/js/fontawesome.min');

import { createApp } from 'vue'
import i18n from '@js/i18n.js'
import router from '@js/routes.js'

const app = createApp({

});

app.use(router);
app.use(i18n);
app.directive('foundation', {
    mounted(el) {
        $(el).foundation()
    },
    beforeUnmount(el) {
        $(el).foundation.destroy()
    }
});
app.mount('#app');
