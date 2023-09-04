const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');

function compileSass(){
  gulp
    .src('src/pages/*.scss')
    .pipe(sass({outputStyle: "compressed"}).on("error", sass.logError))
    .pipe(gulp.dest('assets/css/pages'))
  return gulp
    .src('src/main.scss')
    .pipe(sass({outputStyle: "compressed"}).on("error", sass.logError))
    .pipe(gulp.dest('assets/css'));
}

function minifyScripts() {
  return gulp
    .src('src/scripts/**/*.js')
    .pipe(uglify())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('assets/scripts'));
}

function dev(){
  gulp.watch('src/**/*.scss', compileSass);
  gulp.watch('src/scripts/**/*.js', minifyScripts);
}

gulp.task('dev', dev);