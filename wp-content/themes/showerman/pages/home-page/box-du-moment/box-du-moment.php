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
                            $titre = get_sub_field('titre');
                            $texte = get_sub_field('texte');
                            $coup_de_coeur = get_sub_field('coup_de_coeur');
                            ?>
                            <div class="col-lg-4 col-xl-4 col-xs-6 mb-5">
                                <?php
                                // Affichez l'image.
                                if ($image) {
                                    echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" />';
                                }

                                // Affichez le titre.
                                if ($titre) {
                                    echo '<h3>' . esc_html($titre) . '</h3>';
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