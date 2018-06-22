const gulp = require('gulp');
const concat = require('gulp-concat');
const rename = require('gulp-rename');
const uglify = require('gulp-uglify');
const cleanCSS = require('gulp-clean-css');
const jsmin = require('gulp-jsmin');
const imagemin = require('gulp-imagemin');
const babel = require('gulp-babel');
const browserSync = require('browser-sync').create();

gulp.task('css', () => {
  return gulp.src('css/*.css')
    .pipe(cleanCSS({ level: 2 }))
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('dist/css'))
    .pipe(browserSync.reload({ stream: true }));
});

gulp.task('js', () => {
  return gulp.src('js/*.js')
    .pipe(babel({ presets: ['env'] }))
    .pipe(jsmin())
    .pipe(rename({ suffix: '.min' }))
    .pipe(uglify())
    .pipe(gulp.dest('dist/js'))
    .pipe(browserSync.reload({ stream: true }));
});

// gulp.task('img', function() {
//   gulp.src('images/*.{png,jpg,jpeg}')
//     .pipe(imagemin({ progressive: true, }))
//     .pipe(gulp.dest('dist/images/'));
// });

gulp.task('default', [ 'css', 'js' ]);
