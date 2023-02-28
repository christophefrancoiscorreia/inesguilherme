const { src, dest, watch, series }  = require("gulp");
const minify = require("gulp-minify");
const concat = require("gulp-concat");
const sass = require("gulp-sass");
const autoprefixer = require("gulp-autoprefixer");
const cleanCss = require("gulp-clean-css");
const sourcemaps = require('gulp-sourcemaps');
const replaceName = require('gulp-replace-name');
const imagemin = require('gulp-imagemin');
const fse = require('fs-extra');
const GulpSSH = require('gulp-ssh');

sass.compiler = require('node-sass');

function ssh_dest(destination) {
    const gulpSSH = new GulpSSH({
        ignoreErrors: false,
        sshConfig: {
            host: '{{host}}',
            port: 22,
            username: '{{user}}',
            privateKey: '{{pass}}'
        }
    });

    return src(destination, { allowEmpty: true })
        .pipe(gulpSSH.dest('{{path}}'))
}

function minifyjs() {

    return src('src/js/**/*.js', { allowEmpty: true })
        .pipe(minify({noSource: true}))
        .pipe(concat('main.min.js'))
        .pipe(dest('assets/js'))

}


function compileSass() {

    return src('src/sass//**/*.sass', { allowEmpty: true })
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write('src/maps'))
        .pipe(dest('src/css'));
}

function minifycss() {

    return src('src/css/**/*.css', { allowEmpty: true })
        .pipe(autoprefixer({
            Browserslist: ['last 6 versions', 'ie > 9']
        }))
        .pipe(cleanCss({
            compatibility: 'ie11'
        }))
        .pipe(minify({noSource: true}))
        .pipe(concat('style.min.css'))
        .pipe(dest('assets/css'))

}

function ssh_css() {

    return src('assets/**/*.css', { allowEmpty: true })
        .pipe(ssh_dest('assets/**/*.css'))

}

function ssh_js() {

    return src('assets/**/*.js', { allowEmpty: true })
        .pipe(ssh_dest('assets/**/*.js'))

}

function f_imagemin() {
    return src('src/img/*')
        .pipe(imagemin())
        .pipe(replaceName(/'"]/g, ''))
        .pipe(replaceName(/[`~!@#$%^&*()|+=÷¿?;: ,<>\{\}\[\]\\\/]/g, '-'))
        .pipe(dest('assets/img'))
}

exports.build = series(compileSass, minifyjs, minifycss);
exports.sass = series(compileSass,minifycss);
exports.js = series(minifyjs);
exports.image = series(f_imagemin);

exports.default = function () {
    watch('src/sass/**/*.sass', series(compileSass,minifycss));
    watch('src/css/**/*.css', series(minifycss));
    watch('src/js/**/*.js', series(minifyjs));
};


