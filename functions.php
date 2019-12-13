<?php 

function portfolio_resources() {
    wp_enqueue_script('portfolio_main_js', get_theme_file_uri('/assets/js/main.js'), NULL, '0.6', true);
    wp_enqueue_style('portfolio_fontawesome', get_template_directory_uri() . '/assets/fontawesome/all.min.css');
    wp_enqueue_style('portfolio_main_styles', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('portfolio_main_styles', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts', 'portfolio_resources');

function portfolio_features(){
    add_theme_support("title-tag");
}

add_action("after_setup_theme", "portfolio_features");