const preLoad = function () {
    return caches.open("offline").then(function (cache) {
        // caching index and important routes
        return cache.addAll(filesToCache);
    });
};

self.addEventListener('install', event => {
    event.waitUntil(
      caches.open('pwa-cache-v1').then(cache => {
        return cache.addAll([
          '/',
          '/css/app.css',
          '/js/app.js'
        ]);
      })
    );
  });
  
  self.addEventListener('fetch', event => {
    event.respondWith(
      caches.match(event.request).then(response => {
        return response || fetch(event.request);
      })
    );
  });

const filesToCache = [
    '/',
];

const checkResponse = function (request) {
    return new Promise(function (fulfill, reject) {
        fetch(request).then(function (response) {
            if (response.status !== 404) {
                fulfill(response);
            } else {
                reject();
            }
        }, reject);
    });
};

const addToCache = function (request) {
    return caches.open("offline").then(function (cache) {
        return fetch(request).then(function (response) {
            return cache.put(request, response);
        });
    });
};

const returnFromCache = function (request) {
    return caches.open("offline").then(function (cache) {
        return cache.match(request).then(function (matching) {
            if (!matching || matching.status === 404) {
                return cache.match("offline.html");
            } else {
                return matching;
            }
        });
    });
};

self.addEventListener("fetch", function (event) {
    event.respondWith(checkResponse(event.request).catch(function () {
        return returnFromCache(event.request);
    }));
    if(!event.request.url.startsWith('http')){
        event.waitUntil(addToCache(event.request));
    }
});


if (navigator.userAgent.includes('iPhone') || navigator.userAgent.includes('iPad')) {
    // Show custom guide on how to "Add to Home Screen" on iOS
    if (!localStorage.getItem("addToHomeScreenDismissed")) {
        // Show the prompt if the user hasn't opted out
        document.getElementById("installPrompt").style.display = "block";
    }

    // Handle the "Don't ask again" button click
    document.getElementById("dismiss").addEventListener("click", function () {
        localStorage.setItem("addToHomeScreenDismissed", "true");
        document.getElementById("installPrompt").style.display = "none";
    });

    // Handle the "Close" button click
    document.getElementById("close").addEventListener("click", function () {
        document.getElementById("installPrompt").style.display = "none";
    });
}