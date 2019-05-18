var gulp         = require('gulp');
var browserSync  = require('browser-sync');
var sass         = require('gulp-sass');
var sourcemaps   = require('gulp-sourcemaps');
var handleErrors = require('../util/handleErrors');
var config       = require('../config').sass;
var autoprefixer = require('gulp-autoprefixer');
//var plumber      = require('gulp-plumber');

sass.compiler = require('node-sass');

gulp.task('sass', function () {
  return gulp.src(config.src)
    //.pipe(plumber({errorHandler: handleErrors}))
    // .pipe(sourcemaps.init())
    .pipe(sass(config.settings))
    .pipe(autoprefixer({ browsers: ['> 1%', 'last 2 version'] }))
    // .pipe(sourcemaps.write())
    .pipe(gulp.dest(config.dest))
    .pipe(browserSync.reload({stream:true}));
});
