<?php get_header(); ?>
	<main id="primary" class="site-main">
		<?php
			while ( have_posts() ) :
				the_post();
					Atomic::template('cart');
			endwhile;
		?>

	</main>
<?php get_footer();