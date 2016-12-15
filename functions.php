<?php
    if(!function_exists('future_setup')) :
        function future_setup() {
            //let wordpress handle the title tags
            add_theme_support('title-tag');
        }
    endif;
    add_action('after_setup_theme', 'future_setup');

    /*--- Register Menus ----*/

    function register_future_menus() {
        register_nav_menus(
                array(
                    'primary' => __('Primary Menu')
                )
        );
    }
    add_action('init', 'register_future_menus');

    /*---- Add Stylesheets ---- */

    function future_scripts() {
    
        // Enqueue Main Stylesheets
        wp_enqueue_style('future_styles', get_stylesheet_uri());

        // Enqueue GOOGLE FONTS NUNITO
        wp_enqueue_style('future_google_fonts', 'https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,700');

        // ENQUEUE FONT AWESOME FONTS
        wp_enqueue_style('future_font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
    }
    add_action('wp_enqueue_scripts', 'future_scripts');


 ?>
