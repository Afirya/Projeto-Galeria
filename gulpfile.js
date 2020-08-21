var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var watch = require('gulp-watch');
const {task, series} = require('gulp');

task('css', function() {
    return gulp.src([
        './public/css/galeria.css',
        './public/css/galerias.css',
        './public/css/menu.css',
    ])
    .pipe(concat('styles.css'))
    .pipe( gulp.dest('public/dist/css'))
});

task('js', function() {
    return gulp.src([
        './public/js/galeria.js',
    ])
        .pipe(concat('scripts.js'))
        .pipe(uglify())
        .pipe(gulp.dest('public/dist/js'))
});

task('default', series('css', 'js'));

task('watch', function() {
   gulp.watch(['./public/css/*.css','./public/js/*.js'], series('css','js'));
});