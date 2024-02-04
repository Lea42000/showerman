<?php if ( is_front_page() ) { ?>
    <section class="container-fluid newsletter">
        <div class="row">
            <div class="col-lg-12 col-xl-12 col-xs-12 bg-yellow p-5">
                <h2 data-aos="fade-up">Psst .. !! <br> Il y a du nouveau ici</h2>
                <p data-aos="fade-up">Suivez toute l’actualité de Shawerman Lyon 3 <br>
                    Inscrivez-vous à notre newsletter et restez informés des prochains évènements et promotions.</p>
				<div data-aos="fade-up"><?php echo do_shortcode( '[mc4wp_form id=42]' ); ?></div>
            </div>
        </div>
    </section>
<?php } ?>