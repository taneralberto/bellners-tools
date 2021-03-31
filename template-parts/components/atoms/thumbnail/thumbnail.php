<?php

if ( $args['type'] === 'product' ) {

    ?> <div class="product-image"> <?php

        the_post_thumbnail( $args['size'] );

    ?> </div> <?php

    ?> <div class="product-gallery"> <?php

        global $product;

        $attachment_ids = $product->get_gallery_image_ids();

        foreach ( $attachment_ids as $attachment_id ) {
            echo wp_get_attachment_image( $attachment_id, 'full' );
        }

    ?> </div> <?php

} else {

    the_post_thumbnail( $args['size'] );
}
