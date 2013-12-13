module.exports = (grunt) ->

  # Project configuration.
  grunt.initConfig
    pkg: grunt.file.readJSON("package.json")

    # Handle the bower components.
    bower:
      install:
        options:
          targetDir: "./public/vendor"
          layout: "byComponent"
          copy: true
          install: true
          cleanTargetDir: true
          cleanBowerDir: false
      cleanup:
        options:
          cleanTargetDir: true
          cleanBowerDir: true
          install: false
          copy: false

    sass:
      options:
        includePaths: ['bower_components/foundation/scss']
      default:
        options:
          sourcemap: true
          sourceComments: 'normal'
          outputStyle: 'nested' # Can be nested, compact, compressed, expanded.
        files:
          'public/themes/default/style.css': 'public/themes/default/scss/style.scss'

    watch:
      grunt:
        files: ['Gruntfile.coffee']
      sass:
        files: 'public/themes/*/scss/*.scss',
        tasks: ['sass']
        options:
          livereload: true
          interrupt: true
      html:
        files: 'public/*.html'
        options:
          livereload: true
          interrupt: true

  # Load the tasks
  grunt.loadNpmTasks "grunt-sass"
  grunt.loadNpmTasks "grunt-contrib-watch"
  grunt.loadNpmTasks "grunt-bower-task"

  # Default task(s).
  grunt.registerTask "serve", ["bower:install", "sass", "watch"]
  grunt.registerTask "default", ["bower:install", "sass"]
