<?
$id = get_the_ID( );
Atomic::atom( 'title' );
$title = Title::post ( $id );
?>

<?= $title ?>

<?

Atomic::molecule( 'image' );

Atomic::atom('tags');

Atomic::molecule( 'bar-social' );

Atomic::atom( 'single-content' );

Atomic::molecule( 'comments' );