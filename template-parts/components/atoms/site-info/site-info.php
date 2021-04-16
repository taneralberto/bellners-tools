<div class="site-info">
    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bellner-tools' ) ); ?>">
        <?php
        /* translators: %s: CMS name, i.e. WordPress. */
        printf( esc_html__( 'Proudly powered by %s', 'bellner-tools' ), 'WordPress' );
        ?>
    </a>
    <span class="sep"> | </span>
    <?php
    /* translators: 1: Theme name, 2: Theme author. */
    printf( esc_html__( 'Theme: %1$s by %2$s.', 'bellner-tools' ), 'bellner-tools', '<a href="http://bellner.com">bellner</a>' );
    ?>
</div><!-- .site-info -->