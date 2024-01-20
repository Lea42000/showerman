<?php
/*
Template Name: Carte
*/
// Votre code PHP ici
?>
<!-- Specialite -->
<?php if( have_rows('specialites') ): ?>
    <div class="specialites-container">
       <h1>Specialite</h1>
		<?php while( have_rows('specialites') ): the_row();
			// Vos sous-champs variables
			$image = get_sub_field('image');
			$titre = get_sub_field('titre');
			$texte = get_sub_field('texte');
			$coup_de_coeur = get_sub_field('coup_de_coeur');
			$prix = get_sub_field('prix');
			?>
            <div class="specialite">
				<?php if( $image ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="100%"/>
				<?php endif; ?>
                <h3><?php echo esc_html($titre); ?></h3>
                <p><?php echo esc_html($texte); ?></p
                        php
                        Copy code
				<?php if( $coup_de_coeur ): ?>
                    <p>Coup de cœur!</p>
				<?php endif; ?>
                <p class="prix"><?php echo esc_html($prix); ?></p>
            </div>
		<?php endwhile; ?>
    </div>
<?php endif; ?>

<!-- Gourmandises -->
<?php if( have_rows('gourmandises') ): ?>
    <div class="gourmandises-container">
        <h1>Gourmandises</h1>
		<?php while( have_rows('gourmandises') ): the_row();
			// Vos sous-champs variables
			$image = get_sub_field('image');
			$titre = get_sub_field('titre');
			$texte = get_sub_field('texte');
			$coup_de_coeur = get_sub_field('coup_de_coeur');
			$prix = get_sub_field('prix');
			?>
            <div class="specialite">
				<?php if( $image ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="100%"/>
				<?php endif; ?>
                <h3><?php echo esc_html($titre); ?></h3>
                <p><?php echo esc_html($texte); ?></p
                        php
                        Copy code
				<?php if( $coup_de_coeur ): ?>
                    <p>Coup de cœur!</p>
				<?php endif; ?>
                <p class="prix"><?php echo esc_html($prix); ?></p>
            </div>
		<?php endwhile; ?>
    </div>
<?php endif; ?>

<!--Desserts -->
<?php if( have_rows('desserts') ): ?>
    <div class="desserts-container">
        <h1>Desserts</h1>
		<?php while( have_rows('desserts') ): the_row();
			// Vos sous-champs variables
			$image = get_sub_field('image');
			$titre = get_sub_field('titre');
			$texte = get_sub_field('texte');
			$coup_de_coeur = get_sub_field('coup_de_coeur');
			$prix = get_sub_field('prix');
			?>
            <div class="specialite">
				<?php if( $image ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="100%"/>
				<?php endif; ?>
                <h3><?php echo esc_html($titre); ?></h3>
                <p><?php echo esc_html($texte); ?></p
                        php
                        Copy code
				<?php if( $coup_de_coeur ): ?>
                    <p>Coup de cœur!</p>
				<?php endif; ?>
                <p class="prix"><?php echo esc_html($prix); ?></p>
            </div>
		<?php endwhile; ?>
    </div>
<?php endif; ?>

<!--Boissons -->
<?php if( have_rows('boissons') ): ?>
    <div class="boissons-container">
        <h1>Boissons</h1>
		<?php while( have_rows('boissons') ): the_row();
			// Vos sous-champs variables
			$image = get_sub_field('image');
			$titre = get_sub_field('titre');
			$texte = get_sub_field('texte');
			$coup_de_coeur = get_sub_field('coup_de_coeur');
			$prix = get_sub_field('prix');
			?>
            <div class="specialite">
				<?php if( $image ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="100%"/>
				<?php endif; ?>
                <h3><?php echo esc_html($titre); ?></h3>
                <p><?php echo esc_html($texte); ?></p
                        php
                        Copy code
				<?php if( $coup_de_coeur ): ?>
                    <p>Coup de cœur!</p>
				<?php endif; ?>
                <p class="prix"><?php echo esc_html($prix); ?></p>
            </div>
		<?php endwhile; ?>
    </div>
<?php endif; ?>
