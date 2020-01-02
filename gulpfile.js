
// Initialization sequence

var gulp = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    clean = require('gulp-clean'),
    compass = require('gulp-compass'),
    concat = require('gulp-concat'),
    imagemin = require('gulp-imagemin'),
    livereload = require('gulp-livereload'),
    minifycss = require('gulp-minify-css'),
    notify = require('gulp-notify'),
    rename = require('gulp-rename'),
    uglify = require('gulp-uglify');


//Images
gulp.task('images', function() {
    return gulp.src('images/**/*')
    .pipe(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true }))
    .pipe(gulp.dest('images'))
    .pipe(notify({ message: 'Images task complete' }));
});


//Scripts
gulp.task('scripts', function() {
    return gulp.src(['bower_components/jquery/dist/jquery.min.js', 'bower_components/bootstrap/dist/js/bootstrap.min.js', 'js/*.js' ])
    .pipe(concat('scripts.js'))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(gulp.dest('js/min'))
    .pipe(notify({ message: 'Scripts task complete' }));
});


// Compile Sass using compass
gulp.task('styles', function() {
   return gulp.src('css/*.scss')
     .pipe(compass({ config_file: './config.rb', css: '', sass: 'css' }))
     .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
     .pipe(livereload())
     .pipe(rename({suffix: '.min'}))
     .pipe(minifycss({ keepSpecialComments: 1 }))
     .pipe(gulp.dest('css/min'))
     .pipe(notify({ message: 'Styles task complete' }));
 });


//Move 'bower_components' styles to 'assets'
gulp.task('bowerstyles', function() {
    return gulp.src(['./bower_components/bootstrap/dist/css/bootstrap.min.css', './bower_components/fontawesome/css/font-awesome.min.css'])
    .pipe(gulp.dest('./css/min'));
});

//Move 'bower_components' fonts to 'assets'
gulp.task('bowerfonts', function() {
    return gulp.src(['./bower_components/bootstrap/dist/fonts/**/*.{ttf,woff,eot,svg,otf}', './bower_components/fontawesome/fonts/**/*.{ttf,woff,eot,svg,otf}'])
    .pipe(gulp.dest('./fonts'));
});


// Clean. Delete and replace all files in the destination folder.
gulp.task('clean', function() {
  return gulp.src(['css', 'js', 'images', 'fonts'], {read: false})
    .pipe(clean());
});


// Default task
gulp.task('default', gulp.series('scripts',  'styles'));


// Watch
gulp.task('watch', function() {

  // Watch .scss files
  gulp.watch(['css/**/*.scss', 'css/**/*.sass'], gulp.series('styles'));

  // Watch .js files
  gulp.watch('js/*.js', gulp.series('scripts'));

  // Create LiveReload server
  var server = livereload();

  // Watch any files scripts, reload on change
  /*gulp.watch(['scripts/**', 'index.html']).on('change', function(file) {
    server.changed(file.path);
  });*/

  livereload.listen();
  gulp.watch('css/**').on('change', livereload.changed);

});


