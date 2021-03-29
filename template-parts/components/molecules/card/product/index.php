<?php

class Product {

  public function __construct() {

    $this->id = get_the_ID( );
    Atomic::atom( 'thumbnail' );
    Atomic::atom( 'title' );
    $this->title = Title::product( $id );
    $this->image = Thumbnail::product ( $id );

    require_once( 'card.php' );

  }
}