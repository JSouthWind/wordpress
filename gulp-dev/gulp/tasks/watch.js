var gulp = require('gulp'),
    watch = require('gulp-watch'),
    browserSync = require('browser-sync').create();

var themename = 'test',
    app = '../' + themename + '/';

gulp.task('watch', function() {

  browserSync.init({
    proxy   : "http://localhost:8888"
  });

  

  watch(app + 'assets/styles/**/*.css', function() {
    gulp.start('cssInject');
  });

  watch(app + 'assets/scripts/**/*.js', function() {
    gulp.start('scriptsRefresh');
  });
  
  watch(app + '**/*.php', function() {
    browserSync.reload();
  });
  
});

gulp.task('cssInject', ['styles'], function() {
  return gulp.src(app + 'style.css')
    .pipe(browserSync.stream());
});

gulp.task('scriptsRefresh', ['scripts'], function() {
  browserSync.reload();
});