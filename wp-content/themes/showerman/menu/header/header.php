<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,600&family=Noto+Sans+JP:wght@100;400;600;700&display=swap"
          rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&family=Rubik:wght@300;400&display=swap"
          rel="stylesheet">
	<?php wp_head() ?>
</head>

<header class="header">
	<?php

	if ( has_nav_menu( 'primary' ) ) {

		wp_nav_menu( array(
			'theme_location' => 'primary',
			'add_li_class'   => 'my-custom-li-class',
		) );
	}

	?>


    <section class="video-home">
        <video autoplay loop muted playsinline class="background-video">
            <source src="<?php echo get_template_directory_uri(); ?>/assets/images/video-home.mp4" type="video/mp4">
        </video>
        <div class="overlay-text">
            <h1 data-aos="fade-up">Shawer<span class="yellow-color">man</span></h1>
            <p>Bienvenue à Shawer<span class="yellow-color">man</span> Lyon 3.<br>Cuisine authentique de style maison
                préparée avec des ingrédients frais tous les jours.</p>
            <button class="btn-book">Reserver</button>
        </div>
    </section>

</header>

<!-- Début du préchargeur
<div id="preloader">
    <div id="loader">
        <div id="preloader-container">
                <dic class="col-12">
                    <div class="row">
                        <div class="m-auto t-center col-6">
                            <img src="<?php //echo get_template_directory_uri(); ?>/assets/images/shawerman-logo.png" width="170px" alt="Appeler nous">
                        </div>
                    </div>
                </dic>
            </div>

        </div>

    </div>
 -->
<!-- Fin du préchargeur -->
<div class="container-fluid p-0">