<h1 class="container-single__title selected">
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

<div class="container-single__tags">
    <? Atomic::atom('tags'); ?>
</div>

<div class="container-single__social">
    <h1 class="container-single__social__title">
        Share this post!
    </h1>
    <ul class="container-single__social__list">
        <? Atomic::molecule( 'bar-social' ); ?>
    </ul>
</div>

<?

Atomic::atom( 'single-content' );

Atomic::molecule( 'comments' );