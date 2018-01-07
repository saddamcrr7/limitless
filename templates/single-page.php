<div <?php post_class(); ?>>
    <div class="featured-image">
        <?php the_post_thumbnail(); ?> 
    </div><!--/.featured-image--> 
    <div class="post-inner">
        <div class="post-header">
            <h1 class="post-title"><?php the_title(); ?></h1>
            
        </div><!--/.post-header--> 
        <div class="post-content">
            <?php the_content(); ?> 
        </div><!--/.post-content--> 
        
        <div class="comments">
            <?php comments_template( ); ?> 
        </div><!--/.comments--> 
    </div><!--/.post-inner--> 
</div><!--/.post--> 