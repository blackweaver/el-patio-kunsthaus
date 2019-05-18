var build = './dest';
var dest = build;
var src = './src';
var fs = require('fs');
var bstyles = require('bstyles');

module.exports = {
  build: build,
  dest: dest,
  src: src,
  browserSync: {
    host: 'localhost',
    proxy: 'http://localhost:8010',
    port: 8010,
    open: true,
    startPath: '/',
    notify: true,
    notify: {
      styles: bstyles.BottomLeft
    }
  },
  sass: {
    src: src + '/styles/sass/**/*.{sass,scss}',
    dest: dest + '/static/css/',
    settings: {
      indentedSyntax: false,
      imagePath: 'img'
    }
  },
  images: {
    src: src + '/images/**',
    dest: dest + '/static/img'
  },
  scripts: {
    src: src + '/scripts',
    dest: dest + '/static/js'
  },
  fonts: {
    src: src + '/fonts/**',
    dest: dest + '/static/fonts'
  },
  php: {
    src: dest + '/**/*.php',
    dest: dest
  },
  browserify: {
    bundleConfigs: [
      {
        entries: src + '/scripts/main.js',
        dest: dest + '/static/js',
        outputName: 'main.js'
      }
    ]
  },
  production: {
    cssSrc: dest + '/styles/**/*.css',
    jsSrc: dest + '/scripts/',
    cssDest: dest + '/css/',
    jsDest: dest + '/js',
  }
};
