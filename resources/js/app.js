require('./bootstrap');

import Swal from 'sweetalert2';
import Vue from 'vue';
import axios from 'axios';
import VueAxios from 'vue-axios';
import Jquery from 'jquery';

window.$ = Jquery;
window.Swal = Swal;

Vue.component('project-tab', require('./components/ProjectTab.vue').default);
Vue.component('task-tab', require('./components/TaskTab.vue').default);
Vue.component('add-model-button', require('./components/AddModelButton.vue').default);
Vue.component('form-submit-button', require('./components/FormSubmitButton.vue').default);
Vue.component('close-modal', require('./components/CloseModal.vue').default);

Vue.use(VueAxios, axios);

const app = new Vue({
    el: '#app',
});
