/*

	 npm install --save-dev grunt-autoprefixer
     npm install --save-dev grunt-autoprefixer
     npm install --save-dev grunt-contrib-imagemin
     npm install --save-dev grunt-contrib-jshint
     npm install --save-dev grunt-contrib-nodeunit
     npm install --save-dev grunt-contrib-sass
     npm install --save-dev grunt-contrib-uglify
     npm install --save-dev grunt-contrib-watch
     npm install --save-dev grunt-newer

*/

module.exports = function(grunt) {

	grunt.initConfig({

		sass: {
		  	do_it: {
		  		options: {
	  				style: 'compressed'
	  			},
		  		files: {
        			'css/styles.css': 'src/scss/styles.scss',
        			'css/editor.css': 'src/scss/editor.scss'
				}
			}
		},

		autoprefixer: {
		  	do_it: {
		  		options: {
	  			},
		  		files: {
        			src: 'src/scss/styles.scss'
				}
			}
		},

		uglify: {
			do_it: {
				options: {
					compress: true,
					sourceMap: true
				},
				files: {
					'js/library-min.js': ['src/js/*.js']
				}
			}

		},

		imagemin: {
			do_it: {
				files: [
				{
					expand: true,
					cwd: "images/",
					src: ['**/*.{png,jpg,gif}'],
					dest: "images/"
				}
				]
			}
		},

		watch: {
			sass: {
				files: ['src/scss/*.*'],
				tasks: ['sass']
			},
			js: {
				files: ['src/js/*.js'],
				tasks: ['uglify']
			},
			scripts: {
				files: ['images/*.*'],
				tasks: ['imagemin']
			},
			options: {
				livereload: true
			}
		}

	});

	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.loadNpmTasks('grunt-newer');

	grunt.registerTask('default', ['sass','uglify','imagemin']);
	grunt.registerTask('w', ['watch']);

};
