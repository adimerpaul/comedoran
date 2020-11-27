require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import vSelect from 'vue-select'
import 'vue-select/dist/vue-select.css';
Vue.component('v-select', vSelect)

import VueSimpleAlert from "vue-simple-alert";
import 'sweetalert2/src/sweetalert2.scss'
Vue.use(VueSimpleAlert);

Vue.use(require('vue-moment'));


import VueToast from 'vue-toast-notification';
// Import one of available themes
import 'vue-toast-notification/dist/theme-default.css';
import 'vue-toast-notification/dist/theme-sugar.css';
Vue.use(VueToast);

// const home = { template: '<div>home</div>' }
import ImageUploader from 'vue-image-upload-resize'
Vue.use(ImageUploader);
import home from './components/home';
import repostulante from './components/repostulante';
import antiguo from './components/antiguo';
import comunicados from './components/comunicados';
import nuevo from './components/nuevo';

const routes = [
    { path: '/home', component: home },
    { path: '/repostulante', component: repostulante },
    { path: '/comunicados', component: comunicados },
    { path: '/antiguo', component: antiguo },
    { path: '/nuevo', component: nuevo },
]

const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
})

const app = new Vue({
    router
}).$mount('#app')
