module.exports = (grunt) ->

  # Project configuration.
  grunt.initConfig
    pkg: grunt.file.readJSON("package.json")

    concat:
      options:
        separator: ';'
      dist:
        src: ['public/vendor/jquery/*.js', 'public/vendor/foundation/.js', 'public/js/faq.js']
        dest: 'public/js/main.js'

    jshint:
      files: ['public/js/faq.js']

    uglify:
      options:
        mangle:
          except: ['jQuery']
      faq:
        files:
          'public/js/main.min.js': ['public/js/faq.js']

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
        includePaths: ['bower_components/foundation/scss', 'bower_components/foundation-icon-fonts']
        sourcemap: true
        sourceComments: 'normal'
        outputStyle: 'nested' # Can be nested, compact, compressed, expanded.
      default:
        files:
          'public/themes/default/style.css': 'public/themes/default/scss/style.scss'

    watch:
      grunt:
        files: ['Gruntfile.coffee']
      js:
        files: 'public/js/faq.js'
        tasks: ["jshint", "uglify"]
      sass:
        files: 'public/themes/*/scss/*.scss'
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
  grunt.loadNpmTasks "grunt-contrib-concat"
  grunt.loadNpmTasks "grunt-contrib-uglify"
  grunt.loadNpmTasks "grunt-contrib-jshint"

  # Default task(s).
  grunt.registerTask "serve", ["bower:install", "sass", "watch"]
  grunt.registerTask "default", ["bower:install", "sass", "jshint", "uglify"]
