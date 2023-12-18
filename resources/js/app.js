require('./bootstrap');

require('alpinejs');

import { createApp } from "vue";
import router from './router'
import store from './store/index';
import VueSweetalert2 from "vue-sweetalert2";


import 'sweetalert2/dist/sweetalert2.min.css';


createApp({
}).use(store).use(VueSweetalert2).use(router).mount('#app')
