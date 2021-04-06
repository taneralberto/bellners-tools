<div class="blog-card">
    <div class="blog-card__image">
        <?php Atomic::atom( 'thumbnail', ['size' => 'large'] ); ?>
    </div>
    <div class="blog-card__date">
        <?php Atomic::atom( 'date-public' ); ?>
    </div>
    <div class="blog-card__info">
        <p class="blog-card__title">
            <?php Atomic::atom( 'title' ); ?>
        </p>

        <p class="blog-card__read-more">
            <?php Atomic::atom( 'read-more' ); ?>
        </p>
    </div>
</div>