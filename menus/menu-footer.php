<div id="menu-footer" class="menu-footer">
    <?php wp_nav_menu( array(
            'theme_location' => 'footer',
            'fallback_cb'    => false,
            'depth'          => -1
    ));
    ?>