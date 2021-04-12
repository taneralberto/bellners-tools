<?php if ( $args['type'] === 'search' ) { ?>

    <button type="submit" class="submit">
        <!--<img class="search-header__form__submit__icon" src="<?= get_template_directory_uri() ?>/dist/assets/img/icon-search.png" alt="Icono de buscar">-->
        Bu
    </button>

<?php } else { ?>

    <button type="submit" class="submit"><?=$args['text'] ?></button>

<?php } ?>