<?php

$args = array(
    'post_type' => 'product',
    'posts_per_page' => 5,
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) {

?>

<div class="slider-section">

    <header class="slider-section__header">

        <div class="slider-section__title">
            <img class="slider-section__title__icon" src="https://i.postimg.cc/QNzXrbnp/icons8-first-quarter-26.png" alt="icono" />
            <h3><strong>Featured</strong> Products</h3>
        </div>

        <div class="slider-section__buttons">
            <?= Atomic::atom( 'next-prev-button', ['type' => 'prev'] ); ?>
            <?= Atomic::atom( 'next-prev-button', ['type' => 'next'] ); ?>
        </div>

    </header>

    <div class="products-slider">

        <?php

            while ( $query->have_posts() ) {
                $query->the_post();

                //$product = wc_get_product( $id );

                Atomic::molecule( 'card', ['type' => 'product'] );

            }
        ?>
    </div>
</div>

<?php wp_reset_postdata(); } ?>