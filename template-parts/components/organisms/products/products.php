<ul class="products">

<?php if ( woocommerce_product_loop() ) {

if ( wc_get_loop_prop( 'total' ) ) {

    while ( have_posts() ) {
        the_post();

        /**
         * Hook: woocommerce_shop_loop.
         */
        do_action( 'woocommerce_shop_loop' );

        //wc_get_template_part( 'content', 'product' );

        echo "<li class='products__card'>";

        Atomic::molecule( 'card', ['type' => 'product'] );

        echo "</li>";
    }
}

?>

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

</ul>