require('./bootstrap');

window.Vue = require('vue');
import router from './router';

//Vform setup
import { Form, HasError, AlertError } from 'vform'
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

const app = new Vue({
    el: '#app',
    router
});
