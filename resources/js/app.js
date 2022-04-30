import './bootstrap';
import Vue from 'vue';
// import Vuetify from 'vuetify';

import Routes from '@/js/routes';

import App from '@/js/views/App';

// Vue.use(Vuetify);
Vue.config.productionTip = false;

const app = new Vue({
    el: '#app',
    router: Routes,
    render: h => h(App),
    // vuetify : new Vuetify(),
});
