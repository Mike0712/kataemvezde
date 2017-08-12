var gulp = require('gulp');
var minifyCss = require('gulp-csso');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var concatCss = require('gulp-concat-css');
var sass = require('gulp-sass');
var less = require('gulp-less');
var debug = require('gulp-debug');
var plumber = require('gulp-plumber');
var babel = require('gulp-babel');

gulp.task('styles', function () {
    return gulp.src('./resources/assets/css/**/*.{css,scss}')
        .pipe(sass())
        .pipe(concatCss('styles.min.css'))
        .pipe(minifyCss())
        .pipe(gulp.dest('public/assets/css_js'));
});

gulp.task('js', function () {
    return gulp.src('./resources/assets/js/**/*.js')
        .pipe(concat('js.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('public/assets/css_js'));
});

gulp.task('vendor:css', function () {
    return gulp.src('./resources/assets/vendor/**/*.{css,less}')
        .pipe(less())
        .pipe(concatCss('vendor.min.css'))
        .pipe(minifyCss())
        .pipe(gulp.dest('public/assets/vendor'));
});

gulp.task('vendor:js', function () {
    return gulp
        .src(['./resources/assets/vendor/jquery.min.js', './resources/assets/vendor/**/*.js'])
        // .pipe(debug())
        .pipe(concat('vendor.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('public/assets/vendor'));
});

gulp.task('watch', function () {
    gulp.watch('./resources/assets/css/**/*.{css,scss}', ['styles']);
    gulp.watch('./resources/assets/js/**/*.js', ['js']);
    gulp.watch('./resources/assets/vendor/**/*.{css,scss,less}', ['vendor:css']);
    gulp.watch('./resources/assets/vendor/**/*.js',['vendor:js']);
});

gulp.task('default', ['styles', 'js', 'vendor:css', 'vendor:js', 'watch']);