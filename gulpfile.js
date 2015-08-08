var path   = require('path');
var gulp   = require('gulp');
var less   = require('gulp-less');
var watch  = require('gulp-watch');
var batch  = require('gulp-batch');
var prefix = require('gulp-autoprefixer');

// Styles
gulp.task('less_dev', function () {

  return gulp
    .src('./assets/styles/core.less')
    .pipe(less({
      paths: [ path.join(__dirname, 'less', 'includes') ]
    }))
    .pipe(
      prefix({
        browsers: ['last 3 versions'],
        cascade: false
      })
    )
    .pipe(gulp.dest('./assets/build'));

});

// Watch
gulp.task('watch_dev', function () {

  watch('assets/styles/**/*.less', batch(function (events, done) {
    gulp.start('less_dev', done);
  }));

});