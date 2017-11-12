module.exports = function(grunt) {
  grunt.loadNpmTasks('grunt-contrib-pug');
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-serve');

  grunt.initConfig({
    pug: {
      compile: {
        options: {
          client: false,
          pretty: true
        },
        files: [ {
          cwd: "assets/views",
          src: "**/*.pug",
          dest: "public",
          expand: true,
          ext: ".html"
        } ]
      }
    },    
    sass: {
      development: {
        options: {
          compress: true,
          yuicompress: true,
          optimization: 2
        },
        files: {
          // target.css file: source.sass file
          'public/css/main.css': 'assets/sass/main.scss',

        }
      }
    },

    watch: {
      styles: {
        files: ['assets/**/*'],
        tasks: ['sass'],
        options: {
          nospawn: true,
          livereload: {
            host: 'localhost',
            port: 9000,
          }
        }
      }
    },
    livereload: {
      options: { livereload: true },
      files: ['public/**/*'],
    },
    serve: {
      options: {
        port: 9000,
        path: '/public/',
      }
    }
  });

  grunt.registerTask('default', ['pug','sass','serve','watch']);
};