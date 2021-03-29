<?php

class Product extends Card {

  public function __construct( $id ) {

    echo parent::id;

    //$this->id = $id;
    Atomic::atom( 'thumbnail' );
    Atomic::atom( 'title' );
    $this->title = Title::product( $id );
    $this->image = Thumbnail::product ( $id );

    Atomic::common( 'molecules/card/product/card', ['title' => $this->title, 'image' => $this->image] );

  }
}