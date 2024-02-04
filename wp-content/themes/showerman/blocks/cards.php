<?php

// Récupérez les champs personnalisés.
$titre = get_field( 'titre_concept' );
$texte = get_field( 'texte' );
$image = get_field( 'image' );

// Utilisez ces champs pour afficher le contenu du bloc.
?>
<div class="card-menu box-du-moment " data-aos="fade-up">
    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>"
         style="width: 100%" class="box-du-moment-img"/>
    <h3><?php echo ( $titre ); ?></h3>
    <p><?php echo ( $texte ); ?></p>
    <button class="btn-book mt-3"><a href="https://usellweb.co/fr/landingpage/shawerman-lyon-3" class="color-white" target="_blank">Commander</a></button>
</div>
