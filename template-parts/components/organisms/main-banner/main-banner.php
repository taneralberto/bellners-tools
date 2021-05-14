<?php
/*
$args = array(
    'post_type' => 'product',
    'posts_per_page' => 5,
    'tax_query' => array(
        array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => 'banner'
        ),
    ),
);

$query = new WP_Query( $args );

echo "BANNER";

if ( $query->have_posts() ) :
*/
?>

<section class="main-banner">

    <!--<div class="main-banner__background">

        <img src='https://i.postimg.cc/bvw97SF7/pexels-ivan-samkov-4491874.jpg' border='0' alt='pexels-ivan-samkov-4491874'/>

    </div>-->

    <!--<div class="main-banner__products">-->

<?php
/*
    while ( $query->have_posts() ) :

        $query->the_post();
*/
?>

    <div class="main-banner__call-to-action">

        <?= Atomic::molecule( 'call-to-action' ); ?>

    </div>

    <?php //Atomic::molecule( 'card', ['type' => 'product'] ); ?>

    <!--<div class="main-banner__product">

        <div class="main-banner__image">

            <?php //Atomic::atom( 'thumbnail', ['size' => 'medium'] ); ?>

        </div>

        <div class="main-banner__info">

            <div class="main-banner__title">

                <?php //Atomic::atom( 'title', [ 'permalink?' => true ] ); ?>

            </div>-->

            <!--<div class="main-banner__description">

                <?php //Atomic::atom( 'description' ); ?>

            </div>-->

            <!--<div class="main-banner__button">

                <?php //Atomic::atom( 'shop-now' ); ?>

            </div>-->

            <!--<div class="main-banner__product__price">
                <?php //Atomic::molecule( 'prices' ); ?>
            </div>

            <div class="main-banner__product__add-to-cart">
                <?php //Atomic::atom( 'button-add-to-cart' ); ?>
            </div>

        </div>-->

        <!--<div class="main-banner__next-prev">

            <div class="main-banner__prev">

                <?php //Atomic::atom( 'next-prev-button', ['type' => 'prev'] ); ?>

            </div>

            <div class="main-banner__next">

                <?php //Atomic::atom( 'next-prev-button', ['type' => 'next'] ); ?>

            </div>

        </div>

    </div>-->


<?php //endwhile; ?>

    <!--</div>-->

</section>

<?php //wp_reset_postdata(); endif; ?>