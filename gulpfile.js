const gulp = require('gulp');
const php  = require('gulp-connect-php');
const browserSync = require('browser-sync').create();
const reload  = browserSync.reload;

// PHP | Starts a new PHP server
// -----------------------------------
gulp.task('php',
    function() {
        php.server({ base: './', port: 8000, keepalive: true});
    }
);


// Load BrowserSync
// -----------------------------------
gulp.task('browser-sync', 
    ['php'], 
    function() {
        browserSync.init({
            proxy: '127.0.0.1:8000',
            port: 8000,
            open: true,
            notify: false,
            snippetOptions: {
            ignorePaths: ["./panel/**"]
            },
        });
    }
);

// Serve | Launches Dev Environment
// (use this to work on your project)
// -----------------------------------
gulp.task(
    'serve',
    ['browser-sync'],
    function() {
        gulp.watch(['./site/**/*.php']).on('change', reload);
    }
);

// Default Gulp Task | (change this to whatever you like)
// -----------------------------------
gulp.task(
    'default',
    ['serve']
);