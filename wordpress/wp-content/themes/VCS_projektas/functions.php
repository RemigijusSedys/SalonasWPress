<?php

//======= meniu ============
function salonas_menus(){
   $locations = array(
      'header' => "Header",
      // 'footer' => "Footer Menu Items"
   );
   register_nav_menus($locations);
}
add_action('init', 'salonas_menus');

//====post-cards====
function salonas_theme_support(){
   add_theme_support('title-tag');
   //add custom logo    
   add_theme_support('custom-logo');
   add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'salonas_theme_support');


//======style==========
function salonas_register_styles(){
   wp_enqueue_style('salonas-style-owl', get_template_directory_uri() . '/assets/vendor/owl/owl.carousel.min.css ', array(), null, false, 'all');
   wp_enqueue_style('salonas-style-owl-default', get_template_directory_uri() . '/assets/vendor/owl/owl.theme.default.min.css ', array(), null, false, 'all');
   wp_enqueue_style('salonas-lightbox-css', get_template_directory_uri() . '/assets/css/lightbox.css', array(), null, false, 'all');
   wp_enqueue_style('salonas-bootsrap-css', get_template_directory_uri() . '/assets/css/bootsrap.min.css', time(), array(), null, false, 'all');
   wp_enqueue_style('salonas-style-bootsrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css');
   wp_enqueue_style('salonas-style', get_template_directory_uri() . '/assets/css/main-styles.css', time(), array(), null, false, 'all');
}
add_action('wp_enqueue_scripts', 'salonas_register_styles');


// =========script========
function salonas_register_script(){
   wp_enqueue_script('salonas-lightbox-js', get_template_directory_uri() . '/assets/js/lightbox-plus-jquery.js', array(), null, true, 'all');

   wp_enqueue_script('salonas-script-jsite', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js', array(), null, true, 'all');
   wp_enqueue_script('salonas-bootsrap-js',  get_template_directory_uri(). '/assets/js/bootstrap.min.js' , array(),null, true, 'all');
   wp_enqueue_script('salonas-script-owl', get_template_directory_uri() . '/assets/vendor/owl/owl.carousel.js', array(), null, true, 'all');
   wp_enqueue_script('salonas-lightbox-js', get_template_directory_uri() . '/assets/js/lightbox-plus-jquery.js', array(), null, true, 'all');
   wp_enqueue_script('salonas-script-js', get_template_directory_uri() . '/assets/js/script.js', array(), null, true, 'all');
   wp_enqueue_script('salonas-script-citatos', get_template_directory_uri() . '/assets/js/citatos.js ', array(), null, true, 'all');
}

add_action('wp_enqueue_scripts', 'salonas_register_script');


?>
