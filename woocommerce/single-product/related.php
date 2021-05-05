<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

	<section>

		<?php
		$heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'You Might Also Like', 'woocommerce' ) );

		if ( $heading ) :
			?>
			<h2><?php echo esc_html( $heading ); ?></h2>
		<?php endif; ?>
        <div class="products-slider">

		<?php woocommerce_product_loop_start(); ?>

			<?php foreach ( $related_products as $related_product ) : ?>

					<?php
					$post_object = get_post( $related_product->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object );

					wc_get_template_part( 'content', 'product' );
					?>

			<?php endforeach; ?>



		<?php woocommerce_product_loop_end(); ?>
        </div>


	</section>
	<?php
endif;

wp_reset_postdata();