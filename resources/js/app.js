/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import 'es6-promise/auto';
import axios from 'axios';
import vue from 'vue';

window.Vue = vue;

import VueAuth from '@websanova/vue-auth'
import VueAxios from 'vue-axios'
import VueRouter from 'vue-router'
import router from './router'
import auth from './auth'

vue.router = router;
vue.use(VueRouter);

vue.use(VueAxios, axios)
axios.defaults.baseURL = `http://localhost:8000/api/v1`;
vue.use(VueAuth, auth);

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

// Install BootstrapVue
vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
vue.use(IconsPlugin)

import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('index', require('./index.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});

