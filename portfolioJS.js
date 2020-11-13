self.addEventListener('install', (e) => {
    e.waitUntil(
        caches.open('sw-cache').then((cache) => {
            return cache.add('index.html') && cache.add('portstyle.css');
        })
    );
});

self.addEventListener('fetch', (e) => {
    e.respondWith(
        caches.match(e.request).then((response) => {
            if (response) {
                return response;
            } else {
                return fetch(e.request);
            }
        })
    )
});