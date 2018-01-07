<div <?php post_class(); ?>>
    <div class="featured-image">
        <?php the_post_thumbnail(); ?> 
    </div><!--/.featured-image--> 
    <div class="post-inner">
        <div class="post-header">
            <h1 class="post-title"><?php the_title(); ?></h1>
            <span class="post-byline">Published by <?php the_author(); ?> on <?php the_date(); ?></span>
        </div><!--/.post-header--> 
        <div class="post-content">
            <?php the_content(); ?> 
        </div><!--/.post-content--> 
        <?php get_template_part('/templates/meta', get_post_type()); ?>
        <?php get_template_part('/templates/nav', get_post_type()); ?>
        <div class="comments">
            <?php comments_template( ); ?> 
        </div><!--/.comments--> 
    </div><!--/.post-inner--> 
</div><!--/.post--> 