var cacheName = 'app-cache';
var assets = [
    './css/bootstrap.min.css',
    './css/bootstrap.min.css.map',
    './css/public/custom.css',
    './js/lazysizes.min.js',
    './js/jquery.min.js',
    './js/popper.min.js',
    './js/bootstrap.min.js',
    'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap',
    './img/corona.png',
    './img/dokter.png',
    './img/1.png',
    './img/2.png',
    './img/3.png',
    './video/covid.mp4',

];

self.addEventListener('install', function (event) {
    event.waitUntil(
        caches.open(cacheName).then(function (cache) {
            // console.log('Caching Assets');
            return cache.addAll(assets);
        })
    )
});

self.addEventListener('activate', function (event) {

});

self.addEventListener('fetch', function (event) {
    event.respondWith(
        caches.match(event.request).then(function (cacheRes) {
            return cacheRes || fetch(event.request);
        })
    );
});
