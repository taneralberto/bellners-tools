<?
$id = get_the_ID( );
Atomic::atom( 'thumbnail' );
new Thumbnail('large' );
?>



<div class="container-single__image__caption">
<?php
    Atomic::atom( 'caption' );
?>
</div>