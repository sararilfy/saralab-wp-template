var gulp = require("gulp");
var sass = require("gulp-sass");
var autoprefixer = require("gulp-autoprefixer");

gulp.task("sass", function() {
    gulp.src("./*scss")
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(gulp.dest("./"));
});
gulp.task("default", function() {
    gulp.watch("./*scss",["sass"]);
});
