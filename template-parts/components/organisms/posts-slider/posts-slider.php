<?php

$args = array(
    'posts_per_page' => 5,
    'post_type' => 'post',
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) {
?>
    <div class="blog-slider">
        <div class="blog-slider__title">
            Latest Blog
        </div>
        <?php
            while ( $query->have_posts() ) {
                $query->the_post();
                Atomic::molecule( 'card', ['type' => 'post'] );
            }
        ?>
    </div>
<?php } ?>

