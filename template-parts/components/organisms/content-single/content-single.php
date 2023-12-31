<h1 class="container-single__title selected">
<? Atomic::atom( 'title' ); ?>

</h1>

<div class="container-single__image">
    <? Atomic::molecule( 'image' ); ?>
</div>

<div class="container-single__tags selected">
    <? Atomic::atom('tags'); ?>
</div>

<div class="container-single__social selected">
    <h1 class="container-single__social__title">
        Share this post!
    </h1>
    <ul class="container-single__social__list selected">
        <? Atomic::molecule( 'bar-social' ); ?>
    </ul>
</div>

<div class="container-single__content">
    <? Atomic::atom( 'single-content' ); ?>
</div>

<div class="container-single__comments">
    <?php comments_template(); ?>
</div>