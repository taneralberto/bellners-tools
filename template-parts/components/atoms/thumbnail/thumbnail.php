<?php

if ( $args['type'] === 'product' ) {

    echo wp_get_attachment_image( $args['id'], $args['size'] );

} else {

    the_post_thumbnail( $args['size'], ['class' => $args['class']] );
}


