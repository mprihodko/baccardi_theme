module.exports = function(grunt) {
  
    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        less: {
          development: {
            options: {
                compress: true,
                yuicompress: true,
                optimization: 2
            },
            files: {
              "css/style.min.css": "components/less/main.less" 
            }
          }
        },

        concat: {
            dist: {
                src:  'components/**/*.js', 
                dest: 'js/custom_script.js'                   
            }
        },

        watch: {
            styles: {
                files: ['components/less/**/*.less'], // which files to watch
                tasks: ['less'],
                options: {
                  nospawn: true
                }
            },
            scripts:{ 
                files: ['components/**/*.js'],
                tasks: ['concat']            
            }
        }

    });


    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-concat'); 
    grunt.loadNpmTasks('grunt-contrib-watch'); 
    grunt.registerTask('default', ['less', 'concat', 'watch']);


};