// Project configuration
//var project   = 'example_theme';

// Initialization sequence
//    
var gulp = require('gulp'),
    sass = require('gulp-ruby-sass'),
    compass = require('gulp-compass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    clean = require('gulp-clean'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    livereload = require('gulp-livereload'),
    wiredep = require('wiredep').stream;


// Compile Sass using compass
gulp.task('styles', function() {
   return gulp.src('sass/*.scss')
     .pipe(compass({ config_file: './config.rb', css: 'css', sass: 'sass' }))
     .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
     .pipe(gulp.dest(''))
     .pipe(livereload())
     .pipe(rename({suffix: '.min'}))
     .pipe(minifycss({ keepSpecialComments: 1 }))
     .pipe(gulp.dest('assets/css'))
     .pipe(notify({ message: 'Styles task complete' }));
 });


// sass task - 'Expanded' for local - 'lineNumbers' remove for production
/*gulp.task('styles', function () {
    gulp.src('sass/*.scss')
    .pipe(sass({
        noCache: true,
        compass: true,
        style: "expanded",
        lineNumbers: true,
        loadPath: 'assets/css/*'
    }))
    .pipe(gulp.dest('assets/css'))
    .pipe(notify({
        message: "Your sass file was successfully compiled!"
    }));;
});
*/
/*gulp.task('sass', function () {
    gulp.src('./sass/*.scss')
        .pipe(sass({ compass: true }))
        .pipe(gulp.dest('./dist/css'));
});*/

//Scripts
gulp.task('scripts', function() {
  return gulp.src(['bower_components/jquery/dist/jquery.min.js', 'bower_components/bootstrap/dist/js/bootstrap.min.js', 'js/*.js'])
    //.pipe(jshint('.jshintrc'))
    .pipe(jshint.reporter('default'))
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest('assets/js'))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(gulp.dest('assets/js'))
    .pipe(notify({ message: 'Scripts task complete' }));
});

//Images
gulp.task('images', function() {
  return gulp.src('images/**/*')
    .pipe(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true }))
    .pipe(gulp.dest('assets/images'))
    .pipe(notify({ message: 'Images task complete' }));
});


// Clean. Delete and replace all files in the destination folder.
gulp.task('clean', function() {
  return gulp.src(['assets/css', 'assets/js', 'assets/images'], {read: false})
    .pipe(clean());
});

//Automatically Add dependencies to your source code
gulp.task('bower', function () {
  gulp.src(['./header.php', './footer.php', './template-sample.html'])
    .pipe(wiredep({
      optional: 'configuration',
      goes: 'here'
    }))
    .pipe(gulp.dest('./'));
});



// Default task
gulp.task('default', ['clean'], function() {
    gulp.start('styles', 'scripts', 'images');
});


// Watch
gulp.task('watch', function() {

  // Watch .scss files
  gulp.watch('sass/*.sass', ['styles']);

  // Watch .js files
  gulp.watch('js/*.js', ['scripts']);

  // Watch image files
  gulp.watch('images/**/*', ['images']);

  // Create LiveReload server
  var server = livereload();

  // Watch any files in assets/, reload on change
  gulp.watch(['assets/**']).on('change', function(file) {
    server.changed(file.path);
  });

  livereload.listen();
  gulp.watch('sass/**').on('change', livereload.changed);


});
