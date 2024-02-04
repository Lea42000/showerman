<section class="bg-light-yellow">
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-xl-6 col-xs-12 form-contact" data-aos="fade-up">
	        <?php
	        // Récupérez le champ ACF par son nom.
	        $titre = get_field('titre');

	        // Assurez-vous que le champ a une valeur avant de l'afficher.
	        if ($titre) {
		        echo '<h3>' . esc_html($titre) . '</h3>';
	        } else {
		        echo '<p>Le titre est vide ou non défini.</p>';
	        }
	        ?>
            <form action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ); ?>" method="post">
                <p>
                    <label for="">Votre Nom (requis) <br /></label>
                    <input type="text" name="cf-name" pattern="[a-zA-Z0-9 ]+" value="<?php echo ( isset( $_POST["cf-name"] ) ? esc_attr( $_POST["cf-name"] ) : '' ); ?>" size="40" />
                </p>
                <p>
                    <label for="">Votre Email (requis) <br /></label>
                    <input type="email" name="cf-email" value="<?php echo ( isset( $_POST["cf-email"] ) ? esc_attr( $_POST["cf-email"] ) : '' ); ?>" size="40" />
                </p>
                <p>
                    <label for="">Sujet  (requis)<br /></label>
                    <input type="text" name="cf-subject" value="<?php echo ( isset( $_POST["cf-subject"] ) ? esc_attr( $_POST["cf-subject"] ) : '' ); ?>" size="40" />
                </p>
                <p>
                    <label for="">Votre Message  (requis)<br /></label>
                    <textarea rows="10" cols="35" name="cf-message"><?php echo ( isset( $_POST["cf-message"] ) ? esc_attr( $_POST["cf-message"] ) : '' ); ?></textarea>
                </p>
                <button class="btn-book"><input type="submit" name="cf-submitted" value="Envoyer"></button>
            </form>

        </div>
        <div class="col-lg-6 col-xl-6 col-xs-12 google-map" data-aos="fade-up">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.6965869957303!2d4.853163312473357!3d45.75722837095975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4eb6fdc3a20ed%3A0x4c2ae43ccbd0f201!2sSHAWERMAN!5e0!3m2!1sfr!2sfr!4v1707044958402!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
</section>
