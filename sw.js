const CACHE_NAME = "dicha-cache-v1";
const urlsToCache = [
    "./index.php",
    "./manifest.json",
    "./cdn/assets/images/core/dh_logo_main.png"
];

self.addEventListener("install", (event) => {
    event.waitUntil(
        caches.open(CACHE_NAME).then((cache) => {
            return cache.addAll(urlsToCache);
        })
    );
});

self.addEventListener("fetch", (event) => {
    event.respondWith(
        caches.match(event.request).then((response) => {
            return response || fetch(event.request);
        })
    );
});
