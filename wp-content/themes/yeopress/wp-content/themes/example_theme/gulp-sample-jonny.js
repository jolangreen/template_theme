var gulp = require('gulp'),
    gutil = require('gulp-util'),
    sass = require('gulp-ruby-sass'),
    uglify = require('gulp-uglify'),
    watch = require('gulp-watch'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify');

// sass task
gulp.task('sass', function () {
    gulp.src('static/assets/sass/*.sass')
    .pipe(sass({
        noCache: true,
        compass: true,
        style: "expanded",
        lineNumbers: true,
        loadPath: 'static/assets/css/*'
    }))
    .pipe(gulp.dest('static/assets/css'))
    .pipe(notify({
        message: "Your sass file was successfully compiled!"
    }));;
});

// uglify task
gulp.task('js', function() {
    // main app js file
    gulp.src('static/app/*.js')
        .pipe(uglify())
        .pipe(concat("app.min.js"))
        .pipe(gulp.dest('static/app/'));

    // create 1 vendor.js file from all vendor plugin code
    gulp.src('static/assets/js/*.js')
        .pipe(uglify())
        .pipe(concat("vendor.min.js"))
        .pipe(gulp.dest('static/assets/js'))
        .pipe( notify({ message: "Javascript is now ugly!"}) );
});

gulp.task('watch', function() {
    // watch ssss files
    gulp.watch(['static/assets/sass/*.sass', 'static/assets/sass/*.scss'], function() {
        gulp.run('sass');
    });

    gulp.watch(['static/app/*.js', 'static/assets/js/*.js'], function() {
        gulp.run('js');
    });
});

gulp.task('default', ['sass', 'js', 'watch']);
