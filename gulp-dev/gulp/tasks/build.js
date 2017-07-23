var gulp = require('gulp'),
  imagemin = require('gulp-imagemin'),
  del = require('del'),
  usemin = require('gulp-usemin'),
  rev = require('gulp-rev'),
  cssnano = require('gulp-cssnano'),
  browserSync = require('browser-sync').create();

gulp.task('previewDist', function () {
  browserSync.init({
    notify: false,
    server: {
      baseDir: "final_build"
    }
  });
});

gulp.task('deleteDistFolder', function () {
  return del("./final_build");
});

gulp.task('copyGeneralFiles', ['deleteDistFolder'], function () {
  var pathsToCopy = [
        '../test/**/*',
        '!../test/index.html',
        '!../test/assets/images/**',
        '!../test/assets/styles/**',
        '!../test/temp',
        '!../test/temp/**'
    ]

  return gulp.src(pathsToCopy)
    .pipe(gulp.dest("./final_build"));
});

gulp.task('optimizeImages', ['deleteDistFolder'], function () {
  return gulp.src(['../test/assets/images/**/*'])
    .pipe(imagemin({
      progressive: true,
      interlaced: true,
      multipass: true
    }))
    .pipe(gulp.dest("./final_build/assets/images"));
});

gulp.task('useminTrigger', ['deleteDistFolder'], function () {
  gulp.start("usemin");
});

gulp.task('usemin', ['styles'], function () {
  return gulp.src("../test/index.html")
    .pipe(usemin({
      css: [function () {
        return rev()
      }, function () {
        return cssnano()
      }]
    }))
    .pipe(gulp.dest("./final_build"));
});

gulp.task('build', ['deleteDistFolder', 'copyGeneralFiles', 'optimizeImages', 'useminTrigger']);