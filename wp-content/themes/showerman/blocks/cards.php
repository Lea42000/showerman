<?php

// Récupérez les champs personnalisés.
$titre = get_field( 'titre_concept' );
$texte = get_field( 'texte' );
$image = get_field( 'image' );

// Utilisez ces champs pour afficher le contenu du bloc.
?>
<div class="card-menu box-du-moment">
    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>"
         style="width: 100%"/>
    <h3><?php echo ( $titre ); ?></h3>
    <p><?php echo ( $texte ); ?></p>
</div>
