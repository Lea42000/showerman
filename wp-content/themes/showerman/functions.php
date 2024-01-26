<?php


if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page( array(
		'page_title' => "Réglages de la page d'accueil",
		'menu_title' => 'Réglages Accueil',
		'menu_slug'  => 'reglages-accueil',
		'capability' => 'edit_posts',
		'redirect'   => false
	) );
}

function theme_prefix_setup() {
	add_theme_support( 'custom-logo', array(
		'height'     => 100,
		'width'      => 400,
		'flex-width' => true,
	) );
}

add_action( 'after_setup_theme', 'theme_prefix_setup' );


function tokyo_advisor_register_assets() {
	//wp_deregister_script('jquery');
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', [], false, true );
	wp_register_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', [] );
	wp_register_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', [
		'popper',
		'jquery'
	], false, true );
	wp_register_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', [], false, true );
	wp_enqueue_style( 'bootstrap' );
	wp_enqueue_style( 'style' );
	wp_enqueue_script( 'bootstrap' );
	wp_enqueue_script( 'main' );

}

add_action( 'wp_enqueue_scripts', 'tokyo_advisor_register_assets' );


function tokyo_advisor_enqueue_styles() {
	// Ajouter la feuille de style

	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'header-styles', get_template_directory_uri() . '/menu/header/header.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'footer-styles', get_template_directory_uri() . '/menu/footer/footer.css', array(), '1.0', 'all' );
	// Home Page

	wp_enqueue_style( 'HP-box-du-moment-styles', get_template_directory_uri() . '/pages/home-page/box-du-moment/box-du-moment.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'HP-concept-styles', get_template_directory_uri() . '/pages/home-page/concept/concept.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'HP-newsletter-styles', get_template_directory_uri() . '/pages/home-page/newsletter/newsletter.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'HP-contact-styles', get_template_directory_uri() . '/pages/home-page/contact/contact.css', array(), '1.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'tokyo_advisor_enqueue_styles' );

function inserer_carte() {
	ob_start(); // Commence la capture de l'output
	// Votre code PHP ici
	// Par exemple, inclure votre fichier template-carte.php :
	include(get_theme_file_path('/template-carte.php'));
	return ob_get_clean(); // Renvoie l'output capturé et arrête la capture
}
add_shortcode('carte', 'inserer_carte');


function tokyo_advisor_post_thumbnails() {
	add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'tokyo_advisor_post_thumbnails' );

function my_custom_theme_setup() {
	add_theme_support( 'menus' );
	register_nav_menu( 'primary', 'Menu Principal' );
}

add_action( 'after_setup_theme', 'my_custom_theme_setup' );

function footer_theme_setup() {
	add_theme_support( 'menus' );
	register_nav_menu( 'footer', 'Menu Footer' );
}

add_action( 'after_setup_theme', 'footer_theme_setup' );

class Menu_Primary_Walker extends Walker_Nav_Menu {
	// Surchargez les méthodes nécessaires pour personnaliser la sortie
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		// Personnaliser le début d'un sous-menu
	}

	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		// Personnaliser chaque élément de menu
	}

}

function add_additional_class_on_li( $classes, $item, $args ) {
	if ( isset( $args->add_li_class ) ) {
		$classes[] = $args->add_li_class;
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'add_additional_class_on_li', 1, 3 );


?>