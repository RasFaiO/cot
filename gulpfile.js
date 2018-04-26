var gulp = require('gulp');
var server = require('gulp-server-livereload');

gulp.task('ejemplo', function() {
  gulp.src('./')
    .pipe(server({
    livereload: true,
    directoryListing: false,
    open: true,
    port: 8600
    }));
  });