<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); ?>

<div class="cart">
	<?php do_action( 'woocommerce_before_cart_table' ); ?>
		<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
			<?php Atomic::organism('table-cart'); ?>
			<?php Atomic::organism('collaterals-cart'); ?>
		</form>
	<?php do_action( 'woocommerce_after_cart_table' ); ?>

	<?php do_action( 'woocommerce_after_cart' ); ?>
</div>
