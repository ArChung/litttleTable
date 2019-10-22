<?php 
    function project_dequeue_unnecessary_styles() {
        wp_dequeue_style( 'wp-block-library' );
        wp_deregister_style( 'wp-block-library' );

        wp_dequeue_style( 'the_champ_frontend_css' );
        wp_deregister_style( 'the_champ_frontend_css' );
        
        wp_dequeue_style( 'the_champ_sharing_default_svg' );
        wp_deregister_style( 'the_champ_sharing_default_svg' );

        wp_dequeue_style( 'yoast-seo-adminbar' );
        wp_deregister_style( 'yoast-seo-adminbar' );

        wp_dequeue_style( 'wpdm-bootstrap' );
        wp_deregister_style( 'wpdm-bootstrap' );

        wp_dequeue_style( 'wpdm-font-awesome' );
        wp_deregister_style( 'wpdm-font-awesome' );

        wp_dequeue_style( 'wpdm-front' );
        wp_deregister_style( 'wpdm-front' );

        wp_dequeue_style( 'wpdm-block-library' );
        wp_deregister_style( 'wpdm-block-library' );
    }
    add_action( 'wp_print_styles', 'project_dequeue_unnecessary_styles');



    