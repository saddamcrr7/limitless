<div <?php post_class(); ?>>
    <div class="featured-image">
        <?php the_post_thumbnail(); ?>
    </div><!--/.featured-image--> 
    <div class="post-inner">
        <div class="post-header">
            <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <span class="post-byline">Published by <?php the_author(); ?> on <?php echo get_the_date( get_option( 'date_format')); ?></span>
        </div><!--/.post-header--> 
        <div class="post-content">
            <?php the_excerpt(); ?> 
        </div><!--/.post-content--> 
    </div><!--/.post-inner--> 
</div><!--/.post--> 