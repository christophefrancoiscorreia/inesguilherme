<?php

////////////////////////////////////////////////////////////////////
// Register theme JS ADD ALL YOUR JS FILES HERE
////////////////////////////////////////////////////////////////////
add_action('wp_enqueue_scripts', 'main_theme_js');
function main_theme_js() {
    $version = wp_get_theme()->get('Version');

    wp_enqueue_script('main-js', get_stylesheet_directory_uri().'/assets/js/main.min.js',array( 'jquery' ),$version,true );

    wp_localize_script( 'main-js', 'PT_Ajax', array(
            'ajaxurl'   => admin_url( 'admin-ajax.php' ),
            'ajax_nonce' => wp_create_nonce('cc_ajax_nonce')
        )
    );
}

add_action('wp_enqueue_scripts', 'hiperion_register_styles');
function hiperion_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('hiperion-styles', get_stylesheet_directory_uri().'/assets/css/style.min.css', array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'insert_new_custom_jquery');
function insert_new_custom_jquery() {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_stylesheet_directory_uri().'/assets/js/jquery-3.6.0.min.js', array(), null, true);

}