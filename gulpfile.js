var gulp = require("gulp");
var sass = require('gulp-sass')(require('sass'));
var browserSync = require('browser-sync').create();

var log = require('fancy-log');

var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var compass = require('compass-importer');

var uglify = require('gulp-uglify');
var rename = require('gulp-rename');

// Specific Task
function gulpSass() {
    return gulp.src('resources/sass/css.scss')
		.pipe(sourcemaps.init())
		.pipe(sass({
			outputStyle: 'compressed',
			importer: compass
		}).on('error', sass.logError))
		.pipe(autoprefixer({
			overrideBrowserslist: ['> 1%', 'last 2 versions', 'firefox >= 4', 'safari 7', 'safari 8', 'IE 9', 'IE 10', 'IE 11'] 
		}))
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest('./resources/css/'))
		.on('end', function() { log('SCSS compilado...') })
}
gulp.task(gulpSass);

// Specific Task
function gulpUglify() {
   return gulp.src('resources/js/js.js')
		.pipe(rename({ suffix: '.min' }))
		.pipe(gulp.dest('resources/js'))
		.pipe(uglify())
		.pipe(gulp.dest('resources/js'))
		.on('end', function() { log('JS minificado...') })
}
gulp.task(gulpUglify);

//WATCHERS
gulp.task('watch', () => {
	gulp.watch('resources/sass/**/*.scss', gulp.series(gulpSass));
	gulp.watch('resources/js/js.js', gulp.series(gulpUglify));
});


// Run multiple tasks
gulp.task('start', gulp.series(gulpSass, gulpUglify));