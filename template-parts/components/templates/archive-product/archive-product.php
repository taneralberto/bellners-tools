<div class="archive-product">

<?php
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>

	<div class="archive-product__container">

		<aside class="archive-product__sidebar">

			<?= Atomic::organism( 'sidebar' ); ?>

		</aside>

		<section class="archive-product__wrapper">

			<header class="archive-product__header">

				<img class="archive-product__banner" src="https://demo.templatetrend.com/prestashop/PRS375/img/c/3-category_default.jpg" style="width:100%;" alt="">

				<div class="archive-product__title">
					<?= Atomic::atom( 'product-category/title' ); ?>
				</div>

				<div class="archive-product__description">
					<?= Atomic::atom( 'product-category/description' ); ?>
				</div>

				<div class="archive-product__sorting">
					<?= Atomic::molecule( 'sorting-products' ); ?>
				</div>

			</header>

			<div class="archive-product__products">

				<?= Atomic::organism( 'products' ); ?>

			</div>


		</section>

	</div>

<?php

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

?>

</div>