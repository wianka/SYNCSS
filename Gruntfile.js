module.exports = function(grunt) {

    'use strict';

    var config = {
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            options: {
                sourceMap: false,
                outputStyle: 'nested'
            },
            dist: {
                files: [{
                    expand: true,
                    cwd: 'scss',
                    src: ['*.scss'],
                    dest: 'assets/',
                    ext: '.css'
                }]
            }
        },
        cssbeautifier : {
            files : ['assets/*.css']
        },
        watch: {
            css: {
                files: 'scss/*.scss',
                tasks: ['sass'],
                options: {
                    spawn: false,
                    reload: true,
                }
            },
            cssbeautifier: {
                files: ['scss/*.scss'],
                tasks: ['cssbeautifier'],
                options: {
                    spawn: false
                }
            }
        },
        browserSync: {
            dev: {
                bsFiles: {
                    src: ['assets/*.css']
                },
                options: {
                    watchTask: true,
                    proxy: 'localhost/css_framework',
                    debugInfo: true,
                }               
            }
        }       
    };

    grunt.loadNpmTasks('grunt-browser-sync');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-cssbeautifier');
    grunt.loadNpmTasks('grunt-sass');
    //grunt.loadNpmTasks('grunt-newer');

    // Register tasks
    grunt.initConfig(config);

    grunt.registerTask('default', ['sass','browserSync','cssbeautifier','watch']);

};
