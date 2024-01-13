<?php
function tokyo_advisor_register_assets()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', [], false, true);
    wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', []);
    wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('style');
    wp_enqueue_script('bootstrap');

}

add_action('wp_enqueue_scripts', 'tokyo_advisor_register_assets');


function tokyo_advisor_enqueue_styles()
{
    // Ajouter la feuille de style
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'tokyo_advisor_enqueue_styles');

function tokyo_advisor_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');

    add_image_size('post-thumbnail', 350, 215, true);
}

add_action('after_setup_theme', 'tokyo_advisor_supports');

function tokyo_advisor_post_thumbnails()
{
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'tokyo_advisor_post_thumbnails');






?>