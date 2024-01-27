<?php get_header() ?>

    <!-- Récupère le content de la page Home -->
<?php
if ( have_posts() ) :
	while ( have_posts() ) : the_post();
		the_content();
	endwhile;
endif;
?>
    <!-- Btn Call -->
    <div class="btn-call">
        <a href="tel:+1234567890">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/telephone.png" alt="Appeler nous">
        </a>
    </div>

    <!-- Bloc Box du Moment -->
<?php if ( is_front_page() ) { ?>
    <section class="container-fluid box-du-moment bg-light-yellow">
        <div class="container">
            <h2> Nos Boxs du Moment </h2>
            <div class="row w-100 mt-5 pt-5">
				<?php
				// Assurez-vous que vous êtes sur la page d'accueil et que la fonction get_field existe.
				if ( is_front_page() && function_exists( 'get_field' ) ) {
					// Vérifiez si le champ répéteur 'box_du_moment' a des données.
					if ( have_rows( 'box_du_moment' ) ) {
						// Bouclez sur les données du répéteur.
						while ( have_rows( 'box_du_moment' ) ) {
							the_row(); // Configure l'itération sur la ligne suivante.

							// Récupérez vos sous-champs par leurs noms.
							$image         = get_sub_field( 'image' );
							$titre         = get_sub_field( 'titre' );
							$texte         = get_sub_field( 'texte' );
							$coup_de_coeur = get_sub_field( 'coup_de_coeur' );
							?>
                            <div class="col-lg-4 col-xl-4 col-xs-6 mb-5">
								<?php
								// Affichez l'image.
								if ( $image ) {
									echo '<img src="' . esc_url( $image['url'] ) . '" alt="' . esc_attr( $image['alt'] ) . '" />';
								}

								// Affichez le titre.
								if ( $titre ) {
									echo '<h3>' . esc_html( $titre ) . '</h3>';
								}

								// Affichez le texte.
								if ( $texte ) {
									echo '<p>' . esc_html( $texte ) . '</p>';
								}

								// Affichez si c'est un coup de cœur ou non.
								if ( $coup_de_coeur ) {
									echo '<div class="coup-de-coeur"> <p class="num-1">N°1</p><img src="wp-content/themes/showerman/assets/images/silhouette-de-forme-simple-de-coeur.png"></div>';
								}
								?>
                            </div>
							<?php
						}
					}
				}
				?>
            </div>
        </div>
    </section>
<?php } ?>

    <!-- Bloc Concept -->
<?php
if ( is_front_page() ) {
	// Récupère la valeur du champ 'titre'.
	$titre = get_field( 'titre_concept' );
	// Récupère la valeur du champ 'texte'.
	$texte = get_field( 'texte' );
	// Récupère la valeur du champ 'image'.
	$image = get_field( 'image' );

	?>

    <div class="section container-fluid concept bg-yellow">
    <div class="row">
    <div class="col-lg-6 col-xl-6 col-xs-12 p-0">
	<?php
	// Affiche l'image si celle-ci est définie.
	if ( $image ) {
		echo '<div style="background-image: url(\'' . esc_url( $image['url'] ) . '\');" class="bg-image"></div>';
	}
}
?>
    </div>
    <div class="col-lg-6 col-xl-6 col-xs-12 p-5">
		<?php
		// Affiche le titre si celui-ci est défini.
		if ( $titre ) {
			echo '<h2>' . ( $titre ) . '</h2>';
		}

		// Affiche le texte si celui-ci est défini.
		if ( $texte ) {
			echo '<div>' . ( $texte ) . '</div>';
		}
		?>
    </div>
    </div>
    </div>

    <!-- Bloc Newsletter -->
<?php if ( is_front_page() ) { ?>
    <section class="container-fluid newsletter">
        <div class="row">
            <div class="col-lg-6 col-xl-6 col-xs-12 bg-yellow p-5">
                <h2>Psst .. !! <br> Il y a du nouveau ici</h2>
                <p>Suivez toute l’actualité de Shawerman Lyon 3
                    Inscrivez-vous à notre newsletter et restez informés des prochains évènements et promotions.</p>
				<?php echo do_shortcode( '[mc4wp_form id=42]' ); ?>
            </div>
            <div class="col-lg-6 col-xl-6 col-xs-12">
                <div class="row ">
					<?php
					// Vérifie si le champ répéteur 'bloc_newsletter' a des données
					if ( have_rows( 'bloc_newsletter' ) ) :

						// Boucle à travers les données du champ répéteur
						while ( have_rows( 'bloc_newsletter' ) ) : the_row();

							// Récupérer les images
							$image_1 = get_sub_field( 'image_1' );
							$image_2 = get_sub_field( 'image_2' );
							$image_3 = get_sub_field( 'image_3' );
							$image_4 = get_sub_field( 'image_4' );

							// Afficher les images si elles existent
							if ( $image_1 ) :
								echo '<div class="col-6 bg-image-news" style="background-image: url(\'' . esc_url( $image_1['url'] ) . '\')"></div>';
							endif;

							if ( $image_2 ) :
								echo '<div class="col-6 bg-image-news" style="background-image: url(\'' . esc_url( $image_2['url'] ) . '\')"></div>';
							endif;

							if ( $image_3 ) :
								echo '<div class="col-6 bg-image-news" style="background-image: url(\'' . esc_url( $image_3['url'] ) . '\')"></div>';
							endif;

							if ( $image_4 ) :
								echo '<div class="col-6 bg-image-news" style="background-image: url(\'' . esc_url( $image_4['url'] ) . '\')"></div>';
							endif;

						endwhile;
					else :
						// Pas de données trouvées
						echo '<p> Pas d evenement pour le moment</p>';
					endif;
					?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

    <!-- Bloc Contact -->
<?php if ( is_front_page() ) { ?>
    <section class="container-fluid home-contact">
        <div class="row">
			<?php
			if ( function_exists( 'get_field' ) ):

				?>
                <div class="col-lg-6 col-xl-6 col-xs-12 p-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.6964002777645!2d4.853168674802395!3d45.757232113841525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4eb6fdc3a20ed%3A0x4c2ae43ccbd0f201!2sSHAWERMAN!5e0!3m2!1sfr!2sfr!4v1705243897991!5m2!1sfr!2sfr"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-6 col-xl-6 col-xs-12 bg-yellow p-5">
					<?php
					// Récupérer le titre
					$titre = get_field( 'titre' );
					if ( $titre ) {
						echo '<h2 class="pb-3">' . esc_html( $titre ) . '</h2>';
					}

					// TODO corriger le bouton itineraire
					// Récupérer l'URL du bouton itinéraire
					$bouton_itineraire = get_field( 'bouton_itiniraire' );
					if ( $bouton_itineraire ) {
						echo '<a href="' . esc_url( $bouton_itineraire ) . '" class="bouton-itineraire">Itinéraire</a>';
					}

					// Récupérer les horaires
					$horaires = get_field( 'horaires' );
					if ( $horaires ) {
						echo '<div class="horaires"><p>' . nl2br( ( $horaires ) ) . '</p></div>';
					}

					?>
                </div>

			<?php
			endif;
			?>
        </div>
    </section>
<?php } ?>
<?php get_footer() ?>