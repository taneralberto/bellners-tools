<form role="search" method="GET" action="<?= home_url( '/' ); ?>" class="form-search">
    <div class="form-search__input">
        <?= Atomic::atom( 'input-search' ); ?>
    </div>

    <div class="form-search__submit">
        <?= Atomic::atom( 'submit', ['type' => 'search'] ); ?>
    </div>
</form>