const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const php2html = require("gulp-php2html");
const  watch = require('gulp-watch');
 
gulp.task('html', function() {
    return gulp.src("./public/*.php")
        .pipe(php2html())
        .pipe(gulp.dest("./public/"));
})
 
 
gulp.task("watch", () => {
  return watch("./public/scss/**/*.scss",async function() {
    return gulp.src("./public/scss/style.scss")
        .pipe(sass({ outputStyle: 'compressed' })
            .on('error', sass.logError)
        )
         .pipe(gulp.dest("./public/css"));
}) 
});
gulp.task("php", () => {
  return watch("./public/**/*.php",async function() {
    return gulp.src("./public/*.php")
        .pipe(php2html())
        .pipe(gulp.dest("./public/"));
}) 
});
 

gulp.task('default',gulp.series('watch'));