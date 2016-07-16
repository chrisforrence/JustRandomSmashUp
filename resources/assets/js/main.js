// main.js
var Vue = require('vue');
var VueResource = require('vue-resource');
Vue.use(VueResource);

var App = require('./App.vue');

new Vue({
    el: 'body',
    components: {
        app: App
    }
});