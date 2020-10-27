// require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import VueSimpleAlert from "vue-simple-alert";
import 'sweetalert2/src/sweetalert2.scss'
Vue.use(VueSimpleAlert);

Vue.use(require('vue-moment'));


import VueToast from 'vue-toast-notification';
// Import one of available themes
import 'vue-toast-notification/dist/theme-default.css';
import 'vue-toast-notification/dist/theme-sugar.css';




Vue.use(VueToast);

import home from './components/home';
import repostulante from './components/repostulante';
import comunicados from './components/comunicados';

// const home = { template: '<div>home</div>' }

const routes = [
    { path: '/home', component: home },
    { path: '/repostulante', component: repostulante },
    { path: '/comunicados', component: comunicados },
]

const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
})

const app = new Vue({
    router
}).$mount('#app')
