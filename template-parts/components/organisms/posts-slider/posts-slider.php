<?php

$args = array(
    'posts_per_page' => 4,
    'post_type' => 'post',
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) {
?>
<div class="title-block">
    Latest Blog
</div>
    <div class="blog-slider">
        <?php
            while ( $query->have_posts() ) {
                $query->the_post();
                Atomic::molecule( 'card', ['type' => 'post'] );
            }
        ?>
    </div>
<?php } ?>

