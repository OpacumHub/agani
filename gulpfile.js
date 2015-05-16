var gulp = require('gulp'); //Need for native Gulp commands
var ext = require('gulp-ext-replace'); //Allow to register Gulp extend method
var elixir = require('laravel-elixir'); //Laravel Elixir
var uglify = require('gulp-uglify'); //Allow to minify JS
var minifyCss = require('gulp-minify-css'); //Allow to minify CSS
var sourcemaps = require('gulp-sourcemaps'); //Add source mapping
require('laravel-elixir-sass-compass'); //Add compass support

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    /*
    Define minify extend method for main CSS
     */
    elixir.extend('minifyMainCSS', function() {

        gulp.task('minifyMainCSS', function() {
            return gulp.src('resources/assets/css/styles.css')
                .pipe(sourcemaps.init())
                .pipe(minifyCss({compatibility: 'ie8'}))
                .pipe(ext('min.css'))
                .pipe(sourcemaps.write())
                .pipe(gulp.dest('public/css/'));
        });

        return this.queueTask('minifyMainCSS');

    });

    /*
     Define minify extend method for main JS
     */

    elixir.extend('uglifyMainJS', function() {

        gulp.task('uglifyMainJS', function() {

            gulp.src('resources/assets/js/script.js')
                .pipe(sourcemaps.init())
                .pipe(uglify({preserveComments: ''}))
                .pipe(ext('min.js'))
                .pipe(sourcemaps.write())
                .pipe(gulp.dest('public/js/'));

        });

        return this.queueTask('uglifyMainJS');

    });

    /*
    Define Compass and create CSS from SCSS source
     */
    mix.compass([
            'Bootstrap/bootstrap.scss',
            'FontAwesome/font-awesome.scss',
            'app.scss'
        ],
        'resources/assets/css/src',
        {
            config_file: 'resources/config.rb', //Need just for line_comments option
            style: "expanded", //expanded, compressed, nested
            sass: "resources/assets/scss",
            font: "public/fonts",
            image: "public/img",
            javascript: "public/js",
            sourcemap: false
        }
    );

    /*
    Merge all CSS source into styles.css
    */
    mix.styles([
        'src/Bootstrap/bootstrap.css',
        'src/FontAwesome/font-awesome.css',
        'src/app.css'
    ], 'resources/assets/css/styles.css').minifyMainCSS();

    /*
     Merge all JS source into script.js
     */
    mix.scripts([
       'src/jQuery/jquery.js',
       'src/Bootstrap/bootstrap.js',
    ], 'resources/assets/js/script.js').uglifyMainJS();

    /*
    Copy fonts to the public dir
     */
    mix.copy(
        'resources/assets/fonts/FontAwesome/',
        'public/fonts/FontAwesome'
    );

    mix.copy(
        'resources/assets/fonts/Bootstrap/',
        'public/fonts/Bootstrap/'
    );


});
