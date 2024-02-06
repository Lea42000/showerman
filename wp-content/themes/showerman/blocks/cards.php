<div id="carouselMobile" class="carousel slide d-md-none" data-ride="carousel">
    <div class="carousel-inner">
		<?php
		$image1       = get_sub_field( 'image' );
		$titre1       = get_sub_field( 'titre' );
		$texte1       = get_sub_field( 'texte' );
		$image_hover1 = get_sub_field( 'image_au_survol' );
		?>
        <img src="<?php echo esc_url( $image1['url'] ); ?>"
             alt="<?php echo esc_attr( $image1['alt'] ); ?>" class="box-du-moment-img default-img"/>
        <img src="<?php echo esc_url( $image_hover1['url'] ); ?>"
             alt="<?php echo esc_attr( $image_hover1['alt'] ); ?>" class="box-du-moment-img hover-img"/>
        <h3><?php echo esc_html( $titre1 ); ?></h3>
        <p><?php echo esc_html( $texte1 ); ?></p>
    </div>
    <a class="carousel-control-prev" href="#carouselMobile" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Précédent</span>
    </a>
    <a class="carousel-control-next" href="#carouselMobile" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Suivant</span>
    </a>
</div>

<!-- Cartes individuelles pour les non-mobiles (desktop) -->
<div class="d-none d-md-block">
	<?php
	$titre       = get_field( 'titre_concept' );
	$texte       = get_field( 'texte' );
	$image       = get_field( 'image' );
	$image_hover = get_field( 'image_au_survol' );
	?>
    <div class="card-menu box-du-moment" data-aos="fade-up">
        <div class="picture-hover">
            <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>"
                 class="box-du-moment-img default-img"/>
            <img src="<?php echo esc_url( $image_hover['url'] ); ?>"
                 alt="<?php echo esc_attr( $image_hover['alt'] ); ?>"
                 class="box-du-moment-img hover-img"/>
        </div>
        <h3><?php echo( $titre ); ?></h3>
        <p><?php echo( $texte ); ?></p>
    </div>
</div>
