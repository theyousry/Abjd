module.exports = function(grunt) {

  grunt.initConfig({
  pkg: grunt.file.readJSON('package.json'),
    imagemin: {
      png: {
        options: {
          optimizationLevel: 7,
          svgoPlugins: [{removeViewBox: false}],
          progressive: true
        },
        files: [
          {
            // Set to true to enable the following options…
            expand: true,
            // cwd is 'current working directory'
            cwd: 'images/',
            src: ['**/*.png'],
            // Could also match cwd line above. i.e. project-directory/img/
            dest: 'dist/images/',
            ext: '.png'
          }
        ]
      },
      jpg: {
        options: {
          progressive: true,
          optimizationLevel: 7,
          svgoPlugins: [{removeViewBox: false}]
        },
        files: [
          {
            // Set to true to enable the following options…
            expand: true,
            // cwd is 'current working directory'
            cwd: 'images/',
            src: ['**/*.jpg'],
            // Could also match cwd. i.e. project-directory/img/
            dest: 'dist/images/',
            ext: '.jpg'
          }
        ]
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.registerTask('default', ['imagemin']);

};
