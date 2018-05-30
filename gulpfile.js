const gulp = require('gulp'),
  postcss = require('gulp-postcss'),
  concat = require('gulp-concat'),
  uglify = require('gulp-uglify'),
  rename = require('gulp-rename'),
  connect = require('gulp-connect-php'),
  browserSync = require('browser-sync'),
  htmlmin = require('gulp-htmlmin'),
  concatJS = require("gulp-concat-js"),
  babel = require('gulp-babel'),
  beautify = require('gulp-beautify')
  phpcbf = require('gulp-phpcbf');


/* 
        BROWSER CONNECT
*/
gulp.task('connect-sync', function () {
  connect.server({}, function () {
    browserSync({
      //proxy: '127.0.0.1:3000'
      server: {
        baseDir: './dist'
      },
      //reloadOnRestart: false
    });
  });
  setTimeout(function () {
    gulp.watch(['server/*.php', 'dist/*.js', 'dist/*css', 'dist/*.php','dist/*.html'])
      .on('error', function (error) {
        console.log(error);
      })
      .on('change', function () {

        browserSync.reload();

      })
  }, 2000)
});;

/* 
        WATCH
*/
gulp.task('watch', function () {
  gulp.watch('src/static/*.js', ['minify:js']);
  gulp.watch('src/style/*.scss', ['postcss']);
  gulp.watch('src/static/*.html', ['minify:html']);
  gulp.watch('src/view/*.php', ['php:view']);
  gulp.watch('server/*.php', ['php:server']);
  gulp.watch('db/*.php', ['php:db']);


});

/* 
        HTML
*/
gulp.task('minify:html', function () {
  return gulp.src('src/static/*.html')
    .pipe(htmlmin({
      collapseWhitespace: true
    }))
     .on('error', function (error) {
        console.log(error);
      })
    .pipe(gulp.dest('dist/'));
});

/* 
        PHP
*/
gulp.task('php:server', function () {
  return gulp.src('server/*.php')
   .pipe(gulp.dest('dist/'));
});
gulp.task('php:db', function () {
  return gulp.src('db/*.php')
    .pipe(gulp.dest('dist/'));
});
gulp.task('php:view', function () {
  return gulp.src('src/view/*.php')
   .pipe(gulp.dest('dist/'));
});

/* 
        JS
*/
gulp.task('minify:js', function () {
  gulp.src('src/static/*.js')
    .pipe(concat('app.js'))
    .pipe(babel({
      presets: ['env']
    }))
    .on('error', function (error) {
      console.log(error);
    })
    .pipe(uglify())
    .pipe(gulp.dest('dist/'))

  gulp.src('assets/*.js')
    // .pipe(concat('app.js'))
    .pipe(gulp.dest('dist/'))

});

/* 
        POSTCSS
*/
gulp.task('postcss', function () {
  return gulp.src('src/style/*.scss').pipe(
      postcss([
        require('precss')({ /* options */ }),
        require('postcss-import')(),
        require('postcss-url')(),
        require('postcss-grid-kiss')(),
        require('postcss-easing-gradients')(),
        //require('autoprefixer')({browsers: ['last 2 versions']}),
        require('postcss-cssnext')({
          compress: true,
          browsers: ['last 2 versions']
        }),
        require('postcss-font-magician')(),
        require('postcss-reporter')()
      ]),{ parser: require('postcss-scss') })
      .on('error', function (error) {
        console.log(error);
      })
      .pipe(concat('master.css'))
    .pipe(gulp.dest('dist/'))
});


/* 
        DEFAULT
*/

gulp.task('default', ['minify:js', 'minify:html', 'php:server', 'php:view', 'php:db', 'postcss', 'watch', 'connect-sync']);