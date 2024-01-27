<?php

// Récupérez les champs personnalisés.
$titre = get_field('titre_concept');
$texte = get_field('texte');
$image = get_field('image');

// Utilisez ces champs pour afficher le contenu du bloc.
?>
<div class="mon-bloc-personnalise">
	<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	<p><?php echo esc_html($titre); ?></p>
	<p><?php echo esc_html($texte); ?></p>
</div>
