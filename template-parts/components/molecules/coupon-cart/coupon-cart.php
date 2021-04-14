<td colspan="6" class="total__td">

<?php if ( wc_coupons_enabled() ) { ?>
    <div class="total__td__coupon">
        <label class="total__td__coupon__label" for="coupon_code"><?php esc_html_e( 'Coupon code:', 'woocommerce' ); ?></label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> <button type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?></button>
        <?php do_action( 'woocommerce_cart_coupon' ); ?>
    </div>
<?php } ?>

<button type="submit" class="button-gray" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>

<?php do_action( 'woocommerce_cart_actions' ); ?>

<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
</td>
