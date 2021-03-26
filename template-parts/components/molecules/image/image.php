<?
$id = get_the_ID(  );

get_template_part( 'template-parts/components/atoms/thumbnail/thumbnail');
Thumbnail::post ( $id , 'medium' );
get_template_part( 'template-parts/components/atoms/caption/caption');