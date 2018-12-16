var request = require('request');

module.exports = function(grunt) {

    // show elapsed time at the end
    require('time-grunt')(grunt);
    // load all grunt tasks
    require('load-grunt-tasks')(grunt);

    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        sass: {
            dist: {
                options: {
                    style: 'expanded' // Can be nested, compact, compressed, expanded.
                },
                files: [{
                    expand: true, // Recursive Output style.
                    cwd: "assets/sass/", // The startup directory
                    src: ["**/*.scss"], // Source files
                    dest: "library/css/", // Destination
                    ext: ".css" // File extension
                }]
            }
        },

        concat: {
            js: {
                src: ['library/js/**/*.js'],
                dest: 'library/js/scripts.js',
            },
            //css: {
              //  src: ['library/css/**/*.css'],
                //dest: 'library/css/screen.min.css',
            //},
        },

        uglify: {
            js: {
                src: ['library/js/scripts.js'],
                dest: 'library/js/script.min.js',

            }
        },

        watch: {

            js: {
                files: ['assets/js/**/*.js'],
                tasks: ['concat', 'uglify']
            },
            sass: {
                files: 'assets/sass/**/*.{scss,sass}',
                tasks: ['sass']
            },

        }
    });
    //grunt.registerTask('watch', ['concat', 'uglify', 'watch']);
    grunt.registerTask('default', ['sass', 'concat','uglify', 'watch']);
}
