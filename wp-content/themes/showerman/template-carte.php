<?php
/*
Template Name: Carte
*/
// Votre code PHP ici
?>
<!-- Specialite -->
<div class="specialites-container">
    <div class="col-12">
        <h1>Specialité</h1>
        <div class="row">
			<?php if ( have_rows( 'specialites' ) ): ?>
				<?php while ( have_rows( 'specialites' ) ): the_row();
					$image = get_sub_field( 'image' );
					$titre = get_sub_field( 'titre' );
					$texte = get_sub_field( 'texte' );
					$coup_de_coeur = get_sub_field( 'coup_de_coeur' );
					$prix = get_sub_field( 'prix' );
					?>
                    <div class="specialite col-4">
						<?php if ( $image ): ?>
                            <img src="<?php echo esc_url( $image['url'] ); ?>"
                                 alt="<?php echo esc_attr( $image['alt'] ); ?>"
                                 width="100%"/>
						<?php endif; ?>
                        <h3><?php echo esc_html( $titre ); ?></h3>
                        <p><?php echo esc_html( $texte ); ?></p>
						<?php if ( $coup_de_coeur ): ?>
                            <p>Coup de cœur!</p>
						<?php endif; ?>
                        <p class="prix"><?php echo esc_html( $prix ); ?>€</p>
                    </div>
				<?php endwhile; ?>
			<?php endif; ?>
        </div>
    </div>
</div>

<!-- Gourmandises -->
<div class="gourmandises-container">
    <div class="col-12">
        <h1>Gourmandises</h1>
        <div class="row">
			<?php while ( have_rows( 'gourmandises' ) ): the_row();
				// Vos sous-champs variables
				$image         = get_sub_field( 'image' );
				$titre         = get_sub_field( 'titre' );
				$texte         = get_sub_field( 'texte' );
				$coup_de_coeur = get_sub_field( 'coup_de_coeur' );
				$prix          = get_sub_field( 'prix' );
				?>
                <div class="specialite col-4">
					<?php if ( $image ): ?>
                        <img src="<?php echo esc_url( $image['url'] ); ?>"
                             alt="<?php echo esc_attr( $image['alt'] ); ?>"
                             width="100%"/>
					<?php endif; ?>
                    <h3><?php echo esc_html( $titre ); ?></h3>
                    <p><?php echo esc_html( $texte ); ?></p
					<?php if ( $coup_de_coeur ): ?>
                        <p>Coup de cœur!</p>
					<?php endif; ?>
                    <p class="prix"><?php echo esc_html( $prix ); ?></p>
                </div>
			<?php endwhile; ?>
        </div>
    </div>
</div>

<!--Desserts -->
<div class="desserts-container">
    <div class="col-12">
        <h1>Desserts</h1>
        <div class="row">
            <div class="col-4">
				<?php while ( have_rows( 'desserts' ) ): the_row();
					// Vos sous-champs variables
					$image         = get_sub_field( 'image' );
					$titre         = get_sub_field( 'titre' );
					$texte         = get_sub_field( 'texte' );
					$coup_de_coeur = get_sub_field( 'coup_de_coeur' );
					$prix          = get_sub_field( 'prix' );
					?>
                    <div class="specialite">
						<?php if ( $image ): ?>
                            <img src="<?php echo esc_url( $image['url'] ); ?>"
                                 alt="<?php echo esc_attr( $image['alt'] ); ?>"
                                 width="100%"/>
						<?php endif; ?>
                        <h3><?php echo esc_html( $titre ); ?></h3>
                        <p><?php echo esc_html( $texte ); ?></p
						<?php if ( $coup_de_coeur ): ?>
                            <p>Coup de cœur!</p>
						<?php endif; ?>
                        <p class="prix"><?php echo esc_html( $prix ); ?></p>
                    </div>
				<?php endwhile; ?>
            </div>
        </div>
    </div>
</div>

<!--Boissons -->
<div class="boissons-container">
    <div class="col-12">
        <h1>Boissons</h1>
        <div class="row">
            <div class="col-4">
				<?php while ( have_rows( 'boissons' ) ): the_row();
					// Vos sous-champs variables
					$image         = get_sub_field( 'image' );
					$titre         = get_sub_field( 'titre' );
					$texte         = get_sub_field( 'texte' );
					$coup_de_coeur = get_sub_field( 'coup_de_coeur' );
					$prix          = get_sub_field( 'prix' );
					?>
                    <div class="specialite">
						<?php if ( $image ): ?>
                            <img src="<?php echo esc_url( $image['url'] ); ?>"
                                 alt="<?php echo esc_attr( $image['alt'] ); ?>"
                                 width="100%"/>
						<?php endif; ?>
                        <h3><?php echo esc_html( $titre ); ?></h3>
                        <p><?php echo esc_html( $texte ); ?></p
						<?php if ( $coup_de_coeur ): ?>
                            <p>Coup de cœur!</p>
						<?php endif; ?>
                        <p class="prix"><?php echo esc_html( $prix ); ?></p>
                    </div>
				<?php endwhile; ?>
            </div>
        </div>
    </div>
</div>

