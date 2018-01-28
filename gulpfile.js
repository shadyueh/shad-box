var gulp        = require('gulp');
var browserSync = require('browser-sync').create();

// Static server
gulp.task('serve', function() {
    browserSync.init({
        server: {
            baseDir: "./src"
        }
    });
    gulp.watch("./src/**/*.*").on('change', browserSync.reload);
});

gulp.task('bs', function() {
    browserSync.init({
        proxy: "localhost/shad-box"
    });
});

gulp.task('default',['serve']);