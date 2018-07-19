/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import './bootstrap';

import vue from 'vue';
window.Vue = vue;

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import embedMap from './components/EmbedMap';
import saveShops from './components/SaveShops';

Vue.component(embedMap.name, embedMap);
Vue.component(saveShops.name, saveShops);

const app = new Vue({
    el: '#app'
});