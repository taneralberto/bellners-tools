<h1 class="container-single__title">
    <?
        $id = get_the_ID( );
        Atomic::atom( 'title' );
        $title = Title::post ( $id );
    ?>
    <?= $title ?>
</h1>

<div class="container-single__image">
    <? Atomic::molecule( 'image' ); ?>
</div>
<?
Atomic::atom('tags');

Atomic::molecule( 'bar-social' );

Atomic::atom( 'single-content' );

Atomic::molecule( 'comments' );