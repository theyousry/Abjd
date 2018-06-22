self.addEventListener('install', event => {
  event.waitUntil(
    caches.open('mws-restaurant-stage-3').then(cache => {
      return cache.addAll([
        '/',
        'images/icon.ico',
        'index.php',
        'log-in.php',
        'register.php',
        'sign-up.php',
        'about.html',
        'categories.html',
        'contact.html',
        'courses.html',
        'privacy.html',
        'req-course.html',
        'registration.html',
        'dist/js/main.min.js',
        'dist/js/login.min.js',
        'dist/js/registration.min.js',
        'dist/css/style.min.css',
        'dist/css/about.min.css',
        'dist/css/animate.min.css',
        'dist/css/categories.min.css',
        'dist/css/course-page.min.css',
        'dist/css/courses.min.css',
        'dist/css/privacy.min.css',
        'dist/css/sign-up.min.css',
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'js/bootstrap.min.js',
        'js/jquery-3.2.1.min.js',
        'js/jquery.counterup.min.js',
        'js/waypoint.js',
        'js/wow.min.js',
        'fonts/cairo-arabic.woff2',
        'fonts/cairo-latin.woff2',
        'fonts/fontawesome-webfont.eot',
        'fonts/fontawesome-webfont.svg',
        'fonts/fontawesome-webfont.ttf',
        'fonts/fontawesome-webfont.woff',
        'fonts/fontawesome-webfont.woff2',
        'fonts/latin-ext.woff2',
        'omd/Constants.php',
        'omd/DbConnect.php',
        'omd/DbOperations.php',
        'course-pages/course-page-9.php',
        // 'course-pages/course-page-10.php',
        // 'course-pages/course-page-11.php',
        // 'course-pages/course-page-12.php',
        // 'course-pages/course-page-13.php',
        'course-pages/programming/course-page-1.php',
        // 'course-pages/programming/course-page-2.php',
        // 'course-pages/programming/course-page-3.php',
        // 'course-pages/programming/course-page-4.php',
        // 'course-pages/programming/course-page-5.php',
        // 'course-pages/programming/course-page-6.php',
        // 'course-pages/programming/course-page-7.php',
        // 'course-pages/programming/course-page-8.php',
        // 'course-pages/programming/course-page-15.php',
        'course-pages/programming/courses(1).php',
        // 'course-pages/programming/courses(2).php',
        // 'course-pages/programming/courses(3).php',
        // 'course-pages/programming/courses(4).php',
        // 'course-pages/programming/courses(5).php',
        // 'course-pages/programming/courses(6).php',
        // 'course-pages/programming/courses(7).php',
        // 'course-pages/programming/courses(8).php',
        // 'course-pages/programming/courses(15).php',
        'images/Logo3.png',
        'images/Logo.png',
        'images/007.png',
        'dist/images/006.jpg',
        'dist/images/003.jpg',
        'dist/images/002.jpg'
       ]);
    })
  )
});

self.addEventListener('fetch', function(event) {
  event.respondWith(
    caches.match(event.request).then(function(response) {
      return response || fetch(event.request);
    })
  );
});
