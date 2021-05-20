<div class="products">

<?php if ( woocommerce_product_loop() ) { ?>

    <div class="products__sorting">

        <?php
        /**
         * Hook: woocommerce_before_shop_loop.
         *
         * @hooked woocommerce_output_all_notices - 10
         * @hooked woocommerce_result_count - 20
         * @hooked woocommerce_catalog_ordering - 30
         */
        do_action( 'woocommerce_before_shop_loop' );
        ?>

    </div>

?>

<ul class="slider-section__content">

<?php

if ( wc_get_loop_prop( 'total' ) ) {

    while ( have_posts() ) {
        the_post();

        /**
         * Hook: woocommerce_shop_loop.
         */
        do_action( 'woocommerce_shop_loop' );

        //wc_get_template_part( 'content', 'product' );

        echo "<li class='slider-section__card'>";

        Atomic::molecule( 'card', ['type' => 'product'] );

        echo "</li>";
    }
}

?>

</ul>

<?php

/**
 * Hook: woocommerce_after_shop_loop.
 *
 * @hooked woocommerce_pagination - 10
 */
do_action( 'woocommerce_after_shop_loop' );

} else {
/**
 * Hook: woocommerce_no_products_found.
 *
 * @hooked wc_no_products_found - 10
 */
do_action( 'woocommerce_no_products_found' );
}

?>

</div>