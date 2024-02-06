<?php
$titre       = get_field( 'titre' );
$image       = get_field( 'image' );
?>

<div class="header-instit" style="background-image: url('<?php echo esc_url( $image['url'] ); ?>')">
    <h2><?php echo( $titre ); ?></h2>
</div>