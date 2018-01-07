<button id="menu-toggle" class="menu-toggle">
  <?php get_template_part('/svg/menu-toggle'); ?>
</button><!--/.menu-toggle--> 

<div id="menu-primary-container" class="menu-primary-container">
         <?php wp_nav_menu( array(
                'theme_location'   => 'primary',
            )); ?> 
</div><!--/.menu-primary-container--> 