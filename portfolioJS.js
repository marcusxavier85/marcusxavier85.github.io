self.addEventListener('install', (e) => {
    e.waitUntil(
        caches.open('sw-cache').then((cache) => {
            return cache.add('index.html');
            return cache.add('portstyle.css');
        })
    );
});

self.addEventListener('fetch', (e) => {
    e.respondWith(
        caches.match(e.request).then((response) => {
            return response || fetch(e.request);
        })
    )
})