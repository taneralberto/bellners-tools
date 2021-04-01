<?php

global $product;

$count = 0;

$attachment_ids = $product->get_gallery_image_ids();

if ( $attachment_ids !== [] ) {

    ?><a href="<?= the_permalink(); ?>"><?php
        Atomic::atom( 'thumbnail', [ 'size' => 'medium' ] );
    ?></a><?php

    foreach ( $attachment_ids as $attachment_id ) {

        if ( $count === $args[ 'count' ] ) {
            break;
        }

        ?><a href="<?= the_permalink(); ?>"><?php
            Atomic::atom( 'thumbnail', [ 'type' => 'product', 'id' => $attachment_id, 'size' => $args['size'] ] );
        ?></a><?php

        $count++;
    }

} else {

    ?><a href="<?= the_permalink(); ?>" class="not-gallery"><?php
        Atomic::atom( 'thumbnail', [ 'size' => 'medium', 'class' => 'not-gallery' ] );
    ?></a><?php
}

?>