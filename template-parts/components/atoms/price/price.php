<?php
class Price {

    public function __construct() {

        $this->product = wc_get_product( $id );
    }

    public static function regular () {

        $product = wc_get_product( $id );

        return $product->get_regular_price();
    }

    public static function sale () {

        return $product->get_sale_price();
    }

    public static function normal() {

        return $product->get_price();
    }
}
