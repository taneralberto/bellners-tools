<?php

if ( $args['type'] === 'product' ) {

    Atomic::common( 'molecules/card/product/card' );

} else if ( $args['type'] === 'blog' ) {

    Atomic::common( 'molecules/card/blog/card' );

}


