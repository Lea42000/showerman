<?php

// Récupérez les champs personnalisés.
$titre       = get_field( 'titre_concept' );
$texte       = get_field( 'texte' );
$image       = get_field( 'image' );
$image_hover = get_field( 'image_au_survol' );

// Utilisez ces champs pour afficher le contenu du bloc.
?>
<div class="card-menu box-du-moment" data-aos="fade-up">
    <div class="picture-hover">
        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>"
             class="box-du-moment-img default-img"/>
        <img src="<?php echo esc_url( $image_hover['url'] ); ?>" alt="<?php echo esc_attr( $image_hover['alt'] ); ?>"
             class="box-du-moment-img hover-img"/>
    </div>
    <h3><?php echo( $titre ); ?></h3>
    <p><?php echo( $texte ); ?></p>
</div>
