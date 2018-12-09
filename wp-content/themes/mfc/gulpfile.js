require('es6-promise').polyfill();

var gulp = require('gulp');
var sass  = require('gulp-sass');
var autoprefixer  = require('gulp-autoprefixer');
var concat = require('gulp-concat');
//var uglify = require('gulp-uglify'); vue breaks uglify?

gulp.task('sass', function() {
    return gulp.src('./sass/**/*.scss')
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(gulp.dest('./'))
  });

gulp.task('watch', function() {
    gulp.watch('./sass/**/*.scss', ['sass']);
});

gulp.task('js', function() {
    return gulp.src(['./js/*.js'])
      .pipe(concat('app.js'))
      .pipe(RevAll.revision())
      .pipe(gulp.dest('./js'))
});

// default task
gulp.task('default', ['sass', 'js', 'watch']);
