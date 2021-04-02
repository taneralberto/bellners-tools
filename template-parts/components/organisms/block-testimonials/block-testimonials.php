<?php

$args = array(
    'posts_per_page' => 3,
    'post_type' => 'cpt_testimonials',
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) {
?>
<div class="title-block">
    What Our Client's Say
</div>
    <div class="block-testimonials">
        <?php
            while ( $query->have_posts() ) {
                $query->the_post();
                Atomic::molecule( 'card', ['type' => 'testimonials'] );
            }
        ?>
    </div>
<?php } ?>