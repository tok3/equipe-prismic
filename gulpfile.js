var elixir = require('laravel-elixir');
var gulp = require("gulp");
var shell = require("gulp-shell");
var gutil = require("gutil");
var htmlmin = require('gulp-htmlmin'); // https://github.com/fitztrev/laravel-html-minify/wiki/Laravel-5---5.1-HTML-Minifying


/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {


    if (elixir.config.production != true) {


       // mix.sass("backend/style.scss", "public/css/style.css");
      /*  mix.sass("real-estate.scss", "public/css/real-estate.css");
        mix.sass("medical.scss", "public/css/medical.css");
        mix.sass("style.scss", "public/css/frontstyle.css").copy('public/vendor/fontawesome/fonts/!**', 'public/fonts');*/

    }

    elixir(function (mix) {

        /* concat styles*/

     /*   mix.styles([
            '../../../public/vendor/bootstrap/3.5/css/bootstrap.css',
            '../../../public/vendor/fontawesome/css/font-awesome.css',
            '../../../public/css/real-estate.css',
            '../../../public/css/flexslider.css',
            '../../../public/vendor/animate.css/animate.css',
            '../../../public/css/owl.carousel.css',
            '../../../public/css/owl.theme.css',
            '../../../public/css/yamm.css',
            '../../../public/css/magnific-popup.css',
            '../../../public/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css',
            '../../../public/vendor/sweetalert/lib/sweet-alert.css',
            '../../../public/vendor/toastr/build/toastr.min.css',
            '../../../public/css/frontstyle.css',
            '../../../public/vendor/sky-form/css/sky-forms.css',
            '../../../public/vendor/bower_components/animate.css/animate.min.css',
            '../../../public/vendor/bower_components/Morphext/dist/morphext.css'
        ]).copy(
            'public/vendor/fontawesome/fonts/',
            'public/fonts/'
        ).copy(
            'public/fonts/pe-icon-7-stroke/fonts/',
            'public/fonts/'
        ).copy(
            'public/images/',
            'public/build/images')
            .copy(
            'public/fonts/',
            'public/build/fonts');

*/

        /* concat scripts*/
       /* mix.scripts([
            '../../../public/vendor/jquery/dist/jquery.min.js',
            '../../../public/vendor/bootstrap/3.5/js/bootstrap.min.js',
            '../../../public/js/jquery.easing.1.3.min.js',
            '../../../public/js/jquery.stellar.min.js',
            '../../../public/js/waypoints.min.js',
            '../../../public/js/jquery.counterup.min.js',
            '../../../public/js/wow.min.js',
            '../../../public/js/owl.carousel.min.js',
            '../../../public/js/jquery.magnific-popup.min.js',
            '../../../public/js/jquery.mb.YTPlayer.min.js',
            '../../../public/vendor/sweetalert/lib/sweet-alert.min.js',
            '../../../public/vendor/toastr/build/toastr.min.js',
            '../../../public/js/jquery.sticky.js',
            '../../../public/js/jquery.flexslider-min.js',
            '../../../public/vendor/bower_components/emodal/dist/eModal.min.js',
            '../../../public/vendor/bower_components/jquery-validation/dist/jquery.validate.min.js',
            '../../../public/vendor/bower_components/Morphext/dist/morphext.min.js',
            '../../../public/vendor/easyWizard/jquery.easyWizard.js',
            '../../../public/js/custom.js'
        ]);*/


    //    mix.version(['public/css/all.css', 'public/js/all.js']);

    });

    if (elixir.config.production != true) {

       // mix.task('compile_less',  ['resources/assets/less/**/*.less']);

        mix.task('refresh_chrome', ['./**/*.css',  './**/*.php', './**/*.html', 'app/views/**/*.php', 'app/views/**/*.blade.php']);

    }
    /*   mix.task('refresh_chrome', ['public/!**!/!*.css',  'app/!**!/!*.php', 'lib/!**!/!*.php', 'resources/!**!/!*.php', 'packages/tok3/publisher/!**!/!*.php']);
     }*/
});


/*publish assets */

gulp.task("publish", function () {

    elixir(function (mix) {

        /* concat styles*/
        mix.styles([
            '../../../public/vendor/bootstrap/3.5/css/bootstrap.css',
            '../../../public/vendor/fontawesome/css/font-awesome.css',
            '../../../public/css/flexslider.css',
            '../../../public/vendor/animate.css/animate.css',
            '../../../public/css/owl.carousel.css',
            '../../../public/css/owl.theme.css',
            '../../../public/css/yamm.css',
            '../../../public/css/magnific-popup.css',
            '../../../public/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css',
            '../../../public/vendor/sweetalert/lib/sweet-alert.css',
            '../../../public/vendor/toastr/build/toastr.min.css',
            '../../../public/css/frontstyle.css'
        ]).copy(
            'public/vendor/fontawesome/fonts/**/*',
            'public/fonts/'
        ).copy(
            'public/fonts/pe-icon-7-stroke/fonts/',
            'public/fonts/'
        ).copy(
            'public/images/',
            'public/build/images')
            .copy(
            'public/fonts/',
            'public/build/fonts');


        /* concat scripts*/
        mix.scripts([
            '../../../public/vendor/jquery/dist/jquery.min.js',
            '../../../public/vendor/bootstrap/3.5/js/bootstrap.min.js',
            '../../../public/js/jquery.easing.1.3.min.js',
            '../../../public/js/jquery.stellar.min.js',
            '../../../public/js/waypoints.min.js',
            '../../../public/js/jquery.counterup.min.js',
            '../../../public/js/wow.min.js',
            '../../../public/js/owl.carousel.min.js',
            '../../../public/js/jquery.magnific-popup.min.js',
            '../../../public/js/jquery.mb.YTPlayer.min.js',
            '../../../public/vendor/sweetalert/lib/sweet-alert.min.js',
            '../../../public/vendor/toastr/build/toastr.min.js',
            '../../../public/js/jquery.sticky.js',
            '../../../public/js/jquery.flexslider-min.js',
            '../../../public/js/custom.js'
        ]);

        mix.version(['public/css/all.css','public/js/all.js']);

    });

});


/*refresh chrome on changes*/
gulp.task("refresh_chrome", function () {
    //ulimit -S -n 2048
    gulp.src("").pipe(shell("sh /Users/tobias/Documents/autorefresh/refreshChrome.sh"))
        .on('error', gutil.log);
});

/* BUG WORKAROUND : less output wird nicht erzeugt, darum hier compilieren*/
/*

 gulp.task("compile_less", function () {
 gulp.src("").pipe(shell("lessc resources/assets/less/style.less public/css/style.css"));
 });

 */
gulp.task('compile_less', shell.task([
    "lessc resources/assets/less/style.less public/css/style.css"
]));


'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function () {
    return gulp.src('./sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css'));
});

gulp.task('sass:watch', function () {
    gulp.watch('./sass/**/*.scss', ['sass']);
});

/*copmress and minify */
gulp.task('compress', function () {
    var opts = {
        collapseWhitespace: true,
        removeAttributeQuotes: true,
        removeComments: true,
        minifyJS: true
    };

    return gulp.src('./storage/framework/views/**/*')
        .pipe(htmlmin(opts))
        .pipe(gulp.dest('./storage/framework/views/'));
});

