<?php

require_once(get_parent_theme_file_path('/inc/clearAllstyle.php'));
// require_once( get_parent_theme_file_path( '/inc/swiper.php' ));
require_once(get_parent_theme_file_path('/inc/bootstrap4.php'));

// 客製css js
add_action('wp_enqueue_scripts', 'add_costom', 100);
function add_costom()
{
   // css
   wp_enqueue_style('index_css', get_template_directory_uri() . '/assets/css/index.css', []);

   // fonts
   wp_enqueue_style('notosanstc', '//fonts.googleapis.com/earlyaccess/notosanstc.css', []);
   wp_enqueue_style('Macondo', 'https://fonts.googleapis.com/css?family=Macondo', []);

   // js 
   wp_enqueue_script('index_js', get_template_directory_uri() . '/assets/js/index.js', [], '', true);
}




// 客製頁面類別
add_action('init', 'create_my_post_types');
add_theme_support( 'post-thumbnails' );
function create_my_post_types()
{
   register_post_type(
      'product',
      array(
         'labels' => array('name' => __('Product')),
         'public' => true,
         'supports' => array('title', 'editor', 'thumbnail'),
      )
   );


   register_post_type(
      'video',
      array(
         'labels' => array('name' => __('Video')),
         'public' => true,
         'supports' => [
            'title', 
            'editor', 
            'custom-fields'
         ],
      )
   );

   register_post_type(
      'news',
      array(
         'labels' => array('name' => __('News')),
         'public' => true
      )
   );
}
// add_post_type_support('my_custom_post_type', 'post-formats');
