var gulp = require('gulp'),
	rev = require('gulp-rev');

gulp.task('hash', function() {
	return gulp.src(['dist/**/*.css', 'dist/**/*.js'])
		.pipe(rev())
		.pipe(gulp.dest('dist'))
})

gulp.task('default', ['hash']);