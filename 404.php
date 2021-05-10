<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package bellner-tools
 */

get_header();
?>

	<main id="primary" class="site-main">
		<? Atomic::template('404'); ?>
	</main>

<?php
get_footer();
