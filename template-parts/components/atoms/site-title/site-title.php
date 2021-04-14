<?php
if ( is_front_page() && is_home() ) :
    ?>
    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?>Be<span class="site-title__colored">ll</span>ner</a></h1>
    <?php
else :
    ?>
    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?>Be<span class="site-title__colored">ll</span>ner</a></p>
<?php endif; ?>