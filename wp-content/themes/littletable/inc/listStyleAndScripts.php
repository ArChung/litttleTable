<?php 
    function inspect_styles() {
        global $wp_styles;
        print_r($wp_styles->queue);
    }
    add_action( 'wp_print_styles', 'inspect_styles' );

    function inspect_scripts() {
        global $wp_scripts;
        print_r($wp_scripts->queue);
    }
    add_action( 'wp_print_scripts', 'inspect_scripts' );