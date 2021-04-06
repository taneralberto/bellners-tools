<?php
/**
 * Creando el custom post type testimonials
 */
function my_custom_post_testimonials() {
    $labels = array(
        'name'               => __( 'Testimonials'),
        'singular_name'      => __( 'Testimonials',),
        'add_new'            => __( 'Add new'),
        'add_new_item'       => __( 'Add a new article' ),
        'edit_item'          => __( 'Edit' ),
        'new_item'           => __( 'New article of testimonials' ),
        'all_items'          => __( 'testimonials' ),
        'view_item'          => __( 'View' ),
        'search_items'       => __( 'Search' ),
        'not_found'          => __( 'No results were found' ),
        'not_found_in_trash' => __( 'No results were found in trash' ),
        'menu_name'          => 'Testimonials'
    );
    $args = array(
        'labels'             => $labels,
        'description'        => 'Content all testimonials',
        'public'             => true,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'author', 'custom-fields','comments'),
        'has_archive'        => true,
        'show_in_rest'       => true,
        'menu_icon'          => 'dashicons-format-status',
        'rewrite'            => array('slug' => 'testimonials-post'),
        'map_meta_cap'       => true,
    );
    register_post_type( 'cpt_testimonials', $args );
}
add_action( 'init', 'my_custom_post_testimonials' );