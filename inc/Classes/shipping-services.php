<?php

class Shipping_Services {

    public $title, $description, $default_icon_url, $hover_icon_url;
    private static $instance, $services = [];

    public function __construct( $title, $description = '', $default_icon_url = '', $hover_icon_url = '' ) {
        $this->title = $title;
        $this->description = $description;
        $this->default_icon_url = $default_icon_url;
        $this->hover_icon_url = $hover_icon_url;
        self::$instance = $this;

        self::set_services( self::$instance );
    }

    public function display_default_icon() {
        echo "<img src='" . $this->default_icon_url . "' border='0' alt='" . $this->title . "'/>";
    }

    public function display_hover_icon() {
        echo "<img src='" . $this->hover_icon_url . "' border='0' alt='" . $this->title . "'/>";
    }

    private static function set_services( $instance ) {
        array_push( self::$services, $instance );
    }

    public static function get_services_instances_in_array() : array {
        return self::$services;
    }

}

$free_shipping = new Shipping_Services( __( 'Free Shipping', 'bellner-tools' ), 'Shipping in World', 'https://i.postimg.cc/vm8C3sjm/icons8-truck-90-1.png', 'https://i.postimg.cc/NjkW6MdV/icons8-truck-90.png' );
$special_gift = new Shipping_Services( 'Special Gift', 'Special gift for', 'https://i.postimg.cc/9Xv5Vs4x/icons8-gift-100-1.png', 'https://i.postimg.cc/qMyf7Qyp/icons8-gift-100.png' );
$support_online = new Shipping_Services( 'Support Online 24/7', 'Call : (123) 236 757 914', 'https://i.postimg.cc/CMZT3wKB/icons8-call-100-1.png', 'https://i.postimg.cc/LhdV7t8T/icons8-call-100.png' );
$security_payment = new Shipping_Services( 'Security Payment', 'Embarrassing', 'https://i.postimg.cc/3wLVqq5F/icons8-money-bag-100-1.png', 'https://i.postimg.cc/t4jKnPNW/icons8-money-bag-100.png' );