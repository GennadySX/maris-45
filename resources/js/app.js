/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);


//admin
    //profile
Vue.component('profile-data', require('./components/admin/profile/profile.vue').default);
Vue.component('profile-header', require('./components/admin/profile/profile-header.vue').default);
Vue.component('profile-photo', require('./components/admin/profile/profile-photo.vue').default);
Vue.component('profile-edit', require('./components/admin/profile/profile-edit.vue').default);
Vue.component('profile-edit-comment', require('./components/admin/profile/profile-edit-comment.vue').default);



Vue.component('discipline-create', require('./components/admin/discipline/create.vue').default);
Vue.component('discipline-list', require('./components/admin/discipline/list.vue').default);


Vue.component('user-band', require('./components/admin/layouts/user-band.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
