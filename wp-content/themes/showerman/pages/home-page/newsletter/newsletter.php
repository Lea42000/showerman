<?php
if ( have_posts() ) :
	while ( have_posts() ) : the_post();
		the_content();
	endwhile;
endif;
?>

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