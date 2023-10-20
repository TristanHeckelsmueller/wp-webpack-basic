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


/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
    require get_template_directory() . '/inc/woocommerce.php';
}


function single_product_trust_items() : string
{
    $html  = "";

    $html .= "<div class='trust'>";
    $html .= build_trust_item("Transfersiebdruck");
    $html .= build_trust_item("Regional bedruckt");
    $html .= build_trust_item("100% Radlerfrei");
    $html .= build_trust_item("Aus der Kreisliga für die Kreisliga");
    $html .= "</div>";

    return $html;
}
add_shortcode("single_product_trust_items", "single_product_trust_items");


function build_trust_item ($text) : string
{
    $html  = "";
    $html .= "<div class='trust__item'>";
    $html .= '<svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none"><g clip-path="url(#clip0_818_263)"><path d="M6.04199 14.4997L12.0837 20.5413L24.167 8.45801" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_818_263"><rect width="29" height="29" fill="white"/></clipPath></defs></svg>';
    $html .= "<span class='trust__item__text'>$text</span>";
    $html .= "</div>";
    return $html;
}

function woocommerce_template_loop_product_title() {
    echo '<p class="' . esc_attr( apply_filters( 'woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title' ) ) . '">' . get_the_title() . '</p>';
}

/**
 * Allow HTML in term (category, tag) descriptions
 */
foreach ( array( 'pre_term_description' ) as $filter ) {
    remove_filter( $filter, 'wp_filter_kses' );
    if ( ! current_user_can( 'unfiltered_html' ) ) {
        add_filter( $filter, 'wp_filter_post_kses' );
    }
}

foreach ( array( 'term_description' ) as $filter ) {
    remove_filter( $filter, 'wp_kses_data' );
}