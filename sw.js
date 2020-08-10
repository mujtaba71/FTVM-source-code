 const staticCacheName = 'site-static';
const dynamicCacheName = 'site-dynamic';
const assets = [
    '/',
    '/index.php',
    '/js/app.js',
    '/js/all.js',
    '/js/jquery-3.3.1.min.js',
    '/css/bootstrap.min.css',
    '/fontawesome-free-5.12.1-web/css/all.css',
    '/image/logo1.png',
    'https://fonts.googleapis.com/css?family=Courgette',
    'FarmerDashboard/fallback.php'
    
];


// cache size limit function

const limitCacheSize = (name, size) => {
    caches.open(name).then(cache => {
        cache.keys().then(keys => {
            if(keys.length > size){
                cache.delete(keys[0]).then(limitCacheSize(name, size));
            }
        })
    })
};



// install service worker
self.addEventListener('install', evt => {
  //console.log('service worker has been installed');
    
   evt.waitUntil(
    caches.open(staticCacheName).then(cache => {
        console.log('caching shell assets');
        cache.addAll(assets)
    })
   );
});

// activate service worker
self.addEventListener('activate', evt => {
  //console.log('service worker has been activated');
    
    evt.waitUntil(
    caches.keys().then(keys => {
     
        return Promise.all(keys
        .filter(key => key !== staticCacheName && key !== dynamicCacheName)
        .map(key => caches.delete(key))
                           )
    })
    );
    
});


//fetch event
self.addEventListener('fetch', evt => {
  //console.log('fetch event', evt);
    
    
     evt.respondWith(
    caches.match(evt.request).then(cacheRes => {
        return cacheRes || fetch(evt.request).then(fetchRes => {
            return caches.open(dynamicCacheName).then(cache => {
                cache.put(evt.request.url, fetchRes.clone());
                limitCacheSize(dynamicCacheName, 15);
                return fetchRes;
            })
        });
        
    }).catch(() => {
        if(evt.request.url.indexOf('.php') > -1){
        return caches.match('/FarmerDashboard/fallback.php');   
        }
    })
    );
   
});






