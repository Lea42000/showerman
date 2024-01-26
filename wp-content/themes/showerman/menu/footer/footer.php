</div></div>
<footer class="bg-grey color-white">
    <div class="row m-0 p-0">
        <div class="col-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
                 alt="Shawerman" width="100%">
            <div class="row">
                <div class="col-6">
                    <p class="color-white mb-0">14 rue Paul Bert</p>
                    <p class="color-white">69003 Lyon, France</p>
                </div>
                <div class="col-6">
                    <p class="color-white mb-0 ml-4">06.45.12.14.19</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <!-- TODO Corriger le bug du menu footer -->
	        <?php

	        if ( has_nav_menu( 'footer' ) ) {

		        wp_nav_menu( array(
			        'theme_location' => 'footer',
			        'add_li_class'   => 'menu-footer',
		        ) );
	        }

	        ?>
        </div>
        <div class="col-4">
            <!-- TODO Mettre la newsletter -->
        </div>
    </div>
</footer>
<?php wp_footer() ?>
</body>
</html>