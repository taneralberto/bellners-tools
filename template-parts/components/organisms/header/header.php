<header id="masthead" class="header">

    <div class="header__hamburger">
        <?= Atomic::atom( 'hamburger' ); ?>
    </div>

    <div class="header__form-search">
        <?= Atomic::molecule( 'form-search' ); ?>
    </div>

    <div class="header__button-user">
        <?= Atomic::atom( 'button-user' ); ?>
    </div>

    <div class="header__link-cart">
        <?= Atomic::atom( 'link-cart' ); ?>
        <div class="header__price-total">
            <?= Atomic::atom( 'price', ['type' => 'total'] ); ?>
        </div>
    </div>

    <div class="header__site-branding">
        <?= Atomic::molecule( 'site-branding' ); ?>
    </div>

    <div class="header__menu">
        <?= Atomic::molecule( 'primary-menu' ); ?>
    </div>
</header><!-- #masthead -->