<?php
class Thumbnail {
    public function __construct( $size ){
        the_post_thumbnail( $size );
    }

}