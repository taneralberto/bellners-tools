<div class="image">
<?
$id = get_the_ID( );
Atomic::atom( 'thumbnail' );
$image = Thumbnail::post ( $id, 'medium' );
?>

<?= $image ?>

<?php

Atomic::atom( 'caption' );
?>
</div>