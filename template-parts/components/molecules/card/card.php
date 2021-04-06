<?php

if ( $args['type'] === 'product' ) {

    Atomic::common( 'molecules/card/product/card' );

} else if ( $args['type'] === 'post' ) {

    Atomic::common( 'molecules/card/blog/card' );

}
else if ( $args['type'] === 'testimonials' ) {

    Atomic::common( 'molecules/card/testimonials/card' );

}