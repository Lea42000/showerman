<?php
?>

<?php if (is_front_page()) { ?>
    <section class="container-fluid box-du-moment bg-light-yellow">
        <div class="container">
            <h2> Nos Boxs du Moment </h2>
            <div class="row w-100 mt-5 pt-5">
                <?php
                // Assurez-vous que vous êtes sur la page d'accueil et que la fonction get_field existe.
                if (is_front_page() && function_exists('get_field')) {
                    // Vérifiez si le champ répéteur 'box_du_moment' a des données.
                    if (have_rows('box_du_moment')) {
                        // Bouclez sur les données du répéteur.
                        while (have_rows('box_du_moment')) {
                            the_row(); // Configure l'itération sur la ligne suivante.
                            // Récupérez vos sous-champs par leurs noms.
                            $image = get_sub_field('image');
	                        $image_hover = get_sub_field('image_au_survol');
                            $titre = get_sub_field('titre');
                            $texte = get_sub_field('texte');
                            $coup_de_coeur = get_sub_field('coup_de_coeur');
                            ?>
                            <div class="col-lg-4 col-xl-4 col-xs-6 mb-5" data-aos="fade-up">
                                <?php
                               if ($image): ?>
                                <div class="picture-hover">
                                    <!-- Image par défaut -->
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                                         class="box-du-moment-img default-img"/>
                                    <!-- Image au survol -->
                                    <img src="<?php echo esc_url($image_hover['url']); ?>" alt="<?php echo esc_attr($image_hover['alt']); ?>"
                                         class="box-du-moment-img hover-img"/>
                                </div>
	                            <?php endif; ?>
	                            <?php
                                // Affichez le titre.
                                if ($titre) {
                                    echo '<h3 class="title">' . esc_html($titre) . '</h3>';
                                }

                                // Affichez le texte.
                                if ($texte) {
                                    echo '<p>' . esc_html($texte) . '</p>';
                                }

                                // Affichez si c'est un coup de cœur ou non.
                                if ($coup_de_coeur) {
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

<?php if (is_front_page() && function_exists('get_field')): ?>
    <div id="carouselExampleControls" class="carousel slide box-moment-mobile" data-ride="carousel">
        <h2 data-aos="fade-up"> Nos Boxs du Moment </h2>
        <div class="carousel-inner">
			<?php
			$first = true;
			if (have_rows('box_du_moment')) {
				while (have_rows('box_du_moment')) {
					the_row();
					$image_hover = get_sub_field('image_au_survol');
					$titre = get_sub_field('titre');
					$texte = get_sub_field('texte');
					$coup_de_coeur = get_sub_field('coup_de_coeur');
					$item_class = $first ? 'carousel-item active' : 'carousel-item';
					?>
                    <div class="<?php echo $item_class; ?>">
						<?php if ($image_hover): ?>
                            <img class="d-block w-100" src="<?php echo esc_url($image_hover['url']); ?>" alt="<?php echo esc_attr($image_hover['alt']); ?>">
						<?php endif; ?>
                        <div class="">
							<?php if ($titre): ?>
                                <h3><?php echo esc_html($titre); ?></h3>
							<?php endif; ?>
							<?php if ($texte): ?>
                                <p><?php echo esc_html($texte); ?></p>
							<?php endif; ?>
                        </div>
                    </div>
					<?php
					$first = false;
				}
			}
			?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<?php endif; ?>


