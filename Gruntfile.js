module.exports = function(grunt) {

  require('load-grunt-tasks')(grunt);

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    uglify: {
      build: {
        src: 'js/script.js',
        dest: 'js/script.min.js'
      }
    },

    sass: {
      options: {
        sourceMap: true
      },
      dist: {
        files: {
          'style.css': 'sass/style.scss'
        }
      }
    },

    postcss: {
      options: {
        map: true,
        processors: [
          require('autoprefixer-core')({browsers: 'last 1 version'})
        ]
      },
      dist: {
        src: 'style.css'
      }
    },

    watch: {
      scripts: {
        files: ['js/*.js'],
        tasks: ['uglify'],
        options: {
          spawn: false,
        },
      },
      css: {
        files: ['sass/partials/*.scss', 'sass/*.scss'],
        tasks: ['sass', 'postcss'],
        options: {
          livereload: true,
          spawn: false
        },
      }
    }
  });

  grunt.registerTask('default', ['uglify', 'sass', 'watch', 'postcss']);

};