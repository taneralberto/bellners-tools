<?php
$instance = $args['instance'];
?>

<div class="shipping-service">

    <div class="shipping-service__icon">
        <div class="shipping-service__icon__default">
            <?= Atomic::atom( 'shipping/icon', ['type' => 'default', 'instance' => $instance] ); ?>
        </div>

        <div class="shipping-service__icon__hover">
            <?= Atomic::atom( 'shipping/icon', ['type' => 'hover', 'instance' => $instance] ) ?>
        </div>
    </div>

    <div class="shipping-service__info">
        <p class="shipping-service__title">
            <?= Atomic::atom( 'shipping/title', ['instance' => $instance] ); ?>
        </p>

        <p class="shipping-service__description">
            <?= Atomic::atom( 'shipping/description', ['instance' => $instance] ); ?>
        </p>
    </div>


</div>