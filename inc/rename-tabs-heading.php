<?php

add_filter( 'woocommerce_product_description_heading', 'bellner_description_heading' );
function bellner_description_heading( $heading ){
	return 'Details';
}


add_filter( 'woocommerce_product_additional_information_heading', 'bellner_information_heading' );
function bellner_information_heading( $heading ){
	return 'Sizes';
}