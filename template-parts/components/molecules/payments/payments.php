<?php
    $gateways = WC()->payment_gateways->get_available_payment_gateways();
    $enabled_gateways = [];

    if ( $gateways ) {
        foreach ( $gateways as $gateway ) {
            if ( $gateway->enabled == 'yes' ) {
                $enabled_gateways[] = $gateway;
            }
        }

        echo '<ul class="payments">';

        foreach ( $enabled_gateways as $enabled_gateway ) {
            echo '<li class="payments__method">';
                Atomic::atom( 'payment', ['payment_method' => $enabled_gateway->method_title] );
            echo '</li>';
        }

        echo '</ul>';
    }

?>