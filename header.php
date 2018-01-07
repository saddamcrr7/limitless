<!DOCTYPE html> 
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <?php wp_head(); ?> 
    </head>
    <body>
    <header id="site-header" class="site-header">
        <div class="title-container">
            <div class="site-title">
               <a href="<?php echo home_url(); ?>">
                    <?php 
                        if( has_custom_logo() ) {
                            the_custom_logo();
                        }else{
                            bloginfo('name');
                        }
                    ?>
               </a> 
            </div><!--/.site-title--> 
                <?php if( get_bloginfo('description')) : ?> 
                    <p class="tagline"><?php bloginfo('description'); ?></p>
                <?php endif; ?>

        </div><!--/.title-container--> 
        <?php get_template_part('/menus/menu', 'primary'); ?>
    </header>