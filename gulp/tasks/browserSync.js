var browserSync = require('browser-sync');
var gulp        = require('gulp');
var php         = require('gulp-connect-php');
var config      = require('../config');

gulp.task('php-server', function() {
  php.server({ base: config.build, port: 8010, keepalive: true});
});

gulp.task('browserSync', ['php-server'], function() {
  browserSync.init(config.browserSync);
});
