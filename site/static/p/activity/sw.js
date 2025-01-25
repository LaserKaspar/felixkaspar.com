self.addEventListener('install', function(e) {
 e.waitUntil(
   caches.open('activity-v1.4').then(function(cache) {
     return cache.addAll([
       '',
       'index.html',
       'main.js',
       'logo.png',
       'style.css',
       'words/js/words0.js',
       'https://cdn.jsdelivr.net/npm/nosleep.js@0.11.0/dist/NoSleep.min.js',
       'https://cdn.jsdelivr.net/npm/jquery@latest/dist/jquery.min.js',
     ]);
   })
 );
});

self.addEventListener('fetch', function(e) {
  console.log(e.request.url);
  e.respondWith(
    caches.match(e.request).then(function(response) {
      return response || fetch(e.request);
    })
  );
});
