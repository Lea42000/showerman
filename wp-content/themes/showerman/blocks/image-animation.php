	<?php
	$titre       = get_field( 'titre' );
	$texte       = get_field( 'texte' );
	$image       = get_field( 'image' );
	$image_hover = get_field( 'image_au_survol' );
	?>
    <div class="bloc-image p-5" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-6 col-xl-6 col-md-12">
                <h3><?php echo( $titre ); ?></h3>
                <p><?php echo( $texte ); ?></p>
            </div>
            <div class="col-lg-6 col-xl-6 col-md-12 pt-3">
                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" class="image-base"/>
                <img src="<?php echo esc_url( $image_hover['url'] ); ?>" alt="<?php echo esc_attr( $image_hover['alt'] ); ?>" class="image-hover"/>
            </div>
        </div>
    </div>
