<div class="product-card">
    <div class="product-card__image">
        <?php Atomic::atom( 'thumbnail', ['size' => 'medium'] ); ?>
    </div>

    <h1 class="product-card__title">
        <?php Atomic::atom( 'title' ); ?>
    </h1>

    <div class="product-card__price">
        <span class="product-card__price__sale">
            $<?= Atomic::atom( 'price', ['type' => 'sale'] ); ?>
        </span>

        <span class="product-card__price__regular">
            $<?= Atomic::atom( 'price', ['type' => 'regular'] ); ?>
        </span>

        <span class="product-card__price__normal">

        </span>
    </div>

    <span class="product-card__add-to-cart">
        <?= Atomic::atom( 'add-to-cart' ); ?>
    </span>
</div>