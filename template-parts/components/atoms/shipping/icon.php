<?php

//$type = ( ! $args['type'] ) | ( $args['type'] === 'default' ) ? 'default' : $args['type'];

$service = $args['instance'];

if ( $args['type'] === 'default' ) {

    $service->display_default_icon();

} else if ( $args['type'] === 'hover' ) {

    $service->display_hover_icon();

}