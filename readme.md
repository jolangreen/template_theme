# Wordpress Bower Gulp Template Theme 
> Custom Wordpress theme using Gulp and Bower 


## Getting Started
1. Create WP database on server
2. Navigate to project directory "public_html" via terminal 
3. Install [Yeopress](http://wesleytodd.com/2013/5/yeopress-a-yeoman-generator-for-wordpress.html)

```bash
$ yo wordpress
```

4. Answer the list of Yeopress questions and download theme via git

```bash
[?] WordPress URL: http://jolangreen.com/
[?] Table prefix: wp_
[?] Database host: 'localhost'
[?] Database name: "jolan_testing"
[?] Database user: [jolan_testing]
[?] Database password: =1sDa0z4$Lvp
[?] Use Git? Yes
[?] Would you like to install WordPress as a submodule? No
[?] Would you like to install WordPress with the custom directory structure? No
[?] Install a custom theme? Yes
[?] Destination directory: project_name
[?] Theme source type (git/tar) git
[?] GitHub username: jolangreen
[?] GitHub repository name: template_theme
[?] Repository branch: master
[?] Does this all look correct? Yes
```

5. Get dependencies using Bower

```bash
$ bower install
```

6. NPM install all plugins for Gulp

```bash
$ npm install gulp-ruby-sass gulp-compass gulp-autoprefixer gulp-minify-css gulp-jshint gulp-concat gulp-uglify gulp-imagemin gulp-clean gulp-notify gulp-rename gulp-livereload gulp-cache wiredep --save-dev
```

7. Watch files for updates
```bash
$ gulp watch
```

8. Connect live reload (on browser)


## Wiredep

[wirdep](http://cameronspear.com/blog/streams-in-wiredep/)

```html
gulp.task('bower', function () {  
  gulp.src('./src/footer.html')
    .pipe(wiredep({
      directory: './bower_componets/',
      bowerJson: require('./bower.json'),
    }))
    .pipe(gulp.dest('./dest'));
});
```
