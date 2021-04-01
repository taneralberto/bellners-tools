<div class="blog-card">
    <div class="blog-card__image">
        <?php Atomic::atom( 'thumbnail', ['size' => 'medium'] ); ?>
    </div>

    <div class="blog-card__info">
        <div class="blog-card__title">
            <?php Atomic::atom( 'title' ); ?>
        </div>

        <div class="blog-card__date">
            <?php Atomic::atom( 'date-public' ); ?>
        </div>
        <div class="blog-card__read-more">
            <?php Atomic::atom( 'read-more' ); ?>
        </div>
    </div>
</div>