<?php
    function custom_theme_assets(){
        wp_enqueue_style('style', get_stylesheet_uri() );
    }

    add_action('wp_enqueue_scripts', 'custom_theme_assets');


    function wpb_custom_new_menu() {
        register_nav_menus(
          array(
            'my-custom-menu' => __( 'My Custom Menu' ),
            'extra-menu' => __( 'Extra Menu' )
          )
        );
      }
      add_action( 'init', 'wpb_custom_new_menu' );


      
?>

