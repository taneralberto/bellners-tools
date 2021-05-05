<?php

$instances = Shipping_Services::get_services_instances_in_array();

?>

<ul class="shipping-outer">

<?php foreach ( $instances as $instance ) { ?>

    <li class="shipping-outer__service">
        <?= Atomic::molecule( 'shipping-service', ['instance' => $instance] ); ?>
    </li>

<?php } ?>

</ul>