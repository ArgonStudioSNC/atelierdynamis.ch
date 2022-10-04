require('./foundation');

import { createApp } from 'vue'
import i18n from '@js/i18n.js'
import router from '@js/routes.js'

import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
/* import specific icons */
import { faPhone, faEnvelope, faPaperPlane, faLocationDot, faBars } from '@fortawesome/free-solid-svg-icons'
library.add(faPhone, faEnvelope, faPaperPlane, faLocationDot, faBars)

const app = createApp({

});

app.use(router);
app.use(i18n);
app.directive('foundation', {
    mounted(el) {
        $(el).foundation()
    },
    beforeUnmount(el) {
        $(el).foundation("destroy");
    }
});

app.component('font-awesome-icon', FontAwesomeIcon);

app.mount('#app');
