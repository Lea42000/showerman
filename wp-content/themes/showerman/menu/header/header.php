<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,600&family=Noto+Sans+JP:wght@100;400;600;700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&family=Rubik:wght@300;400&display=swap"
        rel="stylesheet">
    <?php wp_head() ?>
</head>

<header class="header">
    <header class="custom-header" id="header">
        <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new_logo.png" alt="logo">
            </a>
        </div>
        <div class="main-navbar">
            <div class="close-menu">&#10005;</div>
	        <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
            <a class="order-menu" href="https://usellweb.co/fr/landingpage/shawerman-lyon-3" target="_blank">Commander</a>
        </div>
        <div class="burger-menu">
            <div class="burger-icon">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </header>

	<?php if (is_front_page()) { ?>
    <section class="video-home">
        <video autoplay loop muted playsinline class="background-video">
            <source src="<?php echo get_template_directory_uri(); ?>/assets/images/video-home.mp4" type="video/mp4">
        </video>
        <div class="overlay-text">
            <h1 data-aos="fade-up">Shawer<span class="yellow-color">man</span></h1>
            <p>Bienvenue à Shawer<span class="yellow-color">man</span> Lyon 3.<br>Cuisine authentique de style maison
                préparée avec des ingrédients frais tous les jours.</p>
            <button class="btn-book"><a href="https://usellweb.co/fr/landingpage/shawerman-lyon-3" class="color-white" target="_blank">Commander</a></button>
        </div>
    </section>
    <?php }; ?>
<div class="container-fluid p-0">