<?php

global $product;

$attachment_ids = $product->get_gallery_image_ids();

foreach ( $attachment_ids as $attachment_id ) {
    echo wp_get_attachment_image( $attachment_id, $args['size'] );
}
