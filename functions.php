<?php

if (! defined( 'ABSPATH' )) {
    exit;
}
require_once 'vendor/autoload.php';



/**
 * Load styles and scripts
 */
function basic_theme_scripts() {
    wp_enqueue_style( 'app.min.css', get_template_directory_uri() . '/bundled/app.min.css'  );
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/bundled/app.min.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'basic_theme_scripts' );



