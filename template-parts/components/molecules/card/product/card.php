<div class="product-card">

    <div class="product-card__image">
        <?php Atomic::molecule( 'gallery', [ 'size' => 'medium', 'count' => 1 ] ); ?>
    </div>


    <h1 class="product-card__title">
        <?php Atomic::atom( 'title', [ 'permalink?' => true ] ); ?>
    </h1>

    <div class="product-card__price">
        <?= Atomic::molecule( 'prices' ); ?>
    </div>

    <div class="product-card__add-to-cart">
        <?= Atomic::atom( 'add-to-cart' ); ?>
    </div>

</div>