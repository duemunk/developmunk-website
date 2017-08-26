const gulp         = require('gulp');
const php          = require('gulp-connect-php');
const browserSync  = require('browser-sync').create();
const postcss      = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssImport    = require('postcss-import');

const reload       = browserSync.reload;

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

gulp.task('watch', function () {
    gulp.watch(['./src/css/**/*.css'], ['css']).on('change', reload);
    gulp.watch(['./site/**/*.php']).on('change', reload);
});


// Serve | Launches Dev Environment
// (use this to work on your project)
// -----------------------------------
gulp.task(
    'serve',
    ['css', 'browser-sync', 'watch']
);

gulp.task('css', function () {
    return gulp.src('./src/css/**/[^_]*.css')
        .pipe(postcss(
            [ 
                cssImport(),
                autoprefixer()
            ]))
        .pipe(gulp.dest('./assets/css/'));
});

// Default Gulp Task | (change this to whatever you like)
// -----------------------------------
gulp.task(
    'default',
    ['serve']
);