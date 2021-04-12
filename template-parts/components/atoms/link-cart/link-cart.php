<?php global $woocommerce; ?>

<a href="<?= wc_get_cart_url(); ?>" class="link-cart">

    <span class="link-cart__count">
        <?php //$woocommerce->cart->cart_contents_count ?>
    </span>


    <!--<img class="search-header__form__submit__icon" src="<?= get_template_directory_uri() ?>/dist/assets/img/icon-search.png" alt="Icono de buscar">-->
</a>