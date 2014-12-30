var gulp      = require('gulp');
var rename    = require('gulp-rename');
var sass      = require('gulp-sass');
var watch     = require('gulp-watch');

gulp.task('foundation', function() {
	gulp.src('./bower_components/foundation/scss/**/*.*')
		.pipe(gulp.dest('./assets/scss/'));
	gulp.src('./bower_components/foundation/js/**/*.*')
		.pipe(gulp.dest('./assets/javascripts/'));
});

gulp.task('styles', function() {
	gulp.src('./assets/scss/editor-style.scss')
		.pipe(sass({
			outputStyle: 'expanded'
		}))
		.pipe(gulp.dest('./assets/stylesheets/'));
	return gulp.src(['./assets/scss/**/*.scss', '!./assets/scss/foundation.scss', '!./assets/scss/editor-style.scss'])
		.pipe(sass({
			outputStyle: 'expanded',
			errLogToConsole: true
		}))
		.pipe(gulp.dest('./'))
		.pipe(sass({
			outputStyle: 'compressed',
			errLogToConsole: true
		}))
		.pipe(rename("style.min.css"))
		.pipe(gulp.dest('./'));
});

gulp.task('build', ['styles']);

gulp.task('watch', ['build'], function() {
	gulp.watch('./assets/scss/**/*.scss', ['styles']);
})

gulp.task('default', ['build']);