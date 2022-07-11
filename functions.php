<?php

if (!function_exists('theme_scripts')) :
    function theme_scripts()
    {
        wp_enqueue_style('bootstrap', get_template_directory_uri() . 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css');
        wp_enqueue_style('icon', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css', array('bootstrap'));

        wp_enqueue_script('bundle', get_theme_file_uri('/js/bootstrap.bundle.min.js'), false, true);
    }
endif;
add_action('wp_enqueue_scripts', 'theme_scripts');

function remove_admin_login_header()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

function add_files()
{
    wp_enqueue_style('reset-style', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap');
    wp_enqueue_style('lineicons', 'https://cdn.lineicons.com/3.0/lineicons.css');
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
// add_files()
add_action('wp_enqueue_scripts', 'add_files');
