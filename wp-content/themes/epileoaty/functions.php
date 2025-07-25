<?php
/**
 * EpileoAty Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package EpileoAty
 * @since 1.0.0
 */

define('CHILD_THEME_EPILEOATY_VERSION', '1.0.0');

/**
 * ✅ Charger Tailwind via CDN AVANT les autres scripts
 */
function ajouter_tailwind_via_cdn() {
    wp_enqueue_script(
        'tailwindcdn',
        'https://cdn.tailwindcss.com',
        array(),
        null,
        false // Charge dans le <head>
    );
}
add_action('wp_enqueue_scripts', 'ajouter_tailwind_via_cdn', 0); // priorité 0 = en tout premier

/**
 * ✅ Charger le style.css du thème enfant
 */
function child_enqueue_styles() {
    wp_enqueue_style(
        'epileoaty-theme-css',
        get_stylesheet_directory_uri() . '/style.css',
        array('astra-theme-css'), // dépend de Astra
        CHILD_THEME_EPILEOATY_VERSION,
        'all'
    );
}
add_action('wp_enqueue_scripts', 'child_enqueue_styles', 15);
