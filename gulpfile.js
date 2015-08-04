var gulp = require('gulp'), //Need for native Gulp commands
    ext = require('gulp-ext-replace'), //Allow to register Gulp extend method
    elixir = require('laravel-elixir'), //Laravel Elixir
    uglify = require('gulp-uglify'), //Allow to minify JS
    minifyCSS = require('gulp-minify-css'), //Allow to minify CSS
    sourcemaps = require('gulp-sourcemaps'), //Add source mapping
    concat = require('gulp-concat'),
    sass = require('gulp-ruby-sass'),
    compass = require('gulp-compass');

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

var config = {
    sassPath: './resources/assets',
    bowerDir: './vendor/bower_components'
};

elixir(function(mix) {


    /*
     Create CSS from SCSS source via compass
     */

    gulp.task('scss', function() {
        return gulp.src([
            config.sassPath + '/scss/app.scss'
        ])
            .pipe(compass({
                css: 'resources/assets/css',
                config_file: 'public/config.rb', //Need just for fix line_comments option issue
                style: "nested",
                sass: config.sassPath + '/scss/',
                font: "public/fonts",
                image: "resources/assets/img",
                javascript: "public/js",
                generated_images_path: 'public/img',
                import_path: [config.bowerDir + '/bootstrap-sass-official/assets/stylesheets'],
                relative: false,
                sourcemap: false
            }))
    });

    /*
     Merge all CSS files
     */

    gulp.task('css', ['scss'], function() {
        return gulp.src([
            config.bowerDir + '/owl-carousel2/dist/assets/owl.carousel.css',
            config.bowerDir + '/owl-carousel2/dist/assets/owl.theme.default.css',
            config.bowerDir + '/animate.css/animate.css',
            config.sassPath + '/css/app.css'
        ])
            .pipe(concat('styles.css'))
            .pipe(sourcemaps.init())
            .pipe(minifyCSS({compatibility: 'ie8'}))
            .pipe(ext('min.css'))
            .pipe(sourcemaps.write())
            .pipe(gulp.dest('./public/css/'));
    });

    /*
     Merge all JS files
     */

    gulp.task('js', function() {
        return gulp.src([
            config.bowerDir + '/jquery/dist/jquery.js',
            config.bowerDir + '/bootstrap-sass-official/assets/javascripts/bootstrap.js',
            config.bowerDir + '/owl-carousel2/dist/owl.carousel.js'
        ])
            .pipe(concat('script.js'))
            .pipe(sourcemaps.init())
            .pipe(uglify())
            .pipe(ext('min.js'))
            .pipe(sourcemaps.write())
            .pipe(gulp.dest('./public/js/'));
    });

    gulp.task('default', [ 'scss', 'css', 'js']);

});
