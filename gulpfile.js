var gulp = require('gulp');
var plumber = require('gulp-plumber');
var rename = require('gulp-rename');
var sourcemaps = require('gulp-sourcemaps');
var sass = require('gulp-sass');
var cssComb = require('gulp-csscomb');
var cleanCss = require('gulp-clean-css');
var notify = require('gulp-notify');

var nodeModulesPath = './node_modules/';

/*SASS*/
gulp.task('sass',function(){
    gulp.src(['assets/scss/**/*.scss'])
        .pipe(plumber({
            handleError: function (err) {
                console.log(err);
                this.emit('end');
            }
        }))
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(gulp.dest('assets/css'))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('assets/css'))
        .pipe(notify('css task finished'))
}).on('error', onError);

gulp.task('watch',function(){
    gulp.watch('assets/scss/**/*.scss',['sass']);
});

gulp.task('default',['sass']);


function onError(err) {
  console.log(err);
  this.emit('end');
}