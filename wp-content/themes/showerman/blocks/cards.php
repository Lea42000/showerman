<?php
$titre1       = get_field( 'titre-1' );
$titre2       = get_field( 'titre-2' );
$titre3       = get_field( 'titre-3' );
$texte1       = get_field( 'texte-1' );
$texte2       = get_field( 'texte-2' );
$texte3       = get_field( 'texte-3' );
$image1       = get_field( 'image-1' );
$image2       = get_field( 'image-2' );
$image3       = get_field( 'image-3' );
$image_hover1 = get_field( 'image-au-survol-1' );
$image_hover2 = get_field( 'image-au-survol-2' );
$image_hover3 = get_field( 'image-au-survol-3' );
?>
<div class="section d-none d-md-block">
    <div class="col-12">
        <div class="row">
            <div class="col-4">
                <div class="card-menu box-du-moment" data-aos="fade-up">
                    <div class="picture-hover">
                        <img src="<?php echo esc_url( $image1['url'] ); ?>"
                             alt="<?php echo esc_attr( $image1['alt'] ); ?>"
                             class="box-du-moment-img default-img"/>
                        <img src="<?php echo esc_url( $image_hover1['url'] ); ?>"
                             alt="<?php echo esc_attr( $image_hover1['alt'] ); ?>"
                             class="box-du-moment-img hover-img"/>
                    </div>
                    <h3><?php echo( $titre1 ); ?></h3>
                    <p><?php echo( $texte1 ); ?></p>
                </div>
            </div>
            <div class="col-4">
                <div class="card-menu box-du-moment" data-aos="fade-up">
                    <div class="picture-hover">
                        <img src="<?php echo esc_url( $image2['url'] ); ?>"
                             alt="<?php echo esc_attr( $image2['alt'] ); ?>"
                             class="box-du-moment-img default-img"/>
                        <img src="<?php echo esc_url( $image_hover2['url'] ); ?>"
                             alt="<?php echo esc_attr( $image_hover2['alt'] ); ?>"
                             class="box-du-moment-img hover-img"/>
                    </div>
                    <h3><?php echo( $titre2 ); ?></h3>
                    <p><?php echo( $texte2 ); ?></p>
                </div>
            </div>
            <div class="col-4">
                <div class="card-menu box-du-moment" data-aos="fade-up">
                    <div class="picture-hover">
                        <img src="<?php echo esc_url( $image3['url'] ); ?>"
                             alt="<?php echo esc_attr( $image3['alt'] ); ?>"
                             class="box-du-moment-img default-img"/>
                        <img src="<?php echo esc_url( $image_hover3['url'] ); ?>"
                             alt="<?php echo esc_attr( $image_hover3['alt'] ); ?>"
                             class="box-du-moment-img hover-img"/>
                    </div>
                    <h3><?php echo( $titre3 ); ?></h3>
                    <p><?php echo( $texte3 ); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$titre1       = get_field( 'titre-1' );
$titre2       = get_field( 'titre-2' );
$titre3       = get_field( 'titre-3' );
$texte1       = get_field( 'texte-1' );
$texte2       = get_field( 'texte-2' );
$texte3       = get_field( 'texte-3' );
$image1       = get_field( 'image-1' );
$image2       = get_field( 'image-2' );
$image3       = get_field( 'image-3' );
$image_hover1 = get_field( 'image-au-survol-1' );
$image_hover2 = get_field( 'image-au-survol-2' );
$image_hover3 = get_field( 'image-au-survol-3' );
?>
<!-- Carrousels pour mobile -->
<div class="section d-block d-md-none">
	<?php for ($i = 1; $i <= 3; $i++): ?>
		<?php
		$image = get_field('image-'.$i);
		$image_hover = get_field('image-au-survol-'.$i);
		$titre = get_field('titre-'.$i);
		$texte = get_field('texte-'.$i);
		?>
        <div id="carouselExampleIndicators<?php echo $i; ?>" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-block w-100 card-menu box-du-moment" data-aos="fade-up">
                        <div class="picture-hover">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="box-du-moment-img default-img"/>
                            <img src="<?php echo esc_url($image_hover['url']); ?>" alt="<?php echo esc_attr($image_hover['alt']); ?>" class="box-du-moment-img hover-img"/>
                        </div>
                        <h3><?php echo $titre; ?></h3>
                        <p><?php echo $texte; ?></p>
                    </div>
                </div>
                <!-- Vous pouvez ajouter d'autres .carousel-item ici si vous avez plus d'images pour chaque carrousel -->
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators<?php echo $i; ?>" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Précédent</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators<?php echo $i; ?>" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Suivant</span>
            </a>
        </div>
	<?php endfor; ?>
</div>