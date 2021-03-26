<?php

class Card {

    public static function product () {

        get_template_part( 'template-parts/components/molecules/card/product/card' );
    }

    public static function blog () {

        require_once( './blog/card' );
    }
}