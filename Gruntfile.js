module.exports = function(grunt) {
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-pug');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-sass');
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
          'public/css/main.css': 'assets/sass/main.sass',
        }
      }
    },    
    watch: {
      styles: {
        files: ['assets/views/*.pug','assets/sass/*.sass'],
        tasks: ['sass','pug','cssmin'],
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
    },
    cssmin: {
      target: {
        files: [{
          expand: true,
          cwd: 'public/css',
          src: ['*.css', '!*.min.css'],
          dest: 'public/css',
          ext: '.min.css'
        }]
      }
    }
  });

  grunt.registerTask('default', ['pug','sass','watch','serve']);
};