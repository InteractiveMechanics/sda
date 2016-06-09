
module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        

        sass: {
            dev: {
                files: {
                    'css/main.css': 'css/Sass/main.scss'
                }
            }
        },

        watch: {
            css: {
                files: ['**/*.scss'], 
                tasks: ['sass'] 
            }
		},

        connect: {
            server: {
                options: {
                    port: 3000,
                    livereload: true
                }
            }
        }
    });
    
    grunt.loadNpmTasks('grunt-contrib-connect');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    
    grunt.registerTask('serve', [
        'connect:server',
        'watch'
    ]);
};

// CLI command: grunt serve 