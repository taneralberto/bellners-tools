<?php

class Card {

    protected $id;

    public function __construct( $id ) {
        $this->id = $id;
    }

    public function __set( $name, $value ) {
        $this->
    }

    public static function product ( $id ) {

        Atomic::common( 'molecules/card/product/product' );
        new Product( $id );
    }

    public static function blog () {

        require_once( './blog/card' );
    }
}

