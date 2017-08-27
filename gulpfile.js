const gulp         = require('gulp');
const php          = require('gulp-connect-php');
const browserSync  = require('browser-sync').create();
const rename       = require('gulp-rename');
const jsMinify     = require('gulp-uglify');
const cssMinify    = require('gulp-clean-css');
const postcss      = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssImport    = require('postcss-import');
const cssVariables = require('postcss-custom-properties');
const cssCalc      = require('postcss-calc');
const cssNested    = require('postcss-nested');

const reload       = browserSync.reload;

gulp.task('php',
    function() {
        php.server({ base: './', port: 3000, keepalive: true});
    }
);

gulp.task('browser-sync',
    ['php'],
    function() {
        browserSync.init({
            proxy: '127.0.0.1:3000',
            port: 8080,
            open: false,
            notify: false,
            snippetOptions: {
                ignorePaths: ["./panel/**"]
            }
        });
    }
);

gulp.task('watch', function () {
    gulp.watch(['./src/css/**/*.pcss'], ['css']);
    gulp.watch(['./assets/css/**/*.css']).on('change', reload);
    gulp.watch(['./site/**/*.php']).on('change', reload);
});

gulp.task('css', function () {
    return gulp.src('./src/css/**/[^_]*.pcss')
        .pipe(postcss(
            [
                cssImport(),
                cssVariables(),
                cssCalc(),
                cssNested(),
                autoprefixer()
            ]
        ))
        .pipe(rename({extname: '.css'}))
        .pipe(cssMinify())
        .pipe(gulp.dest('./assets/css/'));
});

gulp.task(
    'default',
    ['css', 'browser-sync', 'watch']
);