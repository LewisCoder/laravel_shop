require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

require('./components/SelectDistrict');

require('./components/UserAddressesCreateAndEdit');

const app = new Vue({
    el: '#app'
});



