module.exports = function(grunt) {

  grunt.config.set('watch', {
    assets: {

      // Assets to watch:
      files: ['assets/**/*'],

      // When assets are changed:
      tasks: ['less']
    }
  });

  grunt.loadNpmTasks('grunt-contrib-watch');
};