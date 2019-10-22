<?php 

    
    function add_swiper(){
        // css
        wp_enqueue_style( 'swiper_min_css','https://unpkg.com/swiper/css/swiper.min.css', []);
        wp_enqueue_script( 'popper', 'https://unpkg.com/swiper/js/swiper.min.js', [], '', true );

    }

    add_action( 'wp_enqueue_scripts', 'add_swiper' ,100);



    



    
