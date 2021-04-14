<?php if ( $args['type'] === 'search' ) { ?>

    <button type="submit" class="submit">
        <!--<img class="search-header__form__submit__icon" src="<?= get_template_directory_uri() ?>/dist/assets/img/icon-search.png" alt="Icono de buscar">-->
        <img src='https://i.postimg.cc/TK3ZvFDL/icons8-search-50.png' border='0' alt='icons8-search-50'/>
    </button>

<?php } else { ?>

    <button type="submit" class="submit"><?=$args['text'] ?></button>

<?php } ?>