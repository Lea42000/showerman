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


function shawerman_register_assets() {
	//wp_deregister_script('jquery');
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', [], false, true );
	wp_register_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', [] );
	wp_register_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', [
		'popper',
		'jquery'
	], false, true );
	wp_register_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', [], false, true );
	wp_enqueue_script('aos', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js', array(), null, true);
	wp_enqueue_script('slick-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), null, true);
	wp_enqueue_script('swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.jquery.min.js', array('jquery'), null, true);
	wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', array('jquery'), null, true);
	wp_enqueue_style( 'bootstrap' );
	wp_enqueue_style( 'style' );
	wp_enqueue_script( 'bootstrap' );
	wp_enqueue_script('main', get_template_directory_uri() . '/main.js', array('jquery'), null, true);
	wp_enqueue_script('header', get_template_directory_uri() . '/menu/header/header.js', array('jquery'), null, true);
}

add_action( 'wp_enqueue_scripts', 'shawerman_register_assets' );


function shawerman_enqueue_styles() {
	// Ajouter la feuille de style

	wp_enqueue_script('aos', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js', [], null, true);
	wp_enqueue_style('aos', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css', [], null, 'all');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'header-styles', get_template_directory_uri() . '/menu/header/header.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'footer-styles', get_template_directory_uri() . '/menu/footer/footer.css', array(), '1.0', 'all' );
	// Home Page

	wp_enqueue_style( 'HP-box-du-moment-styles', get_template_directory_uri() . '/pages/home-page/box-du-moment/box-du-moment.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'HP-concept-styles', get_template_directory_uri() . '/pages/home-page/concept/concept.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'HP-newsletter-styles', get_template_directory_uri() . '/pages/home-page/newsletter/newsletter.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'HP-contact-styles', get_template_directory_uri() . '/pages/home-page/contact/contact.css', array(), '1.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'shawerman_enqueue_styles' );




function shawerman_post_thumbnails() {
	add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'shawerman_post_thumbnails' );

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

function my_acf_init_block_types() {
	if( function_exists('acf_register_block_type') ) {

		acf_register_block_type(array(
			'name'              => 'cards_menu',
			'title'             => __('Card menu'),
			'description'       => __('Card menu'),
			'render_template'   => 'blocks/cards.php',
			'category'          => 'formatting',
			'icon'              => 'admin-comments',
			'keywords'          => array( 'custom', 'quote' ),
			'supports'          => array(
				'align' => false,
			),
		));

		acf_register_block_type(array(
			'name'              => 'page_contact',
			'title'             => __('Bloc de contact'),
			'description'       => __('Un bloc pour afficher les informations de contact.'),
			'render_template' => get_template_directory() . '/blocks/page_contact.php',
			'category'          => 'formatting',
			'icon'              => 'email',
			'keywords'          => array( 'custom', 'quote' ),
			'supports'          => array(
				'align' => false,
			),
		));
	}
}

add_action('acf/init', 'my_acf_init_block_types');

function deliver_mail() {
	if ( isset( $_POST['cf-submitted'] ) ) {

		$name    = sanitize_text_field( $_POST['cf-name'] );
		$email   = sanitize_email( $_POST['cf-email'] );
		$subject = sanitize_text_field( $_POST['cf-subject'] );
		$message = esc_textarea( $_POST['cf-message'] );

		$to = get_option( 'admin_email' );

		$headers = "From: $name <$email>" . "\r\n";

		if ( wp_mail( $to, $subject, $message, $headers ) ) {
			echo '<div>';
			echo '<p>Merci pour votre message, il a été envoyé, vous receverer un mail de confirmation prochainement.</p>';
			echo '</div>';
		} else {
			echo 'Une erreur est survenue lors de l\'envoi du message. Merci de actualiser la page.';
		}
	}
}

add_action( 'wp', 'deliver_mail' );

?>