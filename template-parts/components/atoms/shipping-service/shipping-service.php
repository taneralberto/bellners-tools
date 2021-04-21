<?php
$services = Shipping_Services::get_services_instances_in_array();

print_r($services);

foreach ( $services as $service ) {
    $service->display_default_icon();
    $service->display_hover_icon();
    echo $service->title;
    echo $service->description;
}