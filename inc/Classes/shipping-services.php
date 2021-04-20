<?php

class Shipping_Services {

    public $title, $description, $icon_url;
    public static $services = [];

    public function __construct( $title, $description, $icon_url ) {
        $this->title = $title;
        $this->description = $description;
        $this->icon_url = $icon_url;

        $service = ['title' => $this->title, 'description' => $this->description, 'icon_url' => $this->icon_url];

        array_push(self::$services, $service);
    }

    public function display_icon() {
        echo "<img src='" . $this->icon_url . "' border='0' alt='" . $this->title . "'/>";
    }

    public static function get_services() {
        return self::$services;
    }

}

$free_shipping = new Shipping_Services( 'Free Shipping', 'Shipping in World', 'https://i.postimg.cc/vm8C3sjm/icons8-truck-90-1.png' );
$special_gift = new Shipping_Services( 'Special Gift', 'Special gift for', 'https://i.postimg.cc/vm8C3sjm/icons8-truck-90-1.png' );
$support = new Shipping_Services( 'Support Online 24/7', 'Call : (123) 236 757 914', 'https://i.postimg.cc/vm8C3sjm/icons8-truck-90-1.png' );
$security_payment = new Shipping_Services( 'Security Payment', 'Embarrassing', 'https://i.postimg.cc/vm8C3sjm/icons8-truck-90-1.png' );