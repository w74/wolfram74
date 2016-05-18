'use strict';

var cssLocation = 'css/*.scss';

var gulp = require('gulp'),
		autoprefixer = require("autoprefixer"),
		csswring = require("csswring"),
		postcss = require("gulp-postcss"),
		sass = require("gulp-sass");

gulp.task('css', function(){
	var processors = [
		autoprefixer,
		csswring
	];
	return gulp
		.src(cssLocation)
		.pipe(sass())
		.pipe(postcss(processors))
		.pipe(gulp.dest("css"));
});

gulp.task('watch', function(){
	gulp.watch(cssLocation, ['css']);
});