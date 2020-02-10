/**
 * Grunt configuration
 */

 module.exports = function(grunt) {


	/**
	 * Setup
	 **/

	// Directory paths
	var path = {
		root: '../../',
		finals: '../../assets',
   		grunching: '../',
		ftpAuth: '.ftppass'
	};

	// JavaScript files for concatenation
	var concatScripts = [
		'<%= path.grunching %>/scripts/js.js',
		'<%= path.grunching %>/scripts/timeCounter.js',
		'<%= path.grunching %>/scripts/main.js'
	

	];

	// Load all tasks dependencies from package.json
	require('grunt');
	require('grunt-log-headers')(grunt);
	require('time-grunt')(grunt);
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-copy-modified');
	grunt.loadNpmTasks('grunt-ftpush');
	grunt.loadNpmTasks('grunt-postcss');
	grunt.loadNpmTasks('grunt-prompt');
	grunt.loadNpmTasks('grunt-sass');

	// FTP credentials
	var login = grunt.file.readJSON(path.ftpAuth);


	/**
	 * Grunt config
	 **/

	grunt.initConfig({

		// Helper configurations
		pkg: grunt.file.readJSON('package.json'),
		path: path,
		concatScripts: concatScripts,
		ftpType: '',
		ftpErrors: [],


		/**
		 * Sass compiling
		 * @package grunt-sass
		 **/

		sass: {
			options: {
				outputStyle: 'expanded',
				expand: true,
				includePaths: ['<%= path.grunching %>/scss/'],
				sourceMap: true
			},
			dev: {
				files: {
					'<%= path.finals %>/css/main.css': '<%= path.grunching %>/scss/main.scss'
				}
			}
		},


		/**
		 * CSS autoprefixing
		 * @package grunt-postcss
		 **/

		postcss: {
			options: {
				map: true,
				processors: [
					require('autoprefixer')({ browsers: ['last 2 versions', 'ie 9', 'ios 6', 'android 4'] }),
				]
			},
			dist: {
				src: '<%= path.finals %>/css/main.css'
			}
		},


		/**
		 * CSS minification
		 * @package grunt-contrib-cssmin
		 **/

		cssmin: {
			dist: {
				files: [{
					expand: true,
					cwd: '<%= path.finals %>/css',
					src: ['*.css', '!*.min.css'],
					dest: '<%= path.finals %>/css',
					ext: '.min.css'
				}]
			}
		},


		/**
		 * JavaScript file concatination
		 * @package grunt-contrib-concat
		 **/

		concat: {
			options: {
				seperator: ';'
			},
			all: {
				src: concatScripts,
				dest: '<%= path.finals %>/js/main.js'
			}
		},


		/**
		 * Minify JavaScript
		 * @package grunt-contrib-uglify
		 **/

		uglify: {
			options: {
				preserveComments: false,
				banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - <%= grunt.template.today("yyyy-mm-dd") %> */',
				mangle: {
					except: ['jQuery']
				}
			},
			dist: {
				files: {
          		'<%= path.finals %>/js/main.min.js': '<%= path.grunching %>/scripts/main.js'
				}
			}
		},


		/**
		 * Copy images and fonts when modified
		 * @package grunt-copy-modified
		 **/

		copy_modified: {
			images: {
				files: [{
					cwd: '<%= path.grunching %>/images',
					src: ['**/*.{jpg,jpeg,png,svg,gif}'],
					dest: '<%= path.finals %>/images'
				}]
			},
			fonts: {
				files: [{
					cwd: '<%= path.grunching %>/fonts',
					src: ['**/*.{ttf,eot,woff,woff2,svg}'],
					dest: '<%= path.finals %>/fonts'
				}]
			}
		},


		/**
		 * FTP deployment
		 * @package grunt-ftpush
		 **/

		ftpush: {
			dev: {
				auth: {
					host: login.dev.host,
					port: 21,
					authKey: 'dev'
				},
				src: '<%= path.root %>',
				dest: '/public_html/wp-content/themes/portfolio/',
				simple: true,
				exclusions: [
					'_assets',
          'dev',
          'main.css.map',
					'.gitignore',
					'.git',
					'**/.DS_Store'
				]
			},
			live: {
				auth: {
					host: login.live.host,
					port: 21,
					authKey: 'live'
				},
				src: '<%= path.root %>',
				dest: '/public_html/wp-content/themes/portfolio/',
				simple: true,
				exclusions: [
					'assets',
					'.gitignore',
					'.git',
					'**/.DS_Store'
				]
			}
		},


		/**
		 * Watch
		 * @package grunt-contrib-watch
		 **/

		// Live
		watch: {
			options: {
				spawn: false,
				livereload: true
			},
			styles: {
				files: ['<%= path.grunching %>/scss/**/*.scss'],
				tasks: ['sass:dev', 'postcss:dist', 'cssmin:dist']
			},
			scripts: {
				files: [
					'<%= path.grunching %>/scripts/**/*.js',
					'Gruntfile.js'],
				tasks: ['concat:all', 'uglify:dist']
			},
			images: {
				files: ['<%= path.grunching %>/images/**/*.{png,svg,jpg,jpeg,gif}'],
				tasks: ['copy_modified:images']
			},
			fonts: {
				files: ['<%= path.grunching %>/fonts/**/*.{ttf,eot,svg,woff,woff2}'],
				tasks: ['copy_modified:fonts']
			},
			ftp: {
				files: [
					'<%= path.root %>/**/*.php',
          			'<%= path.root %>/includes/*.php',
					'<%= path.grunching %>/scss/**/*.scss',
					'<%= path.grunching %>/scripts/**/*.js',
					'<%= path.grunching %>/images/**/*.{png,svg,jpg,jpeg,gif}'
				],
				tasks: ['ftpush:<%= ftpType %>']
			}
		},


		/**
		 * Prompt user if proper login does not exist
		 * @package grunt-promt
		 **/

		prompt: {
			login: {
				options: {
					gruntLogHeader: false,
					questions: [
						{
							config: 'host',
							type: 'input',
							message: 'Indtast host:',
							validate: function(value) {
								return (value !== '') ? true : 'This area is empty. please add a host.';
							},
							when: function() {
								return (grunt.config('ftpErrors').indexOf('host') !== -1) ? true : false;
							}
						},
						{
							config: 'username',
							type: 'input',
							message: 'Indtast username:',
							validate: function(value) {
								return (value !== '') ? true : 'Field is empty. Insert a username.';
							},
							when: function() {
								return (grunt.config('ftpErrors').indexOf('username') !== -1) ? true : false;
							}
						},
						{
							config: 'password',
							type: 'input',
							message: 'Insert password:',
							validate: function(value) {
								return (value !== '') ? true : 'Field is empty insert a password.';
							},
							when: function() {
								return (grunt.config('ftpErrors').indexOf('password') !== -1) ? true : false;
							}
						}
					],
					then: function(results) {
						var task = grunt.config('ftpType');
						var errors = grunt.config('ftpErrors');

						// Add newly created information to existing object
						for ( var key in results ) {
							if ( login[task].hasOwnProperty(key) ) {
								if ( errors.indexOf(key) !== -1 ) {
									login[task][key] = results[key];
								} else {
									continue;
								}
							}
						}

						grunt.file.write(path.ftpAuth, JSON.stringify(login, null, 2));

						grunt.log.writeln('');
						grunt.log.writeln('FTP-information til '['magenta'] + task['magenta'].bold + '-task saved.'['magenta']);
						grunt.log.writeln('');

						grunt.task.run('build');
					}
				}
			},
			confirm: {
				options: {
					gruntLogHeader: false,
					questions: [
						{
							config: 'confirmed',
							type: 'confirm',
							message: 'is the top FTP info correct?',
							default: true
						}
					],
					then: function(results) {
						if ( results.confirmed === true ) {
							grunt.task.run('build');
						} else {
							grunt.log.writeln('');
							grunt.log.writeln('Insert new FTP-information');
							grunt.config('ftpErrors', ['host', 'username', 'password']);
							grunt.task.run('prompt:login');
						}
					}
				}
			}
		}
	});


	/*
	 * Helper functions
	 **/

	// Check for empty FTP login information based on task
	function validateLoginKeys(authObj) {
		var errors = [];

		for ( var key in authObj ) {
			if ( authObj.hasOwnProperty(key)) {
				if ( authObj[key] === '' ) {
					errors.push(key);
				} else {
					continue;
				}
			}
		}

		return errors;
	}

	// Get saved credentials
	function getSavedLogin(task) {
		var cred = login[task];

		grunt.log.writeln('');
		grunt.log.writeln('=============================='['magenta']);
		grunt.log.writeln('Saved FTP-information (' + task + '):');
		grunt.log.writeln('Host: ' + cred.host.bold);
		grunt.log.writeln('Username: ' + cred.username.bold);
		grunt.log.writeln('Password: ' + cred.password.bold);
		grunt.log.writeln('=============================='['magenta']);
		grunt.log.writeln('');
	}


	/*
	 * Helper tasks
	 **/

	// Check FTP login
	grunt.registerTask('ftp-check', 'Check for FTP credentials', function() {
		var task = grunt.config('ftpType');
		var authObj = login[task];
		var errors = validateLoginKeys(authObj);
		grunt.config('ftpErrors', errors);

		if ( errors.length ) {
			// Prompt for new login if errors are present
			grunt.log.error('FTP-login need information(s) below: ' + errors.join(', ').bold);
			grunt.task.run('prompt:login');
		} else {
			getSavedLogin(task);
			grunt.task.run('prompt:confirm');
		}
	});

	// Watch task
	grunt.registerTask('build', 'Watch task', function() {
		var task = grunt.config('ftpType');

		grunt.task.run([
			'sass:dev',
			'postcss:dist',
			'cssmin:dist',
			'concat:all',
			'uglify:dist',
			'copy_modified:images',
			'copy_modified:fonts',
			'ftpush:' + task,
			'watch'
		]);
	});


	/*
	 * Default tasks
	 **/

	// Development task
	grunt.registerTask('dev', 'Development task', function() {
		grunt.config('ftpType', 'dev');
		grunt.task.run('ftp-check');
	});

	// Live task
	grunt.registerTask('live', 'Live task', function() {
		grunt.config('ftpType', 'live');
		grunt.task.run('ftp-check');
	});
};
