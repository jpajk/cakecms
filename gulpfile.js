let gulp = require('gulp'),
  uglify = require('gulp-uglify'),
  concat = require('gulp-concat'),
  sass = require('gulp-sass'),
  watch = require('gulp-watch'),
  uglifycss = require('gulp-uglifycss'),
  gutil = require('gulp-util'),
  fontello = require('gulp-fontello'),

  assetDir = './assets/',
  libsDir = './node_modules/',
  destDir = './webroot/',

  paths = {
    jquery: {
      js: 'jquery/dist/jquery.min.js'
    },
    bootstrap: {
      css: 'bootstrap/dist/css/bootstrap.min.css',
      js: 'bootstrap/dist/js/bootstrap.bundle.min.js',
      fonts: 'bootstrap/dist/fonts/*'
    },
    popper: {
      js: 'popper.js/dist/popper.min.js',
    },
    fontAwesome: {
      css:  'font-awesome/css/font-awesome.min.css',
      fonts: 'font-awesome/fonts/*'
    },
    src: {
      bootstrap: 'bootstrap_u_i/',
      js: assetDir + 'js/routes/*.js',
      css: assetDir + 'css/main.scss',
    }
  };

gulp.task('bootstrap', function () {
  gulp.src([libsDir + paths.jquery.js])
    .pipe(concat('jquery.js'))
    .pipe(gulp.dest(destDir + 'bootstrap_u_i/js/'));

  gulp.src([libsDir + paths.bootstrap.js])
    .pipe(concat('bootstrap.js'))
    .pipe(gulp.dest(destDir + 'bootstrap_u_i/js/'));

  gulp.src([
    libsDir + paths.bootstrap.css,
    libsDir + paths.fontAwesome.css
  ])
    .pipe(concat('bootstrap.css'))
    .pipe(gulp.dest(destDir + 'bootstrap_u_i/css/'));
});

gulp.task('shared', function () {
  gulp.src([
    libsDir + paths.fontAwesome.css
  ])
    .pipe(concat('styles.css'))
    .pipe(gulp.dest(destDir + '/css/'));

  gulp.src([libsDir + paths.fontAwesome.fonts]).pipe(gulp.dest(destDir + 'fonts/'));
});

gulp.task('default', [
  'bootstrap', 'shared'
]);