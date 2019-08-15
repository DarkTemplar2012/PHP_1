const gulp = require('gulp');
// склейка файлов
const concat = require('gulp-concat');
// минифакация JS
const uglify = require('gulp-uglify-es').default;
// очистка дист папки
const clean = require('gulp-clean');
// меняет пути из html несколких файлв на один
// const htmlreplace = require('gulp-html-replace');
// синхронизация лайврелоад
const browserSync = require('browser-sync').create();
// префиксы для браузеров
const autoprefixer = require('gulp-autoprefixer');
// для использование require в обычном JS
// const browserify = require('gulp-browserify');
// собирает разниые места стилей и обьединяет в кусок
const csso = require('gulp-csso');
// при ошибке сборки пишет ошибку в консоли
const notify = require('gulp-notify');
// перевод sccs в css
const sass = require('gulp-sass');
// сжимает картинки
const imagemin = require('gulp-imagemin');
// if для разных сценариев сборки
const gulpif = require('gulp-if');
// отлов ошибок
const plumber = require('gulp-plumber');
// переименовываем файлы
// const rename = require('gulp-rename');
// меняем куски слов в файлах
// const replace = require('gulp-replace');
const strreplace = require('gulp-string-replace');
// var cssTimeStamp = require('gulp-timestamp-css-url');
// var versionNumber = require('gulp-version-number');
// var versionAppend = require('gulp-version-append');
// var versionConfig = {
//   value: '%MDS%',
//   append: {
//     'key': 'v',
//     'to': ['css', 'js'],
//   },
// };
// var md5 = require("gulp-md5-assets");
// var md5 = require("gulp-md5-assets");
const imageminMozjpeg = require('imagemin-mozjpeg');
const imageminOptipng = require('imagemin-optipng');
// var imageminGuetzli = require('imagemin-guetzli');
// var tinypng = require('gulp-tinypng-compress');

// var tinypng = require('gulp-tinypng');

// выбираем сборку для разработки или продакшн
const prod = 0;

// var fileName = prod ? 'main.min' : 'main';
const fileName = 'main';
const buildPath = 'dist/';

// пути файлов
const src = {
  htmlPublic: [
    'app/public/*.html',
    'app/public/*.php',
  ],
  html: [
    'app/*.html',
    'app/*.php',
    'app/**/*.php',
    '!app/public/**/*.php',

  ],
  js: 'app/public/js/**/*.js',
  scss: 'app/public/scss/**/*.scss',
  css: 'app/public/css/**/*.css',
  img: 'app/public/img/**',
  file: [
    'app/**',
    'app/public/**',
    'app/public/**/.*',
    '!app/public/packages/**',
    '!app/public/packages/**/.*',
    '!app/public/img/**',
    '!app/public/**/*.scss',
    '!app/public/**/*.css',
    '!app/public/**/*.js',
    '!app/public/**/*.html',
    '!app/public/*.php'],
};

// запуск сервера
gulp.task('server', () => {
  browserSync.init({
    // server: {
    //   baseDir: './' + buildPath
    // }
    proxy: 'php1/dist/',
  });
});

// таск на JS сборку
gulp.task('js', () => gulp.src(src.js)
  .pipe(plumber())
  .pipe(concat(`${fileName}.js`))
  // .pipe(browserify())
  .pipe(gulpif(prod, uglify()))
  .pipe(gulp.dest(`${buildPath}/public/js`))
  .on('end', browserSync.reload));

// таск на CSS сборку
gulp.task('scss', () => gulp.src(src.scss)
  .pipe(plumber())
  .pipe(sass().on('error', notify.onError({
    message: '<%= error.message %>',
    title: 'Sass Error!',
  })))
  .pipe(gulp.dest('app/public/css'))
  // .pipe(cssTimeStamp({useDate:true}))
  .pipe(browserSync.reload({
    stream: true,
  })));

gulp.task('css', () => gulp.src(src.css)
  .pipe(plumber())
  .pipe(autoprefixer({
    // browsers: ['last 5 versions'],
    cascade: false,
  }))
  .pipe(gulpif(prod, csso()))
  // .pipe(version({}))
  .pipe(concat(`${fileName}.css`))
  .pipe(gulp.dest(`${buildPath}/public/css`))
  // .pipe(cssTimeStamp({useDate:true}))
  .pipe(browserSync.reload({
    stream: true,
  })));

// таск на HTML сборку
gulp.task('htmlPublic', () => gulp.src(src.htmlPublic)
  .pipe(plumber())
  // .pipe(htmlreplace({
  //   'css': 'css/' + fileName + '.css',
  //   'js': 'js/' + fileName + '.js',
  // }))
  // .pipe(gulpif(prod, rename(function (path) {
  //   path.extname = ".php";
  // })))
  // .pipe(gulpif(prod, strreplace('main.', 'main.min.')))
  // .pipe(htmlreplace('href="css/main.css"', 'href="css/main.css?v=123"'))
  .pipe(strreplace(/css\/main\.css/g, 'css/main.css?v=1.2.1'))
  .pipe(strreplace(/js\/main\.js/g, 'js/main.js?v=1.2.1'))
  .pipe(gulp.dest(buildPath + '/public/'))
  .pipe(browserSync.reload({
    stream: true,
  })));
gulp.task('html', () => gulp.src(src.html)
  .pipe(plumber())
  .pipe(strreplace(/css\/main\.css/g, 'css/main.css?v=1.2.1'))
  .pipe(strreplace(/js\/main\.js/g, 'js/main.js?v=1.2.1'))
  .pipe(gulp.dest(buildPath))
  .pipe(browserSync.reload({
    stream: true,
  })));

// таск на очистку диста
gulp.task('clean', () => gulp.src(buildPath, {
  read: false,
  allowEmpty: true,
})
  .pipe(clean()));

// таск на перенос остальных файлов для которых нет спец задач
gulp.task('file', () => gulp.src(src.file, {
  nodir: true,
})
  .pipe(gulp.dest(buildPath))
  .on('end', browserSync.reload));

// таск на картинки
gulp.task('img', () => gulp.src(src.img)
  // сжимаем каритнки для продакшн
  // .pipe(gulpif(prod, tinypng('5GYtlrTT0XgngDwZBB71bZddNq34b5XN')))
  .pipe(gulpif(prod, imagemin(
    [imageminMozjpeg({
      quality: 60,
      // progressive: true,
      tune: 'ms-ssim',
      smooth: 2,
    }),
    imageminOptipng(),
    imagemin.svgo()
    ],
  )))
  // .pipe(gulpMozjpeg({
  //   quality: 60,
  //   progressive: true,
  //   tune: "ms-ssim",
  //   smooth: 2
  // }))

  .pipe(gulp.dest(`${buildPath}/public/img`))
  .on('end', browserSync.reload)
);

// таск на слежение всех тасков при изменение файлов
gulp.task('watch', () => {
  gulp.watch(src.html, gulp.series('html'));
  gulp.watch(src.htmlPublic, gulp.series('htmlPublic'));
  gulp.watch(src.js, gulp.series('js'));
  gulp.watch(src.scss, gulp.series('scss'));
  gulp.watch(src.css, gulp.series('css'));
  gulp.watch(src.file, gulp.series('file'));
  gulp.watch(src.img, gulp.series('img'));
});

// default для простого вызова gulp
// первым происходит очистка диста
gulp.task('default', gulp.series(
  'clean',
  // одновременный запуск всех тасков
  gulp.parallel('js'),
  gulp.parallel('scss'),
  gulp.parallel('css'),
  gulp.parallel('file'),
  gulp.parallel('html'),
  gulp.parallel('htmlPublic'),
  gulp.parallel('img'),
  // gulp.parallel('js', 'css', 'html', 'file', 'img'),
  // таск на создание сервера и проуслушку всего
  gulp.parallel('watch', 'server'),

));
