<?php

$product = wc_get_product();

if ( $args['type'] === 'regular' ) {

    echo $product->get_regular_price();

} else if ( $args['type'] === 'sale' ) {

    echo $product->get_sale_price();

} else if ( $args['type'] === 'percent' ) {

    $regular = $product->get_regular_price();
    $sale = $product->get_sale_price();
    $percent;

    $percent = ( ( $regular - $sale ) * 100 ) / $regular;

    echo $percent;

} else {

    echo $product->get_price();

}
