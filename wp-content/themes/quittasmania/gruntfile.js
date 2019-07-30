module.exports = function ( grunt ) {
    grunt.initConfig({
        pkg: grunt.file.read('package.json'), 
        
        sass: {
            options: {
                sourcemap: 'auto'
            },
            
            dist: {
                files: {
                    'css/theme.css' : 'sass/theme.scss',
                    //'assets/css/style1.css' : 'assets/src/css/style1.scss',
                    //'assets/css/style2.css' : 'assets/src/css/style2.scss'
                }
            }
        },
        
        /*
        concat: {
            css: {
                src: ['assets/css/style1.css', 'assets/css/style2.css'],
                dest: 'style.css'
            }
        },
        */
        
        watch: {
            css: {
                files: 'sass/**/*.scss',
                //tasks: ['sass', 'concat']
                tasks: ['sass']
            }
        }
    });
    
    grunt.registerTask(
        'dev',         
        //['sass', 'concat', 'watch']
        ['sass', 'watch']
    );  
    
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    //grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-concat');
    //grunt.loadNpmTasks('grunt-contrib-copy');
    //grunt.loadNpmTasks('grunt-contrib-uglify');
    //grunt.loadNpmTasks('grunt-contrib-clean');
    //grunt.loadNpmTasks('grunt-sass');
}