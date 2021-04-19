<?php

Atomic::atom('meta');
Atomic::atom('photoswipe');
Atomic::atom('product-atributes');
Atomic::atom('product-image');
//Atomic::atom('product-thumbnails');
//Atomic::atom('rating');
Atomic::atom('related');
Atomic::atom('review');
//Atomic::atom('review-meta');
Atomic::atom('review-rating');

?>
<?php Atomic::atom('sale-flash'); ?>

<?php Atomic::atom('stock'); ?>
<div class="title-product">
    <?php Atomic::atom('title');?>
</div>

<?php
Atomic::atom('short-description');
Atomic::atom('price');
Atomic::atom('up-sells');
Atomic::molecule('add-to-cart');

echo ('diferente');
Atomic::molecule('tabs');