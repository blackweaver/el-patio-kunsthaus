var gulp    = require('gulp');
var config  = require('../config').production;
var size    = require('gulp-filesize');
var uglify = require('gulp-uglify');

gulp.task('uglifyJs', ['browserify'], function() {
  return gulp.src(config.jsSrc + 'scripts.js')
    .pipe(gulp.dest(config.jsDest))
    .pipe(size());
});
