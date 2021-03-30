<?php

global $woocommerce;

$args = array(
    'posts_per_page' => 5,
    'post_type' => 'product',
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) {

?>

    <div class="products-slider">


        <?php

            while ( $query->have_posts() ) {
                $query->the_post();

                //$product = wc_get_product( $id );

                Atomic::molecule( 'card', ['type' => 'product'] );

            }
        ?>

    </div>
<?php } ?>

