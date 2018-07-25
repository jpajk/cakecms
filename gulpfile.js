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
      css: 'font-awesome/css/font-awesome.min.css',
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

  gulp.src([libsDir + paths.bootstrap.css])
    .pipe(concat('bootstrap.css'))
    .pipe(gulp.dest(destDir + 'bootstrap_u_i/css/'));
});

/*gulp.task('bootstrap', function () {
  gulp.src([
    paths.bootstrap.css
  ])
    .pipe(sass().on('error', sass.logError))
    .pipe(concat('bootstrap.css'))
    .pipe(uglifycss({
      "maxLineLen": 80,
      "uglyComments": true
    }))
    .pipe(gulp.dest(destPaths.bootstrap.css));

  gulp.src([
    paths.bootstrap.js
  ])
    .pipe(uglify())
    .pipe(concat('bootstrap.js'))
    .pipe(gulp.dest(destPaths.bootstrap.js));

  gulp.src([
    paths.bootstrap.fonts
  ])
    .pipe(gulp.dest(destPaths.bootstrap.fonts));

  gutil.log(gutil.colors.bgMagenta.white.bold('Done processing Bootstrap'));
});

gulp.task('fontAwesome', function () {
  gulp.src([
    paths.fontAwesome.fonts
  ])
    .pipe(gulp.dest(destPaths.fontAwesome.fonts));

  gutil.log(gutil.colors.bgMagenta.white.bold('Done processing font awesome'));
});

var sourcejs = function() {
  gulp.src([
    paths.sweetalert.js,
    paths.jqueryUi.js,
    paths.select2.js,
    paths.dragster.js,
    paths.wSwitch.js,
    paths.aviator.js,
    paths.jsRender.js,
    paths.timePicker.js,
    sourcePaths.main.gridForms,
    sourcePaths.main.js,
    sourcePaths.main.routes
  ])
  //.pipe(uglify())
    .pipe(concat('js.js'))
    .pipe(gulp.dest(destPaths.js));

  gutil.log(gutil.colors.bgMagenta.white.bold(Date() + ' Change in the source js detected, recompiling...'));
};

gulp.task('sourcejs', function () {
  sourcejs();

  return watch('assets/js/!**!/!*', function() {
    sourcejs();
  });
});

var sourcecss = function () {
  gulp.src([
    paths.sweetalert.css,
    paths.jqueryUi.css,
    paths.fontAwesome.css,
    paths.select2.css,
    paths.wSwitch.css,
    paths.timePicker.css,
    sourcePaths.main.css
  ])
    .pipe(sass().on('error', sass.logError))
    .pipe(concat('css.css'))
    .pipe(uglifycss({
      "maxLineLen": 80,
      "uglyComments": true
    }))
    .pipe(gulp.dest(destPaths.css));

  gutil.log(gutil.colors.bgMagenta.white.bold('Change in the source css detected, recompiling...'));
};

gulp.task('sourcecss', function () {
  sourcecss();

  return watch('assets/css/!*', function() {
    sourcecss();
  });
});



var frontcss = function () {
  gulp.src([
    paths.bootstrap.css,
    paths.scroll.css,
    paths.range.css,
    paths.fontAwesome.css,
    paths.owl.css,
    paths.owl.css2,
    paths.select2.css,
    paths.jqueryUi.css,
    paths.sweetalert.css,
    sourcePaths.main.front
  ])
    .pipe(sass().on('error', sass.logError))
    .pipe(concat('index.css'))
    .pipe(uglifycss({
      "maxLineLen": 9999999,
      "uglyComments": true
    }))
    .pipe(gulp.dest(destPaths.css));

  gutil.log(gutil.colors.bgMagenta.white.bold('Change in the front css detected, recompiling...'));
};

gulp.task('frontcss', function () {
  frontcss();

  return watch('assets/front/!*', function() {
    frontcss();
  });
});



var frontjs = function() {
  gulp.src([
    paths.jquery.js,
    paths.bootstrap.js,
    paths.aviator.js,
    paths.scroll.js,
    paths.wnumb.js,
    paths.range.js,
    paths.owl.js,
    paths.select2.full,
    paths.jqueryUi.js,
    paths.jsRender.js,
    paths.sweetalert.js,
    sourcePaths.main.frontjs,
    sourcePaths.main.frontRoutes
  ])
    .pipe(uglify())
    .pipe(concat('index.js'))
    .pipe(gulp.dest(destPaths.js));

  gutil.log(gutil.colors.bgMagenta.white.bold('Change in the front js detected, recompiling...'));
};

gulp.task('frontjs', function () {
  frontjs();

  return watch('assets/frontjs/!**!/!*', function() {
    frontjs();
  });
});

gulp.task('ckeditor', function () {
  gulp.src([paths.ckEditor + '/!**!/!*'])
    .pipe(gulp.dest(destPaths.ckEditor));

  gutil.log(gutil.colors.bgMagenta.white.bold('Done processing ckEditor'));
});


gulp.task('fontello', function () {
  return gulp.src(paths.fontello.config)
    .pipe(fontello())
    .pipe(gulp.dest(destDir + 'css/fontello'))
});*/

gulp.task('default', [
  'bootstrap'
]);