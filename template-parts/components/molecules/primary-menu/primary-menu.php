<nav id="site-navigation" class="main-navigation">
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
            'menu_class'     => 'primary-menu',
        )
    );
    ?>
</nav><!-- #site-navigation -->