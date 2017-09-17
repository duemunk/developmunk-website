const gulp = require('gulp');
const php = require('gulp-connect-php');
const browserSync = require('browser-sync').create();
const rename = require('gulp-rename');
const jsMinify = require('gulp-uglify');
const jsBabel = require('gulp-babel');
const cssMinify = require('gulp-clean-css');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssImport = require('postcss-import');
const cssVariables = require('postcss-custom-properties');
const cssCalc = require('postcss-calc');
const cssNested = require('postcss-nested');
const cssMedia = require('postcss-custom-media');
const cssGradients = require('postcss-easing-gradients');

const reloadBS = browserSync.reload;

const folders = {
  src: {
    css: './src/css/',
    js: './src/js/',
  },
  assets: {
    css: './assets/css/',
    js: './assets/js/',
  },
};

const files = {
  src: {
    pcss: {
      main: `${folders.src.css}**/[^_]*.pcss`,
      all: `${folders.src.css}**/*.pcss`,
    },
    js: {
      main: `${folders.src.js}**/[^_]*.js`,
      all: `${folders.src.js}**/*.js`,
    },
  },
  assets: {
    css: `${folders.assets.css}**/*.css`,
    js: `${folders.assets.js}**/*.js`,
  },
  php: './site/**/*.php',
};

gulp.task(
  'php',
  () => php.server({
    base: './',
    port: 3000,
    keepalive: true,
  }),
);

gulp.task(
  'browser-sync',
  ['php'],
  () => {
    browserSync.init({
      proxy: '127.0.0.1:3000',
      port: 8080,
      open: false,
      notify: false,
      snippetOptions: {
        ignorefiles: ['./panel/**'],
      },
    });
  },
);

gulp.task(
  'watch',
  () => {
    gulp.watch([files.src.pcss.all], ['css']);
    gulp.watch([files.src.js.all], ['js']);
    gulp.watch([files.assets.css]).on('change', reloadBS);
    gulp.watch([files.assets.js]).on('change', reloadBS);
    gulp.watch([files.php]).on('change', reloadBS);
  },
);

gulp.task(
  'css',
  () => gulp.src(files.src.pcss.main)
    .pipe(postcss([
      cssImport(),
      cssVariables(),
      cssCalc(),
      cssNested(),
      cssMedia(),
      cssGradients(),
      autoprefixer(),
    ]))
    .pipe(rename({ extname: '.css' }))
    .pipe(cssMinify())
    .pipe(gulp.dest(folders.assets.css)),
);

gulp.task(
  'js',
  () => gulp.src(files.src.js.main)
    .pipe(jsBabel({
      compact: false,
      presets: ['es2015'],
    }))
    .pipe(jsMinify())
    .pipe(gulp.dest(folders.assets.js)),
);

gulp.task(
  'default',
  ['css', 'js', 'browser-sync', 'watch'],
);
