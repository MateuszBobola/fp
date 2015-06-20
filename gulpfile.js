// Include gulp
var gulp = require('gulp'); 

// Include Our Plugins
var jshint = require('gulp-jshint');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var minifyCss = require('gulp-minify-css');

var paths = {
 scss: 'styles/scss/',
 css: 'styles/css/', 
 js: 'js/'
};

// Compile Our Sass
gulp.task('sass', function() {
    return gulp.src(paths.scss + 'main.scss')
        .pipe(sass())
        .pipe(minifyCss({compatibility: 'ie8'}))
        .pipe(rename('main.min.css'))
        .pipe(gulp.dest(paths.css));
});

// Concatenate & Minify JS
gulp.task('scripts', function() {
    return gulp.src([
    	paths.js + 'jquery.js',
    	paths.js + 'custom.js'
    	])
        .pipe(concat('script.js'))
        .pipe(gulp.dest(paths.js + 'min/'))
        .pipe(rename('script.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(paths.js + 'min/'));
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch(paths.scss + '**/*.scss', ['sass']);
   	gulp.watch(paths.js + '*.js', ['scripts']);
});

// Default Task
gulp.task('default', ['sass', 'scripts', 'watch']);