<div class="image">
<?
$id = get_the_ID( );
get_template_part( 'template-parts/components/atoms/thumbnail/thumbnail');
$image = Thumbnail::post ( $id, 'medium' );
?>

<?= $image ?>

<?php

get_template_part( 'template-parts/components/atoms/caption/caption');
?>
</div>