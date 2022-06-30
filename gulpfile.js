const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const browserSync = require("browser-sync").create();
const concat = require("gulp-concat");
const uglify = require("gulp-uglify-es").default;

function scssTask() {
  return gulp
    .src("assets/scss/main.scss")
    .pipe(sass({ outputStyle: "compressed" }))
    .pipe(concat("main.min.css"))
    .pipe(gulp.dest("assets/css"))
    .pipe(browserSync.stream());
}

function jsTask() {
  return gulp
    .src("assets/js/main.js")
    .pipe(concat("main.min.js"))
    .pipe(uglify())
    .pipe(gulp.dest("assets/js"))
    .pipe(browserSync.stream());
}

function watch() {
  browserSync.init({
    proxy: "https://mqr.local",
    open: true,
  });
  gulp.watch("**/*.php").on("change", browserSync.reload);
  gulp.watch("assets/scss/**/*.scss", scssTask);
  gulp.watch("assets/js/main.js", jsTask);
}
exports.watch = watch;

exports.default = gulp.series(scssTask, jsTask, watch);
