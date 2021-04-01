<?php

$product = wc_get_product();

if ( $args['type'] === 'regular' ) {

    if ( $product->get_regular_price() ) {

        if ( ! $product->get_sale_price() ) {

            echo '<span class="price__regular price__regular--not-sale">$' . number_format( $product->get_regular_price(), 2 ) . '</span>';

        } else {

            echo '<span class="price__regular">$' . number_format( $product->get_regular_price(), 2 ) . '</span>';
        }

    }


} else if ( $args['type'] === 'sale' ) {

    if ( $product->get_sale_price() ) {

        echo '<span class="price__sale">$' . number_format( $product->get_sale_price(), 2 ) . '</span>';
    }

} else if ( $args['type'] === 'percent' ) {

    if ( $product->get_sale_price() && $product->get_regular_price() ) {

        $regular = $product->get_regular_price();
        $sale = $product->get_sale_price();
        $percent;

        $percent = ( ( $regular - $sale ) * 100 ) / $regular;

        $percent = number_format( $percent, 0 );

        echo '<span class="price__percent">-' . $percent . '%' . '</span>';
    }

} else {

    echo '<span class="price__sale">$' . number_format( $product->get_price(), 2 ) . '</span>';

}


