<?php

$product = wc_get_product();

if ( $args['type'] === 'regular' ) {

    echo $product->get_regular_price();

} else if ( $args['type'] === 'sale' ) {

    echo $product->get_sale_price();

} else {

    echo $product->get_price();

}
