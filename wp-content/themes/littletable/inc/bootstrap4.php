<?php 

    
    function add_bootstrap4(){
        // css
        wp_enqueue_style( 'bootstrap_min_css','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', []);

        // 更新 jquery 版本
        wp_deregister_script('jquery');
        wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js',array(),'',true);

        wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', ['jquery'], '', true );
        wp_enqueue_script( 'bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', ['jquery'], '4.3.1', true );

        wp_enqueue_script( 'index_js', get_template_directory_uri().'/assets/js/index.js', ['bootstrap4','jquery'],true );
    }

    add_action( 'wp_enqueue_scripts', 'add_bootstrap4' ,100);



    
