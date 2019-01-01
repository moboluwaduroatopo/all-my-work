self.addEventListener('install',function(e){
	e.waitUntil(
		caches.open('pos').then(function(cache)
		{
			return cache.addAll([
				'/',
				'index.html',
				'cal.css',
				'font-awesome-4.7.0/css/font-awesome.css',
				'bootstrap-4.0.0-dist/js/bootstrap.min.js',
				'bootstrap-4.0.0-dist/css/bootstrap.css',
				'bootstrap-4.0.0-dist/css/bootstrap.min.css'
				// 'jquery/popper.min.j',
				// 'jquery/jquery-3.1.1.js'
				]);
		})
		);
})
self.addEventListener('fetch',function(event){
	console.log(event.request.url);
	event.respondWith(
		caches.match(event.request).then(function(response){
			return response || fetch(event.request);
		})
	);
})
