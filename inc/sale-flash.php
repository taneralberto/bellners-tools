<?php

add_filter('woocommerce_sale_flash', 'woo_custom_hide_sales_flash');
    function woo_custom_hide_sales_flash()
    {
        return false;
    }