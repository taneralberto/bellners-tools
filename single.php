<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bellner-tools
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

				get_template_part( 'template-parts/components/templates/single/index');

		if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile;
		?>
<?php
get_footer();
