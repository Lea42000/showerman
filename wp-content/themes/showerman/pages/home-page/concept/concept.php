<?php
if ( have_posts() ) :
	while ( have_posts() ) : the_post();
		the_content();
	endwhile;
endif;
?>

<?php if (is_front_page()) {
    // Récupère la valeur du champ 'titre_concept'.
    $titre = get_field('titre_concept');
    // Récupère la valeur du champ 'texte'.
    $texte = get_field('texte');
    // Récupère la valeur du champ 'image'.
    $image = get_field('image');
    ?>

    <div class="section container-fluid concept bg-yellow">
        <div class="row">
            <div class="col-lg-12 col-xl-12 col-xs-12 p-0 ">
                <?php
                // Affiche l'image si celle-ci est définie.
                if ($image) {
                    echo '<div style="background-image: url(\'' . esc_url($image['url']) . '\'); height: 430px;" class="bg-image"></div>';
                }
                ?>
                <div class="col-lg-6 col-xl-6 col-xs-12 p-5 text-on-picture">
		            <?php
		            // Affiche le titre si celui-ci est défini.
		            if ($titre) {
			            echo '<h2 data-aos="fade-up" class="pt-3">' . ($titre) . '</h2>';
		            }

		            // Affiche le texte si celui-ci est défini.
		            if ($texte) {
			            echo '<div data-aos="fade-up"><p>' . ($texte) . '</p></div>';
		            }
		            ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>