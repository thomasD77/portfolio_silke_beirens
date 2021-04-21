/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */



// Frontend JS
require('../../resources/assets/frontend_assets/js/jquery.min');
require('../../resources/assets/frontend_assets/js/bootstrap.bundle.min');
require('../../resources/assets/frontend_assets/js/aos');
require('../../resources/assets/frontend_assets/js/all');


/*// Frontend Reviews JS
require('../../resources/assets/frontend_assets/js/reviews/js/jquery-2.2.4.min');
require('../../resources/assets/frontend_assets/js/reviews/js/bootstrap.min');*/

// Disqus
/*require('../../resources/assets/frontend_assets/blog/js/disqus/disqus');*/

// instagram
require('../../resources/assets/frontend_assets/instagram/js/jquery.min');
require('../../resources/assets/frontend_assets/instagram/js/custom2');
require('../../resources/assets/frontend_assets/instagram/js/magnific.min');





// AOS
window.AOS = require('AOS');
AOS.init();

// Google Maps
function init() {
    var mapOptions = { "center": {  "lat": 50.91952465731115,  "lng": 3.2087977339301466 }, "clickableIcons": false, "disableDoubleClickZoom": true, "draggable": false, "fullscreenControl": false, "keyboardShortcuts": false, "mapTypeControl": false, "mapTypeControlOptions": {  "text": "Default (depends on viewport size etc.)",  "style": 0 }, "mapTypeId": "roadmap", "rotateControl": true, "scaleControl": false, "scrollwheel": false, "streetViewControl": false, "styles": false, "zoom": 15, "zoomControl": false};
    var mapElement = document.getElementById('ez-map');
    var map = new google.maps.Map(mapElement, mapOptions);
    var marker0 = new google.maps.Marker({title: "No Title", icon: "https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi.png", position: new google.maps.LatLng(50.9206944, 3.2040691), map: map});

    google.maps.event.addDomListener(window, "resize", function() { var center = map.getCenter(); google.maps.event.trigger(map, "resize"); map.setCenter(center); });
}
google.maps.event.addDomListener(window, 'load', init);






window.Vue = require('vue').default;

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

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
