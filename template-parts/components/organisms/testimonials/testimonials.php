<?php

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC',
    'category_name' => 'testimonial',
);


$query = new WP_Query( $args );

if ( $query->have_posts() ) {
?>
<div class="title-block">
    What Our Client's Say
</div>
    <div class="testimonials">
        <?php
            while ( $query->have_posts() ) {
                $query->the_post();
                Atomic::molecule( 'card', ['type' => 'testimonials'] );
            }
        ?>
    </div>
<?php } ?>