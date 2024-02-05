
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
                <div class="col-lg-6 col-xl-6 col-xs-12 p-5 bg-light-yellow">
                    <div data-aos="fade-up">
					<?php
					$titre = get_field( 'titre' );
					if ( $titre ) {
						echo '<h2 class="pb-3 color-grey">' . esc_html( $titre ) . '</h2>';
					}

					$horaires = get_field( 'horaires' );
					if ( $horaires ) {
						echo '<div class="horaires color-grey"><p>' . nl2br( ( $horaires ) ) . '</p></div>';
					}

					$bouton_itineraire = get_field( 'bouton_itiniraire' );
					if ( $bouton_itineraire ) {
						echo '<a href="' . esc_url( $bouton_itineraire ) . '" class="bouton-itineraire">Itinéraire</a>';
					}

					?>
                    </div>
                </div>
			<?php
			endif;
			?>
        </div>
    </section>
<?php } ?>