require('./bootstrap');

import Swal from 'sweetalert2';


window.Vue = require('vue');

Vue.component('project-tab', require('./components/ProjectTab.vue').default);
Vue.component('add-model-button', require('./components/AddModelButton.vue').default);

const app = new Vue({
    el: '#app',
});
