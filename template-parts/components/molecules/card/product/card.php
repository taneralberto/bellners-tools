<?php
//$id = get_the_ID( );
Atomic::atom( 'thumbnail' );
Atomic::atom( 'title' );
Atomic::atom( 'price' );

$title = Title::product( $id );
$image = Thumbnail::product ( $id );
//$price = Price::regular();

?>

<div class="product-card">
    <div class="product-card__image">
    <?= $image ?>
    </div>

    <div class="product-card__info">
        <div class="product-card__title">
        <?= $title ?>
        </div>

        <div class="product-card__price">
        Precio:
        <?= $price ?>
        </div>
    </div>
</div>