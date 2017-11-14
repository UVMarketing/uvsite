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
      options: {
        sourceMap: true
      },
      dist: {
        files: {
          'public/css/main.css': 'assets/sass/main.scss',
        }
      }
    },    
    watch: {
      styles: {
        files: ['assets/views/*.pug','assets/sass/*.scss'],
        tasks: ['sass','pug'],
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
      files: ['public/index.html'],
    },
    serve: {
      options: {
        port: 9000,
        path: '/public/',
      }
    }
  });

  grunt.registerTask('default', ['pug','sass','watch','serve']);
};