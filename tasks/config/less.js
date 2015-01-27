module.exports = function(grunt) {

  grunt.config.set('less', {
    dev: {
      files: [{
        expand: true,
        cwd: 'assets/styles/less/',
        src: ['*.less', '!_*.less'],
        dest: 'assets/styles/css/',
        ext: '.css'
      }]
    }
  });

  grunt.loadNpmTasks('grunt-contrib-less');
};