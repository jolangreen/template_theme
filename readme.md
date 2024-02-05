# Wordpress Bower Gulp Template Theme 
> Custom Wordpress theme using Gulp and Bower 


## Getting Started
+ Create WP database on server
+ Navigate to project directory "public_html" via terminal 
+ Install [Yeopress](http://wesleytodd.com/2013/5/yeopress-a-yeoman-generator-for-wordpress.html) using:

```bash
$ yo wordpress
```

+ Answer the list of Yeopress questions and download theme via git

```bash
[?] WordPress URL: 'http://jolangreen.com/'
[?] Table prefix: 'wp_'
[?] Database host: 'localhost'
[?] Database name: 'jolan_testing'
[?] Database user: 'jolan_testing'
[?] Database password: '=1sDa0z4$Lvp'
[?] Use Git? 'Yes'
[?] Would you like to install WordPress as a submodule? 'No'
[?] Would you like to install WordPress with the custom directory structure? 'No'
[?] Install a custom theme? 'Yes'
[?] Destination directory: 'project_name'
[?] Theme source type (git/tar) 'git'
[?] GitHub username: 'jolangreen'
[?] GitHub repository name: 'template_theme'
[?] Repository branch: 'master'
[?] Does this all look correct? 'Yes'
```

+ Navigate to theme folder and get dependencies using Bower:

```bash
$ bower install
```

+ NPM install all plugins for Gulp

```bash
$sudo npm install --save-dev
```

```bash
$sudo npm i node-sass --save-dev
```

+ Run Node Sass
```bash
npm run compile:sass
```

+ Run Gulp
```bash
$ gulp
```

+ Watch files for updates
```bash
$ gulp watch
```

+ Connect live reload (on browser)

## Common Plugins
+ [Advanced Custom Fields](http://www.advancedcustomfields.com)
+ [All-in-one-SEO](https://wordpress.org/plugins/all-in-one-seo-pack/)
+ [Contact Form 7](https://wordpress.org/plugins/contact-form-7/)
+ [Custom Post Type UI](https://wordpress.org/plugins/custom-post-type-ui/)
+ [Fast Secure Contact Form](https://wordpress.org/plugins/si-contact-form/)
+ [Ultimate Maintenance Mode](https://wordpress.org/plugins/ultimate-maintenance-mode/)
+ [Ultimate Post Widget](https://wordpress.org/plugins/ultimate-posts-widget/)
+ [WP Editor Plugin](https://en-ca.wordpress.org/plugins/wp-editor/)
+ [WP Migrate DB](https://en-ca.wordpress.org/plugins/wp-migrate-db/)
+ [AnimateIt](https://en-ca.wordpress.org/plugins/animate-it/)
  [Class Generator](https://www.downloads.eleopard.in/class-generator.html)

## Security
+ Install [Limit Login Attempts](http://www.advancedcustomfields.com)
+ Install [WordFence](https://en-ca.wordpress.org/plugins/wordfence/)
+ Start using [Sucuri](https://sitecheck.sucuri.net/)
+ [BackWPup - Database backup](https://wordpress.org/plugins/backwpup/)
