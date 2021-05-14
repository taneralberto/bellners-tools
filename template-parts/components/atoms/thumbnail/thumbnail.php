<?php

if ( isset( $args['type'] ) ) {

    if ( $args['type'] === 'product' ) {

        echo wp_get_attachment_image( $args['id'], $args['size'] );

    }

} else {

    if ( isset( $args['class'] ) ) {

        the_post_thumbnail( $args['size'], [ 'class' => $args['class'] ] );

    } else {

        the_post_thumbnail( $args['size'] );

    }

}