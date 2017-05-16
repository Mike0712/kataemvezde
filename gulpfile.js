var gulp = require('gulp');
    concat = require('gulp-concat');
    sass = require('gulp-sass');
    watch = require('gulp-watch'),
    prefixer = require('gulp-autoprefixer'),
    uglify = require('gulp-uglify'),
    sourcemaps = require('gulp-sourcemaps'),
    rigger = require('gulp-rigger'),
    cssmin = require('gulp-minify-css'),
    browserSync = require("browser-sync"),
    reload = browserSync.reload;


gulp.task('styles', function () {
   gulp.src('./resources/assets/css/**/*.css')
       .pipe(cssmin())
       .pipe(concat('styles.css'))
       .pipe(gulp.dest('./public/css_js'))
});