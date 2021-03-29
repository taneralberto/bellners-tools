<?php
$args = array(
    'posts_per_page' => 5,
    'post_type' => 'product',
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();

        $id = get_the_ID();
        $product = wc_get_product( $id );

        Atomic::molecule( 'card' );
        Card::product();

    }
}