/*gruntfile.cs*/

//wrapper
module.exports = function(grunt) {

  const sass = require('node-sass');

require('load-grunt-tasks')(grunt);

grunt.initConfig({
    sass: {
        options: {
            implementation: sass,
            sourceMap: true
        },
        dist: {
            files: {
                'style.css': '_working/scss/style.scss'
            }
        }
    },// end sass

    /*
      * Grunt Contrib watch
      * Monitor files and execute loadNpmTasks
      * https://www.npmjs.com/package/grunt-contrib-watch
      */

      watch:{
        sass: {
          files: [
            ['_working/scss/*.scss',
            '_working/scss/partials/*.scss']
          ],
          tasks:[
            'sass'
          ]
        },

        scripts: {
          files: [
            '_working/js/*.js'
          ],
          tasks:[
            'uglify'
          ]
        }


      },

      /**
      * Grunt Contrib uglify
      *Minify JS files
      *https://www.npmjs.com/package/grunt-contrib-uglify
      */

      uglify:{
        my_target:{
          files: {

            'scripts.js': [
              '_working/js/scripts.js',
              'node_modules/jquery/dist/jquery.js',
              'node_modules/bootstrap/dist/js/bootstrap.js'
            ]

          }
        }
      }


});

grunt.registerTask('default', ['watch']);

};
